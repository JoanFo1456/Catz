

<?php

return [
    'title' => 'Bakupz',
    'empty' => 'No bakupz yet. Dis folder iz as empty as mah food bowl! Make sum bakupz fur safety noms!',
    'size' => 'How Big Dis?',
    'created_at' => 'When Dis Made',
    'status' => 'Howz it doin?',
    'is_locked' => 'Locked? (no touchy!)',
    'backup_status' => [
        'in_progress' => 'Bakkin up... paws crossed!',
        'successful' => 'Bakupz safe! Much wow!',
        'failed' => 'Uh oh, bakupz go splat :(',
    ],
    'actions' => [
        'create' => [
            'title' => 'Make New Bakup',
            'limit' => 'Too many bakupz! Slow ur paws, speedycat.',
            'created' => 'Bakup ":name" iz ready for nap.',
            'notification_success' => 'Bakupz made! U iz safe now.',
            'notification_fail' => 'Bakupz fail! No cheezburger for dis.',
            'name' => 'Bakup Name (make it cute)',
            'ignored' => 'Ignored Filez (no nomz)',
            'locked' => 'Locked? (guarded by kitteh)',
            'lock_helper' => 'No delete unless kitteh sayz ok.',
        ],
        'lock' => [
            'lock' => 'Lock it tight!',
            'unlock' => 'Let it goooo',
        ],
        'download' => 'Grab Bakup (nom nom)',
        'restore' => [
            'title' => 'Bring Bakup Back',
            'helper' => 'Server go nap, bakup come back. No play til done.',
            'delete_all' => 'Delete all filez first? (scary!)',
            'notification_started' => 'Bakup magic in progress...',
            'notification_success' => 'Bakupz restored! Much happy.',
            'notification_fail' => 'Bakupz restore go splat.',
            'notification_fail_body_1' => 'Server iz not ready for bakup magic.',
            'notification_fail_body_2' => 'Dis bakup not ready: still snoozin or failed.',
        ],
        'delete' => [
            'title' => 'Delete Bakup (nooo!)',
            'description' => 'Delete bakup :backup? U sure, hooman?',
            'notification_success' => 'Bakupz gone! Hope u no need it.',
            'notification_fail' => 'Bakupz not gone. Try again, maybe with more meow.',
            'notification_fail_body' => 'Node iz not listenin. Try again after nap.',
        ],
    ],
];
