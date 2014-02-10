<?php
/**
 * PHP-Rdio
 *
 * A PHP client for the Rdio API
 *
 * @author Troy McCabe <troymccabe@gmail.com>
 * @copyright 2014 Troy McCabe
 * @package TM\Rdio\Type
 */

namespace TM\Rdio\Type;

use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * A user collection station
 *
 * @AccessType("public_method")
 *
 * @package TM\Rdio\Type
 */
class UserCollectionStation extends Base
{
    /**
     * the user’s privacy setting is set to protected
     *
     * @SerializedName("isProtected")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $isProtected;

    /**
     * the tracks for the station
     *
     * @SerializedName("tracks")
     * @Type("array<TM\Rdio\Type\Track>")
     *
     * @var Track[]
     */
    protected $tracks;

    /**
     * the URL of an image of the user at 500x500
     *
     * @SerializedName("icon500")
     * @Type("string")
     *
     * @var string
     */
    protected $icon500;

    /**
     * the key of the station
     *
     * @SerializedName("key")
     * @Type("string")
     *
     * @var string
     */
    protected $key;

    /**
     * the station should be reloaded when it completes playing and repeat is enabled
     *
     * @SerializedName("reloadOnRepeat")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $reloadOnRepeat;

    /**
     * the URL of an icon for the station
     *
     * @SerializedName("icon")
     * @Type("string")
     *
     * @var string
     */
    protected $icon;

    /**
     * the number of tracks in the station
     *
     * @SerializedName("count")
     * @Type("integer")
     *
     * @var int
     */
    protected $count;

    /**
     * the URL of an image of the user at 250x250
     *
     * @SerializedName("icon250")
     * @Type("string")
     *
     * @var string
     */
    protected $icon250;

    /**
     * the name of the station
     *
     * @SerializedName("name")
     * @Type("string")
     *
     * @var string
     */
    protected $name;

    /**
     * the first name of the user
     *
     * @SerializedName("firstName")
     * @Type("string")
     *
     * @var string
     */
    protected $firstName;

    /**
     * the URL for the station
     *
     * @SerializedName("url")
     * @Type("string")
     *
     * @var string
     */
    protected $url;

    /**
     * “m” or “f”
     *
     * @SerializedName("gender")
     * @Type("string")
     *
     * @var string
     */
    protected $gender;

    /**
     * the URL of an icon for the station
     *
     * @SerializedName("baseIcon")
     * @Type("string")
     *
     * @var string
     */
    protected $baseIcon;

    /**
     * the number of tracks in the station
     *
     * @SerializedName("length")
     * @Type("integer")
     *
     * @var int
     */
    protected $length;

    /**
     * station uses data from the echonest
     *
     * @SerializedName("usingEchonest")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $usingEchonest;

    /**
     * the last name of the user
     *
     * @SerializedName("lastName")
     * @Type("string")
     *
     * @var string
     */
    protected $lastName;

    /**
     * the library version of the user, used to determine if a user’s collection has changed
     *
     * @SerializedName("libraryVersion")
     * @Type("integer")
     *
     * @var int
     */
    protected $libraryVersion;

    /**
     * the user who owns the collection
     *
     * @SerializedName("user")
     * @Type("TM\Rdio\Type\User")
     *
     * @var User
     */
    protected $user;

    /**
     * the URL of the user’s following page
     *
     * @SerializedName("followingUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $followingUrl;

    /**
     * the region the user streams from (only available on the current user)
     *
     * @SerializedName("streamRegion")
     * @Type("string")
     *
     * @var string
     */
    protected $streamRegion;

    /**
     * The current preset as described by an index in the availablePresets dictionary. Used to steer the station.
     *
     * @SerializedName("presetIndex")
     * @Type("string")
     *
     * @var string
     */
    protected $presetIndex;

    /**
     * is the user in a trial (only available on the current user)
     *
     * @SerializedName("isTrial")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $isTrial;

    /**
     * the number of artists in the user’s collection
     *
     * @SerializedName("artistCount")
     * @Type("integer")
     *
     * @var int
     */
    protected $artistCount;

    /**
     * the last song the user has played
     *
     * @SerializedName("lastSongPlayed")
     * @Type("TM\Rdio\Type\Track")
     *
     * @var Track
     */
    protected $lastSongPlayed;

    /**
     * A list of artists represented in the station for display purposes
     *
     * @SerializedName("artists")
     * @Type("array<TM\Rdio\Type\Artist>")
     *
     * @var Artist[]
     */
    protected $artists;

    /**
     * the key of the station for user’s heavy rotation
     *
     * @SerializedName("heavyRotationKey")
     * @Type("string")
     *
     * @var string
     */
    protected $heavyRotationKey;

    /**
     * A list of dictionaries containing { ‘enabled’, ‘name’ } for each preset available. Used to display presets for steering.
     *
     * @SerializedName("availablePresets")
     * @Type("array")
     *
     * @var array
     */
    protected $availablePresets;

    /**
     * the key of the station for user’s network’s heavy rotation
     *
     * @SerializedName("networkHeavyRotationKey")
     * @Type("string")
     *
     * @var string
     */
    protected $networkHeavyRotationKey;

    /**
     * the number of albums in the user’s collection
     *
     * @SerializedName("albumCount")
     * @Type("integer")
     *
     * @var int
     */
    protected $albumCount;

    /**
     * the number of tracks in the user’s collection
     *
     * @SerializedName("trackCount")
     * @Type("integer")
     *
     * @var int
     */
    protected $trackCount;

    /**
     * a short URL for the station
     *
     * @SerializedName("shortUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $shortUrl;

    /**
     * the URL of a medium-resolution icon for the station
     *
     * @SerializedName("icon170")
     * @Type("string")
     *
     * @var string
     */
    protected $icon170;

    /**
     * the name of the user or object on which the station is based
     *
     * @SerializedName("sourceName")
     * @Type("string")
     *
     * @var string
     */
    protected $sourceName;

    /**
     * the URL of a high-resolution icon for the station
     *
     * @SerializedName("bigIcon1200")
     * @Type("string")
     *
     * @var string
     */
    protected $bigIcon1200;

    /**
     * the keys of the tracks for the station
     *
     * @SerializedName("trackKeys")
     * @Type("array<string>")
     *
     * @var string[]
     */
    protected $trackKeys;

    /**
     * when the last played song was played
     *
     * @SerializedName("lastSongPlayTime")
     * @Type("DateTime")
     *
     * @var \DateTime
     */
    protected $lastSongPlayTime;

    /**
     * the URL of an icon for the station (large)
     *
     * @SerializedName("bigIcon")
     * @Type("string")
     *
     * @var string
     */
    protected $bigIcon;

    /**
     * the user’s vanity name
     *
     * @SerializedName("username")
     * @Type("string")
     *
     * @var string
     */
    protected $username;

    /**
     * the number of reviews the user has created
     *
     * @SerializedName("reviewCount")
     * @Type("integer")
     *
     * @var int
     */
    protected $reviewCount;

    /**
     * a detailed description of the station if there is one
     *
     * @SerializedName("description")
     * @Type("string")
     *
     * @var string
     */
    protected $description;

    /**
     * the URL of the user’s collection page
     *
     * @SerializedName("collectionUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $collectionUrl;

    /**
     * the URL of the user’s playlists page
     *
     * @SerializedName("playlistsUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $playlistsUrl;

    /**
     * how to display the user’s name
     *
     * @SerializedName("displayName")
     * @Type("string")
     *
     * @var string
     */
    protected $displayName;

    /**
     * A list of albums represented in the station for display purposes
     *
     * @SerializedName("albums")
     * @Type("array<TM\Rdio\Type\Album>")
     *
     * @var Album[]
     */
    protected $albums;

    /**
     * the URL of the user’s followers page
     *
     * @SerializedName("followersUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $followersUrl;

    /**
     * A dictionary (or object) of restrictions for this station.
     *
     * @SerializedName("restrictions")
     * @Type("array")
     *
     * @var array
     */
    protected $restrictions;

    /**
     * the object key for the user’s taste profile station
     *
     * @SerializedName("tasteProfileKey")
     * @Type("string")
     *
     * @var string
     */
    protected $tasteProfileKey;

    /**
     * the key of the station for user’s collection
     *
     * @SerializedName("collectionKey")
     * @Type("string")
     *
     * @var string
     */
    protected $collectionKey;

    /**
     * does the user have an unlimited subscription / trial (only available on the current user)
     *
     * @SerializedName("isUnlimited")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $isUnlimited;

    /**
     * the URL of a high-resolution icon for the station
     *
     * @SerializedName("icon400")
     * @Type("string")
     *
     * @var string
     */
    protected $icon400;

    /**
     * the last source the user has played
     *
     * @SerializedName("lastSourcePlayed")
     * @Type("string")
     *
     * @var string
     */
    protected $lastSourcePlayed;

    /**
     * is the user a subscriber (only available on the current user)
     *
     * @SerializedName("isSubscriber")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $isSubscriber;

    /**
     * @param int $albumCount
     */
    public function setAlbumCount($albumCount)
    {
        $this->albumCount = $albumCount;
    }

    /**
     * @return int
     */
    public function getAlbumCount()
    {
        return $this->albumCount;
    }

    /**
     * @param \TM\Rdio\Type\Album[] $albums
     */
    public function setAlbums($albums)
    {
        $this->albums = $albums;
    }

    /**
     * @return \TM\Rdio\Type\Album[]
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * @param int $artistCount
     */
    public function setArtistCount($artistCount)
    {
        $this->artistCount = $artistCount;
    }

    /**
     * @return int
     */
    public function getArtistCount()
    {
        return $this->artistCount;
    }

    /**
     * @param \TM\Rdio\Type\Artist[] $artists
     */
    public function setArtists($artists)
    {
        $this->artists = $artists;
    }

    /**
     * @return \TM\Rdio\Type\Artist[]
     */
    public function getArtists()
    {
        return $this->artists;
    }

    /**
     * @param array $availablePresets
     */
    public function setAvailablePresets($availablePresets)
    {
        $this->availablePresets = $availablePresets;
    }

    /**
     * @return array
     */
    public function getAvailablePresets()
    {
        return $this->availablePresets;
    }

    /**
     * @param string $baseIcon
     */
    public function setBaseIcon($baseIcon)
    {
        $this->baseIcon = $baseIcon;
    }

    /**
     * @return string
     */
    public function getBaseIcon()
    {
        return $this->baseIcon;
    }

    /**
     * @param string $bigIcon
     */
    public function setBigIcon($bigIcon)
    {
        $this->bigIcon = $bigIcon;
    }

    /**
     * @return string
     */
    public function getBigIcon()
    {
        return $this->bigIcon;
    }

    /**
     * @param string $bigIcon1200
     */
    public function setBigIcon1200($bigIcon1200)
    {
        $this->bigIcon1200 = $bigIcon1200;
    }

    /**
     * @return string
     */
    public function getBigIcon1200()
    {
        return $this->bigIcon1200;
    }

    /**
     * @param string $collectionKey
     */
    public function setCollectionKey($collectionKey)
    {
        $this->collectionKey = $collectionKey;
    }

    /**
     * @return string
     */
    public function getCollectionKey()
    {
        return $this->collectionKey;
    }

    /**
     * @param string $collectionUrl
     */
    public function setCollectionUrl($collectionUrl)
    {
        $this->collectionUrl = $collectionUrl;
    }

    /**
     * @return string
     */
    public function getCollectionUrl()
    {
        return $this->collectionUrl;
    }

    /**
     * @param int $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $followersUrl
     */
    public function setFollowersUrl($followersUrl)
    {
        $this->followersUrl = $followersUrl;
    }

    /**
     * @return string
     */
    public function getFollowersUrl()
    {
        return $this->followersUrl;
    }

    /**
     * @param string $followingUrl
     */
    public function setFollowingUrl($followingUrl)
    {
        $this->followingUrl = $followingUrl;
    }

    /**
     * @return string
     */
    public function getFollowingUrl()
    {
        return $this->followingUrl;
    }

    /**
     * @param string $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $heavyRotationKey
     */
    public function setHeavyRotationKey($heavyRotationKey)
    {
        $this->heavyRotationKey = $heavyRotationKey;
    }

    /**
     * @return string
     */
    public function getHeavyRotationKey()
    {
        return $this->heavyRotationKey;
    }

    /**
     * @param string $icon
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;
    }

    /**
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * @param string $icon170
     */
    public function setIcon170($icon170)
    {
        $this->icon170 = $icon170;
    }

    /**
     * @return string
     */
    public function getIcon170()
    {
        return $this->icon170;
    }

    /**
     * @param string $icon250
     */
    public function setIcon250($icon250)
    {
        $this->icon250 = $icon250;
    }

    /**
     * @return string
     */
    public function getIcon250()
    {
        return $this->icon250;
    }

    /**
     * @param string $icon400
     */
    public function setIcon400($icon400)
    {
        $this->icon400 = $icon400;
    }

    /**
     * @return string
     */
    public function getIcon400()
    {
        return $this->icon400;
    }

    /**
     * @param string $icon500
     */
    public function setIcon500($icon500)
    {
        $this->icon500 = $icon500;
    }

    /**
     * @return string
     */
    public function getIcon500()
    {
        return $this->icon500;
    }

    /**
     * @param boolean $isProtected
     */
    public function setIsProtected($isProtected)
    {
        $this->isProtected = $isProtected;
    }

    /**
     * @return boolean
     */
    public function getIsProtected()
    {
        return $this->isProtected;
    }

    /**
     * @param boolean $isSubscriber
     */
    public function setIsSubscriber($isSubscriber)
    {
        $this->isSubscriber = $isSubscriber;
    }

    /**
     * @return boolean
     */
    public function getIsSubscriber()
    {
        return $this->isSubscriber;
    }

    /**
     * @param boolean $isTrial
     */
    public function setIsTrial($isTrial)
    {
        $this->isTrial = $isTrial;
    }

    /**
     * @return boolean
     */
    public function getIsTrial()
    {
        return $this->isTrial;
    }

    /**
     * @param boolean $isUnlimited
     */
    public function setIsUnlimited($isUnlimited)
    {
        $this->isUnlimited = $isUnlimited;
    }

    /**
     * @return boolean
     */
    public function getIsUnlimited()
    {
        return $this->isUnlimited;
    }

    /**
     * @param string $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param \DateTime $lastSongPlayTime
     */
    public function setLastSongPlayTime($lastSongPlayTime)
    {
        $this->lastSongPlayTime = $lastSongPlayTime;
    }

    /**
     * @return \DateTime
     */
    public function getLastSongPlayTime()
    {
        return $this->lastSongPlayTime;
    }

    /**
     * @param \TM\Rdio\Type\Track $lastSongPlayed
     */
    public function setLastSongPlayed($lastSongPlayed)
    {
        $this->lastSongPlayed = $lastSongPlayed;
    }

    /**
     * @return \TM\Rdio\Type\Track
     */
    public function getLastSongPlayed()
    {
        return $this->lastSongPlayed;
    }

    /**
     * @param string $lastSourcePlayed
     */
    public function setLastSourcePlayed($lastSourcePlayed)
    {
        $this->lastSourcePlayed = $lastSourcePlayed;
    }

    /**
     * @return string
     */
    public function getLastSourcePlayed()
    {
        return $this->lastSourcePlayed;
    }

    /**
     * @param int $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param int $libraryVersion
     */
    public function setLibraryVersion($libraryVersion)
    {
        $this->libraryVersion = $libraryVersion;
    }

    /**
     * @return int
     */
    public function getLibraryVersion()
    {
        return $this->libraryVersion;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $networkHeavyRotationKey
     */
    public function setNetworkHeavyRotationKey($networkHeavyRotationKey)
    {
        $this->networkHeavyRotationKey = $networkHeavyRotationKey;
    }

    /**
     * @return string
     */
    public function getNetworkHeavyRotationKey()
    {
        return $this->networkHeavyRotationKey;
    }

    /**
     * @param string $playlistsUrl
     */
    public function setPlaylistsUrl($playlistsUrl)
    {
        $this->playlistsUrl = $playlistsUrl;
    }

    /**
     * @return string
     */
    public function getPlaylistsUrl()
    {
        return $this->playlistsUrl;
    }

    /**
     * @param string $presetIndex
     */
    public function setPresetIndex($presetIndex)
    {
        $this->presetIndex = $presetIndex;
    }

    /**
     * @return string
     */
    public function getPresetIndex()
    {
        return $this->presetIndex;
    }

    /**
     * @param boolean $reloadOnRepeat
     */
    public function setReloadOnRepeat($reloadOnRepeat)
    {
        $this->reloadOnRepeat = $reloadOnRepeat;
    }

    /**
     * @return boolean
     */
    public function getReloadOnRepeat()
    {
        return $this->reloadOnRepeat;
    }

    /**
     * @param array $restrictions
     */
    public function setRestrictions($restrictions)
    {
        $this->restrictions = $restrictions;
    }

    /**
     * @return array
     */
    public function getRestrictions()
    {
        return $this->restrictions;
    }

    /**
     * @param int $reviewCount
     */
    public function setReviewCount($reviewCount)
    {
        $this->reviewCount = $reviewCount;
    }

    /**
     * @return int
     */
    public function getReviewCount()
    {
        return $this->reviewCount;
    }

    /**
     * @param string $shortUrl
     */
    public function setShortUrl($shortUrl)
    {
        $this->shortUrl = $shortUrl;
    }

    /**
     * @return string
     */
    public function getShortUrl()
    {
        return $this->shortUrl;
    }

    /**
     * @param string $sourceName
     */
    public function setSourceName($sourceName)
    {
        $this->sourceName = $sourceName;
    }

    /**
     * @return string
     */
    public function getSourceName()
    {
        return $this->sourceName;
    }

    /**
     * @param string $streamRegion
     */
    public function setStreamRegion($streamRegion)
    {
        $this->streamRegion = $streamRegion;
    }

    /**
     * @return string
     */
    public function getStreamRegion()
    {
        return $this->streamRegion;
    }

    /**
     * @param string $tasteProfileKey
     */
    public function setTasteProfileKey($tasteProfileKey)
    {
        $this->tasteProfileKey = $tasteProfileKey;
    }

    /**
     * @return string
     */
    public function getTasteProfileKey()
    {
        return $this->tasteProfileKey;
    }

    /**
     * @param int $trackCount
     */
    public function setTrackCount($trackCount)
    {
        $this->trackCount = $trackCount;
    }

    /**
     * @return int
     */
    public function getTrackCount()
    {
        return $this->trackCount;
    }

    /**
     * @param \string[] $trackKeys
     */
    public function setTrackKeys($trackKeys)
    {
        $this->trackKeys = $trackKeys;
    }

    /**
     * @return \string[]
     */
    public function getTrackKeys()
    {
        return $this->trackKeys;
    }

    /**
     * @param \TM\Rdio\Type\Track[] $tracks
     */
    public function setTracks($tracks)
    {
        $this->tracks = $tracks;
    }

    /**
     * @return \TM\Rdio\Type\Track[]
     */
    public function getTracks()
    {
        return $this->tracks;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param \TM\Rdio\Type\User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return \TM\Rdio\Type\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param boolean $usingEchonest
     */
    public function setUsingEchonest($usingEchonest)
    {
        $this->usingEchonest = $usingEchonest;
    }

    /**
     * @return boolean
     */
    public function getUsingEchonest()
    {
        return $this->usingEchonest;
    }
}