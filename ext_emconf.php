<?php

/**
 * Extension Manager/Repository config file for ext "templatetypo3extension".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'templatetypo3extension',
    'description' => 'A TYPO3 Extension Template',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'MaiSpace\\TemplateTypo3Extension\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Joel Maximilian Mai',
    'author_email' => 'joel@maispace.de',
    'author_company' => 'MaiSpace',
    'version' => '1.0.0',
];
