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
 * A search result
 *
 * This is an internal type for this library
 *
 * @AccessType("public_method")
 *
 * @package TM\Rdio\Type
 */
class SearchResult
{
    /**
     * The number of albums found
     *
     * @SerializedName("album_count")
     * @Type("integer")
     *
     * @var int
     */
    protected $albumCount;

    /**
     * The number of artists found
     *
     * @SerializedName("artist_count")
     * @Type("integer")
     *
     * @var int
     */
    protected $artistCount;

    /**
     * The number of results found
     *
     * @SerializedName("number_results")
     * @Type("integer")
     *
     * @var int
     */
    protected $numberResults;

    /**
     * The number of users found
     *
     * @SerializedName("person_count")
     * @Type("integer")
     *
     * @var int
     */
    protected $personCount;

    /**
     * The number of playlists found
     *
     * @SerializedName("playlist_count")
     * @Type("integer")
     *
     * @var int
     */
    protected $playlistCount;

    /**
     * The number of tracks found
     *
     * @SerializedName("track_count")
     * @Type("integer")
     *
     * @var int
     */
    protected $trackCount;

    /**
     * The actual children of `\TM\Rdio\Type\Base` that were found
     *
     * @SerializedName("results")
     * @Type("array<TM\Rdio\Type\Base>")
     *
     * @var Base[]
     */
    protected $results;

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
     * @param int $numberResults
     */
    public function setNumberResults($numberResults)
    {
        $this->numberResults = $numberResults;
    }

    /**
     * @return int
     */
    public function getNumberResults()
    {
        return $this->numberResults;
    }

    /**
     * @param int $personCount
     */
    public function setPersonCount($personCount)
    {
        $this->personCount = $personCount;
    }

    /**
     * @return int
     */
    public function getPersonCount()
    {
        return $this->personCount;
    }

    /**
     * @param int $playlistCount
     */
    public function setPlaylistCount($playlistCount)
    {
        $this->playlistCount = $playlistCount;
    }

    /**
     * @return int
     */
    public function getPlaylistCount()
    {
        return $this->playlistCount;
    }

    /**
     * @param \TM\Rdio\Type\Base[] $results
     */
    public function setResults($results)
    {
        $this->results = $results;
    }

    /**
     * @return \TM\Rdio\Type\Base[]
     */
    public function getResults()
    {
        return $this->results;
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
}