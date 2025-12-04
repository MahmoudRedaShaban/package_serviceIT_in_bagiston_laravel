<?php


return [
        [
            'key' => 'serviceit',
            'name' => 'Setting ServiceIT',
            'info' => 'Setting ServiceIT',
            'sort' => 1,
        ],
        ['key' => 'serviceit.settings',
        'name' => 'Setting ServiceIT -',
        'sort' => 2,
        'fields' => [
            [
                'name' => 'enable_return_name',
                'title' => 'Name ',
                'type' => 'text'
            ],
            [
                'name' => 'max_return_email',
                'title' => 'Email',
                'type' => 'text',
                'validation' => 'required_if:enable_return_name,1|numeric|min:1',
                'depends' => 'enable_return_name:1'
            ],
            [
                'name' => 'max_return_color',
                'title' => 'COLOR',
                'type' => 'color',
                'default' => '#007bff',
                'validation' => 'required_if:enable_return_name,1|numeric|min:1',
                'depends' => 'enable_return_name:1'
            ]
        ]]
];
