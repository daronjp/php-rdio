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

namespace TM\Rdio\Type;

use JMS\Serializer\Annotation\AccessType;
use JMS\Serializer\Annotation\Discriminator;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * The base class for types
 *
 * @AccessType("public_method")
 * @Discriminator(field="type", map={
 *      "a": "TM\Rdio\Type\Album",
 *      "ar": "TM\Rdio\Type\AlbumStation",
 *      "r": "TM\Rdio\Type\Artist",
 *      "rr": "TM\Rdio\Type\ArtistStation",
 *      "tr": "TM\Rdio\Type\ArtistTopSongsStation",
 *      "?a": "TM\Rdio\Type\AutoplayStation",
 *      "al": "TM\Rdio\Type\CollectionAlbum",
 *      "rl": "TM\Rdio\Type\CollectionArtist",
 *      "gr": "TM\Rdio\Type\GenreStation",
 *      "h": "TM\Rdio\Type\HeavyRotationStation",
 *      "e": "TM\Rdio\Type\HeavyRotationUserStation",
 *      "l": "TM\Rdio\Type\Label",
 *      "lr": "TM\Rdio\Type\LabelStation",
 *      "p": "TM\Rdio\Type\Playlist",
 *      "pr": "TM\Rdio\Type\PlaylistStation",
 *      "sr": "TM\Rdio\Type\SongStation",
 *      "tp": "TM\Rdio\Type\TasteProfileStation",
 *      "t": "TM\Rdio\Type\Track",
 *      "s": "TM\Rdio\Type\User",
 *      "c": "TM\Rdio\Type\UserCollectionStation"
 * })
 *
 * @package TM\Rdio
 */
abstract class Base
{
}