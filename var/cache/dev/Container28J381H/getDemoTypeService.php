<?php

namespace Container28J381H;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDemoTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\DemoType' shared autowired service.
     *
     * @return \App\Form\DemoType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/DemoType.php';

        return $container->privates['App\\Form\\DemoType'] = new \App\Form\DemoType();
    }
}
