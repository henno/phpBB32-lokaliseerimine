<?php
/**
*
* This file is part of Estonian phpBB translation.
* Copyright (c) 2008 - 2017 Estonian translation group.
*
*
* This program is distributed in the hope that it will be useful,
* but WITHOUT ANY WARRANTY; without even the implied warranty of
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
* GNU General Public License for more details.
*
*
* @package      Estonian
* @author       2016-10-02 phpBBeesti.net <et.translations@phpbbeesti.net>
* @copyright    phpBBeesti
* @license      @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Seadista antud valik, kui konfiguratsiooni valikud liiga tihedasti muutuvad, et tõhusamalt puhverdada.',
	'CLI_CONFIG_CURRENT'				=> 'Kasutatavad konfiguratsiooni väärtused, kasuta 0 ja 1, et täpsustada booleani väärtused',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Konfiguratsioon %s on edukalt kustutatud.',
	'CLI_CONFIG_NEW'					=> 'Uus konfiguratsiooni väärtus, kasuta 0 ja 1, et täpsustada booleani väärtused',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Konfiguratsioon %s ei eksisteeri',
	'CLI_CONFIG_OPTION_NAME'			=> 'Konfiguratsiooni valiku nimi',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Seadista see valik, kui väärtust tuleb printed ilma uue reata lõppu.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Juurdekasvu kogus',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Edukalt kasvatatud konfiguratsioon %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Ei õnnestunud seadistada konfiguratsiooni %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Edukalt seadistatud konfiguratsioon %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Nimekiri juba valmis, ning mitte valmis olevatest cron töödest.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Käivitab kõik valmis olevad cron ülesanded.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Ülesande nimi, mida tuleb käivitada',
	'CLI_DESCRIPTION_DB_LIST'					=> 'List all installed and available migrations.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Uuendan andmebaasi kohaldades migratsiooni.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Revert a migration.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Kustutab konfiguratsiooni valikud',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Keelab määratud laienduse.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Lubab määratud laienduse.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Leiab migratsiooni, mis ei ole sõltuv.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Repairs the tree structure of the forums and modules.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Saab konfiguratsiooni valiku väärtuse',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Kasvatab konfiguratsiooni valiku väärtust täisarvuni',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Nimekiri kõikidest laiendustest andmebaasis ja failisüsteemis.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'The Environment name.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Käivita turvalises režiimis ehk Safe Mode (ilma laiendusdeta).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Käivita shell\'is.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Puhastab määratletud laienduse.',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Lists the types of text that can be reparsed.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Available reparsers:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Reparses stored text with the current text_formatter services.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Type of text to reparse. Leave blank to reparse everything.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Do not save any changes; just print what would happen',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Lowest record ID to process',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Highest record ID to process',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Approximate number of records to process at a time',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Start reparsing where the last execution stopped',

	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'	=> 'Arvutab ümber user_email_hash kolumni andmebaasi tabelis users.',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'			=> 'Seadistab konfiguratsiooni väärtused ainult siis, kui vanad kattuvad hetke väärtustega',
	'CLI_DESCRIPTION_SET_CONFIG'				=> 'Seadistab konfiguratsiooni valiku väärtused',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Delete all existing thumbnails.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Generate all missing thumbnails.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Recreate all thumbnails.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Check if the board is up to date.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Name of the extension to check (if all, checks all the extensions)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Run check command with cache.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Run command choosing to check only stable or unstable versions.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Updates outdated password hashes to be hashed with bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" needs to be set to "stable" or "unstable".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Activate (or deactivate) a user account.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Username of the account to activate.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Deactivate the user’s account',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'The user is already active.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'The user is already inactive.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Add a new user.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Username of the new user',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Password of the new user',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'E-mail address of the new user',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Send account activation email to the new user (not sent by default)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Delete a user account.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Username of the user to delete',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Delete all posts by the user. Without this option, the user’s posts will be retained.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Re-clean usernames.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" needs to be set to "stable" or "unstable".',
	
	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Ei õnnestunud keelata laiendust %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Laiendus %s on edukalt keelatud',
	'CLI_EXTENSION_DISABLED'			=> 'Extension %s is not enabled',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Laiendust %s ei olnud võimalik lubada',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Laiendus %s edukalt lubatud',
	'CLI_EXTENSION_ENABLED'				=> 'Extension %s is already enabled',
	'CLI_EXTENSION_NAME'				=> 'Laienduse nimi',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Ei õnnestunud puhastada laiendust %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Laiendus %s on edukalt puhastatud',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Could not update extension %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Successfully updated extension %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Ühtegi laiendust ei leitud.',
	'CLI_EXTENSION_NOT_ENABLEABLE'		=> 'Extension %s is not enableable.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Saadaval',
	'CLI_EXTENSIONS_DISABLED'			=> 'Keelatud',
	'CLI_EXTENSIONS_ENABLED'			=> 'Lubatud',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Successfully repaired the tree structure of the forums and modules.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Kõik e-posti räsid on edukalt ümber arvutatud.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Successfully updated outdated password hashes to bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Migration name, including the namespace (use forward slashes instead of backslashes to avoid problems).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Available migrations',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Installed migrations',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Show only available migrations',
	'CLI_MIGRATIONS_EMPTY'                  => 'No migrations.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Reparsing %1$s (range %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Reparsing %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Reparsing ended with success',

	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) deleted.',
	'CLI_THUMBNAIL_DELETING'	=> 'Deleting thumbnails',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) skipped.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) generated.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Generating thumbnails',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'All thumbnails have been regenerated.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'All thumbnails have been deleted.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'No thumbnails to generate.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'No thumbnails to delete.',

	'CLI_USER_ADD_SUCCESS'		=> 'Successfully added user %s.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Are you sure you want to delete ‘%s’? [y/N]',
	'CLI_USER_RECLEAN_START'	=> 'Re-cleaning usernames',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Re-cleaning complete. No usernames needed to be cleaned.',
		1	=> 'Re-cleaning complete. %d username was cleaned.',
		2	=> 'Re-cleaning complete. %d usernames were cleaned.',
	],

	'CLI_DESCRIPTION_EXTENSION_MANAGE'					=> 'Manages an extension',
	'CLI_DESCRIPTION_EXTENSION_MANAGE_ARGUMENT'			=> 'Extension to manage',
	'CLI_DESCRIPTION_EXTENSION_INSTALL'					=> 'Install the specified extension(s).',
	'CLI_DESCRIPTION_EXTENSION_INSTALL_OPTION_ENABLE'	=> 'Enable extension(s) after installation',
	'CLI_DESCRIPTION_EXTENSION_INSTALL_ARGUMENT'		=> 'Extension(s) to install, e.g.: vendor/package',
	'CLI_DESCRIPTION_EXTENSION_LIST_AVAILABLE'			=> 'List extensions available for installation.',
	'CLI_DESCRIPTION_EXTENSION_REMOVE'					=> 'Remove the specified extension(s).',
	'CLI_DESCRIPTION_EXTENSION_REMOVE_OPTION_PURGE'		=> 'Purge extension(s) when removing them',
	'CLI_DESCRIPTION_EXTENSION_REMOVE_ARGUMENT'			=> 'Extension(s) to remove, e.g.: vendor/package',
	'CLI_DESCRIPTION_EXTENSION_UPDATE'					=> 'Update the specified extension(s).',
	'CLI_DESCRIPTION_EXTENSION_UPDATE_ARGUMENT'			=> 'Extension(s) to update, e.g.: vendor/package',
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . 'Valikulisena Sa saad määratleda cron ülesande nime, et käivitada ainult spetsiifiline cron ülesanne.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Activate a user account, or deactivate an account using the <info>--deactivate</info> option.
To optionally send an activation email to the user, use the <info>--send-email</info> option.',
	'CLI_HELP_USER_ADD'			=> 'The <info>%command.name%</info> command adds a new user:
If this command is run without options, you will be prompted to enter them.
To optionally send an email to the new user, use the <info>--send-email</info> option.',
	'CLI_HELP_USER_RECLEAN'		=> 'Re-clean usernames will check all stored usernames and ensure clean versions are also stored. Cleaned usernames are a case insensitive form, NFC normalized and transformed to ASCII.',
));
