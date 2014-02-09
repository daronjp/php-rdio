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

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * A playlist station
 *
 * @package TM\Rdio\Type
 */
class PlaylistStation extends Base
{
    /**
     * when the playlist was last modified
     *
     * @SerializedName("lastUpdated")
     * @Type("DateTime")
     *
     * @var \DateTime
     */
    protected $lastUpdated;

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
     * the name of the playlist
     *
     * @SerializedName("playlistName")
     * @Type("string")
     *
     * @var string
     */
    protected $playlistName;

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
     * the name of the user who created the playlist
     *
     * @SerializedName("owner")
     * @Type("string")
     *
     * @var string
     */
    protected $owner;

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
     * the key of the user who created the playlist
     *
     * @SerializedName("ownerKey")
     * @Type("string")
     *
     * @var string
     */
    protected $ownerKey;

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
     * a short URL for the station
     *
     * @SerializedName("shortUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $shortUrl;

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
     * the icon of the user who created the playlist
     *
     * @SerializedName("ownerIcon")
     * @Type("string")
     *
     * @var string
     */
    protected $ownerIcon;

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
     * the URL on the Rdio site of the user who created the playlist
     *
     * @SerializedName("ownerUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $ownerUrl;

    /**
     * the URL of a SWF to embed the playlist
     *
     * @SerializedName("embedUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $embedUrl;

    /**
     * the URL of the playlist on the Rdio site
     *
     * @SerializedName("playlistUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $playlistUrl;

    /**
     * the key of the station with content similar to the playlist
     *
     * @SerializedName("radioKey")
     * @Type("string")
     *
     * @var string
     */
    protected $radioKey;

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
     * true if at least one track can be streamed
     *
     * @SerializedName("canStream")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $canStream;

    /**
     * whether the playlist is currently publicly viewable
     *
     * @SerializedName("isViewable")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $isViewable;

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
     * a detailed description of the station if there is one
     *
     * @SerializedName("description")
     * @Type("string")
     *
     * @var string
     */
    protected $description;

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
     * A list of albums represented in the station for display purposes
     *
     * @SerializedName("albums")
     * @Type("array<TM\Rdio\Type\Album>")
     *
     * @var Album[]
     */
    protected $albums;

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
     * A dictionary (or object) of restrictions for this station.
     *
     * @SerializedName("restrictions")
     * @Type("array")
     *
     * @var array
     */
    protected $restrictions;

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
     * whether the playlist has been published by the user
     *
     * @SerializedName("isPublished")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $isPublished;

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
     * reason the playlist is not publicly viewable.
     *
     * Viewable -> 0, UserPreference -> 1, OrderedAlbum -> 2, TooFewSongs -> 3
     *
     * @SerializedName("reasonNotViewable")
     * @Type("integer")
     *
     * @var int
     */
    protected $reasonNotViewable;

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
     * @param boolean $isPublished
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;
    }

    /**
     * @return boolean
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }

    /**
     * @param boolean $isViewable
     */
    public function setIsViewable($isViewable)
    {
        $this->isViewable = $isViewable;
    }

    /**
     * @return boolean
     */
    public function getIsViewable()
    {
        return $this->isViewable;
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
     * @param \DateTime $lastUpdated
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
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
     * @param string $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param string $ownerIcon
     */
    public function setOwnerIcon($ownerIcon)
    {
        $this->ownerIcon = $ownerIcon;
    }

    /**
     * @return string
     */
    public function getOwnerIcon()
    {
        return $this->ownerIcon;
    }

    /**
     * @param string $ownerKey
     */
    public function setOwnerKey($ownerKey)
    {
        $this->ownerKey = $ownerKey;
    }

    /**
     * @return string
     */
    public function getOwnerKey()
    {
        return $this->ownerKey;
    }

    /**
     * @param string $ownerUrl
     */
    public function setOwnerUrl($ownerUrl)
    {
        $this->ownerUrl = $ownerUrl;
    }

    /**
     * @return string
     */
    public function getOwnerUrl()
    {
        return $this->ownerUrl;
    }

    /**
     * @param string $playlistName
     */
    public function setPlaylistName($playlistName)
    {
        $this->playlistName = $playlistName;
    }

    /**
     * @return string
     */
    public function getPlaylistName()
    {
        return $this->playlistName;
    }

    /**
     * @param string $playlistUrl
     */
    public function setPlaylistUrl($playlistUrl)
    {
        $this->playlistUrl = $playlistUrl;
    }

    /**
     * @return string
     */
    public function getPlaylistUrl()
    {
        return $this->playlistUrl;
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
     * @param int $reasonNotViewable
     */
    public function setReasonNotViewable($reasonNotViewable)
    {
        $this->reasonNotViewable = $reasonNotViewable;
    }

    /**
     * @return int
     */
    public function getReasonNotViewable()
    {
        return $this->reasonNotViewable;
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