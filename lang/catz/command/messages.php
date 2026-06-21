<?php

return [
    'user' => [
        'search_users' => 'Enter a Username, User ID, or Email Addrezz',
        'select_search_user' => 'ID of user to delete (Enter \'0\' to re-search)',
        'deleted' => 'User successfully deleted from da Panel.',
        'confirm_delete' => 'Are u sure u want to delete dis user from da Panel?',
        'no_users_found' => 'No users were found fur da search term provided.',
        'multiple_found' => 'Multiple accountz were found fur da user provided, unable to delete a user because of da --no-interaction flag.',
        'ask_admin' => 'Iz dis user a catmin?',
        'ask_email' => 'Email Addrezz',
        'ask_username' => 'Usercat',
        'ask_password' => 'Secret Paw',
        'ask_password_tip' => 'If u would like to create an account wif a random password emailed to da user, re-run dis command (CTRL+C) and pass da `--no-password` flag.',
        'ask_password_help' => 'Passwordz must be at least 8 characterz long and contain at least one capital letter and number.',
        '2fa_help_text' => 'Dis command will disable 2-factor authentication fur a user\'s account if it iz enabled. Dis should only be used az an account recovery command if da user iz locked out of their account. If dis iz not wat u wanted to do, press CTRL+C to exit dis process.',
        '2fa_disabled' => '2-Factor authentication haz been disabled fur :email.',
    ],
    'schedule' => [
        'output_line' => 'Dispatching job fur first task in `:schedule` (:id).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Deleting service backup file :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Rebuild request fur ":name" (#:id) on cat tree ":node" failed wif error: :message',
        'reinstall' => [
            'failed' => 'Reinstall request fur ":name" (#:id) on cat tree ":node" failed wif error: :message',
            'confirm' => 'U are about to reinstall against a group of serverz. Do u wish to continue?',
        ],
        'power' => [
            'confirm' => 'U are about to perform a :action against :count serverz. Do u wish to continue?',
            'action_failed' => 'Power action request fur ":name" (#:id) on cat tree ":node" failed wif error: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP Host (e.g. smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP Port',
            'ask_smtp_username' => 'SMTP Usercat',
            'ask_smtp_password' => 'SMTP Secret Paw',
            'ask_mailgun_domain' => 'Mailgun Domain',
            'ask_mailgun_endpoint' => 'Mailgun Endpoint',
            'ask_mailgun_secret' => 'Mailgun Secret',
            'ask_mandrill_secret' => 'Mandrill Secret',
            'ask_postmark_username' => 'Postmark API Key',
            'ask_driver' => 'Which driver should be used fur sending emailz?',
            'ask_mail_from' => 'Email addrezz emailz should originate from',
            'ask_mail_name' => 'Name dat emailz should appear from',
            'ask_encryption' => 'Encryption method to use',
        ],
    ],
];
