<?php

########################################################################
# Extension Manager/Repository config file for ext "base_html".
########################################################################

$EM_CONF[$_EXTKEY] = [
    'title' => 'HTML Filter',
    'description' => 'Standards compliant HTML filter written in PHP (htmlpurifier)',
    'category' => 'misc',
    'version' => '4.15.0',
    'state' => 'stable',
    'clearcacheonload' => 1,
    'author' => 'Edward Z. Yang, Franz Holzinger',
    'author_email' => 'franz@ttproducts.de',
    'author_company' => 'jambage.com',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.4.99'
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];
