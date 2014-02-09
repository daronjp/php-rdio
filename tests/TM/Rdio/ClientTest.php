<?php
/**
 * PHP-Rdio
 *
 * A PHP client for the Rdio API
 *
 * @author Troy McCabe <troymccabe@gmail.com>
 * @copyright 2014 Troy McCabe
 * @package TM\Rdio
 */

namespace TM\Rdio;

/**
 * The main Rdio Client tests
 *
 * @package TM\Rdio
 */
class ClientTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Keys to get from the server
     *
     * @var array
     */
    private $keys = [
        'album' => 'a1026886',
        'album_station' => 'ar1026886',
        'artist' => 'r433683',
        'artist_station' => 'rr433683',
        'artist_top_songs_station' => 'tr433683',
        'collection_album' => 'al1026886|295650',
        'collection_artist' => 'rl433683|295650',
        'genre_station' => 'gr277',
        'heavy_rotation_station' => 'h295650',
        'heavy_rotation_user_station' => 'e295650',
        'label' => 'l59852',
        'label_station' => 'lr59852',
        'playlist' => 'p8163638',
        'playlist_station' => 'pr8163638',
        'song_station' => 'sr11853118',
        'taste_profile_station' => 'tp295650',
        'track' => 't11853118',
        'user' => 's295650',
        'user_collection_station' => 'c295650'
    ];

    /**
     * @var Client
     */
    private $client;

    public function setUp()
    {
        $this->client = new Client();
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetActivityStreamBadScope()
    {
        $this->client->getActivityStream($this->keys['user'], 'badscope');
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetActivityStreamBadCount()
    {
        $this->client->getActivityStream($this->keys['user'], Client::SCOPE_EVERYONE, null, 60);
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetActivityStreamBadTypes()
    {
        $this->client->getActivityStream($this->keys['user'], Client::SCOPE_EVERYONE, null, null, 'badtypearg');
    }

    public function testGetActivityStream()
    {
        $this->assertGreaterThan(5, $this->client->getActivityStream($this->keys['user'], Client::SCOPE_EVERYONE, null, null, [0,12])->getUpdates());
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetHeavyRotationBadType()
    {
        $this->client->getHeavyRotation(null, 'badtype');
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetHeavyRotationBadFriends()
    {
        $this->client->getHeavyRotation(null, null, 'badfriends');
    }

    public function testGetHeavyRotation()
    {
        $this->assertCount(2, $this->client->getHeavyRotation(null, null, null, 2));
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetNewReleasesBadTime()
    {
        $this->client->getNewReleases('badtime');
    }

    public function testGetNewReleases()
    {
        $this->assertCount(2, $this->client->getNewReleases(null, null, 2));
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetTopChartsBadType()
    {
        $this->client->getTopCharts('badtype');
    }

    public function testGetTopCharts()
    {
        $this->assertCount(2, $this->client->getTopCharts(Client::TYPE_ALBUM, null, 2));
    }

    public function testGetAlbumsByUPC()
    {
        $this->assertEquals($this->keys['album'], $this->client->getAlbumsByUPC('886443222137')[0]->getKey());
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetAlbumsForArtistBadSort()
    {
        $this->client->getAlbumsForArtist($this->keys['artist'], null, null, null, 'badsort');
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetAlbumsForArtistBadFeaturing()
    {
        $this->client->getAlbumsForArtist($this->keys['artist'], 'badfeaturing');
    }

    public function testGetAlbumsForArtist()
    {
        $this->assertCount(2, $this->client->getAlbumsForArtist($this->keys['artist'], null, null, 2));
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetAlbumsForLabelBadSort()
    {
        $this->client->getAlbumsForLabel($this->keys['label'], null, null, 'badsort');
    }

    public function testGetAlbumsForLabel()
    {
        $this->assertCount(2, $this->client->getAlbumsForLabel($this->keys['label'], null, 2));
    }

    public function testGetArtistsForLabel()
    {
        $this->assertCount(1, $this->client->getArtistsForLabel($this->keys['label'], null, 2));
    }

    public function testGetTracksByISRC()
    {
        $this->assertEquals('t11852797', $this->client->getTracksByISRC('US3CR1100613')[0]->getKey());
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetTracksForArtistBadSort()
    {
        $this->client->getTracksForArtist($this->keys['artist'], null, null, null, 'badsort');
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetTracksForArtistBadAppearsOn()
    {
        $this->client->getTracksForArtist($this->keys['artist'], 'badappearson');
    }

    public function testGetTracksForArtist()
    {
        $this->assertCount(2, $this->client->getTracksForArtist($this->keys['artist'], null, null, 2));
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testSearchBadType()
    {
        $this->client->search('Coulton', 'badtype');
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testSearchBadTypes()
    {
        $this->client->search('Coulton', ['badtype']);
    }

    public function testSearch()
    {
        $results = $this->client->search('Jonathan Coulton', [Client::TYPE_ARTIST])->getResults();
        $this->assertEquals($this->keys['artist'], $results[0]->getKey());
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testSearchSuggestionsBadType()
    {
        $this->client->searchSuggestions('Coulton', 'badtype');
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testSearchSuggestionsBadTypes()
    {
        $this->client->searchSuggestions('Coulton', ['badtype']);
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testSearchSuggestionsBadCountryCode()
    {
        $this->client->searchSuggestions('Coulton', null, 'aaa');
    }

    public function testSearchSuggestions()
    {
        $this->assertEquals($this->keys['artist'], $this->client->searchSuggestions('Jonathan Coulton')[0]->getKey());
    }

    /** @TODO */
    public function testAddToCollection(){}

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetAlbumForArtistInCollectionBadSort()
    {
        $this->client->getAlbumsForArtistInCollection('s123', 'a123', 'badsort');
    }

    public function testGetAlbumForArtistInCollection()
    {
        $albums = $this->client->getAlbumsForArtistInCollection($this->keys['user'], $this->keys['artist']);
        $this->assertEquals($this->keys['collection_album'], $albums[0]->getKey());
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetAlbumsInCollectionBadSort()
    {
        $this->client->getAlbumsInCollection('s123', null, null, null, 'badsort');
    }

    public function testGetAlbumsInCollection()
    {
        $albums = $this->client->getAlbumsInCollection($this->keys['user'], $this->keys['artist']);
        $this->assertEquals($this->keys['collection_album'], $albums[0]->getKey());
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetArtistsInCollectionBadSort()
    {
        $this->client->getArtistsInCollection('s123', null, null, 'badsort');
    }

    public function testGetArtistsInCollection()
    {
        $this->assertCount(2, $this->client->getArtistsInCollection($this->keys['user'], null, 2));
    }

    /** @TODO */
    public function testGetOfflineTracks(){}

    public function testGetTracksForAlbumInCollection()
    {
        $this->assertCount(18, $this->client->getTracksForAlbumInCollection($this->keys['collection_album'], $this->keys['user']));
    }

    public function testGetTracksForArtistInCollection()
    {
        $this->assertCount(18, $this->client->getTracksForArtistInCollection($this->keys['collection_artist'], $this->keys['user']));
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetTracksInCollectionBadSort()
    {
        $this->client->getTracksInCollection('s123', null, null, null, 'badsort');
    }

    public function testGetTracksInCollection()
    {
        $this->assertCount(2, $this->client->getTracksInCollection($this->keys['user'], null, null, 2));
    }

    /** @TODO */
    public function testRemoveFromCollection(){}
    public function testSetAvailableOffline(){}

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetBadKey()
    {
        $this->client->get('badkey');
    }

    public function testGet()
    {
        $this->assertEquals('Jonathan Coulton', $this->client->get([$this->keys['artist']])->getName());
    }
}