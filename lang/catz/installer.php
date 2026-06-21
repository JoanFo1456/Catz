<?php

return [
    'title' => 'Cat Panel Installer',
    'requirements' => [
        'title' => 'Server Requirementz',
        'sections' => [
            'version' => [
                'title' => 'PHP Vershun',
                'or_newer' => ':version or newer',
                'content' => 'Ur PHP Vershun iz :version.',
            ],
            'extensions' => [
                'title' => 'PHP Extensionz',
                'good' => 'All needed PHP Extensionz are installed, meow!',
                'bad' => 'Da following PHP Extensionz are missing: :extensions',
            ],
            'permissions' => [
                'title' => 'Folder Permissionz',
                'good' => 'All Folderz haz da correct permissionz.',
                'bad' => 'Da following Folderz haz wrong permissionz: :folders',
            ],
        ],
        'exception' => 'Sum requirementz are missing',
    ],
    'environment' => [
        'title' => 'Environment',
        'fields' => [
            'app_name' => 'App Namez',
            'app_name_help' => 'Dis will be da Namez of ur Cat.',
            'app_url' => 'App URL',
            'app_url_help' => 'Dis will be da URL u access ur Cat from.',
            'account' => [
                'section' => 'Catmin User',
                'email' => 'E-Mail',
                'username' => 'Usercat',
                'password' => 'Secret Paw',
            ],
        ],
    ],
    'database' => [
        'title' => 'DataBowl',
        'driver' => 'DataBowl Driver',
        'driver_help' => 'Da driver used fur da panel databowl. We recommend "SQLite".',
        'fields' => [
            'host' => 'DataBowl Host',
            'host_help' => 'Da host of ur databowl. Make sure it iz reachable.',
            'port' => 'DataBowl Port',
            'port_help' => 'Da port of ur databowl.',
            'path' => 'DataBowl Path',
            'path_help' => 'Da path of ur .sqlite file relative to da databowl folder.',
            'name' => 'DataBowl Namez',
            'name_help' => 'Da name of da panel databowl.',
            'username' => 'DataBowl Usercat',
            'username_help' => 'Da name of ur databowl user.',
            'password' => 'DataBowl Secret Paw',
            'password_help' => 'Da secret paw of ur databowl user. Can be empty.',
        ],
        'exceptions' => [
            'connection' => 'DataBowl connection faled',
            'migration' => 'Migrationz faled',
        ],
    ],
    'egg' => [
        'title' => 'Eggz',
        'no_eggs' => 'No Eggz Available',
        'background_install_started' => 'Egg Install Started',
        'background_install_description' => 'Install of :count eggz haz been queued and will continue in da background.',
        'exceptions' => [
            'failed_to_update' => 'Failed to update egg index',
            'no_eggs' => 'No eggz are available to install at dis time.',
            'installation_failed' => 'Failed to install selected eggz. Please import dem after da installation via da egg list.',
        ],
    ],
    'session' => [
        'title' => 'Session',
        'driver' => 'Session Driver',
        'driver_help' => 'Da driver used fur storing sessionz. We recommend "Filesystem" or "DataBowl".',
    ],
    'cache' => [
        'title' => 'Cache',
        'driver' => 'Cache Driver',
        'driver_help' => 'Da driver used fur cachin. We recommend "Filesystem".',
        'fields' => [
            'host' => 'Redis Host',
            'host_help' => 'Da host of ur redis server. Make sure it iz reachable.',
            'port' => 'Redis Port',
            'port_help' => 'Da port of ur redis server.',
            'username' => 'Redis Usercat',
            'username_help' => 'Da name of ur redis user. Can be empty',
            'password' => 'Redis Secret Paw',
            'password_help' => 'Da secret paw fur ur redis user. Can be empty.',
        ],
        'exception' => 'Redis connection faled',
    ],
    'queue' => [
        'title' => 'Queue',
        'driver' => 'Queue Driver',
        'driver_help' => 'Da driver used fur handling queuez. We recommend "DataBowl".',
        'fields' => [
            'done' => 'I haz done both stepz below.',
            'done_validation' => 'U need to do both stepz before continuin!',
            'crontab' => 'Run da following command to set up ur crontab. Note dat <code>www-data</code> iz ur webserver user. On sum systemz dis username might be different!',
            'service' => 'To setup da queue worker service u simply haz to run da following command.',
        ],
    ],
    'exceptions' => [
        'write_env' => 'Could not write to .env file',
        'migration' => 'Could not run migrationz',
        'create_user' => 'Could not create catmin user',
    ],
    'finish' => 'Finish',
];
