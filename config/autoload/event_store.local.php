<?php
/**
 * This file is part of the prooph/event-store-http-api.
 * (c) 2016-2016 prooph software GmbH <contact@prooph.de>
 * (c) 2016-2016 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\EventStore\Http\Api;

use Prooph\EventStore\Adapter\PDO\PDOEventStoreAdapter;

return [
    'prooph' => [
        'event_store' => [
            'default' => [
                'adapter' => [
                    'type' => PDOEventStoreAdapter::class,
                    'options' => [
                        'connection_options' => [
                            'driver' => 'pdo_mysql',
                            'user' => 'root',
                            'password' => 'root',
                            'host' => '127.0.0.1',
                            'dbname' => 'event_store_http_api',
                            'port' => 3306,
                        ],
                    ],
                ],
            ],
        ],
    ],
];
