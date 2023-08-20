<?php
defined('TYPO3') or die('Access denied.');

call_user_func(
    static function ($extensionKey, $tableName): void {

        // ---------------------------------------------------------------------------------------------------------- //
        // Localization path
        // ---------------------------------------------------------------------------------------------------------- //
        $ll = 'LLL:EXT:' . $extensionKey . '/Resources/Private/Language/locallang_' . $tableName . '.xlf:';

        // ---------------------------------------------------------------------------------------------------------- //
        // Register new CTypes
        // ---------------------------------------------------------------------------------------------------------- //
        // Naming convention for CTypes: <extkey>_<identifier>

        $newCTypes = [
        //  $extensionKey . '_elementName' => 'ce_elementName',
        ];

        foreach ($newCTypes as $contentElementName => $iconIdentifier) {
            // Adds the content element to the "Type" dropdown
            \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
                $tableName,
                'CType',
                [
                    // Register title of the new CType
                    $ll . $contentElementName,
                    // Register name of the new CType
                    $contentElementName,
                    // Register with icon identifier
                    $iconIdentifier,
                ],
                'textmedia',
                'after'
            );

            // "Create new record" dialog from the List module
            $GLOBALS['TCA'][$tableName]['ctrl']['typeicon_classes'][$contentElementName] = $iconIdentifier;
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
        // $GLOBALS['TCA'][$tableName]['palettes'] == Override palette configuration
        // $GLOBALS['TCA'][$tableName]['columns'] == Override column configuration

        // General palettes
        $general = ',
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
        ';
        $header = ',
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,
        ';
        $headers = ',
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;headers,
        ';
        $table = ',
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.table_layout,
            table_delimiter, table_enclosure,
            --palette--;cols, table_class, table_header_position, table_tfoot,
        ';
        $uploads = ',
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:media;uploads,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.uploads_layout;uploadslayout,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.gallerySettings;gallerySettings,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.mediaAdjustments;mediaAdjustments,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.imagelinks;imagelinks,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.appearanceLinks;appearanceLinks,
        ';
        $appearance = ',
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
        ';
        $accessibility = ',
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.menu_accessibility;menu_accessibility,
        ';
        $category = ',
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:categories,
            --palette--;categories,
        ';
        $language = ',
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:sys_language_uid_formlabel,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.language;language,
        ';
        $access = ',
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.hidden;hidden,
            --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
        ';
        $note = ',
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.description_formlabel,
            rowDescription,
        ';

        // Overrides
        //
        // Example: Overrides header layout palette to be multiple fields next to each other
        // $GLOBALS['TCA'][$tableName]['palettes']['header']['showitem'] = str_replace(
        //     'header_layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,',
        //     'header_layout; LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header_layout_formlabel,
        //     tx_extensionKey_field_name; ' . $ll . 'tx_extensionKey_field_name,',
        //     $GLOBALS['TCA']['tt_content']['palettes']['header']['showitem']
        // );

        // New Palettes

        $newPalettes = [
            // 'examplePalette' => [
            //     'label' => $ll . 'palette.example_palette',
            //     'showitem' => 'tx_extensionKey_field_name, tx_extensionKey_field_name'
            // ],
        ];

        $GLOBALS['TCA'][$tableName]['palettes'] = array_merge($GLOBALS['TCA'][$tableName]['palettes'], $newPalettes);

        // Add fields to an existing palette
        //
        // Example:
        // $GLOBALS['TCA'][$tableName]['palettes']['<palette-name>']['showitem'] .= ',tx_extensionKey_field_name';

        // ---------------------------------------------------------------------------------------------------------- //
        // Configure new CTypes
        // ---------------------------------------------------------------------------------------------------------- //
        //
        // Example:
        // $GLOBALS['TCA'][$tableName]['types'][$extensionKey . '_elementName'] = [
        //     'showitem' => $general . $header . '
        //         tx_extensionKey_field_name,
        //     ' . $appearance . $access,
        // ];

        // ---------------------------------------------------------------------------------------------------------- //
        // Override existing CTypes
        // ---------------------------------------------------------------------------------------------------------- //
        //
        // Example:
        // $GLOBALS['TCA'][$table]['types']['<ctype-to-override>'] = array_replace_recursive(
        //     $GLOBALS['TCA'][$table]['types']['<ctype-to-override>'],
        //     [
        //         'columnsOverrides' => [
        //             '<field-name>' => '<new-value>',
        //             '<field-name-with-config>' => [
        //                 'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('<field-name-with-config>', [
        //                     '<config-name>' => '<new-value>',
        //                 ], $GLOBALS['TYPO3_CONF_VARS']['GFX']['<allowed-values-ext>'])
        //             ]
        //         ]
        //     ]
        // );

        // ---------------------------------------------------------------------------------------------------------- //
        // Register Plugins
        // ---------------------------------------------------------------------------------------------------------- //
        //
        // Example:
        // \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        //     '<extension-prefix>',
        //     '<plugin-name>',
        //     '<plugin-title>',
        //     '<icon-identifier>'
        // );

    },
    'templatetypo3extension',
    basename(__FILE__, '.php')
);


