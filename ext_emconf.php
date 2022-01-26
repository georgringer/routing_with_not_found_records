<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Enhanced PersistedAliasMapper',
    'description' => 'Allow not found records in PersistedAliasMapper',
    'category' => 'frontend',
    'author' => 'Georg Ringer',
    'author_email' => 'mail@ringer.it',
    'state' => 'beta',
    'clearCacheOnLoad' => true,
    'version' => '1.0.0',
    'constraints' =>
        [
            'depends' => [
                'typo3' => '10.4.0-11.5.99'
            ],
            'conflicts' => [],
            'suggests' => [],
        ]
];
