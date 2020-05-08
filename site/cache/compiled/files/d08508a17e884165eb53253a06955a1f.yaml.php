<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/sgrootveld/PhpstormProjects/test-gravcms/site/user/config/plugins/email.yaml',
    'modified' => 1588290300,
    'data' => [
        'enabled' => true,
        'from' => 'your@email.here',
        'to' => 'your@email.here',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ]
    ]
];
