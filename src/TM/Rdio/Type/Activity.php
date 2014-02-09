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
 * An activity
 *
 * This is an internal type for this library
 *
 * @AccessType("public_method")
 *
 * @package TM\Rdio\Type
 */
class Activity
{
    /**
     * property that can be used to walk through activity
     *
     * @SerializedName("lastId")
     * @Type("integer")
     *
     * @var int
     */
    protected $lastId;

    /**
     * property that is the User object for the user that was passed in, and
     *
     * @SerializedName("user")
     * @Type("TM\Rdio\Type\User")
     *
     * @var User
     */
    protected $user;

    /**
     * array containing a series of updates.
     *
     * @SerializedName("updates")
     * @Type("array<TM\Rdio\Type\Update>")
     *
     * @var Update[]
     */
    protected $updates;

    /**
     * @param int $lastId
     */
    public function setLastId($lastId)
    {
        $this->lastId = $lastId;
    }

    /**
     * @return int
     */
    public function getLastId()
    {
        return $this->lastId;
    }

    /**
     * @param \TM\Rdio\Type\Update[] $updates
     */
    public function setUpdates($updates)
    {
        $this->updates = $updates;
    }

    /**
     * @return \TM\Rdio\Type\Update[]
     */
    public function getUpdates()
    {
        return $this->updates;
    }

    /**
     * @param \TM\Rdio\Type\User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return \TM\Rdio\Type\User
     */
    public function getUser()
    {
        return $this->user;
    }
}