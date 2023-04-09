<?php
defined('TYPO3') or die('Access denied.');

call_user_func(
    static function ($extensionKey, $tableName): void {




        // ---------------------------------------------------------------------------------------------------------- //
        // Default TypoScript for Templatepackage
        // ---------------------------------------------------------------------------------------------------------- //
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
            $extensionKey,
            'Configuration/TypoScript',
            'templatepackage'
        );

    },
    'templatepackage',
    basename(__FILE__, '.php')
);
