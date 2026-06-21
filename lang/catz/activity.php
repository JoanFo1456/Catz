<?php

/**
 * Contains all of the translation strings for different activity log
 * events. These should be keyed by the value in front of the colon (:)
 * in the event name. If there is no colon present, they should live at
 * the top level.
 */
return [
    'auth' => [
        'fail' => 'Failed log in',
        'success' => 'Logged in',
        'password-reset' => 'Password reset (paws)',
        'checkpoint' => 'Two-factor authentication requested',
        'recovery-token' => 'Used two-factor recovery ',
        'token' => 'Solved two-factor challenge',
        'ip-blocked' => 'Sus purrson <b>:identifier</b>',
        'sftp' => [
            'fail' => 'Failed SFTP log in',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Changed email from <b>:old</b> to <b>:new</b>',
            'password-changed' => 'Changed password',
        ],
        'api-key' => [
            'create' => 'Created new API key <b>:identifier</b>',
            'delete' => 'Deleted API key <b>:identifier</b>',
        ],
        'ssh-key' => [
            'create' => 'Added SSH key <b>:fingerprint</b> to account',
            'delete' => 'Removed SSH key <b>:fingerprint</b> from account',
        ],
        'two-factor' => [
            'create' => 'Enabled two-factor auth',
            'delete' => 'Disabled two-factor auth',
        ],
    ],
    'server' => [
        'console' => [
            'command' => 'Executed "<b>:command</b>" on the server',
        ],
        'power' => [
            'start' => 'Started the server',
            'stop' => 'Stopped the server',
            'restart' => 'Restarted the server',
            'kill' => 'Killed the server process',
        ],
        'backup' => [
            'download' => 'Downloaded the <b>:name</b> backup',
            'delete' => 'Deleted the <b>:name</b> backup',
            'restore' => 'Restored the <b>:name</b> backup (deleted files: <b>:truncate</b>)',
            'restore-complete' => 'Completed restoration of the <b>:name</b> backup',
            'restore-failed' => 'Failed to complete restoration of the <b>:name</b> backup',
            'start' => 'Started a new backup <b>:name</b>',
            'complete' => 'Marked the <b>:name</b> backup as complete',
            'fail' => 'Marked the <b>:name</b> backup as failed',
            'lock' => 'Locked the <b>:name</b> backup',
            'unlock' => 'Unlocked the <b>:name</b> backup',
        ],
    ],
    // ...rest of the file...
];
