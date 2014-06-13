<?php
/**
 * Initialization file for the Model extension.
 *
 * @file Model.php
 * @ingroup Model
 *
 * @licence GNU GPL v3
 * @author Vedmaka < god.vedmaka@gmail.com >
 */

global $wgVersion,$wgExtensionCredits,$wgResourceModules,$wgExtensionMessagesFiles,$wgAutoloadClasses;

if ( !defined( 'MEDIAWIKI' ) ) {
    die('Not an entry point.');
}

if ( version_compare( $wgVersion, '1.17', '<' ) ) {
    die('<b>Error:</b> This version of Model requires MediaWiki 1.17 or above.');
}

/* Credits page */
$wgExtensionCredits['extension'][] = array(
    'path' => __FILE__,
    'name' => 'ORM',
    'version' => '0.1',
    'author' => 'Vedmaka',
    'url' => 'https://github.com/vedmaka/Mediawiki-ORM',
    'descriptionmsg' => 'ORM-desc',
);

/* Resource modules */
$wgResourceModules['ext.Model.main'] = array(
    'localBasePath' => dirname( __FILE__ ) . '/',
    'remoteExtPath' => 'MediawikiORM/',
    'group' => 'ext.ORM',
    'scripts' => '',
    'styles' => ''
);

/* Message Files */
#$wgExtensionMessagesFiles['ORM'] = dirname( __FILE__ ) . '/ORM.i18n.php';

/* Autoload classes */

#$wgAutoloadClasses['ModelHooks'] = dirname( __FILE__ ) . '/Model.hooks.php';

/* ORM,MODELS */
#$wgAutoloadClasses['Model_Model_'] = dirname( __FILE__ ) . '/includes/Model_Model_.php';

/* ORM,PAGES */
#$wgAutoloadClasses['ModelSpecial'] = dirname( __FILE__ ) . '/pages/ModelSpecial/ModelSpecial.php';

/* Rights */
#$wgAvailableRights[] = 'example_rights';

/* Permissions */
#$wgGroupPermissions['sysop']['example_rights'] = true;

/* Special Pages */
#$wgSpecialPages['Model'] = 'ModelSpecial';

/* Hooks */
#$wgHooks['example_hook'][] = 'ModelHooks::onExampleHook';