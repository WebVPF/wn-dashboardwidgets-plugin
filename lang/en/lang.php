<?php

return [
    'plugin' => [
        'name' => 'Виджеты дашборд',
        'desc' => 'Виджеты для главной страницы бэкенда.',
    ],
    'sysinfo' => [
        'server' => 'Server',
        'server_addr' => 'Server IP',
        'php' => 'PHP',
        'laravel' => 'Laravel',
        'twig' => 'Twig',
        'db' => 'Database',
        'prop' => [
            'title_default' => 'System Info',
            'server_title' => 'Application server',
            'server_desc' => 'Show application server information',
            'server_addr_title' => 'Server IP address',
            'server_addr_desc' => 'Show server IP address',
            'php_title' => 'PHP version',
            'php_desc' => 'Show PHP Version',
            'laravel_title' => 'Laravel version',
            'laravel_desc' => 'Show Laravel framework version',
            'twig_title' => 'Twig version',
            'twig_desc' => 'Показывать версию шаблонизатора Twig',
            'db_title' => 'Database System',
            'db_desc' => 'Show database system',
        ],
    ],
    'cacheinfo' => [
        'btn_clear' => 'Clear',
        'request_confirm' => 'Are you sure you want to clear the Application Cache?',
        'flash_success' => 'Application cache cleared successfully',
        'units' => [
            'b' => 'B',
            'kb' => 'KB',
            'mb' => 'MB',
            'gb' => 'GB',
            'tb' => 'TB',
            'pb' => 'PB',
        ],
        'prop' => [
            'default_widget_title' => 'Application Cache',
            'diameter' => 'Chart size',
            'diameter_desc' => 'Chart diameter in pixels',
            'invalid_diameter' => 'The chart size value must be a number.',
        ],
    ],
];
