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
 * A song station
 *
 * @AccessType("public_method")
 *
 * @package TM\Rdio\Type
 */
class SongStation extends Base
{
    /**
     * is the track clean?
     *
     * @SerializedName("isClean")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $isClean;

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
     * the track can be streamed
     *
     * @SerializedName("canStream")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $canStream;

    /**
     * the track can only be downloaded as part of an album download
     *
     * @SerializedName("canDownloadAlbumOnly")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $canDownloadAlbumOnly;

    /**
     * the key and station type of the station for song recommendations
     *
     * @SerializedName("radio")
     * @Type("TM\Rdio\Type\SongStation")
     *
     * @var \TM\Rdio\Type\SongStation
     */
    protected $radio;

    /**
     * the URL of the track’s artist on the Rdio web site
     *
     * @SerializedName("artistUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $artistUrl;

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
     * the duration of the track in seconds
     *
     * @SerializedName("duration")
     * @Type("integer")
     *
     * @var int
     */
    protected $duration;

    /**
     * the name of the album that the track appears on
     *
     * @SerializedName("album")
     * @Type("string")
     *
     * @var string
     */
    protected $album;

    /**
     * the key of the album that the track appears on
     *
     * @SerializedName("albumKey")
     * @Type("string")
     *
     * @var string
     */
    protected $albumKey;

    /**
     * is the track explicit?
     *
     * @SerializedName("isExplicit")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $isExplicit;

    /**
     * the URL of the album that the track appears on, on the Rdio web site
     *
     * @SerializedName("albumUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $albumUrl;

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
     * the name of the artist whose album the track appears on
     *
     * @SerializedName("albumArtist")
     * @Type("string")
     *
     * @var string
     */
    protected $albumArtist;

    /**
     * the URL of a SWF to embed the track
     *
     * @SerializedName("embedUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $embedUrl;

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
     * the name of the track
     *
     * @SerializedName("trackName")
     * @Type("string")
     *
     * @var string
     */
    protected $trackName;

    /**
     * the URL of the track on the Rdio site
     *
     * @SerializedName("trackUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $trackUrl;

    /**
     * the price of the track in the user’s local currency
     *
     * @SerializedName("price")
     * @Type("float")
     *
     * @var float
     */
    protected $price;

    /**
     * the order within its album that this track appears
     *
     * @SerializedName("trackNum")
     * @Type("integer")
     *
     * @var int
     */
    protected $trackNum;

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
     * the key of the artist whose album the track appears on
     *
     * @SerializedName("albumArtistKey")
     * @Type("string")
     *
     * @var string
     */
    protected $albumArtistKey;

    /**
     * the key of the station for song recommendations
     *
     * @SerializedName("radioKey")
     * @Type("string")
     *
     * @var string
     */
    protected $radioKey;

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
     * the track can be synced to mobile devices
     *
     * @SerializedName("canTether")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $canTether;

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
     * the track can be previewed
     *
     * @SerializedName("canSample")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $canSample;

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
     * the name of the artist who performed the track
     *
     * @SerializedName("artist")
     * @Type("string")
     *
     * @var string
     */
    protected $artist;

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
     * the URL of a high-resolution icon for the station
     *
     * @SerializedName("icon400")
     * @Type("string")
     *
     * @var string
     */
    protected $icon400;

    /**
     * the key of the track’s artist
     *
     * @SerializedName("artistKey")
     * @Type("string")
     *
     * @var string
     */
    protected $artistKey;

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
     * is the track in the user’s collection?
     *
     * @SerializedName("isInCollection")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $isInCollection;

    /**
     * the URL of an IFRAME to embed the album
     *
     * @SerializedName("iframeUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $iframeUrl;

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
     * the regions that the track can be streamed in
     *
     * @SerializedName("streamRegions")
     * @Type("string")
     *
     * @var string
     */
    protected $streamRegions;

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
     * the International Standard Recording Codes (ISRC) for this track
     *
     * @SerializedName("isrcs")
     * @Type("array<string>")
     *
     * @var string[]
     */
    protected $isrcs;

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
     * the keys of the tracks for the station
     *
     * @SerializedName("trackKeys")
     * @Type("array<string>")
     *
     * @var string[]
     */
    protected $trackKeys;

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
     * the URL of a high-resolution icon for the station
     *
     * @SerializedName("bigIcon1200")
     * @Type("string")
     *
     * @var string
     */
    protected $bigIcon1200;

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
     * is the track on a compilation album?
     *
     * @SerializedName("isOnCompilation")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $isOnCompilation;

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
     * the number of times this track has been played
     *
     * @SerializedName("playCount")
     * @Type("integer")
     *
     * @var int
     */
    protected $playCount;

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
     * the regions that the track can be synced to mobile devices in
     *
     * @SerializedName("tetherRegions")
     * @Type("string")
     *
     * @var string
     */
    protected $tetherRegions;

    /**
     * @param string $album
     */
    public function setAlbum($album)
    {
        $this->album = $album;
    }

    /**
     * @return string
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * @param \TM\Rdio\Type\Artist $albumArtist
     */
    public function setAlbumArtist($albumArtist)
    {
        $this->albumArtist = $albumArtist;
    }

    /**
     * @return \TM\Rdio\Type\Artist
     */
    public function getAlbumArtist()
    {
        return $this->albumArtist;
    }

    /**
     * @param string $albumArtistKey
     */
    public function setAlbumArtistKey($albumArtistKey)
    {
        $this->albumArtistKey = $albumArtistKey;
    }

    /**
     * @return string
     */
    public function getAlbumArtistKey()
    {
        return $this->albumArtistKey;
    }

    /**
     * @param string $albumKey
     */
    public function setAlbumKey($albumKey)
    {
        $this->albumKey = $albumKey;
    }

    /**
     * @return string
     */
    public function getAlbumKey()
    {
        return $this->albumKey;
    }

    /**
     * @param string $albumUrl
     */
    public function setAlbumUrl($albumUrl)
    {
        $this->albumUrl = $albumUrl;
    }

    /**
     * @return string
     */
    public function getAlbumUrl()
    {
        return $this->albumUrl;
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
     * @param \TM\Rdio\Type\Artist $artist
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    /**
     * @return \TM\Rdio\Type\Artist
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param string $artistKey
     */
    public function setArtistKey($artistKey)
    {
        $this->artistKey = $artistKey;
    }

    /**
     * @return string
     */
    public function getArtistKey()
    {
        return $this->artistKey;
    }

    /**
     * @param string $artistUrl
     */
    public function setArtistUrl($artistUrl)
    {
        $this->artistUrl = $artistUrl;
    }

    /**
     * @return string
     */
    public function getArtistUrl()
    {
        return $this->artistUrl;
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
     * @param boolean $canDownloadAlbumOnly
     */
    public function setCanDownloadAlbumOnly($canDownloadAlbumOnly)
    {
        $this->canDownloadAlbumOnly = $canDownloadAlbumOnly;
    }

    /**
     * @return boolean
     */
    public function getCanDownloadAlbumOnly()
    {
        return $this->canDownloadAlbumOnly;
    }

    /**
     * @param boolean $canSample
     */
    public function setCanSample($canSample)
    {
        $this->canSample = $canSample;
    }

    /**
     * @return boolean
     */
    public function getCanSample()
    {
        return $this->canSample;
    }

    /**
     * @param boolean $canStream
     */
    public function setCanStream($canStream)
    {
        $this->canStream = $canStream;
    }

    /**
     * @return boolean
     */
    public function getCanStream()
    {
        return $this->canStream;
    }

    /**
     * @param boolean $canTether
     */
    public function setCanTether($canTether)
    {
        $this->canTether = $canTether;
    }

    /**
     * @return boolean
     */
    public function getCanTether()
    {
        return $this->canTether;
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
     * @param int $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param string $embedUrl
     */
    public function setEmbedUrl($embedUrl)
    {
        $this->embedUrl = $embedUrl;
    }

    /**
     * @return string
     */
    public function getEmbedUrl()
    {
        return $this->embedUrl;
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
     * @param string $iframeUrl
     */
    public function setIframeUrl($iframeUrl)
    {
        $this->iframeUrl = $iframeUrl;
    }

    /**
     * @return string
     */
    public function getIframeUrl()
    {
        return $this->iframeUrl;
    }

    /**
     * @param boolean $isClean
     */
    public function setIsClean($isClean)
    {
        $this->isClean = $isClean;
    }

    /**
     * @return boolean
     */
    public function getIsClean()
    {
        return $this->isClean;
    }

    /**
     * @param boolean $isExplicit
     */
    public function setIsExplicit($isExplicit)
    {
        $this->isExplicit = $isExplicit;
    }

    /**
     * @return boolean
     */
    public function getIsExplicit()
    {
        return $this->isExplicit;
    }

    /**
     * @param boolean $isInCollection
     */
    public function setIsInCollection($isInCollection)
    {
        $this->isInCollection = $isInCollection;
    }

    /**
     * @return boolean
     */
    public function getIsInCollection()
    {
        return $this->isInCollection;
    }

    /**
     * @param boolean $isOnCompilation
     */
    public function setIsOnCompilation($isOnCompilation)
    {
        $this->isOnCompilation = $isOnCompilation;
    }

    /**
     * @return boolean
     */
    public function getIsOnCompilation()
    {
        return $this->isOnCompilation;
    }

    /**
     * @param string $isrcs
     */
    public function setIsrcs($isrcs)
    {
        $this->isrcs = $isrcs;
    }

    /**
     * @return string
     */
    public function getIsrcs()
    {
        return $this->isrcs;
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
     * @param int $playCount
     */
    public function setPlayCount($playCount)
    {
        $this->playCount = $playCount;
    }

    /**
     * @return int
     */
    public function getPlayCount()
    {
        return $this->playCount;
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
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param \TM\Rdio\Type\SongStation $radio
     */
    public function setRadio($radio)
    {
        $this->radio = $radio;
    }

    /**
     * @return \TM\Rdio\Type\SongStation
     */
    public function getRadio()
    {
        return $this->radio;
    }

    /**
     * @param string $radioKey
     */
    public function setRadioKey($radioKey)
    {
        $this->radioKey = $radioKey;
    }

    /**
     * @return string
     */
    public function getRadioKey()
    {
        return $this->radioKey;
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
     * @param string $streamRegions
     */
    public function setStreamRegions($streamRegions)
    {
        $this->streamRegions = $streamRegions;
    }

    /**
     * @return string
     */
    public function getStreamRegions()
    {
        return $this->streamRegions;
    }

    /**
     * @param string $tetherRegions
     */
    public function setTetherRegions($tetherRegions)
    {
        $this->tetherRegions = $tetherRegions;
    }

    /**
     * @return string
     */
    public function getTetherRegions()
    {
        return $this->tetherRegions;
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
     * @param string $trackName
     */
    public function setTrackName($trackName)
    {
        $this->trackName = $trackName;
    }

    /**
     * @return string
     */
    public function getTrackName()
    {
        return $this->trackName;
    }

    /**
     * @param int $trackNum
     */
    public function setTrackNum($trackNum)
    {
        $this->trackNum = $trackNum;
    }

    /**
     * @return int
     */
    public function getTrackNum()
    {
        return $this->trackNum;
    }

    /**
     * @param string $trackUrl
     */
    public function setTrackUrl($trackUrl)
    {
        $this->trackUrl = $trackUrl;
    }

    /**
     * @return string
     */
    public function getTrackUrl()
    {
        return $this->trackUrl;
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