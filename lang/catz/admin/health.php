<?php

return [
    'title' => 'Healfy Cat',
    'results_refreshed' => 'Healfy checkz updated! 🐾',
    'checked' => 'Checkd resultz from :time',
    'refresh' => 'Refresh (lick paw)',
    'results' => [
        'cache' => [
            'label' => 'Catche',
            'ok' => 'All gud!',
            'failed_retrieve' => 'No can get da catche. Plz try again, hooman.',
            'failed' => 'Uh oh, catche haz a hairball: :error',
        ],
        'database' => [
            'label' => 'DataBowl',
            'ok' => 'All kibble in place!',
            'failed' => 'No can reach da DataBowl: :error',
        ],
        'debugmode' => [
            'label' => 'Deboog Mode',
            'ok' => 'Deboog iz off, nap time.',
            'failed' => 'Deboog mode wuz :actual, shud be :expected. Oopsie!',
        ],
        'environment' => [
            'label' => 'Environmint',
            'ok' => 'All smellz fine, set to :actual',
            'failed' => 'Environmint iz :actual, shud be :expected',
        ],
        'nodeversions' => [
            'label' => 'Cat Tree Vershuns',
            'ok' => 'All cat trees up-to-date!',
            'failed' => ':outdated/:all cat trees iz old',
            'no_nodes_created' => 'No cat trees yet',
            'no_nodes' => 'No cat trees',
            'all_up_to_date' => 'All up-to-date, purrfect!',
            'outdated' => ':outdated/:all needz updatez',
        ],
        'panelversion' => [
            'label' => 'Panel Vershun',
            'ok' => 'Panel iz up-to-date, meow!',
            'failed' => 'Panel iz :currentVersion, but new iz :latestVersion',
            'up_to_date' => 'Up to date, yay!',
            'outdated' => 'Outdated, needz moar catnip',
        ],
        'schedule' => [
            'label' => 'Schedyool',
            'ok' => 'All on time, like a cat nap',
            'failed_last_ran' => 'Last schedyool wuz :time min ago, too long!',
            'failed_not_ran' => 'Schedyool not run yet. Cat still sleepin.',
        ],
        'useddiskspace' => [
            'label' => 'Cat bed (disk usage)',
        ],
    ],
    'checks' => [
        'successful' => 'All gud! 🐱',
        'failed' => 'Nope, not gud.',
    ],
];
