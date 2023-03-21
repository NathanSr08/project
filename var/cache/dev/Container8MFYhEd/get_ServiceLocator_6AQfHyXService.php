<?php

namespace Container8MFYhEd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_6AQfHyXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.6AQfHyX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.6AQfHyX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'fichierdemande' => ['privates', 'App\\Repository\\FichierDemandeRepository', 'getFichierDemandeRepositoryService', true],
        ], [
            'entityManager' => '?',
            'fichierdemande' => 'App\\Repository\\FichierDemandeRepository',
        ]);
    }
}
