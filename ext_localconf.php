<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

// post processing hook to clear any existing cache files if the button in
// the backend is clicked
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc'][] =
	'EXT:pmkshadowbox/class.tx_pmkshadowbox_cache.php:&tx_pmkshadowbox_cache->clearCachePostProc';

?>
