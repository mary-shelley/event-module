<?php
namespace Corley\EventDispatcherModule;

use PHPUnit\Framework\TestCase;
use Psr\Container\ContainerInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;

class EventDispatcherModuleTest extends TestCase
{
    public function testCreateBaseEventDispatcherService()
    {
        $module = new EventDispatcherModule();
        $container = $module->getContainer();
        $this->assertInstanceOf(ContainerInterface::class, $container);
        $this->assertTrue($container->has('event'));

        $event = $container->get('event');

        $this->assertInstanceOf(EventDispatcher::class, $event);
    }
}
