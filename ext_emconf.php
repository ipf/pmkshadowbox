<?php

########################################################################
# Extension Manager/Repository config file for ext: "pmkshadowbox"
#
# Auto generated 27-07-2010 11:45
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'PMK Shadowbox',
	'description' => 'Shadowbox is an online media viewer application (Lightbox) that supports all of the web\'s most popular media publishing formats. Shadowbox is written entirely in JavaScript and CSS and is highly customizable. Compatible with ALL JS Frameworks.',
	'category' => 'fe',
	'shy' => 0,
	'version' => '2.9.9',
	'dependencies' => '',
	'conflicts' => 'kj_imagelightbox2,perfectlightbox,wsclicklightbox,ju_multibox,pmkslimbox',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => 'typo3temp/pmkshadowbox/',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Peter Klein, Stefan Galinski',
	'author_email' => 'pmk@io.dk',
	'author_company' => 'telenor, domainFACTORY GmbH',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'conflicts' => array(
			'kj_imagelightbox2' => '0.0.0-0.0.0',
			'perfectlightbox' => '0.0.0-0.0.0',
			'wsclicklightbox' => '0.0.0-0.0.0',
			'ju_multibox' => '0.0.0-0.0.0',
			'pmkslimbox' => '0.0.0-0.0.0',
		),
		'depends' => array(
			'typo3' => '4.2.0-0.0.0',
			'php' => '5.0.0-0.0.0',
		),
		'suggests' => array(
			'scriptmerger' => '3.0.0-0.0.0',
		),
	),
	'_md5_values_when_last_written' => 'a:126:{s:16:"ext_autoload.php";s:4:"d530";s:21:"ext_conf_template.txt";s:4:"bdba";s:12:"ext_icon.gif";s:4:"82b5";s:17:"ext_localconf.php";s:4:"3f2d";s:14:"ext_tables.php";s:4:"0e6e";s:13:"locallang.xml";s:4:"5855";s:39:"classes/class.tx_pmkshadowbox_build.php";s:4:"2df5";s:39:"classes/class.tx_pmkshadowbox_cache.php";s:4:"5329";s:48:"classes/class.tx_pmkshadowbox_clearcachemenu.php";s:4:"82b4";s:43:"classes/class.tx_pmkshadowbox_printsave.php";s:4:"6515";s:43:"classes/class.tx_ttnews_imageMarkerHook.php";s:4:"fd51";s:14:"doc/manual.sxw";s:4:"dc6e";s:55:"resources/patches/shadowbox_iframeScrollingOption.patch";s:4:"559c";s:61:"resources/patches/shadowbox_preserveAspectWhileResizing.patch";s:4:"6d8d";s:27:"resources/shadowbox/LICENSE";s:4:"0303";s:26:"resources/shadowbox/README";s:4:"42c0";s:35:"resources/shadowbox/source/cache.js";s:4:"2b60";s:34:"resources/shadowbox/source/core.js";s:4:"8ac8";s:34:"resources/shadowbox/source/find.js";s:4:"78e1";s:35:"resources/shadowbox/source/flash.js";s:4:"ccca";s:35:"resources/shadowbox/source/intro.js";s:4:"a654";s:34:"resources/shadowbox/source/load.js";s:4:"eb90";s:35:"resources/shadowbox/source/outro.js";s:4:"3fa4";s:37:"resources/shadowbox/source/plugins.js";s:4:"9378";s:34:"resources/shadowbox/source/skin.js";s:4:"fc8a";s:34:"resources/shadowbox/source/util.js";s:4:"167a";s:43:"resources/shadowbox/source/adapters/base.js";s:4:"2abd";s:43:"resources/shadowbox/source/adapters/dojo.js";s:4:"4a0f";s:42:"resources/shadowbox/source/adapters/ext.js";s:4:"9299";s:45:"resources/shadowbox/source/adapters/jquery.js";s:4:"d433";s:47:"resources/shadowbox/source/adapters/mootools.js";s:4:"61a2";s:48:"resources/shadowbox/source/adapters/prototype.js";s:4:"4b08";s:42:"resources/shadowbox/source/adapters/yui.js";s:4:"8883";s:42:"resources/shadowbox/source/languages/ar.js";s:4:"5268";s:42:"resources/shadowbox/source/languages/ca.js";s:4:"6d36";s:42:"resources/shadowbox/source/languages/cs.js";s:4:"5603";s:42:"resources/shadowbox/source/languages/da.js";s:4:"f81b";s:45:"resources/shadowbox/source/languages/de-CH.js";s:4:"7254";s:45:"resources/shadowbox/source/languages/de-DE.js";s:4:"1f20";s:42:"resources/shadowbox/source/languages/en.js";s:4:"997d";s:42:"resources/shadowbox/source/languages/es.js";s:4:"10e9";s:42:"resources/shadowbox/source/languages/et.js";s:4:"794d";s:42:"resources/shadowbox/source/languages/fi.js";s:4:"7cc2";s:42:"resources/shadowbox/source/languages/fr.js";s:4:"03ca";s:42:"resources/shadowbox/source/languages/gl.js";s:4:"4cac";s:42:"resources/shadowbox/source/languages/he.js";s:4:"1b12";s:42:"resources/shadowbox/source/languages/hu.js";s:4:"fda4";s:42:"resources/shadowbox/source/languages/id.js";s:4:"fa4d";s:42:"resources/shadowbox/source/languages/is.js";s:4:"4302";s:42:"resources/shadowbox/source/languages/it.js";s:4:"73fb";s:42:"resources/shadowbox/source/languages/ja.js";s:4:"dc82";s:42:"resources/shadowbox/source/languages/ko.js";s:4:"7d7f";s:42:"resources/shadowbox/source/languages/my.js";s:4:"ddc3";s:42:"resources/shadowbox/source/languages/nl.js";s:4:"e17d";s:42:"resources/shadowbox/source/languages/no.js";s:4:"cec3";s:42:"resources/shadowbox/source/languages/pl.js";s:4:"1e21";s:45:"resources/shadowbox/source/languages/pt-BR.js";s:4:"c90e";s:45:"resources/shadowbox/source/languages/pt-PT.js";s:4:"295d";s:42:"resources/shadowbox/source/languages/ro.js";s:4:"cb66";s:42:"resources/shadowbox/source/languages/ru.js";s:4:"7b4a";s:42:"resources/shadowbox/source/languages/sk.js";s:4:"a5aa";s:42:"resources/shadowbox/source/languages/sv.js";s:4:"30e8";s:42:"resources/shadowbox/source/languages/tr.js";s:4:"17a8";s:45:"resources/shadowbox/source/languages/zh-CN.js";s:4:"8716";s:45:"resources/shadowbox/source/languages/zh-TW.js";s:4:"1101";s:41:"resources/shadowbox/source/players/flv.js";s:4:"b451";s:42:"resources/shadowbox/source/players/html.js";s:4:"8c63";s:44:"resources/shadowbox/source/players/iframe.js";s:4:"0707";s:41:"resources/shadowbox/source/players/img.js";s:4:"0935";s:40:"resources/shadowbox/source/players/qt.js";s:4:"16d8";s:41:"resources/shadowbox/source/players/swf.js";s:4:"32c7";s:41:"resources/shadowbox/source/players/wmp.js";s:4:"e1db";s:46:"resources/shadowbox/source/resources/close.png";s:4:"370c";s:55:"resources/shadowbox/source/resources/expressInstall.swf";s:4:"204f";s:46:"resources/shadowbox/source/resources/icons.psd";s:4:"9308";s:48:"resources/shadowbox/source/resources/loading.gif";s:4:"69f7";s:45:"resources/shadowbox/source/resources/next.png";s:4:"1c8c";s:46:"resources/shadowbox/source/resources/pause.png";s:4:"b960";s:45:"resources/shadowbox/source/resources/play.png";s:4:"a404";s:47:"resources/shadowbox/source/resources/player.swf";s:4:"65da";s:49:"resources/shadowbox/source/resources/previous.png";s:4:"156f";s:50:"resources/shadowbox/source/resources/shadowbox.css";s:4:"8e0f";s:51:"resources/skinModifications/classicWithSave/skin.js";s:4:"dc44";s:63:"resources/skinModifications/classicWithSave/resources/close.png";s:4:"370c";s:65:"resources/skinModifications/classicWithSave/resources/loading.gif";s:4:"ffb9";s:62:"resources/skinModifications/classicWithSave/resources/next.png";s:4:"0f72";s:63:"resources/skinModifications/classicWithSave/resources/pause.png";s:4:"3e19";s:62:"resources/skinModifications/classicWithSave/resources/play.png";s:4:"9a23";s:66:"resources/skinModifications/classicWithSave/resources/previous.png";s:4:"0ec7";s:63:"resources/skinModifications/classicWithSave/resources/print.png";s:4:"b655";s:62:"resources/skinModifications/classicWithSave/resources/save.png";s:4:"2e04";s:67:"resources/skinModifications/classicWithSave/resources/shadowbox.css";s:4:"413e";s:46:"resources/skinModifications/closeOnTop/skin.js";s:4:"6396";s:62:"resources/skinModifications/closeOnTop/resources/shadowbox.css";s:4:"3348";s:46:"resources/skinModifications/dropshadow/skin.js";s:4:"3c4d";s:58:"resources/skinModifications/dropshadow/resources/close.png";s:4:"370c";s:57:"resources/skinModifications/dropshadow/resources/next.png";s:4:"0f72";s:58:"resources/skinModifications/dropshadow/resources/pause.png";s:4:"3e19";s:57:"resources/skinModifications/dropshadow/resources/play.png";s:4:"9a23";s:61:"resources/skinModifications/dropshadow/resources/previous.png";s:4:"0ec7";s:61:"resources/skinModifications/dropshadow/resources/shadow50.png";s:4:"a291";s:61:"resources/skinModifications/dropshadow/resources/shadow70.png";s:4:"5d68";s:62:"resources/skinModifications/dropshadow/resources/shadowbox.css";s:4:"9c88";s:40:"resources/skinModifications/web3/skin.js";s:4:"2731";s:54:"resources/skinModifications/web3/resources/loading.gif";s:4:"9818";s:50:"resources/skinModifications/web3/resources/nav.png";s:4:"4a2d";s:50:"resources/skinModifications/web3/resources/nav.psd";s:4:"0334";s:56:"resources/skinModifications/web3/resources/shadowbox.css";s:4:"8df5";s:48:"resources/skinModifications/web3WithSave/skin.js";s:4:"6d8a";s:62:"resources/skinModifications/web3WithSave/resources/loading.gif";s:4:"9818";s:58:"resources/skinModifications/web3WithSave/resources/nav.png";s:4:"5b85";s:58:"resources/skinModifications/web3WithSave/resources/nav.psd";s:4:"693b";s:64:"resources/skinModifications/web3WithSave/resources/shadowbox.css";s:4:"0945";s:34:"static/PMK_Shadowbox/constants.txt";s:4:"1ca1";s:30:"static/PMK_Shadowbox/setup.txt";s:4:"ff47";s:47:"static/PMK_Shadowbox_ClickEnlarge/constants.txt";s:4:"54c6";s:43:"static/PMK_Shadowbox_ClickEnlarge/setup.txt";s:4:"5624";s:42:"static/PMK_Shadowbox_tt_news/constants.txt";s:4:"3fad";s:38:"static/PMK_Shadowbox_tt_news/setup.txt";s:4:"e3d9";s:46:"static/PMK_Shadowbox_tt_products/constants.txt";s:4:"1246";s:42:"static/PMK_Shadowbox_tt_products/setup.txt";s:4:"3c16";s:43:"tests/classes/tx_pmkshadowbox_buildTest.php";s:4:"cda8";s:43:"tests/classes/tx_pmkshadowbox_cacheTest.php";s:4:"4bd6";s:19:"UPDATE_NOTES/README";s:4:"ab74";s:17:"UPDATE_NOTES/TODO";s:4:"a580";s:25:"UPDATE_NOTES/savefile.php";s:4:"0dbc";}',
	'suggests' => array(
	),
);

?>