<?php

/**
 * Extension Manager/Repository config file for ext "templatepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'templatepackage',
    'description' => 'A TYPO3 Extension Template',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
            'fluid_styled_content' => '11.5.0-11.5.99',
            'rte_ckeditor' => '11.5.0-11.5.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Maispace\\Templatepackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Joel Maximilian Mai',
    'author_email' => 'joel@maispace.de',
    'author_company' => 'Maispace',
    'version' => '1.0.0',
];
