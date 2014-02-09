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
 * An update
 *
 * This is an internal type for this library
 * @TODO - Variable elements based on updateType
 *
 * @AccessType("public_method")
 *
 * @package TM\Rdio\Type
 */
class Update
{
    /**
     * User object for the person who did the activity
     *
     * @SerializedName("owner")
     * @Type("TM\Rdio\Type\User")
     *
     * @var User
     */
    protected $owner;

    /**
     * an ISO formatted date/time string
     *
     * @SerializedName("date")
     * @Type("DateTime<'Y-m-d\TH:i:s.u'>")
     *
     * @var \DateTime
     */
    protected $date;

    /**
     * a number indicating what kind of update occurred and additional depending on the
     *
     * @SerializedName("update_type")
     * @Type("integer")
     *
     * @var int
     */
    protected $updateType;

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \TM\Rdio\Type\User $owner
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return \TM\Rdio\Type\User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param int $updateType
     */
    public function setUpdateType($updateType)
    {
        $this->updateType = $updateType;
    }

    /**
     * @return int
     */
    public function getUpdateType()
    {
        return $this->updateType;
    }
}