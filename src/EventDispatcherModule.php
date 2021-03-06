<?php
namespace Corley\EventDispatcherModule;

use Corley\Modular\Module\ModuleInterface;
use Zend\ServiceManager\ServiceManager;

class EventDispatcherModule implements ModuleInterface
{
    private $options;

    public function __construct(array $options = [])
    {
        $this->options = array_replace_recursive([
            'name' => 'default',
            'handlers' => [],
        ], $options);
    }

    public function getContainer()
    {
        $conf = include __DIR__ . '/../configs/services.php';

        $serviceManager = new ServiceManager();
        $serviceManager->configure($conf["services"]);

        return $serviceManager;
    }
}
