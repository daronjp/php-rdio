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
 * An artist
 *
 * @AccessType("public_method")
 *
 * @package TM\Rdio\Type
 */
class Artist extends Base
{
    /**
     * the name of the artist
     *
     * @SerializedName("name")
     * @Type("string")
     *
     * @var string
     */
    protected $name;

    /**
     * the artist’s key
     *
     * @SerializedName("key")
     * @Type("string")
     *
     * @var string
     */
    protected $key;

    /**
     * the URL of the artist on the Rdio web site
     *
     * @SerializedName("url")
     * @Type("string")
     *
     * @var string
     */
    protected $url;

    /**
     * the number of tracks that the artist has on Rdio
     *
     * @SerializedName("length")
     * @Type("integer")
     *
     * @var int
     */
    protected $length;

    /**
     * an image for the artist
     *
     * @SerializedName("icon")
     * @Type("string")
     *
     * @var string
     */
    protected $icon;

    /**
     * an image for the artist, partial URL
     *
     * @SerializedName("baseIcon")
     * @Type("string")
     *
     * @var string
     */
    protected $baseIcon;

    /**
     * is a station available for the artist?
     *
     * @SerializedName("hasRadio")
     * @Type("boolean")
     *
     * @var boolean
     */
    protected $hasRadio;

    /**
     * a short URL for the artist page
     *
     * @SerializedName("shortUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $shortUrl;

    /**
     * the key of the station for artist recommendations
     *
     * @SerializedName("radioKey")
     * @Type("string")
     *
     * @var string
     */
    protected $radioKey;

    /**
     * the key of the station for the artist’s top songs
     *
     * @SerializedName("topSongsKey")
     * @Type("string")
     *
     * @var string
     */
    protected $topSongsKey;

    /**
     * the number of albums that the artist has on Rdio
     *
     * @SerializedName("albumCount")
     * @Type("integer")
     *
     * @var int
     */
    protected $albumCount;

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
     * @param boolean $hasRadio
     */
    public function setHasRadio($hasRadio)
    {
        $this->hasRadio = $hasRadio;
    }

    /**
     * @return boolean
     */
    public function getHasRadio()
    {
        return $this->hasRadio;
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
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
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
     * @param string $topSongsKey
     */
    public function setTopSongsKey($topSongsKey)
    {
        $this->topSongsKey = $topSongsKey;
    }

    /**
     * @return string
     */
    public function getTopSongsKey()
    {
        return $this->topSongsKey;
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