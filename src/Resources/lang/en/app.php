<?php


return [
    'admin'=> [
        'title' => 'Package ServiceIT Admin Title',
        'content'=>  'Package ServiceIT Admin Content',
        'datagrid'=> [
            'id' => 'ID',
            'name' => 'Name',
            'price' => 'Price',
            'duration' => 'Duration',
            'status' => 'Status',
            "request"=>['customer'=>"Customer"],
            'service_it'=> 'Service',
            'order_id' => 'Order',
            'notes' => 'Notes',
            'delivery_date' => 'Delivery Date'
        ],
        'create_service'=> 'Create New Server'
    ],
    'shop' => [
         'title' => 'Package ServiceIT Title',
        'content'=>  'Package ServiceIT Content',
        'request_service' => 'Request Service Now',
        'load_more' => 'Load More Service'
    ],
    'system' => [

    ]
];
