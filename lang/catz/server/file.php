
<?php

return [
    'title' => 'Filez & Folderz',
    'name' => 'File Ñame',
    'size' => 'How Big iz it?',
    'modified_at' => 'Last Scratched',
    'actions' => [
        'open' => 'Open Dis, peek inside',
        'download' => 'Grab Dis File, nom nom',
        'copy' => [
            'title' => 'Copycat',
            'notification' => 'File cloned! Copycat mode ON',
        ],
        'upload' => [
            'title' => 'Send Filez Up like a cat on a shelf',
            'from_files' => 'Upload from ur stash',
            'from_url' => 'Fetch from da CatNet',
            'url' => 'Where iz da file? URLz',
        ],
        'rename' => [
            'title' => 'New fur who dis?',
            'file_name' => 'New Name, make it pawsome',
            'notification' => 'File got a new name! So fancy',
        ],
        'move' => [
            'title' => 'Move Dis, cat migration',
            'directory' => 'Which folder, cat tree',
            'directory_hint' => 'Type new folder or just drag it like a boss',
            'new_location' => 'New Spot, find a sunny place',
            'new_location_hint' => 'Type new spot for file or folder or just meow at it',
            'notification' => 'File moved! Zoomies!',
            'bulk_notification' => ':count filez zoomed to :directory',
        ],
        'permissions' => [
            'title' => 'Who Can Haz Dis?',
            'read' => 'Can Read, peekaboo',
            'write' => 'Can Write, leave pawprints',
            'execute' => 'Can Run, chase mouse',
            'owner' => 'Big Cat, owner',
            'group' => 'Cat Crew, group',
            'public' => 'All Catz, public',
            'notification' => 'Permissions changed to :mode, meow!',
        ],
        'archive' => [
            'title' => 'Bundle Up',
            'archive_name' => 'Bundle Name, snuggle up',
            'notification' => 'All bundled! Nap time',
        ],
        'unarchive' => [
            'title' => 'Unbundle, let the catz out',
            'notification' => 'Bundle opened! Catz everywhere',
        ],
        'new_file' => [
            'title' => 'Make New File, fresh yarn',
            'file_name' => 'File Name, make it cute',
            'syntax' => 'What kind of file, syntax',
            'create' => 'Make It!',
        ],
        'new_folder' => [
            'title' => 'New Hidey Hole',
            'folder_name' => 'Secret lair ñame',
        ],
        'global_search' => [
            'title' => 'Find Stuff, cat search',
            'search_term' => 'What u lookin for',
            'search_term_placeholder' => 'Type to sniff out filez, ex. *.txt',
            'search' => 'Go Find It!',
        ],
        'delete' => [
            'notification' => 'File gone! Poof',
            'bulk_notification' => ':count filez sent to da void',
        ],
        'edit' => [
            'title' => 'Editing: :file, careful hooman!',
            'save_close' => 'Save & Close, nap time',
            'save' => 'Save It! Good job',
            'cancel' => 'Nope, go back',
            'notification' => 'File saved! Treat time',
        ],
        'nested_search' => [
            'title' => 'Cat Search',
            'search_term' => 'Sniff fur wat',
            'search_term_placeholder' => 'Enter a search term, ex. *.txt',
            'search' => 'Go Sniff!',
            'search_for_term' => 'Sniff fur :term',
        ],
    ],
    'alerts' => [
        'file_too_large' => [
            'title' => '<code>:name</code> iz too chonky!',
            'body' => 'Max iz :max',
        ],
        'file_not_found' => [
            'title' => '<code>:name</code> runned away!',
        ],
        'file_not_editable' => [
            'title' => '<code>:name</code> iz a folder, not a file',
        ],
        'file_already_exists' => [
            'title' => '<code>:name</code> already here!',
        ],
        'files_node_error' => [
            'title' => 'Could not load filez! Check da cat tree',
        ],
        'pelicanignore' => [
            'title' => 'U iz editing a <code>.pelicanignore</code> file!',
            'body' => 'Filez listed here get excluded from backupz. Wildcardz work wif asterisk (<code>*</code>).<br>Negate a rule wif exclamation (<code>!</code>).',
        ],
    ],
];
