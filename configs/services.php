<?php

use Zend\ServiceManager\Factory\InvokableFactory;
use Symfony\Component\EventDispatcher\EventDispatcher;

return [
    'services' => [
        'factories' => [
            EventDispatcher::class => InvokableFactory::class
        ],
        'aliases' => [
            'event_dispatcher' => EventDispatcher::class,
            'event' => 'event_dispatcher',
        ],
    ],
];
