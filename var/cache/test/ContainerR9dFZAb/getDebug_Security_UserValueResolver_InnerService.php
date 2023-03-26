<?php

namespace ContainerR9dFZAb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_UserValueResolver_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.security.user_value_resolver.inner' shared service.
     *
     * @return \Symfony\Component\Security\Http\Controller\UserValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Controller/UserValueResolver.php';

        return $container->privates['debug.security.user_value_resolver.inner'] = new \Symfony\Component\Security\Http\Controller\UserValueResolver(($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()));
    }
}
