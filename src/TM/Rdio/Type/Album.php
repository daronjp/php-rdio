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
 * An album
 *
 * @AccessType("public_method")
 *
 * @package TM\Rdio\Type
 */
class Album extends Base
{
    /**
     * the name of the album
     *
     * @SerializedName("name")
     * @Type("string")
     *
     * @var string
     */
    protected $name;

    /**
     * the URL to the cover art for the album
     *
     * @SerializedName("icon")
     * @Type("string")
     *
     * @var string
     */
    protected $icon;

    /**
     * the URL to the cover art for the album
     *
     * @SerializedName("baseIcon")
     * @Type("string")
     *
     * @var string
     */
    protected $baseIcon;

    /**
     * the URL of the album on the Rdio site
     *
     * @SerializedName("url")
     * @Type("string")
     *
     * @var string
     */
    protected $url;

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
     * the URL of the Artist that released the album on the Rdio site
     *
     * @SerializedName("artistUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $artistUrl;

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
     * is the album clean?
     *
     * @SerializedName("isClean")
     * @Type("boolean")
     *
     * @var boolean
     */
    protected $isClean;

    /**
     * number of tracks on the album
     *
     * @SerializedName("length")
     * @Type("integer")
     *
     * @var int
     */
    protected $length;

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
     * the keys of the tracks on the album
     *
     * @SerializedName("trackKeys")
     * @Type("array<string>")
     *
     * @var string[]
     */
    protected $trackKeys;

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
     * the album can be streamed
     *
     * @SerializedName("canStream")
     * @Type("boolean")
     *
     * @var boolean
     */
    protected $canStream;

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
     * the album can be sync to mobile devices
     *
     * @SerializedName("canTether")
     * @Type("boolean")
     *
     * @var boolean
     */
    protected $canTether;

    /**
     * a short URL for the album
     *
     * @SerializedName("shortUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $shortUrl;

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
     * the release date of the album, human readable
     *
     * @SerializedName("displayDate")
     * @Type("string")
     *
     * @var string
     */
    protected $displayDate;

    /**
     * the key of the album
     *
     * @SerializedName("key")
     * @Type("string")
     *
     * @var string
     */
    protected $key;

    /**
     * the release date of the album
     *
     * @SerializedName("releaseDate")
     * @Type("DateTime<'Y-m-d'>")
     *
     * @var \DateTime
     */
    protected $releaseDate;

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
     * the key of the station for album recommendations
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
     * is this a compilation album
     *
     * @SerializedName("isCompilation")
     * @Type("boolean")
     *
     * @var boolean
     */
    protected $isCompilation;

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
     * the release date of the album in ISO format
     *
     * @SerializedName("releaseDateISO")
     * @Type("string")
     *
     * @var string
     */
    protected $releaseDateISO;

    /**
     * the URL to the high-resolution cover art for the album
     *
     * @SerializedName("icon400")
     * @Type("string")
     *
     * @var string
     */
    protected $icon400;

    /**
     * the label that this album is published by
     *
     * @SerializedName("label")
     * @Type("TM\Rdio\Type\Label")
     *
     * @var Label
     */
    protected $label;

    /**
     * the URL to the high-resolution cover art for the album (large)
     *
     * @SerializedName("bigIcon1200")
     * @Type("string")
     *
     * @var string
     */
    protected $bigIcon1200;

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
     * the URL to the cover art for the album (large)
     *
     * @SerializedName("bigIcon")
     * @Type("string")
     *
     * @var string
     */
    protected $bigIcon;

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
}