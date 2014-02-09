<?php
/**
 * PHP-Rdio
 *
 * A PHP client for the Rdio API
 *
 * @author Troy McCabe <troymccabe@gmail.com>
 * @copyright 2014 Troy McCabe
 * @package TM\Rdio
 */

namespace TM\Rdio;

use Doctrine\Common\Annotations\AnnotationRegistry;
use Guzzle\Http\Client as HttpClient;
use Guzzle\Plugin\Oauth\OauthPlugin;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use TM\Rdio\Exception\InvalidArgumentException;
use TM\Rdio\Exception\RdioException;

/**
 * The main Rdio Client
 *
 * @package TM\Rdio
 */
class Client
{
    const API_ROOT = 'http://api.rdio.com/1/';

    const KIND_COLLAB = 'collab';
    const KIND_OWNED = 'owned';
    const KIND_SUBSCRIBED = 'subscribed';

    const SCOPE_EVERYONE = 'everyone';
    const SCOPE_FRIENDS = 'friends';
    const SCOPE_USER = 'user';

    const SORT_ALBUM = 'album';
    const SORT_ARTIST = 'artist';
    const SORT_DATEADDED = 'dateAdded';
    const SORT_LASTUPDATED = 'lastUpdated';
    const SORT_NAME = 'name';
    const SORT_PLAYCOUNT = 'playCount';
    const SORT_RELEASEDATE = 'releaseDate';

    const TIME_LASTWEEK = 'lastweek';
    const TIME_OVERVIEW = 'overview';
    const TIME_THISWEEK = 'thisweek';
    const TIME_TWOWEEKS = 'twoweeks';

    const TYPE_ALBUM = 'Album';
    const TYPE_ALBUMS = 'albums';
    const TYPE_ARTIST = 'Artist';
    const TYPE_ARTISTS = 'artists';
    const TYPE_LABEL = 'Label';
    const TYPE_PLAYLIST = 'Playlist';
    const TYPE_TRACK = 'Track';
    const TYPE_USER = 'User';

    /**
     * @var HttpClient
     */
    protected $httpClient;

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * @param string $rdioKey The key for your application
     * @param string $rdioSecret The secret key for your application
     */
    public function __construct($rdioKey, $rdioSecret)
    {
        $this->httpClient = new HttpClient();
        $this->httpClient->addSubscriber(
            new OauthPlugin([
                'consumer_key' => $rdioKey,
                'consumer_secret' => $rdioSecret
            ])
        );

        $this->serializer = SerializerBuilder::create()->build();

        AnnotationRegistry::registerAutoloadNamespace(
            'JMS\Serializer\Annotation',
            __DIR__ . '/../../../vendor/jms/serializer/src'
        );
    }

    //<editor-fold desc="Activity">
    /**
     * Get the activity events for a user, a user’s friends, or everyone on Rdio.
     *
     * @param string $user the user to retrieve an activity stream for
     * @param string $scope the scope of the activity stream, either “user”, “friends” or “everyone”
     * @param string|null $lastId the last_id returned by the last call to getActivityStream - return activity that
     *          occurred before this id
     * @param int|null $count the count of the results to return (must be less than or equal to 30)
     * @param array|null $types The types that can be returned (see the docs of update_type in the return value)
     * @param string|null $extras see Extras Parameter – a list, comma separated
     * @return Type\Activity
     * @throws Exception\InvalidArgumentException
     */
    public function getActivityStream($user, $scope, $lastId = null, $count = 10, $types = null, $extras = null)
    {
        if ($scope != self::SCOPE_EVERYONE && $scope != self::SCOPE_FRIENDS && $scope != self::SCOPE_USER) {
            throw new InvalidArgumentException('`$scope` must be one of `\TM\Rdio\Client::SCOPE_*`');
        }

        if ($count !== null && $count > 30) {
            throw new InvalidArgumentException('`$count` must be <= 30');
        }

        if (!is_null($types) && !is_array($types)) {
            throw new InvalidArgumentException('`$types` must be an array of integers or null');
        }

        $args = func_get_args();
        if (is_array($types)) {
            $args[4] = implode(',', $types);
        }
        return $this->getSingle(__FUNCTION__, $args, ['user', 'scope', 'lastId', 'count', 'types', 'extras'], 'Activity');
    }

    /**
     * Find the most popular content for a user, their friends or the whole site
     *
     * @param string|null $user the user, or everyone if this is missing
     * @param string|null $type type of content to return
     * @param bool|null $friends the user’s friends’s heavy rotation instead of the user’s
     * @param int|null $limit the maximum number of results to return
     * @param int|null $start the offset of the first result to return
     * @param int|null $count the maximum number of results to return
     * @param string|null $extras see Extras Parameter – a list, comma separated
     * @return Type\Artist[]|Type\Album[]
     * @throws Exception\InvalidArgumentException
     */
    public function getHeavyRotation($user = null, $type = null, $friends = false, $limit = null, $start = 0, $count = 10, $extras = null)
    {
        if (!is_null($type) && ($type !== self::TYPE_ALBUMS && $type !== self::TYPE_ARTISTS)) {
            throw new InvalidArgumentException('`$type` must be one of `\TM\Rdio\Client::TYPE_[ALBUMS|ARTISTS]`');
        }

        if (!is_null($friends) && !is_bool($friends)) {
            throw new InvalidArgumentException('`$friends` must be `null` or boolean');
        }

        return $this->getCollection(__FUNCTION__, func_get_args(), ['user', 'type', 'friends', 'limit', 'start', 'count', 'extras']);
    }

    /**
     * Return new albums released across a timeframe
     *
     * @param string|null $time Timeframe
     * @param int|null $start the offset of the first result to return
     * @param int|null $count the maximum number of results to return
     * @param string|null $extras see Extras Parameter – a list, comma separated
     * @return Type\Album[]
     * @throws Exception\InvalidArgumentException
     */
    public function getNewReleases($time = null, $start = 0, $count = 20, $extras = null)
    {
        if ($time !== null &&
            ($time !== self::TIME_LASTWEEK &&
             $time !== self::TIME_OVERVIEW &&
             $time !== self::TIME_THISWEEK &&
             $time !== self::TIME_TWOWEEKS)
        ) {
            throw new InvalidArgumentException('`$time` must be one of `\TM\Rdio\Client::TIME_*`');
        }

        return $this->getCollection(__FUNCTION__, func_get_args(), ['time', 'start', 'count', 'extras']);
    }

    /**
     * Return the site-wide most popular items for a given type
     *
     * @param string $type type to include in results – An object type name
     * @param int|null $start the offset of the first result to return
     * @param int|null $count the maximum number of results to return
     * @param string|null $extras see Extras Parameter – a list, comma separated
     * @return Type\Album[]|Type\Artist[]|Type\Playlist[]|Type\Track[]
     * @throws Exception\InvalidArgumentException
     */
    public function getTopCharts($type, $start = 0, $count = 20, $extras = null)
    {
        if ($type !== self::TYPE_ALBUM &&
            $type !== self::TYPE_ARTIST &&
            $type !== self::TYPE_PLAYLIST &&
            $type !== self::TYPE_TRACK
        ) {
            throw new InvalidArgumentException('`$type` must be one of `\TM\Rdio\Client::TYPE_[ALBUM|ARTIST|PLAYLIST|TRACK]`');
        }

        return $this->getCollection(__FUNCTION__, func_get_args(), ['type', 'start', 'count', 'extras']);
    }
    //</editor-fold>
    //<editor-fold desc="Catalog">
    /**
     * Finds and returns albums based on their Universal Product Code (UPC)
     *
     * @param string $upc the UPC code to search for
     * @param array|null $extras a list of additional fields to return – a list, comma separated
     * @return Type\Album[]
     * @throws RdioException
     */
    public function getAlbumsByUPC($upc, $extras = null)
    {
        return $this->getCollection(__FUNCTION__, func_get_args(), ['upc', 'extras']);
    }

    /**
     * Return the albums by (or featuring) an artist
     *
     * @param string $artist the artist
     * @param bool|null $featuring return albums featuring the artist rather than albums credited to the artist
     * @param int|null $start the offset of the first result to return
     * @param int|null $count the maximum number of results to return
     * @param string|null $sort The sort order of the returned albums, default playCount
     * @param string|null $query Filter the album results by a substring match on album name
     * @param string|null $extras a list of additional fields to return – a list, comma separated
     * @return Type\Album[]
     * @throws Exception\InvalidArgumentException
     */
    public function getAlbumsForArtist($artist, $featuring = false, $start = 0, $count = 30, $sort = self::SORT_PLAYCOUNT, $query = null, $extras = null)
    {
        if ($sort !== null &&
            ($sort !== self::SORT_NAME &&
             $sort !== self::SORT_PLAYCOUNT &&
             $sort !== self::SORT_RELEASEDATE)
        ) {
            throw new InvalidArgumentException('`$sort` must be one of `\TM\Rdio\Client::SORT_[NAME|PLAYCOUNT|RELEASEDATE]`');
        }

        if (!is_null($featuring) && !is_bool($featuring)) {
            throw new InvalidArgumentException('`$featuring` must be `null` or boolean');
        }

        return $this->getCollection(__FUNCTION__, func_get_args(), ['artist', 'featuring', 'start', 'count', 'sort', 'query', 'extras']);
    }

    /**
     * Return the albums for a label
     *
     * @param string $label the label
     * @param int|null $start the offset of the first result to return
     * @param int|null $count the maximum number of results to return
     * @param string|null $sort The sort order of the returned albums, default playCount
     * @param string|null $query Filter the album results by a substring match on album name
     * @param string|null $extras see Extras Parameter – a list, comma separated
     * @return Type\Album[]
     * @throws Exception\InvalidArgumentException
     */
    public function getAlbumsForLabel($label, $start = 0, $count = 20, $sort = self::SORT_PLAYCOUNT, $query = null, $extras = null)
    {
        if ($sort !== null &&
            ($sort !== self::SORT_NAME &&
             $sort !== self::SORT_PLAYCOUNT &&
             $sort !== self::SORT_RELEASEDATE)
        ) {
            throw new InvalidArgumentException('`$sort` must be one of `\TM\Rdio\Client::SORT_[NAME|PLAYCOUNT|RELEASEDATE]`');
        }

        return $this->getCollection(__FUNCTION__, func_get_args(), ['label', 'start', 'count', 'sort', 'query', 'extras']);
    }

    /**
     * Return the artists for a label
     *
     * @param string $label the label
     * @param int|null $start the offset of the first result to return
     * @param int|null $count the maximum number of results to return
     * @param string|null $extras a list of additional fields to return – a list, comma separated
     * @return Type\Artist[]
     * @throws RdioException
     */
    public function getArtistsForLabel($label, $start = 0, $count = 10, $extras = null)
    {
        return $this->getCollection(__FUNCTION__, func_get_args(), ['label', 'start', 'count', 'extras']);
    }

    /**
     * Finds and returns tracks based on their International Standard Recording Code (ISRC)
     *
     * @param string $isrc the ISRC code to search for
     * @param string|null $extras see Extras Parameter – a list, comma separated
     * @return Type\Track[]
     */
    public function getTracksByISRC($isrc, $extras = null)
    {
        return $this->getCollection(__FUNCTION__, func_get_args(), ['isrc', 'extras']);
    }

    /**
     * Get all of the tracks by this artist
     *
     * @param string $artist the artist
     * @param bool|null $appearsOn returns tracks that the artist appears on rather than tracks credited to the artist
     * @param int|null $start the offset of the first result to return
     * @param int|null $count the maximum number of results to return
     * @param string|null $sort The sort order of the returned tracks, default playCount
     * @param string|null $query Filter the track results by a substring match on track title
     * @param string|null $extras see Extras Parameter – a list, comma separated
     * @return Type\Track[]
     * @throws Exception\InvalidArgumentException
     */
    public function getTracksForArtist($artist, $appearsOn = false, $start = 0, $count = 10, $sort = self::SORT_PLAYCOUNT, $query = null, $extras = null)
    {
        if ($sort !== null &&
            ($sort !== self::SORT_NAME &&
             $sort !== self::SORT_PLAYCOUNT &&
             $sort !== self::SORT_RELEASEDATE)
        ) {
            throw new InvalidArgumentException('`$sort` must be one of `\TM\Rdio\Client::SORT_[NAME|PLAYCOUNT|RELEASEDATE]`');
        }

        if (!is_null($appearsOn) && !is_bool($appearsOn)) {
            throw new InvalidArgumentException('`$appearsOn` must be `null` or boolean');
        }

        return $this->getCollection(__FUNCTION__, func_get_args(), ['artist', 'appears_on', 'start', 'count', 'sort', 'query', 'extras']);
    }

    /**
     * Search for artists, albums, tracks, users or all kinds of objects.
     *
     * @param string $query the search query
     * @param array $types types to include in results – array of object type names
     * @param bool|null $neverOr by default search uses an AND query that falls back to an OR query if there are no
     *          results, passing true here will disable that fallback
     * @param int|null $start the offset of the first result to return
     * @param int|null $count the maximum number of results to return
     * @param string|null $extras see Extras Parameter – a list, comma separated
     * @return Type\SearchResult
     * @throws Exception\InvalidArgumentException
     */
    public function search($query, $types, $neverOr = false, $start = 0, $count = 10, $extras = null)
    {
        if (!is_array($types)) {
            throw new InvalidArgumentException('`$types` must be an array of `\TM\Rdio\Client::TYPE_*` values');
        }

        foreach ($types as $type) {
            if (
                $type !== self::TYPE_ARTIST &&
                $type !== self::TYPE_ALBUM &&
                $type !== self::TYPE_LABEL &&
                $type !== self::TYPE_PLAYLIST &&
                $type !== self::TYPE_TRACK &&
                $type !== self::TYPE_USER
            ) {
                $valid = '`\TM\Rdio\Client::TYPE_[ALBUM|ARTIST|LABEL|PLAYLIST|TRACK|USER]`';
                throw new InvalidArgumentException("Invalid `$type` value ({$type}). Must be one of {$valid}");
            }
        }

        $args = func_get_args();
        $args[1] = implode(',', $types);
        return $this->getSingle(__FUNCTION__, $args, ['query', 'types', 'never_or', 'start', 'count', 'extras'], 'SearchResult');
    }

    /**
     * @param string $query the search prefix
     * @param array $types types to include in results – array of object type names
     * @param null $countryCode Country to use in searching
     * @param null $extras see Extras Parameter – a list, comma separated
     * @return Type\Base[]
     * @throws Exception\InvalidArgumentException
     */
    public function searchSuggestions(
        $query,
        $types = [self::TYPE_ALBUM, self::TYPE_ARTIST, self::TYPE_TRACK, self::TYPE_USER],
        $countryCode = null,
        $extras = null
    )
    {
        if (!is_null($types) && !is_array($types)) {
            throw new InvalidArgumentException('`$types` must be an array of `\TM\Rdio\Client::TYPE_*` values');
        }

        if ($countryCode !== null && !preg_match('/^[A-Z]{2}$/', $countryCode)) {
            throw new InvalidArgumentException('`$countryCode` must be 2 upper-case digits.');
        }

        $args = func_get_args();
        if (is_array($types)) {
            foreach ($types as $type) {
                if (
                    $type !== self::TYPE_ARTIST &&
                    $type !== self::TYPE_ALBUM &&
                    $type !== self::TYPE_LABEL &&
                    $type !== self::TYPE_PLAYLIST &&
                    $type !== self::TYPE_TRACK &&
                    $type !== self::TYPE_USER
                ) {
                    $valid = '`\TM\Rdio\Client::TYPE_[ALBUM|ARTIST|LABEL|PLAYLIST|TRACK|USER]`';
                    throw new InvalidArgumentException("Invalid `$type` value ({$type}). Must be one of {$valid}");
                }
            }
            $args[1] = implode(',', $types);
        }
        return $this->getCollection(__FUNCTION__, $args, ['query', 'type', 'never_or', 'start', 'count', 'extras']);
    }
    //</editor-fold>
    //<editor-fold desc="Collection">
    /** @TODO */
    public function addToCollection($keys){}

    /**
     * Get the albums in the user’s collection by a particular artist
     *
     * @param string $user the collection user
     * @param string $artist the artist
     * @param string|null $sort the sort order
     * @param string|null $extras see Extras Parameter – a list, comma separated
     * @return Type\CollectionAlbum[]
     * @throws Exception\InvalidArgumentException
     */
    public function getAlbumsForArtistInCollection($user, $artist, $sort = self::SORT_RELEASEDATE, $extras = null)
    {
        if ($sort !== null && ($sort !== self::SORT_RELEASEDATE && $sort !== self::SORT_NAME)) {
            throw new InvalidArgumentException('`$sort` must be one of `\TM\Rdio\Client::SORT_[NAME|RELEASEDATE]`');
        }

        return $this->getCollection(__FUNCTION__, func_get_args(), ['user', 'artist', 'sort', 'extras']);
    }

    /**
     * Get all of the albums in the user’s collection
     *
     * @param string $user the collection user
     * @param string|null $artist the artist
     * @param int|null $start the offset of the first result to return
     * @param int|null $count the maximum number of results to return
     * @param string|null $sort the sort order
     * @param string|null $query filter collection albums by this
     * @param string|null $extras see Extras Parameter – a list, comma separated
     * @return Type\CollectionAlbum[]
     * @throws Exception\InvalidArgumentException
     */
    public function getAlbumsInCollection($user, $artist = null, $start = null, $count = null, $sort = self::SORT_NAME, $query = null, $extras = null)
    {
        if ($sort !== null &&
            ($sort !== self::SORT_DATEADDED &&
             $sort !== self::SORT_NAME &&
             $sort !== self::SORT_PLAYCOUNT &&
             $sort !== self::SORT_ARTIST)
        ) {
            throw new InvalidArgumentException('`$sort` must be one of `\TM\Rdio\Client::SORT_[DATEADDED|NAME|PLAYCOUNT|ARTIST]`');
        }

        return $this->getCollection(__FUNCTION__, func_get_args(), ['user', 'artist', 'sort', 'extras']);
    }

    /**
     * Return the artists in a users collection
     *
     * @param string $user The user key
     * @param int|null $start the offset of the first result to return
     * @param int|null $count the maximum number of results to return
     * @param string|null $sort what to sort on
     * @param string|null $query
     * @param string|null $extras
     * @return Type\CollectionArtist[]
     * @throws Exception\InvalidArgumentException
     */
    public function getArtistsInCollection($user, $start = null, $count = null, $sort = self::SORT_NAME, $query = null, $extras = null)
    {
        if (!is_null($sort) && $sort !== self::SORT_NAME && $sort !== self::SORT_PLAYCOUNT) {
            throw new InvalidArgumentException('`$sort` must be one of `\TM\Rdio\Client::SORT_[NAME|PLAYCOUNT]`');
        }

        return $this->getCollection(__FUNCTION__, func_get_args(), ['user', 'start', 'count', 'sort', 'query', 'extras']);
    }

    /** @TODO */
    public function getOfflineTracks($start = 0, $count = 10, $extras = null){}

    /**
     * Which tracks on the given album are in the user’s collection
     *
     * @param string $album the album
     * @param string|null $user the user whose collection to examine
     * @param string|null $extras see Extras Parameter – a list, comma separated
     * @return Type\Track[]
     */
    public function getTracksForAlbumInCollection($album, $user = null, $extras = null)
    {
        return $this->getCollection(__FUNCTION__, func_get_args(), ['album', 'user', 'extras']);
    }

    /**
     * Which tracks from the given artist are in the user’s collection
     *
     * @param string $artist the artist
     * @param string|null $user the user whose collection to examine
     * @param string|null $extras see Extras Parameter – a list, comma separated
     * @return Type\Track[]
     */
    public function getTracksForArtistInCollection($artist, $user = null, $extras = null)
    {
        return $this->getCollection(__FUNCTION__, func_get_args(), ['artist', 'user', 'extras']);
    }

    /**
     * Get all of the tracks in the user’s collection
     *
     * @param string|null $user the collection user
     * @param string|null $artist the artist
     * @param int|null $start the offset of the first result to return
     * @param int|null $count the maximum number of results to return
     * @param string|null $sort the sort order
     * @param string|null $query filter collection tracks by this
     * @param string|null $extras see Extras Parameter – a list, comma separated
     * @return Type\Track[]
     * @throws Exception\InvalidArgumentException
     */
    public function getTracksInCollection($user = null, $artist = null, $start = null, $count = null, $sort = self::SORT_NAME, $query = null, $extras = null)
    {
        if ($sort !== null &&
            ($sort !== self::SORT_DATEADDED &&
             $sort !== self::SORT_NAME &&
             $sort !== self::SORT_PLAYCOUNT &&
             $sort !== self::SORT_ARTIST &&
             $sort !== self::SORT_ALBUM)
        ) {
            throw new InvalidArgumentException('`$sort` must be one of `\TM\Rdio\Client::SORT_[DATEADDED|NAME|PLAYCOUNT|ARTIST|ALBUM]`');
        }

        return $this->getCollection(__FUNCTION__, func_get_args(), ['user', 'artist', 'start', 'count', 'sort', 'query', 'extras']);
    }

    /** @TODO */
    public function removeFromCollection($keys){}
    public function setAvailableOffline($keys, $offline){}
    //</editor-fold>
    //<editor-fold desc="Core">
    /**
     * Fetch one or more objects from Rdio
     *
     * @param array $keys a list of keys for the objects to fetch
     * @param string|null $options jsonified dictionary of options
     * @param string|null $extras see Extras Parameter – a list, comma separated
     * @return Type\Base[]
     * @throws Exception\InvalidArgumentException
     */
    public function get($keys, $options = null, $extras = null)
    {
        if (!is_array($keys)) {
            throw new InvalidArgumentException('`$keys` must be an array of object keys.');
        }

        $args = func_get_args();
        $args[0] = implode(',', $keys);
        return $this->getCollection(__FUNCTION__, func_get_args(), ['keys', 'options', 'extras']);
    }

    /**
     * Return the object that the supplied Rdio short-code is a representation of, or an error if the short-code is invalid
     *
     * @param string $shortCode the short-code - everything after the http://rd.io/x/
     * @param string|null $extras see Extras Parameter – a list, comma separated
     * @return Type\Base
     */
    public function getObjectFromShortCode($shortCode, $extras = null)
    {
        return $this->getSingle(__FUNCTION__, func_get_args(), ['short_code', 'extras']);
    }

    /**
     * Return the object that the supplied Rdio url is a representation of, or 404 error response if the url doesn’t represent an object
     *
     * @param string $url the path portion of the url
     * @param string|null $extras see Extras Parameter – a list, comma separated
     * @return Type\Base
     */
    public function getObjectFromUrl($url, $extras = null)
    {
        return $this->getSingle(__FUNCTION__, func_get_args(), ['url', 'extras']);
    }
    //</editor-fold>
    //<editor-fold desc="Playback">
    /**
     * Get an playback token. If you are using this for web playback you must supply a domain
     *
     * @param string $domain the domain that the playback SWF will be embedded in
     * @return string
     */
    public function getPlaybackToken($domain)
    {
        $params = $this->getCallParams(__FUNCTION__, func_get_args(), ['domain']);
        return $this->getJson($params)->result;
    }
    //</editor-fold>
    //<editor-fold desc="Playlist">
    /** @TODO */
    public function addToPlaylist($playlist, $tracks, $extras = null){}
    public function createPlaylist($name, $description, $tracks, $collaborationMode = null, $isPublished = true, $extras = null){}
    public function deletePlaylist($playlist){}

    /**
     * Returns a user’s playlists. If no user is specified then the current user will be used
     *
     * @param string $user the user
     * @param bool $orderedList True if the playlists should be returned as an ordered list.
     * @param null $extras see Extras Parameter – a list, comma separated
     * @return Type\Base
     * @throws Exception\InvalidArgumentException
     */
    public function getPlaylists($user, $orderedList = false, $extras = null)
    {
        if (!is_null($orderedList) && !is_bool($orderedList)) {
            throw new InvalidArgumentException('`$orderedList` must be `null` or boolean');
        }

        return $this->getSingle(__FUNCTION__, func_get_args(), ['user', 'ordered_list', 'extras'], 'PlaylistCollection');
    }

    /**
     * Returns a user’s playlist.
     *
     * kind must be
     * owned (the user’s playlists),
     * collab (playlists the user collaborates on),
     * or subscribed (playlists the user has subscribed to).
     *
     * sort must be lastUpdated or name.
     *
     * @param $user
     * @param string $kind
     * @param int|null $start
     * @param int|null $count
     * @param string|null $sort
     * @param string|null $extras
     * @return Type\Base[]
     * @throws Exception\InvalidArgumentException
     */
    public function getUserPlaylists($user, $kind = self::KIND_OWNED, $start = 0, $count = 10, $sort = self::SORT_LASTUPDATED, $extras = null)
    {
        if ($kind !== null &&
            ($kind !== self::KIND_COLLAB &&
             $kind !== self::KIND_OWNED &&
             $kind !== self::KIND_SUBSCRIBED)
        ) {
            throw new InvalidArgumentException('`$kind` must be one of `\TM\Rdio\Client::KIND_*`');
        }

        if ($sort !== null && ($sort !== self::SORT_LASTUPDATED && $sort !== self::SORT_NAME)) {
            throw new InvalidArgumentException('`$sort` must be one of `\TM\Rdio\Client::SORT_[LASTUPDATED|NAME]`');
        }

        return $this->getCollection(__FUNCTION__, func_get_args(), ['user', 'kind', 'start', 'count', 'sort', 'extras']);
    }

    /** @TODO */
    public function removeFromPlaylist($playlist, $index, $count, $tracks, $extras = null){}
    public function setPlaylistCollaborating($playlist, $collaborating){}
    public function setPlaylistCollaborationMode($playlist, $mode){}
    public function setPlaylistFields($playlist, $name, $description){}
    public function setPlaylistOrder($playlist, $tracks, $extras = null){}
    //</editor-fold>
    //<editor-fold desc="Social">
    /** @TODO */
    public function addFriend(){}
    public function approveFollower(){}
    public function currentUser(){}
    public function findUser(){}
    public function hideFollower(){}
    public function removeFriend(){}
    public function unapproveFollower(){}
    public function userFollowers(){}
    public function userFollowing(){}
    public function userHiddenFollowers(){}
    public function userPendingFollowers(){}
    //</editor-fold>

    //<editor-fold desc="Internal">
    /**
     * Gets the proper content for the POST body to Rdio
     *
     * @param string $method The method to call
     * @param array $args The original function args
     * @param array $paramNames The names for the args
     * @return array
     */
    protected function getCallParams($method, $args, $paramNames)
    {
        $params = [
            'method' => $method
        ];

        $to = count($paramNames);
        for ($i = 0; $i < $to; $i++) {
            if (isset($args[$i]) && $args[$i] !== null) {
                $params[$paramNames[$i]] = $args[$i];
            }
        }

        return $params;
    }

    /**
     * Gets collection from the JSON response
     *
     * @param string $method The method to call
     * @param array $args The original function args
     * @param array $paramNames The names for the args
     * @param string $type The type of object in the response
     * @return Type\Base[]
     */
    protected function getCollection($method, $args, $paramNames, $type = 'Base')
    {
        $json = $this->getJson($this->getCallParams($method, $args, $paramNames));

        $collection = [];
        foreach ($json->result as $jsonEl) {
            $collection[] = $this->serializer->deserialize(json_encode($jsonEl), "TM\\Rdio\\Type\\{$type}", 'json');
        }

        return $collection;
    }

    /**
     * Gets JSON from the server
     *
     * @param array $params The post params
     * @return Object
     * @throws RdioException
     */
    protected function getJson($params)
    {
        $headers = ['User-Agent' => 'TM-Rdio-Client'];
        $json = json_decode($this->httpClient->post(self::API_ROOT, $headers, $params)->send()->getBody(true));

        if ($json->status !== 'ok') {
            throw new RdioException($json->message);
        }

        return $json;
    }

    /**
     * Gets a single object from the JSON response
     *
     * @param string $method The method to call
     * @param array $args The original function args
     * @param array $paramNames The names for the args
     * @param string $type The type of object in the response
     * @return Type\Base
     */
    protected function getSingle($method, $args, $paramNames, $type = 'Base')
    {
        $json = $this->getJson($this->getCallParams($method, $args, $paramNames));

        return $this->serializer->deserialize(json_encode($json->result), "TM\\Rdio\\Type\\{$type}", 'json');
    }
    //</editor-fold>
}