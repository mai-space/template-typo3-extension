<?php

// See https://docs.typo3.org/m/typo3/reference-coreapi/main/en-us/ExtensionArchitecture/FileStructure/ExtEmconf.html
$EM_CONF[$_EXTKEY] = [
    'title' => 'yourextensionname',
    'description' => 'Made from the maispace/template-typo3-extension',
    'category' => 'templates',
    'author' => 'Joel Maximilian Mai',
    'author_email' => 'joel@maispace.de',
    'author_company' => 'MaiSpace',
    'version' => '1.0.0',
    'state' => 'stable',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'YourVendorName\\YourExtensionName\\' => 'Classes',
        ],
    ],
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
];
