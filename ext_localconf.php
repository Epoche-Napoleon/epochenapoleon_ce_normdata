<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {

// Register content element icons
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
$iconRegistry->registerIcon(
    'tx_epochenapoleoncenormdata_epochenapoleon_normdata',
    \TYPO3\CMS\Core\Imaging\IconProvider\FontawesomeIconProvider::class,
    [
        'name' => 'address-card',
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:epochenapoleon_ce_normdata/Configuration/PageTSconfig/NewContentElementWizard.ts">'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:epochenapoleon_ce_normdata/Configuration/PageTSconfig/BackendPreview.ts">'
);
// Add backend preview hook
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['tt_content_drawItem']['epochenapoleon_ce_normdata'] = 
    EPOCHENAPOLEON\EpochenapoleonCeNormdata\Hooks\PageLayoutViewDrawItem::class;

});

