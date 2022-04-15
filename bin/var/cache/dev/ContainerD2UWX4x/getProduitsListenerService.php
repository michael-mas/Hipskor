<?php

namespace ContainerD2UWX4x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProduitsListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventListener\ProduitsListener' shared autowired service.
     *
     * @return \App\EventListener\ProduitsListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ProduitsListener.php';

        return $container->privates['App\\EventListener\\ProduitsListener'] = new \App\EventListener\ProduitsListener(($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()));
    }
}
