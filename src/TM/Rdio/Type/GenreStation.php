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
 * A genre station
 *
 * @AccessType("public_method")
 *
 * @package TM\Rdio\Type
 */
class GenreStation extends Base
{
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
     * the name of the station
     *
     * @SerializedName("name")
     * @Type("string")
     *
     * @var string
     */
    protected $name;

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
     * the number of tracks in the station
     *
     * @SerializedName("length")
     * @Type("integer")
     *
     * @var int
     */
    protected $length;

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
     * the station should be reloaded when it completes playing and repeat is enabled
     *
     * @SerializedName("reloadOnRepeat")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $reloadOnRepeat;

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
     * station uses data from the echonest
     *
     * @SerializedName("usingEchonest")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $usingEchonest;

    /**
     * List of related genre station keys.
     *
     * @SerializedName("relatedGenreStationKeys")
     * @Type("array<string>")
     *
     * @var string[]
     */
    protected $relatedGenreStationKeys;

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
     * the URL of an icon for the station
     *
     * @SerializedName("baseIcon")
     * @Type("string")
     *
     * @var string
     */
    protected $baseIcon;

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
     * the URL of an icon for the station
     *
     * @SerializedName("icon")
     * @Type("string")
     *
     * @var string
     */
    protected $icon;

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
     * the URL of a medium-resolution icon for the station
     *
     * @SerializedName("icon170")
     * @Type("string")
     *
     * @var string
     */
    protected $icon170;

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
     * a short URL for the station
     *
     * @SerializedName("shortUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $shortUrl;

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
     * the URL of an icon for the station (large)
     *
     * @SerializedName("bigIcon")
     * @Type("string")
     *
     * @var string
     */
    protected $bigIcon;

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
     * @param \string[] $relatedGenreStationKeys
     */
    public function setRelatedGenreStationKeys($relatedGenreStationKeys)
    {
        $this->relatedGenreStationKeys = $relatedGenreStationKeys;
    }

    /**
     * @return \string[]
     */
    public function getRelatedGenreStationKeys()
    {
        return $this->relatedGenreStationKeys;
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