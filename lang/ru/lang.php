<?php

return [
    'plugin' => [
        'name' => 'Виджеты дашборд',
        'desc' => 'Виджеты для главной страницы бэкенда.',
    ],
    'sysinfo' => [
        'server' => 'Сервер',
        'server_addr' => 'IP-адрес сервера',
        'php' => 'PHP',
        'laravel' => 'Laravel',
        'twig' => 'Twig',
        'db' => 'База данных',
        'prop' => [
            'title_default' => 'System Info',
            'server_title' => 'Сервер приложения',
            'server_desc' => 'Показывать информацию о сервере приложения',
            'server_addr_title' => 'IP-адрес сервера',
            'server_addr_desc' => 'Показывать IP-адрес сервера',
            'php_title' => 'Версия PHP',
            'php_desc' => 'Показывать версию PHP',
            'laravel_title' => 'Версия Laravel',
            'laravel_desc' => 'Показывать версию фреймворка Laravel',
            'twig_title' => 'Версия Twig',
            'twig_desc' => 'Показывать версию шаблонизатора Twig',
            'db_title' => 'Система Базы Данных',
            'db_desc' => 'Показывать систему базы данных',
        ],
    ],
    'cacheinfo' => [
        'btn_clear' => 'Очистить',
        'request_confirm' => 'Вы действительно хотите очистить кэш приложения?',
        'flash_success' => 'Кэш приложения успешно очищен',
        'units' => [
            'b' => 'Б',
            'kb' => 'КБ',
            'mb' => 'МБ',
            'gb' => 'ГБ',
            'tb' => 'ТБ',
            'pb' => 'ПБ',
        ],
        'prop' => [
            'default_widget_title' => 'Кэш приложения',
            'diameter' => 'Размер диаграммы',
            'diameter_desc' => 'Диаметр диаграммы в пикселях',
            'invalid_diameter' => 'Значение размера диаграммы должно быть числом.',
        ],
    ],
];
