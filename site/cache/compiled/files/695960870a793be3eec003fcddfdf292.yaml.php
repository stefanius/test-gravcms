<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/sgrootveld/PhpstormProjects/test-gravcms/site/system/config/streams.yaml',
    'modified' => 1588290299,
    'data' => [
        'schemes' => [
            'image' => [
                'type' => 'Stream',
                'paths' => [
                    0 => 'user://images',
                    1 => 'system://images'
                ]
            ],
            'page' => [
                'type' => 'ReadOnlyStream',
                'paths' => [
                    0 => 'user://pages'
                ]
            ],
            'account' => [
                'type' => 'ReadOnlyStream',
                'paths' => [
                    0 => 'user://accounts'
                ]
            ]
        ]
    ]
];
