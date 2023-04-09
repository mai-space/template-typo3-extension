<?php
defined('TYPO3') or die('Access denied.');

call_user_func(
    static function ($extensionKey, $tableName): void {

        // ---------------------------------------------------------------------------------------------------------- //
        // Localization path
        // ---------------------------------------------------------------------------------------------------------- //
        $ll = 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_' . $tableName . '.xlf:';

        // ---------------------------------------------------------------------------------------------------------- //
        // Register new Doktypes
        // ---------------------------------------------------------------------------------------------------------- //
        // Naming convention for Doktypes: <extkey>_<identifier>

        $newDoktypes = [
        //  $extensionKey . '_name' => 'doktype_name',
        ];

        foreach ($newDoktypes as $doktypeName => $iconIdentifier) {
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
                $tableName,
                'doktype',
                [
                    $ll . $doktypeName,
                    $doktypeName,
                    $iconIdentifier
                ],
                '1',
                'after'
            );

            $GLOBALS['TCA'][$tableName]['ctrl']['typeicon_classes'][$doktypeName] = $iconIdentifier;
        }

        // ---------------------------------------------------------------------------------------------------------- //
        // Add new table fields
        // ---------------------------------------------------------------------------------------------------------- //

        $newTableFields = [
            // 'tx_' . $extensionKey . '_field_name' => [
            //     'exclude' => true,
            //     'label' => $ll . 'tx_' . $extensionKey . '_field_name',
            //     'config' => [ ]
            // ],
        ];

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns($tableName, $newTableFields);

        // ---------------------------------------------------------------------------------------------------------- //
        // General, Overrides and Add new Palettes
        // ---------------------------------------------------------------------------------------------------------- //
        // !!! DEFINITIONS !!!
        // --div--; == Groups fields in own tabs
        // --palette--; == Displays fields next to each other
        // --linebreak--, == Displays fields below each other

        // New Palettes

        $newPalettes = [
            // 'examplePaletteName' => [
            //     'label' => $ll . 'palette.example_palette_name',
            //     'showitem' => 'tx_extensionKey_field_name, tx_extensionKey_field_name'
            // ],
        ];

        $GLOBALS['TCA'][$tableName]['palettes'] = array_merge($GLOBALS['TCA'][$tableName]['palettes'], $newPalettes);

        // Add Palette to Doktype
        //
        // Examples:
        // $GLOBALS['TCA'][$tableName]['columns']['<tabName>']['config']['items'][] = [ '<paletteName>',    '--div--' ];

        // Add fields to an existing palette
        //
        // Example:
        // $GLOBALS['TCA'][$tableName]['palettes']['<palette-name>']['showitem'] .= ',tx_extensionKey_field_name';

        // ---------------------------------------------------------------------------------------------------------- //
        // Default PageTS for Templatepackage
        // ---------------------------------------------------------------------------------------------------------- //
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
            $extensionKey,
            'Configuration/TsConfig/Page/All.tsconfig',
            'templatepackage'
        );

    },
    'templatepackage',
    basename(__FILE__, '.php')
);
