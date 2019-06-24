<?php
/**
 *
 * phpBB Studio - Advanced Points System. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2019, phpBB Studio, https://www.phpbbstudio.com
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, [
	// ACP modules and modes
	'ACP_APS_POINTS'			=> 'Advanced Points System',
	'ACP_APS_MODE_SETTINGS'		=> 'Settings',
	'ACP_APS_MODE_DISPLAY'		=> 'Display',
	'ACP_APS_MODE_POINTS'		=> '%s',
	'ACP_APS_MODE_LOGS'			=> 'Logs',

	// ACP log
	'LOG_ACP_APS_SETTINGS'		=> '<strong>Altered <abbr title="Advanced Points System">APS</abbr> settings</strong>',
	'LOG_ACP_APS_DISPLAY'		=> '<strong>Altered <abbr title="Advanced Points System">APS</abbr> display settings</strong>',
	'LOG_ACP_APS_POINTS'		=> '<strong>Altered <abbr title="Advanced Points System">APS</abbr> %s</strong>',
	'LOG_ACP_APS_POINTS_COPIED'	=> '<strong>Copied <abbr title="Advanced Points System">APS</abbr> %3$s</strong> for %2$s<br>from %1$s',
	'LOG_ACP_APS_POINTS_RESET'	=> '<strong>Reset <abbr title="Advanced Points System">APS</abbr> %2$s</strong><br>» %1$s',
	'LOG_ACP_APS_LOGS_CLEARED'	=> '<strong>Cleared <abbr title="Advanced Points System">APS</abbr> %s actions</strong>',
	'LOG_ACP_APS_LOGS_DELETED'	=> '<strong>Deleted <abbr title="Advanced Points System">APS</abbr> %s actions</strong>',
	'LOG_ACP_APS_COPIED'		=> '<strong>Copied <abbr title="Advanced Points System">APS</abbr> %s to multiple forums</strong>',
	'LOG_ACP_APS_CLEANED'		=> '<strong>Cleaned the <abbr title="Advanced Points System">APS</abbr> %s table</strong>',

	'LOG_ACP_APS_REASON_ADD'	=> '<strong>Added an <abbr title="Advanced Points System">APS</abbr> reason</strong>',
	'LOG_ACP_APS_REASON_EDIT'	=> '<strong>Edited an <abbr title="Advanced Points System">APS</abbr> reason</strong>',
	'LOG_ACP_APS_REASON_DELETE'	=> '<strong>Deleted an <abbr title="Advanced Points System">APS</abbr> reason</strong>',

	'LOG_ACP_APS_CALCULATION_ERROR'	=> '<strong><abbr title="Advanced Points System">APS</abbr> - There was an error calculating the %4$s</strong><br />Error: <samp>%1$s</samp><br />File: <samp>%2$s</samp><br />Line: <samp>%3$s</samp>',
]);
