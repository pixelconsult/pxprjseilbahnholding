<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "pxprjseilbahnholding".
 *
 * Auto generated 07-01-2021 07:49
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Extension for OÖ Seilbahnholding',
    'description' => 'Site and project specific extension for OÖ Seilbahnholding',
    'category' => 'misc',
    'version' => '1.0.0',
    'state' => 'beta',
    'createDirs' => '',
    'clearCacheOnLoad' => true,
    'author' => 'Andreas Stieger',
    'author_email' => 'ast@pixelconsult.at',
    'author_company' => 'PixelConsult GmbH',
    'constraints' => array(
        'depends' => array(
            'typo3' => '10.4.0-10.4.99',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
            'pxbase'=>'',
        )
    ),
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '11.0.0-11.0.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
            'pxbase'=>'',
        ]

    ],
    'autoload' => [
        'psr-4' => [
            'Pixelconsult\\Pxprjseilbahnholding\\' => 'Classes',
        ],
    ],
];

?>