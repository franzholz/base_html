<?php

########################################################################
# Extension Manager/Repository config file for ext "base_html".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'HTML Filter',
    'description' => 'Standards compliant HTML filter written in PHP (htmlpurifier)',
    'category' => 'misc',
    'version' => '0.0.1',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Edward Z. Yang, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'php' => '7.4.0-8.1.99',
            'typo3' => '9.5.0-11.5.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
