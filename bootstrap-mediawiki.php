<?php
/**
 * Bootstrap MediaWiki
 *
 * @bootstrap-mediawiki.php
 * @ingroup Skins
 * @author Matthew Batchelder (http://borkweb.com)
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 */

if ( ! defined( 'MEDIAWIKI' ) ) die( "This is an extension to the MediaWiki package and cannot be run standalone." );

$wgExtensionCredits['skin'][] = array(
	'path'        => __FILE__,
	'name'        => 'SPIRIT',
	'url'         => 'http://volf.co/projects/ritpedia',
	'author'      => '[http://volf.co Colum McGaley]',
	'description' => 'RITpedia MediaWiki Theme.',
);

$wgValidSkinNames['bootstrapmediawiki'] = 'BootstrapMediaWiki';
$wgAutoloadClasses['SkinBootstrapMediaWiki'] = __DIR__ . '/BootstrapMediaWiki.skin.php';

$wgHooks['BeforePageDisplay'][] = function(&$out, &$text){
    $out->addHeadItem ( 'meta','<link rel="apple-touch-icon" sizes="57x57" href="/SITE_STATIC/apple-touch-icon-57x57.png">' );
    $out->addHeadItem ( 'meta_1','<link rel="apple-touch-icon" sizes="114x114" href="/SITE_STATIC/apple-touch-icon-114x114.png">' );
    $out->addHeadItem ( 'meta_2','<link rel="apple-touch-icon" sizes="72x72" href="/SITE_STATIC/apple-touch-icon-72x72.png">' );
    $out->addHeadItem ( 'meta_3','<link rel="apple-touch-icon" sizes="60x60" href="/SITE_STATIC/apple-touch-icon-60x60.png">' );
    $out->addHeadItem ( 'meta_4','<link rel="apple-touch-icon" sizes="57x57" href="/SITE_STATIC/apple-touch-icon-57x57.png">' );
    $out->addHeadItem ( 'meta_5','<link rel="apple-touch-icon" sizes="120x120" href="/SITE_STATIC/apple-touch-icon-120x120.png">' );
    $out->addHeadItem ( 'meta_6','<link rel="apple-touch-icon" sizes="76x76" href="/SITE_STATIC/apple-touch-icon-76x76.png">' );
    $out->addHeadItem ( 'meta_7','<link rel="icon" type="image/png" href="/SITE_STATIC/favicon-96x96.png" sizes="96x96">' );
    $out->addHeadItem ( 'meta_7','<link rel="icon" type="image/png" href="/SITE_STATIC/favicon-16x16.png" sizes="16x16">' );
    $out->addHeadItem ( 'meta_8','<link rel="icon" type="image/png" href="/SITE_STATIC/favicon-32x32.png" sizes="32x32">' );
    $out->addHeadItem ( 'meta_9','<meta name="msapplication-TileColor" content="#ffffff">' );


};


$skinDirParts = explode( DIRECTORY_SEPARATOR, __DIR__ );
$skinDir = array_pop( $skinDirParts );

$wgResourceModules['skins.bootstrapmediawiki'] = array(
	'styles' => array(
		$skinDir . '/bootstrap/css/bootstrap.min.css'            => array( 'media' => 'all' ),
		$skinDir . '/google-code-prettify/prettify.css'          => array( 'media' => 'all' ),
		$skinDir . '/style.css'                                  => array( 'media' => 'all' ),
	),
	'scripts' => array(
		$skinDir . '/bootstrap/js/bootstrap.min.js',
		$skinDir . '/google-code-prettify/prettify.js',
		$skinDir . '/js/jquery.ba-dotimeout.min.js',
		$skinDir . '/js/behavior.js',
	),
	'dependencies' => array(
		'jquery',
		'jquery.mwExtension',
		'jquery.client',
		'jquery.cookie',
	),
	'remoteBasePath' => &$GLOBALS['wgStylePath'],
	'localBasePath'  => &$GLOBALS['wgStyleDirectory'],
);

if ( isset( $wgSiteJS ) ) {
	$wgResourceModules['skins.bootstrapmediawiki']['scripts'][] = $skinDir . '/' . $wgSiteJS;
}//end if

if ( isset( $wgSiteCSS ) ) {
	$wgResourceModules['skins.bootstrapmediawiki']['styles'][] = $skinDir . '/' . $wgSiteCSS;
}//end if
