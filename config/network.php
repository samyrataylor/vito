<?php

return [
    'allocate' => [
        'blocklist' => [
            '10.0.0.0/10',
        ],
    ],

    'validation_rules' => [
        'prefix' => ['nullable', 'integer', 'min:8', 'max:28'],
        'port' => ['nullable', 'integer', 'min:1024', 'max:65535'],
    ]
];
