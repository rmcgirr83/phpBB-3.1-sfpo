<?php

/**
*
* @package Show First Post Only To Guest
* @copyright (c) 2016 Rich McGirr (RMcGirr83)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
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
// Some characters you may want to copy&paste:
// ’ » “ ” …

//Show First Post Only
$lang = array_merge($lang, [
	'SFPO_MSG_REPLY'        => array(
		1 => 'This topic has <strong>1</strong> more reply',
		2 => 'This topic has <strong>%d</strong> more replies',
	),
	'SFPO_MSG_REGISTER'        => 'You must be a registered member and logged in to view the replies in this topic.',
	'SFPO_APPEND_MESSAGE' => '<em>%slogin%s</em> to view the rest of this post',
]);
