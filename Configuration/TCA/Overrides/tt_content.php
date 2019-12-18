<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['epochenapoleoncenormdata_epochenapoleon_normdata'] = 'tx_epochenapoleoncenormdata_epochenapoleon_normdata';
$tempColumns = array (
  'tx_epochenapoleoncenormdata_gnd' =>
  array (
    'config' =>
    array (
      'eval' => 'trim,alphanum_x,unique,null',
      'mode' => 'useOrOverridePlaceholder',
      'placeholder' => 'Bitte hier GND-Datensatz eintragen',
      'size' => '20',
      'type' => 'input',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:epochenapoleon_ce_normdata/Resources/Private/Language/locallang_db.xlf:tt_content.tx_epochenapoleoncenormdata_gnd',
  ),
  'tx_epochenapoleoncenormdata_lccn' =>
  array (
    'config' =>
    array (
      'eval' => 'trim,alphanum_x,unique,null',
      'mode' => 'useOrOverridePlaceholder',
      'placeholder' => 'Bitte hier LCCN-Datensatz eintragen',
      'size' => '20',
      'type' => 'input',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:epochenapoleon_ce_normdata/Resources/Private/Language/locallang_db.xlf:tt_content.tx_epochenapoleoncenormdata_lccn',
  ),
  'tx_epochenapoleoncenormdata_viaf' =>
  array (
    'config' =>
    array (
      'eval' => 'trim,alphanum_x,nospace,unique,null',
      'mode' => 'useOrOverridePlaceholder',
      'placeholder' => 'Bitte hier VIAF-Datensatz eintragen',
      'size' => '20',
      'type' => 'input',
    ),
    'exclude' => '1',
    'label' => 'LLL:EXT:epochenapoleon_ce_normdata/Resources/Private/Language/locallang_db.xlf:tt_content.tx_epochenapoleoncenormdata_viaf',
  ),
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:epochenapoleon_ce_normdata/Resources/Private/Language/locallang_db.xlf:tt_content.CType.div._epochenapoleoncenormdata_',
    '--div--',
];
$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = [
    'LLL:EXT:epochenapoleon_ce_normdata/Resources/Private/Language/locallang_db.xlf:tt_content.CType.epochenapoleoncenormdata_epochenapoleon_normdata',
    'epochenapoleoncenormdata_epochenapoleon_normdata',
    'tx_epochenapoleoncenormdata_epochenapoleon_normdata',
];
$tempTypes = array (
  'epochenapoleoncenormdata_epochenapoleon_normdata' =>
  array (
    'columnsOverrides' =>
    array (
      'bodytext' =>
      array (
        'config' =>
        array (
          'richtextConfiguration' => 'default',
          'enableRichtext' => 1,
        ),
      ),
    ),
    'showitem' => '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,tx_epochenapoleoncenormdata_viaf,tx_epochenapoleoncenormdata_gnd,tx_epochenapoleoncenormdata_lccn,--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,--palette--;;language,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,--palette--;;hidden,--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,--div--;LLL:EXT:core/Resources/Private/Language/locallang_tca.xlf:sys_category.tabs.category,categories,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,rowDescription,--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,tx_gridelements_container,tx_gridelements_columns, --div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements',
  ),
);
$GLOBALS['TCA']['tt_content']['types'] += $tempTypes;
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'epochenapoleon_ce_normdata',
    'Configuration/TypoScript/',
    'EPOCHE NAPOLEON CE Normdata'
);

});

