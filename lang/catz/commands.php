<?php

return [
    'appsettings' => [
        'comment' => [
            'author' => 'Provide the email address that eggz exported by dis Panel should be from. Dis should be a valid email address.',
            'url' => 'Da application URL MUST begin wif https:// or http:// depending on if u iz using SSL or not. If u do not include da scheme ur emailz and other content will link to da wrong location.',
            'timezone' => "Da timezone should match one of PHP's supported timezonez. If u iz unsure, please reference https://php.net/manual/en/timezones.php.",
        ],
        'redis' => [
            'note' => "U've selected da Redis driver fur one or more optionz, please provide valid connection info below. In most casez u can use da defaultz unless u haz modified ur setup.",
            'comment' => 'By default a Redis server instance haz username default and no password az it iz running locally. If dat iz da case, just hit enter without entering a value.',
            'confirm' => 'It seemz a :field iz already defined fur Redis, would u like to change it?',
        ],
    ],
    'database_settings' => [
        'DB_HOST_note' => 'It iz highly recommended to not use "localhost" az ur database host az we haz seen frequent socket connection issuz. If u want to use a local connection u should use "127.0.0.1".',
        'DB_USERNAME_note' => "Using da root account fur MySQL connectionz iz not only frowned upon, it iz also not allowed by dis application. U will need to create a MySQL user fur dis software.",
        'DB_PASSWORD_note' => 'It appearz u already haz a MySQL connection password defined, would u like to change it?',
        'DB_error_2' => 'Ur connection credentialz haz NOT been saved. U will need to provide valid connection info before proceeding.',
        'go_back' => 'Go back and try again',
    ],
    'make_node' => [
        'name' => 'Enter a short identifier to distinguish dis cat tree from otherz',
        'description' => 'Enter a deskripshun to identify da cat tree',
        'scheme' => 'Please enter https fur SSL or http fur a non-ssl connection',
        'fqdn' => 'Enter a domain name (e.g node.example.com) fur connecting to da daemon. An IP address may only be used if u iz not using SSL fur dis cat tree',
        'public' => 'Should dis cat tree be public? Setting to private will prevent auto-deploy to dis cat tree.',
        'behind_proxy' => 'Iz ur FQDN behind a proxy?',
        'maintenance_mode' => 'Should catnap mode be enabled?',
        'memory' => 'Enter da maximum amount of memory',
        'memory_overallocate' => 'Enter da amount of memory to over allocate by, -1 will disable checkin and 0 will prevent creatin new serverz',
        'disk' => 'Enter da maximum amount of disk space',
        'disk_overallocate' => 'Enter da amount of disk to over allocate by, -1 will disable checkin and 0 will prevent creatin new serverz',
        'cpu' => 'Enter da maximum amount of cpu',
        'cpu_overallocate' => 'Enter da amount of cpu to over allocate by, -1 will disable checkin and 0 will prevent creatin new serverz',
        'upload_size' => 'Enter da maximum filesize upload',
        'daemonListen' => 'Enter da daemon listenin port',
        'daemonConnect' => 'Enter da daemon connectin port (can be same as listen port)',
        'daemonSFTP' => 'Enter da daemon SFTP listenin port',
        'daemonSFTPAlias' => 'Enter da daemon SFTP alias (can be empty)',
        'daemonBase' => 'Enter da base folder',
        'success' => 'Successfully created a new cat tree wif da name :name and id of :id',
    ],
    'node_config' => [
        'error_not_exist' => 'Da selected cat tree doez not exist.',
        'error_invalid_format' => 'Invalid format specified. Valid optionz are yaml and json.',
    ],
    'key_generate' => [
        'error_already_exist' => 'It appearz u already haz an application encryption key. Continuin will overwrite dat key and cause data corruption fur any existing encrypted data. DO NOT CONTINUE UNLESS U KNOW WAT UR DOIN.',
        'understand' => 'I understand da consequencez of performin dis command and accept all responsibility fur da loss of encrypted data.',
        'continue' => 'Are u sure u wish to continue? Changin da application encryption key WILL CAUSE DATA LOSS.',
    ],
    'schedule' => [
        'process' => [
            'no_tasks' => 'There are no scheduled taskz fur serverz dat need to be run.',
            'error_message' => 'An error waz encountered while processin Schedule: :schedules',
        ],
    ],
];
