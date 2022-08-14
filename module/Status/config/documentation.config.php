<?php
return [
    'Status\\V1\\Rpc\\Ping\\Controller' => [
        'description' => 'Ping the API',
        'GET' => [
            'description' => 'Ping the API for acknowledgement',
            'response' => '{
"ack":"Acknowledge request with a timestamp"
}',
        ],
    ],
    'Status\\V1\\Rest\\Status\\Controller' => [
        'description' => 'Create, manipulate, and retrieve status messages',
        'collection' => [
            'description' => 'Manipulate lists of status messages',
            'GET' => [
                'description' => 'Retrieve a paginated list of status messages',
            ],
            'POST' => [
                'description' => 'Create a new status messages',
            ],
        ],
        'entity' => [
            'description' => 'Manipulate and retrieve individual status messages',
            'GET' => [
                'description' => 'Retrieve a status message',
            ],
            'PATCH' => [
                'description' => 'Update a status message',
            ],
            'PUT' => [
                'description' => 'Replace a status message',
            ],
            'DELETE' => [
                'description' => 'Delete a status message',
            ],
        ],
    ],
];
