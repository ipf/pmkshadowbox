<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'static/PMK_Shadowbox/', 'PMK Shadowbox');
t3lib_extMgm::addStaticFile($_EXTKEY, 'static/PMK_Shadowbox_tt_news/', 'PMK Shadowbox tt_news');
t3lib_extMgm::addStaticFile($_EXTKEY, 'static/PMK_Shadowbox_tt_products/', 'PMK Shadowbox tt_products');
?>
