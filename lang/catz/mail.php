<?php

return [
    'greeting' => 'Meow :name!',

    'account_created' => [
        'body' => 'U iz receiving dis email because an account haz been created fur u on :app.',
        'username' => 'Usercat: :username',
        'email' => 'Email: :email',
        'action' => 'Setup Ur Account',
    ],

    'added_to_server' => [
        'body' => 'U haz been added az a subcat fur da following server, allowing u certain control over da server.',
        'server_name' => 'Server Namez: :name',
        'action' => 'Visit Cat Server',
    ],

    'removed_from_server' => [
        'body' => 'U haz been removed az a subcat fur da following server.',
        'server_name' => 'Server Namez: :name',
        'action' => 'Visit Cat Panel',
    ],

    'server_installed' => [
        'body' => 'Ur cat server haz finished installing and iz now ready fur u to use, meow!',
        'server_name' => 'Server Namez: :name',
        'action' => 'Login and Begin Zoomies',
    ],

    'backup_completed' => [
        'body_success' => 'Da backup waz created successfully, treat time!',
        'body_failed' => 'Da backup creation faled, sad cat.',
        'backup_name' => 'Backup Namez: :name',
        'server_name' => 'Server Namez: :name',
        'action' => 'View Backupz',
    ],

    'mail_tested' => [
        'subject' => 'Cat Panel Test Meowsage',
        'body' => 'Dis iz a test of da Cat Panel mail system. Ur good to go, meow!',
    ],
];
