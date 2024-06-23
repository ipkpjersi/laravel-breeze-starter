<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;
use Monolog\Processor\PsrLogMessageProcessor;

return [

    'channels' => [
        'additional_log' => [
            'driver' => 'daily',
            'path' => storage_path('logs/additional_log.log'),
            'level' => 'info',
            'days' => 365,
        ],
    ],

];
