<?php

namespace ContainerL99j3vv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFichierClientRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\FichierClientRepository' shared autowired service.
     *
     * @return \App\Repository\FichierClientRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\FichierClientRepository'] = new \App\Repository\FichierClientRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}