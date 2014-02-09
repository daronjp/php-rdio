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
 * A collection artist
 *
 * @package TM\Rdio\Type
 */
class CollectionArtist extends Base
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
     * the key of the user whose collection this artist is in
     *
     * @SerializedName("userKey")
     * @Type("string")
     *
     * @var string
     */
    protected $userKey;

    /**
     * the username of the user whose collection this artist is in
     *
     * @SerializedName("userName")
     * @Type("string")
     *
     * @var string
     */
    protected $userName;

    /**
     * the key of the artist
     *
     * @SerializedName("artistKey")
     * @Type("string")
     *
     * @var string
     */
    protected $artistKey;

    /**
     * the url for the artist
     *
     * @SerializedName("artistUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $artistUrl;

    /**
     * the number of tracks from this artist in the user collection
     *
     * @SerializedName("count")
     * @Type("integer")
     *
     * @var int
     */
    protected $count;

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

    /**
     * @param string $userKey
     */
    public function setUserKey($userKey)
    {
        $this->userKey = $userKey;
    }

    /**
     * @return string
     */
    public function getUserKey()
    {
        return $this->userKey;
    }

    /**
     * @param string $userName
     */
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }
}