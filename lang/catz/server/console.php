<?php

return [
    'title' => 'Cat Console',
    'command' => 'Type a order...',
    'command_blocked' => 'Server iz Napping...',
    'command_blocked_title' => "Can't send command when server iz Napping",
    'open_in_admin' => 'Open in Catmin',
    'power_actions' => [
        'start' => 'Wake Up',
        'stop' => 'Nap Time',
        'restart' => 'Cat Stretch',
        'kill' => 'Cat Pounce',
        'kill_tooltip' => 'Dis can break stuff or lose ur cat data!',
    ],
    'labels' => [
        'cpu' => 'Cat Brain (CPU)',
        'memory' => 'Cat Memory',
        'network' => 'Cat Net',
        'disk' => 'Cat Disk',
        'name' => 'Cat Name',
        'status' => 'Cat Status',
        'address' => 'Cat Addrezz',
        'unavailable' => 'Not Here',
    ],
    'status' => [
        'created' => 'Kitten Born',
        'starting' => 'Wakin Up',
        'running' => 'Zoomiez',
        'restarting' => 'Cat Stretchin',
        'exited' => 'Left da Room',
        'paused' => 'Cat Pause',
        'dead' => 'Catnap Forever',
        'removing' => 'Cat Gone',
        'stopping' => 'Goin Nap',
        'offline' => 'Napping',
        'missing' => 'Lost Cat',
    ],
    'websocket_error' => [
        'title' => 'Could not connect to da websocket!',
        'body' => 'Check ur browser console fur more detailz.',
    ],
];
