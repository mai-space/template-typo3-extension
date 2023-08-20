<?php
defined('TYPO3') or die('Access denied.');

call_user_func(
    static function ($extensionKey, $tableName): void {




        // ---------------------------------------------------------------------------------------------------------- //
        // Default TypoScript for TemplateTypo3Extension
        // ---------------------------------------------------------------------------------------------------------- //
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $extensionKey,
            'Configuration/TypoScript',
            'templatetypo3extension'
        );

    },
    'templatetypo3extension',
    basename(__FILE__, '.php')
);
