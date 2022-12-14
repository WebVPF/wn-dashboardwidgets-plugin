<?php

return [
    'plugin' => [
        'name' => 'Віджети дашборд',
        'desc' => 'Віджети для головної сторінки бекенду.',
    ],
    'sysinfo' => [
        'server' => 'Сервер',
        'server_addr' => 'IP-адреса сервера',
        'php' => 'PHP',
        'laravel' => 'Laravel',
        'twig' => 'Twig',
        'db' => 'База даних',
        'prop' => [
            'title_default' => 'System Info',
            'server_title' => 'Сервер додатка',
            'server_desc' => 'Показувати інформацію про сервер додатка',
            'server_addr_title' => 'IP-адреса сервера',
            'server_addr_desc' => 'Показувати IP-адресу сервера',
            'php_title' => 'Версія PHP',
            'php_desc' => 'Показувати версію PHP',
            'laravel_title' => 'Версія Laravel',
            'laravel_desc' => 'Показувати версію фреймворка Laravel',
            'twig_title' => 'Версія Twig',
            'twig_desc' => 'Показувати версію шаблонізатора Twig',
            'db_title' => 'Система бази даних',
            'db_desc' => 'Показувати систему бази даних',
        ],
    ],
    'cacheinfo' => [
        'btn_clear' => 'Очистити',
        'request_confirm' => 'Ви дійсно хочете очистити кеш додатку?',
        'flash_success' => 'Кеш додатку успішно очищено',
        'units' => [
            'b' => 'Б',
            'kb' => 'КБ',
            'mb' => 'МБ',
            'gb' => 'ГБ',
            'tb' => 'ТБ',
            'pb' => 'ПБ',
        ],
        'prop' => [
            'default_widget_title' => 'Кеш додатку',
            'diameter' => 'Розмір діаграми',
            'diameter_desc' => 'Діаметр діаграми у пікселях',
            'invalid_diameter' => 'Значення розміру діаграми має бути числом.',
        ],
    ],
];
