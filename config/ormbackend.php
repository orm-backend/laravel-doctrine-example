<?php

return [
    
    'upload' => [
        'img' => 'images',
        'doc' => 'doc',
        'cache' => 'cache'
    ],
    
    'caches' => [
        'second_ttl' => env('DOCTRINE_SECOND_CACHE_TTL', 3600),
        'result_ttl' => env('DOCTRINE_RESULT_CACHE_TTL', 120),
    ],

    'adapters' => [
        'app-model-image' => OrmBackend\Adapters\ImageAdapter::class,
    ],
    
    //'acl' => OrmBackend\ACL\DefaultImplementation::class,
    'acl' => OrmBackend\ACL\ManagedImplementation::class,
    
    'roles' => [
        'default' => 'registered',
        'guest' => 'visitor',
        'administrator' => 'admin',
        'dashboard' => 'dashboard'
    ],
    
    'softdelete' => true,

    'perms' => [
        'forbidden' => 1,
        'guest' => [
            'create' => 2,
            'read' => 4,
            'update' => 8,
            'delete' => 16,
        ],
        'entity' => [
            'create' => 32,
            'read' => 64,
            'update' => 128,
            'delete' => 256,
            'restore' => 512
        ],
        'record' => [
            'read' => 1024,
            'update' => 2048,
            'delete' => 4096,
            'restore' => 8192
        ],
        'full' => 16382
    ]
    
];
