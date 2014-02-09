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
 * A playlist
 *
 * @package TM\Rdio\Type
 */
class Playlist extends Base
{
    /**
     * the name of the playlist
     *
     * @SerializedName("name")
     * @Type("string")
     *
     * @var string
     */
    protected $name;

    /**
     * the number of tracks in the playlist
     *
     * @SerializedName("length")
     * @Type("integer")
     *
     * @var int
     */
    protected $length;

    /**
     * the URL of the playlist on the Rdio site
     *
     * @SerializedName("url")
     * @Type("string")
     *
     * @var string
     */
    protected $url;

    /**
     * the URL of an icon for the playlist
     *
     * @SerializedName("icon")
     * @Type("string")
     *
     * @var string
     */
    protected $icon;

    /**
     * the URL of an icon for the playlist
     *
     * @SerializedName("baseIcon")
     * @Type("string")
     *
     * @var string
     */
    protected $baseIcon;

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
     * the URL on the Rdio site of the user who created the playlist
     *
     * @SerializedName("ownerUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $ownerUrl;

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
     * the icon of the user who created the playlist
     *
     * @SerializedName("ownerIcon")
     * @Type("string")
     *
     * @var string
     */
    protected $ownerIcon;

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
     * a short URL for the playlist
     *
     * @SerializedName("shortUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $shortUrl;

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
     * the key of the playlist
     *
     * @SerializedName("key")
     * @Type("string")
     *
     * @var string
     */
    protected $key;

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
     * the URL of a high-resolution icon for the playlist
     *
     * @SerializedName("bigIcon1200")
     * @Type("string")
     *
     * @var string
     */
    protected $bigIcon1200;

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
     * the URL of an icon for the playlist (large)
     *
     * @SerializedName("bigIcon")
     * @Type("string")
     *
     * @var string
     */
    protected $bigIcon;

    /**
     * the description of the playlist
     *
     * @SerializedName("description")
     * @Type("string")
     *
     * @var string
     */
    protected $description;

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
     * the tracks in the playlist
     *
     * @SerializedName("tracks")
     * @Type("array<TM\Rdio\Type\Track>")
     *
     * @var Track[]
     */
    protected $tracks;

    /**
     * the URL of a high-resolution icon for the playlist
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
     * the keys of the tracks in the playlist
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
}