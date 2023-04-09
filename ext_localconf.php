<?php
defined('TYPO3') or die('Access denied.');

// ------------------------------------------------------------------------------------------------------------------ //
// Add default RTE configuration
// ------------------------------------------------------------------------------------------------------------------ //
//
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['templatepackage'] = 'EXT:templatepackage/Configuration/RTE/Default.yaml';

// ------------------------------------------------------------------------------------------------------------------ //
// Add rootline fields
// ------------------------------------------------------------------------------------------------------------------ //
//
// Example:
// $GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] = 'tx_<extension-prefix>_<field-name>';

// ------------------------------------------------------------------------------------------------------------------ //
// Configure Plugins
// ------------------------------------------------------------------------------------------------------------------ //
//
// Example:
// \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
//     '<extension-prefix>',
//     '<plugin-name>',
//     [
//         \<vendor-name>\<extension-namespace>\Controller\<plugin-name>Controller::class => 'actionName'
//     ],
//     [
//         \<vendor-name>\<extension-namespace>\Controller\<plugin-name>Controller::class => 'nonCachableActionName'
//     ],
// );

// ------------------------------------------------------------------------------------------------------------------ //
// Upgrade Wizards
// ------------------------------------------------------------------------------------------------------------------ //
//
// Example:
// $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['ext/install']['update']['<upgrade-wizard-name>']
//     = \<vendor-name>\<extension-namespace>\Updates\<upgrade-wizard-name>::class;

// ------------------------------------------------------------------------------------------------------------------ //
// Include TsConfig files
// ------------------------------------------------------------------------------------------------------------------ //
//
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:templatepackage/Configuration/TsConfig/Page/All.tsconfig">');
