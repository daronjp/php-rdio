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
 * An album station
 *
 * @package TM\Rdio\Type
 */
class AlbumStation extends Base
{
    /**
     * is the album clean?
     *
     * @SerializedName("isClean")
     * @Type("boolean")
     *
     * @var boolean
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
     * the album can be streamed
     *
     * @SerializedName("canStream")
     * @Type("boolean")
     *
     * @var boolean
     */
    protected $canStream;

    /**
     * the release date of the album
     *
     * @SerializedName("releaseDate")
     * @Type("string")
     *
     * @var string
     */
    protected $releaseDate;

    /**
     * the URL of the Artist that released the album on the Rdio site
     *
     * @SerializedName("artistUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $artistUrl;

    /**
     * the duration of the album in seconds
     *
     * @SerializedName("duration")
     * @Type("integer")
     *
     * @var int
     */
    protected $duration;

    /**
     * is the album explicit?
     *
     * @SerializedName("isExplicit")
     * @Type("boolean")
     *
     * @var boolean
     */
    protected $isExplicit;

    /**
     * the URL of the album on the Rdio site
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
     * station uses data from the echonest
     *
     * @SerializedName("usingEchonest")
     * @Type("boolean")
     *
     * @var boolean
     */
    protected $usingEchonest;

    /**
     * the URL of a SWF to embed the album
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
     * the price of the album in US cents
     *
     * @SerializedName("price")
     * @Type("integer")
     *
     * @var int
     */
    protected $price;

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
     * the URL of an icon for the station
     *
     * @SerializedName("baseIcon")
     * @Type("string")
     *
     * @var string
     */
    protected $baseIcon;

    /**
     * the station should be reloaded when it completes playing and repeat is enabled
     *
     * @SerializedName("reloadOnRepeat")
     * @Type("boolean")
     *
     * @var boolean
     */
    protected $reloadOnRepeat;

    /**
     * the album can be sync to mobile devices
     *
     * @SerializedName("canTether")
     * @Type("boolean")
     *
     * @var boolean
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
     * the album can be previewed
     *
     * @SerializedName("canSample")
     * @Type("boolean")
     *
     * @var boolean
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
     * the name of the Artist that released the album
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
     * the key of the Artist that released the album
     *
     * @SerializedName("artistKey")
     * @Type("string")
     *
     * @var string
     */
    protected $artistKey;

    /**
     * the name of the album
     *
     * @SerializedName("albumName")
     * @Type("string")
     *
     * @var string
     */
    protected $albumName;

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
     * the keys of the tracks for the station
     *
     * @SerializedName("trackKeys")
     * @Type("array<string>")
     *
     * @var string[]
     */
    protected $trackKeys;

    /**
     * the release date of the album, human readable
     *
     * @SerializedName("displayDate")
     * @Type("string")
     *
     * @var string
     */
    protected $displayDate;

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
     * the regions that the album can be streamed in
     *
     * @SerializedName("streamRegions")
     * @Type("array<string>")
     *
     * @var string[]
     */
    protected $streamRegions;

    /**
     * A list of dictionaries containing { ‘enabled’, ‘name’ } for each preset available. Used to display presets for
     * steering.
     *
     * @SerializedName("availablePresets")
     * @Type("array")
     *
     * @var array
     */
    protected $availablePresets;

    /**
     * is this a compilation album
     *
     * @SerializedName("isCompilation")
     * @Type("boolean")
     *
     * @var boolean
     */
    protected $isCompilation;

    /**
     * the label that this album is published by
     *
     * @SerializedName("label")
     * @Type("string")
     *
     * @var string
     */
    protected $label;

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
     * the name of the user or object on which the station isbased
     *
     * @SerializedName("sourceName")
     * @Type("string")
     *
     * @var string
     */
    protected $sourceName;

    /**
     * the Universal Product Codes (UPC) for this album
     *
     * @SerializedName("upcs")
     * @Type("array<string>")
     *
     * @var string[]
     */
    protected $upcs;

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
     * @SerializedName("bigIcon1200")
     * @Type("string")
     *
     * @var string
     */
    protected $bigIcon1200;

    /**
     * the key of the station for album
     *
     * @SerializedName("string")
     * @Type("radioKey")
     *
     * @var string
     */
    protected $radioKey;

    /**
     * A list of albums represented in the station for display
     *
     * @SerializedName("albums")
     * @Type("List<\TM\Rdio\Type\Album>")
     *
     * @var Album[]
     */
    protected $albums;

    /**
     * The current preset as described by an index in the availablePresets dictionary. Used to steer the station.
     *
     * @SerializedName("presentIndex")
     * @Type("string")
     *
     * @var string
     */
    protected $presetIndex;

    /**
     * the release date of the album in ISO format
     *
     * @SerializedName("releaseDateISO")
     * @Type("string")
     *
     * @var string
     */
    protected $releaseDateISO;

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
     * @param string $albumName
     */
    public function setAlbumName($albumName)
    {
        $this->albumName = $albumName;
    }

    /**
     * @return string
     */
    public function getAlbumName()
    {
        return $this->albumName;
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
     * @param string $artist
     */
    public function setArtist($artist)
    {
        $this->artist = $artist;
    }

    /**
     * @return string
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
     * @param string $displayDate
     */
    public function setDisplayDate($displayDate)
    {
        $this->displayDate = $displayDate;
    }

    /**
     * @return string
     */
    public function getDisplayDate()
    {
        return $this->displayDate;
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
     * @param boolean $isCompilation
     */
    public function setIsCompilation($isCompilation)
    {
        $this->isCompilation = $isCompilation;
    }

    /**
     * @return boolean
     */
    public function getIsCompilation()
    {
        return $this->isCompilation;
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
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
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
     * @param int $presetIndex
     */
    public function setPresetIndex($presetIndex)
    {
        $this->presetIndex = $presetIndex;
    }

    /**
     * @return int
     */
    public function getPresetIndex()
    {
        return $this->presetIndex;
    }

    /**
     * @param int $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
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
     * @param string $releaseDate
     */
    public function setReleaseDate($releaseDate)
    {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return string
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param string $releaseDateISO
     */
    public function setReleaseDateISO($releaseDateISO)
    {
        $this->releaseDateISO = $releaseDateISO;
    }

    /**
     * @return string
     */
    public function getReleaseDateISO()
    {
        return $this->releaseDateISO;
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
     * @param \string[] $streamRegions
     */
    public function setStreamRegions($streamRegions)
    {
        $this->streamRegions = $streamRegions;
    }

    /**
     * @return \string[]
     */
    public function getStreamRegions()
    {
        return $this->streamRegions;
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
     * @param \string[] $upcs
     */
    public function setUpcs($upcs)
    {
        $this->upcs = $upcs;
    }

    /**
     * @return \string[]
     */
    public function getUpcs()
    {
        return $this->upcs;
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