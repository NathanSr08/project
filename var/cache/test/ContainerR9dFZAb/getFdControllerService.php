<?php

namespace ContainerR9dFZAb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFdControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\FdController' shared autowired service.
     *
     * @return \App\Controller\FdController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/FdController.php';

        $container->services['App\\Controller\\FdController'] = $instance = new \App\Controller\FdController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\FdController', $container));

        return $instance;
    }
}
