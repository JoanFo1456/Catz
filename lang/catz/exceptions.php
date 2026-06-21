<?php

return [
    'daemon_connection_failed' => 'There was an exception while attempting to communicate with the daemon resulting in a HTTP/:code response code. This exception has been logged.',
    'node' => [
        'servers_attached' => 'Cat tree must haz no serverz before u can delete it.',
        'error_connecting' => 'Could not connect to :node',
        'daemon_off_config_updated' => 'Da daemon config <strong>haz been updated</strong>, but there waz an error tryin to auto-update da config file on da Daemon. U will need to manually update config.yml fur da daemon to apply da changez.',
    ],
    'allocations' => [
        'server_using' => 'A server iz currently usin dis allocation. Allocation can only be deleted if no server iz usin it.',
        'too_many_ports' => 'Adding more than 1000 portz in a single range at once iz not supported.',
        'invalid_mapping' => 'Da mapping provided fur :port waz invalid and could not be processed.',
        'cidr_out_of_range' => 'CIDR notation only allowz maskz between /25 and /32.',
        'port_out_of_range' => 'Portz must be greater than or equal to 1024 and less than or equal to 65535.',
    ],
    'egg' => [
        'delete_has_servers' => 'An Egg wif active serverz cannot be deleted from da Panel.',
        'invalid_copy_id' => 'Da Egg selected fur copyin a script either doez not exist, or iz copyin a script itself.',
        'has_children' => 'Dis Egg iz a parent to one or more other Eggz. Please delete dose Eggz before deletin dis one.',
    ],
    'variables' => [
        'env_not_unique' => 'Da environment variable :name must be unique to dis Egg.',
        'reserved_name' => 'Da environment variable :name iz protected and cannot be assigned to a variable.',
        'bad_validation_rule' => 'Da validation rule ":rule" iz not a valid rule fur dis application.',
    ],
    'importer' => [
        'json_error' => 'There waz an error while trying to parse da JSON file: :error.',
        'file_error' => 'Da JSON file provided waz not valid.',
        'invalid_json_provided' => 'Da JSON file provided iz not in a format dat can be recognized.',
    ],
    'subusers' => [
        'editing_self' => 'Editing ur own subuser account iz not permitted.',
        'user_is_owner' => 'U cannot add da server owner az a subuser fur dis server.',
        'subuser_exists' => 'A user wif dat email iz already a subuser fur dis server.',
    ],
    'databases' => [
        'delete_has_databases' => 'Cannot delete a database host dat haz active databasez linked to it.',
    ],
    'tasks' => [
        'chain_interval_too_long' => 'Da maximum interval time fur a chained task iz 15 minutez.',
    ],
    'locations' => [
        'has_nodes' => 'Cannot delete a location dat haz active cat treez attached to it.',
    ],
    'users' => [
        'is_self' => 'Cannot delete ur own user account.',
        'has_servers' => 'Cannot delete a user wif active serverz. Please delete their serverz before continuin.',
        'node_revocation_failed' => 'Failed to revoke keyz on <a href=":link">Cat Tree #:node</a>. :error',
    ],
    'deployment' => [
        'no_viable_nodes' => 'No cat treez satisfyin da requirementz fur auto-deploy could be found.',
        'no_viable_allocations' => 'No allocationz satisfyin da requirementz fur auto-deploy were found.',
    ],
    'api' => [
        'resource_not_found' => 'Da requested resource doez not exist on dis server.',
    ],
    'mount' => [
        'servers_attached' => 'A mount must haz no serverz attached before it can be deleted.',
    ],
    'server' => [
        'marked_as_failed' => 'Dis server haz not yet finished its installation process, please try again later.',
    ],
];
