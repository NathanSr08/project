<?php

namespace ContainerR9dFZAb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTuestconnecterControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\TuestconnecterController' shared autowired service.
     *
     * @return \App\Controller\TuestconnecterController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TuestconnecterController.php';

        $container->services['App\\Controller\\TuestconnecterController'] = $instance = new \App\Controller\TuestconnecterController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\TuestconnecterController', $container));

        return $instance;
    }
}
