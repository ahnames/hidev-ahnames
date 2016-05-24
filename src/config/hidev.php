<?php

/*
 * AHnames vendor configuration for HiDev
 *
 * @link      https://github.com/ahnames/hidev-vendor
 * @package   hidev-vendor
 * @license   proprietary
 * @copyright Copyright (c) 2015-2016, AHnames (https://ahnames.com/)
 */

return [
    'components' => [
        'config' => [
            'include' => [
                '@ahnames/hidev/vendor/config/goals.yml',
            ],
            'views' => [
                '@ahnames/hidev/vendor/views',
            ],
        ],
    ],
];
