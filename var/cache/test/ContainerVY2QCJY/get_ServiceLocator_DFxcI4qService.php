<?php

namespace ContainerVY2QCJY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DFxcI4qService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.dFxcI4q' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dFxcI4q'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'fc' => ['privates', 'App\\Repository\\FichierClientRepository', 'getFichierClientRepositoryService', true],
            'fichierdemande' => ['privates', 'App\\Repository\\FichierDemandeRepository', 'getFichierDemandeRepositoryService', true],
            'infoclientrepo' => ['privates', 'App\\Repository\\InfoClientRepository', 'getInfoClientRepositoryService', true],
        ], [
            'entityManager' => '?',
            'fc' => 'App\\Repository\\FichierClientRepository',
            'fichierdemande' => 'App\\Repository\\FichierDemandeRepository',
            'infoclientrepo' => 'App\\Repository\\InfoClientRepository',
        ]);
    }
}
