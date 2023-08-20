<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

$iconsIdentifier = [
    'be_layout_default' => 'BackendLayouts/default',
//    'ce_text' => 'ContentElements/text',
//    'plugin_events' => 'Plugins/events',
//    'domain_model_event' => 'DomainModels/event',
//    'doktype_newsletter' => 'Doktypes/newsletter',
//    'module_mail' => 'BackendModules/mail',
];

$icons = [];

foreach ($iconsIdentifier as $identifier => $path) {
    $icons[$identifier] = [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:templatetypo3extension/Resources/Public/Icons/' . $path . '.svg',
    ];
}

return $icons;
