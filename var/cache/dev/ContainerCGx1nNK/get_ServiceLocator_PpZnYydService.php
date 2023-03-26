<?php

namespace ContainerCGx1nNK;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PpZnYydService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.PpZnYyd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.PpZnYyd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'file' => ['privates', '.errored..service_locator.PpZnYyd.App\\Entity\\FichierClient', NULL, 'Cannot autowire service ".service_locator.PpZnYyd": it references class "App\\Entity\\FichierClient" but no such service exists.'],
            'infoclientrepo' => ['privates', 'App\\Repository\\InfoClientRepository', 'getInfoClientRepositoryService', true],
        ], [
            'file' => 'App\\Entity\\FichierClient',
            'infoclientrepo' => 'App\\Repository\\InfoClientRepository',
        ]);
    }
}
