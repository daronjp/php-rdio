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
 * A user
 *
 * @AccessType("public_method")
 *
 * @package TM\Rdio\Type
 */
class User extends Base
{
    /**
     * the object key of the user
     *
     * @SerializedName("key")
     * @Type("string")
     *
     * @var string
     */
    protected $key;

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
     * the last name of the user
     *
     * @SerializedName("lastName")
     * @Type("string")
     *
     * @var string
     */
    protected $lastName;

    /**
     * the URL of an image of the user at 100x100
     *
     * @SerializedName("icon")
     * @Type("string")
     *
     * @var string
     */
    protected $icon;

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
     * the URL of an image of the user at 500x500
     *
     * @SerializedName("icon500")
     * @Type("string")
     *
     * @var string
     */
    protected $icon500;

    /**
     * the URL of an image of the user
     *
     * @SerializedName("baseIcon")
     * @Type("string")
     *
     * @var string
     */
    protected $baseIcon;

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
     * the URL of the user on the Rdio site
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
     * the user’s privacy setting is set to protected
     *
     * @SerializedName("isProtected")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $isProtected;

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
     * the URL of the user’s following page
     *
     * @SerializedName("followingUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $followingUrl;

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
     * the URL of the user’s collection page
     *
     * @SerializedName("collectionUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $collectionUrl;

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
     * the URL of the user’s playlists page
     *
     * @SerializedName("playlistsUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $playlistsUrl;

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
     * the key of the station for user’s heavy rotation
     *
     * @SerializedName("heavyRotationKey")
     * @Type("string")
     *
     * @var string
     */
    protected $heavyRotationKey;

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
     * the URL of the user’s followers page
     *
     * @SerializedName("followersUrl")
     * @Type("string")
     *
     * @var string
     */
    protected $followersUrl;

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
     * the object key for the user’s taste profile station
     *
     * @SerializedName("tasteProfileKey")
     * @Type("string")
     *
     * @var string
     */
    protected $tasteProfileKey;

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
     * does the user have an unlimited subscription / trial (only available on the current user)
     *
     * @SerializedName("isUnlimited")
     * @Type("boolean")
     *
     * @var bool
     */
    protected $isUnlimited;

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
     * the number of tracks in the user’s collection
     *
     * @SerializedName("trackCount")
     * @Type("integer")
     *
     * @var int
     */
    protected $trackCount;

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
     * the last source the user has played
     *
     * @SerializedName("lastSourcePlayed")
     * @Type("string")
     *
     * @var string
     */
    protected $lastSourcePlayed;

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
}