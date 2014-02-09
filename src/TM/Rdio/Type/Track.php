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
 * A track
 *
 * @package TM\Rdio\Type
 */
class Track extends Base
{
    /**
     * the name of the track
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
     * the URL of the album that the track appears on, on the Rdio web site
     *
     * @SerializedName("albumUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $albumUrl;

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
     * the URL of the track’s artist on the Rdio web site
     *
     * @SerializedName("artistUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $artistUrl;

    /**
     * the number of tracks in the track, ie: 1
     *
     * @SerializedName("length")
     * @Type("integer")
     *
     * @var int
     */
    protected $length;

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
     * is the track explicit?
     *
     * @SerializedName("isExplicit")
     * @Type("boolean")
     *
     * @var boolean
     */
    protected $isExplicit;

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
     * the URL of the track on the Rdio web site
     *
     * @SerializedName("url")
     * @Type("string")
     *
     * @var string
     */
    protected $url;

    /**
     * the partial URL of the album-art for the track
     *
     * @SerializedName("baseIcon")
     * @Type("string")
     *
     * @var string
     */
    protected $baseIcon;

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
     * the key of the artist whose album the track appears on
     *
     * @SerializedName("albumArtistKey")
     * @Type("string")
     *
     * @var string
     */
    protected $albumArtistKey;

    /**
     * the track can be downloaded
     *
     * @SerializedName("canDownload")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $canDownload;

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
     * the track can be streamed
     *
     * @SerializedName("canStream")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $canStream;

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
     * the track can be previewed
     *
     * @SerializedName("canSample")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $canSample;

    /**
     * the price of the track in the user’s local currency
     *
     * @SerializedName("price")
     * @Type("string")
     *
     * @var string
     */
    protected $price;

    /**
     * a short URL for the track
     *
     * @SerializedName("shortUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $shortUrl;

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
     * the object key of the track
     *
     * @SerializedName("key")
     * @Type("string")
     *
     * @var string
     */
    protected $key;

    /**
     * the URL of the album-art for the track
     *
     * @SerializedName("icon")
     * @Type("string")
     *
     * @var string
     */
    protected $icon;

    /**
     * the URL of the 400x400 album-art for the track
     *
     * @SerializedName("icon400")
     * @Type("string")
     *
     * @var string
     */
    protected $icon400;

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
     * the key of the station for song recommendations
     *
     * @SerializedName("radioKey")
     * @Type("string")
     *
     * @var string
     */
    protected $radioKey;

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
     * is the track in the user’s collection?
     *
     * @SerializedName("isInCollection")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $isInCollection;

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
     * the International Standard Recording Codes (ISRC) for this track
     *
     * @SerializedName("isrcs")
     * @Type("string")
     *
     * @var string
     */
    protected $isrcs;

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
     * the URL of an IFRAME to embed the album
     *
     * @SerializedName("iframeUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $iframeUrl;

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
     * the number of times this track has been played
     *
     * @SerializedName("playCount")
     * @Type("integer")
     *
     * @var int
     */
    protected $playCount;

    /**
     * the URL to the album-art for the track (large)
     *
     * @SerializedName("bigIcon")
     * @Type("string")
     *
     * @var string
     */
    protected $bigIcon;

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
     * @param string $albumArtist
     */
    public function setAlbumArtist($albumArtist)
    {
        $this->albumArtist = $albumArtist;
    }

    /**
     * @return string
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
     * @param boolean $canDownload
     */
    public function setCanDownload($canDownload)
    {
        $this->canDownload = $canDownload;
    }

    /**
     * @return boolean
     */
    public function getCanDownload()
    {
        return $this->canDownload;
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
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
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
}