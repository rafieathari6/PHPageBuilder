<?php

return [
    /*
     |--------------------------------------------------------------------------
     | Project settings
     |--------------------------------------------------------------------------
     |
     | Settings related to the project in which the PageBuilder is included.
     |
     */
    'project' => [
        'public_folder' => '',
    ],

    /*
     |--------------------------------------------------------------------------
     | Storage settings
     |--------------------------------------------------------------------------
     |
     | Database and file storage settings.
     |
     */
    'storage' => [
        'use_database' => true,
        'database' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => '',
            'username'  => '',
            'password'  => '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
    ],

    /*
     |--------------------------------------------------------------------------
     | WebsiteManager settings
     |--------------------------------------------------------------------------
     |
     | By default a basic WebsiteManager is provided for creating/editing pages.
     |
     */
    'website_manager' => [
        'use_website_manager' => true,
        'website_manager_class' => 'WebsiteManager/WebsiteManager',
    ],

    /*
     |--------------------------------------------------------------------------
     | PageBuilder settings
     |--------------------------------------------------------------------------
     |
     | By default a PageBuilder is provided based on GrapesJS.
     |
     */
    'pagebuilder' => [
        'pagebuilder_class' => 'GrapesJS/PageBuilder',
    ],

    /*
     |--------------------------------------------------------------------------
     | Themes settings
     |--------------------------------------------------------------------------
     |
     | PageBuilder requires a themes folder in which for each theme the individual
     | theme blocks are defined. A theme block is a sub folder in the themes folder
     | containing a view, model (optional) and controller (optional).
     |
     */
    'themes' => [
        'folder' => '',
    ],

    /*
     |--------------------------------------------------------------------------
     | Routing settings
     |--------------------------------------------------------------------------
     |
     | Settings for resolving pages based on the current URI.
     |
     */
    'routing' => [
        'router_class' => 'Router/DatabasePageRouter',
    ],
];