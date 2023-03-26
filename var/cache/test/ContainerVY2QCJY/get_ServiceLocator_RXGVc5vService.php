<?php

namespace ContainerVY2QCJY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RXGVc5vService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.rXGVc5v' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.rXGVc5v'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'fichierdemande' => ['privates', 'App\\Repository\\FichierDemandeRepository', 'getFichierDemandeRepositoryService', true],
            'infoclient' => ['privates', 'App\\Repository\\InfoClientRepository', 'getInfoClientRepositoryService', true],
        ], [
            'entityManager' => '?',
            'fichierdemande' => 'App\\Repository\\FichierDemandeRepository',
            'infoclient' => 'App\\Repository\\InfoClientRepository',
        ]);
    }
}
