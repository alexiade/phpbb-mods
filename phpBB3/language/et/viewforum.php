<?php
/**
*
* viewforum.php [Estonian]
*
* @package language
* @version $Id: $
* @copyright (c) 2007 phpBB Group
* @author 2007-11-25 - Amphor - phpbb.ee
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACTIVE_TOPICS'	=> 'Aktiivsed teemad',
	'ANNOUNCEMENTS'	=> 'Teadaanded',
	'FORUM_PERMISSIONS'	=> 'Foorumi õigused',
	'ICON_ANNOUNCEMENT'	=> 'Teadaanne',
	'ICON_STICKY'	=> 'Kleebis',
	'LOGIN_NOTIFY_FORUM'	=> 'Sulle on teatatud sellest foorumist. Logi sisse, et seda vaadata.',
	'MARK_TOPICS_READ'	=> 'Märgi teemad loetuks',
	'NEW_POSTS_HOT'	=> 'Uued postitused [ Populaarne ]',
	'NEW_POSTS_LOCKED'	=> 'Uued postitused [ Suletud ]',
	'NO_NEW_POSTS_HOT'	=> 'Pole uusi postitusi [ Populaarne ]',
	'NO_NEW_POSTS_LOCKED'	=> 'Pole uusi postitusi [ Suletud ]',
	'NO_READ_ACCESS'	=> 'Sul pole õigusi teemade lugemiseks selles foorumis',
	'NO_UNREAD_POSTS_HOT'      => 'Pole lugemata postitusi [ Populaarne ]',
   'NO_UNREAD_POSTS_LOCKED'   => 'Pole lugemata postitusi [ Suletud ]',
	'POST_FORUM_LOCKED'	=> 'Foorum on suletud',
	'TOPICS_MARKED'	=> 'Teemad selles foorumis on nüüd märgitud loetuks.',
    'UNREAD_POSTS_HOT'      => 'Lugemata postitused [ Populaarne ]',
	'UNREAD_POSTS_LOCKED'   => 'Lugemata potitused [ Suletud ]',
	'VIEW_FORUM'	=> 'Vaata foorumit',
	'VIEW_FORUM_TOPIC'	=> '1 teema',
	'VIEW_FORUM_TOPICS'	=> '%d teemat',
));

?>