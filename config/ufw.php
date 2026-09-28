<?php

use App\Enums\FirewallRuleStatus;

return [  
    'basic_rules' => [
        [
            'type' => 'allow',
            'name' => 'SSH',
            'protocol' => 'tcp',
            'port' => '22',
            'source' => env('FIREWALL_SSH_SOURCE'),
            'mask' => (empty(env('FIREWALL_SSH_SOURCE')) ? null : empty(env('FIREWALL_SSH_SOURCE_MASK')) ? '/32' : env('FIREWALL_SSH_SOURCE_MASK')),
            'status' => FirewallRuleStatus::READY,
        ],
        [
            'type' => 'allow',
            'name' => 'HTTP',
            'protocol' => 'tcp',
            'port' => '80',
            'source' => null,
            'mask' => null,
            'status' => FirewallRuleStatus::READY,
        ],
        [
            'type' => 'allow',
            'name' => 'HTTPS',
            'protocol' => 'tcp',
            'port' => '443',
            'source' => null,
            'mask' => null,
            'status' => FirewallRuleStatus::READY,
        ],
    ],
];
