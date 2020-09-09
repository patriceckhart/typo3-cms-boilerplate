<?php

/**
 * Extension Manager/Repository config file for ext "base".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Base',
    'description' => 'A bootstrap basic package that provides the most important things',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
            'fluid_styled_content' => '10.2.0-10.4.99',
            'rte_ckeditor' => '10.2.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'PatricEckhart\\Base\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Patric Eckhart',
    'author_email' => 'mail@patriceckhart.com',
    'author_company' => 'Patric Eckhart',
    'version' => '1.0.0',
];
