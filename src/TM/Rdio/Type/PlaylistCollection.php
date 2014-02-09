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
 * A playlist collection
 *
 * This is an internal type for this library
 *
 * @AccessType("public_method")
 *
 * @package TM\Rdio\Type
 */
class PlaylistCollection
{
    /**
     * playlists that the user is a collaborator on
     *
     * @SerializedName("collab")
     * @Type("array<TM\Rdio\Type\Playlist>")
     *
     * @var Playlist[]
     */
    protected $collab;

    /**
     * playlists created by the user
     *
     * @SerializedName("owned")
     * @Type("array<TM\Rdio\Type\Playlist>")
     *
     * @var Playlist[]
     */
    protected $owned;

    /**
     * playlists that the user has subscribed to
     *
     * @SerializedName("subscribed")
     * @Type("array<TM\Rdio\Type\Playlist>")
     *
     * @var Playlist[]
     */
    protected $subscribed;

    /**
     * @param \TM\Rdio\Type\Playlist[] $collab
     */
    public function setCollab($collab)
    {
        $this->collab = $collab;
    }

    /**
     * @return \TM\Rdio\Type\Playlist[]
     */
    public function getCollab()
    {
        return $this->collab;
    }

    /**
     * @param \TM\Rdio\Type\Playlist[] $owned
     */
    public function setOwned($owned)
    {
        $this->owned = $owned;
    }

    /**
     * @return \TM\Rdio\Type\Playlist[]
     */
    public function getOwned()
    {
        return $this->owned;
    }

    /**
     * @param \TM\Rdio\Type\Playlist[] $subscribed
     */
    public function setSubscribed($subscribed)
    {
        $this->subscribed = $subscribed;
    }

    /**
     * @return \TM\Rdio\Type\Playlist[]
     */
    public function getSubscribed()
    {
        return $this->subscribed;
    }
}