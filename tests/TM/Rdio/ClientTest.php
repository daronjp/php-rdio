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

use Guzzle\Http\Message\Response;
use ReflectionClass;;

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
        $this->client = new Client($_SERVER['CONSUMER_KEY'], $_SERVER['CONSUMER_SECRET']);

        $testName = lcfirst(substr($this->getName(), 4));
        $mockFileName = "./tests/mock/{$testName}.json";

        // load the saved response and make the fake Guzzle response from it.
        if (file_exists($mockFileName)) {
            $mockResponse = file_get_contents("./tests/mock/{$testName}.json");
            $mockResponseParts = explode('~~~~~~~~~~', $mockResponse);
            $headerStrings = explode("\r\n", $mockResponseParts[0]);
            $headers = [];
            for ($i = 1; $i < count($headerStrings); $i++) {
                $stringParts = explode(': ', $headerStrings[$i]);
                if (isset($stringParts[0]) && isset($stringParts[1])) {
                    $headers[$stringParts[0]] = $stringParts[1];
                }
            }
            $body = trim($mockResponseParts[1]);
            $response = new Response(preg_replace('/^HTTP \/1.1 (\d+) .*$/', '$1', $headerStrings[0]), $headers, $body);

            $mockHttpClient = $this->getMock('\Guzzle\Http\Client', ['send']);
            $mockHttpClient
                ->expects($this->any())
                ->method('send')
                ->will($this->returnValue($response));

            $cls = new ReflectionClass('\TM\Rdio\Client');
            $httpClientProp = $cls->getProperty('httpClient');
            $httpClientProp->setAccessible(true);
            $httpClientProp->setValue($this->client, $mockHttpClient);
        }
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
    public function testGetAlbumsForArtistInCollectionBadSort()
    {
        $this->client->getAlbumsForArtistInCollection('s123', 'a123', 'badsort');
    }

    public function testGetAlbumsForArtistInCollection()
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
        $this->assertEquals('Jonathan Coulton', $this->client->get([$this->keys['artist']])[0]->getName());
    }

    public function testGetObjectFromShortCode()
    {
        $this->assertEquals($this->keys['album'], $this->client->getObjectFromShortCode('QVvAvSJQ-Qc')->getKey());
    }

    public function testGetObjectFromUrl()
    {
        $this->assertEquals($this->keys['album'], $this->client->getObjectFromUrl('artist/Jonathan_Coulton/album/Artificial_Heart/')->getKey());
    }

    public function testGetPlaybackToken()
    {
        $this->assertContains('_____', $this->client->getPlaybackToken('troymccabe.com'));
    }

    /** @TODO */
    public function testAddToPlaylist(){}
    public function testCreatePlaylist(){}
    public function testDeletePlaylist(){}

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetPlaylistsBadOrderedList()
    {
        $this->client->getPlaylists('s123', 'badorderedlist');
    }

    public function testGetPlaylists()
    {
        $this->assertEquals($this->keys['playlist'], $this->client->getPlaylists($this->keys['user'], true));
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetUserPlaylistsBadKind()
    {
        $this->client->getUserPlaylists('s123', 'badkind');
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testGetUserPlaylistsBadSort()
    {
        $this->client->getUserPlaylists('s123', null, null, null, 'badsort');
    }

    public function testGetUserPlaylists()
    {
        $this->assertEquals($this->keys['playlist'], $this->client->getUserPlaylists($this->keys['user'])[0]->getKey());
    }

    /** @TODO */
    public function testRemoveFromPlaylist(){}
    public function testSetPlaylistCollaborating(){}
    public function testSetPlaylistCollaborationMode(){}
    public function testSetPlaylistFields(){}
    public function testSetPlaylistOrder(){}

    /** @TODO */
    public function testAddFriend(){}
    public function testApproveFollower(){}
    public function testCurrentUser(){}

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testFindUserBadArgs()
    {
        $this->client->findUser('email_and', 'name');
    }

    public function testFindUser()
    {
        $this->assertEquals($this->keys['user'], $this->client->findUser(null, 'troymccabe')->getKey());
    }

    /** @TODO */
    public function testHideFollower(){}
    public function testRemoveFriend(){}
    public function testUnapproveFollower(){}

    public function testUserFollowers()
    {
        $this->assertEquals('s17852145', $this->client->userFollowers($this->keys['user'])[0]->getKey());
    }

    /**
     * @expectedException \TM\Rdio\Exception\InvalidArgumentException
     */
    public function testUserFollowingBadInterleave()
    {
        $this->client->userFollowing('a123', null, 'badinterleave');
    }

    public function testUserFollowing()
    {
        $this->assertEquals('s4227455', $this->client->userFollowing($this->keys['user'])[0]->getKey());
    }

    /** @TODO */
    public function testUserHiddenFollowers(){}
    public function testUserPendingFollowers(){}

    public function testDeserialize()
    {
        $x = 0;
        foreach ($this->keys as $name => $value) {
            $type = str_replace(' ' , '', ucwords(str_replace('_', ' ', $name)));
            echo $type;
            $this->client->get([$this->keys[$name]], null, $this->getExtras($type));

            if ($x % 5 == 0) {
                $x = 0;
            }
            $x++;
        }
    }

    protected function getExtras($type)
    {
        $refClass = new ReflectionClass("\\TM\\Rdio\\Type\\{$type}");
        $refProps = $refClass->getProperties();
        $extras = [];
        foreach ($refProps as $refProp) {
            $extras[] = $refProp->getName();
        }
        return implode(',', $extras);
    }
}