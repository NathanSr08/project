<?php

namespace Container8MFYhEd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BnXpsUtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BnXpsUt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BnXpsUt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ClientController::add_fd' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ClientController::index' => ['privates', '.service_locator.FqwsLjk', 'get_ServiceLocator_FqwsLjkService', true],
            'App\\Controller\\ClientController::view_files_all' => ['privates', '.service_locator.rXGVc5v', 'get_ServiceLocator_RXGVc5vService', true],
            'App\\Controller\\FdController::Dell_fd' => ['privates', '.service_locator.15TUzD3', 'get_ServiceLocator_15TUzD3Service', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SecurityController::View_clientall' => ['privates', '.service_locator.6AQfHyX', 'get_ServiceLocator_6AQfHyXService', true],
            'App\\Controller\\SecurityController::add_file' => ['privates', '.service_locator.dFxcI4q', 'get_ServiceLocator_DFxcI4qService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController::suppfile' => ['privates', '.service_locator.PpZnYyd', 'get_ServiceLocator_PpZnYydService', true],
            'App\\Controller\\SecurityController::view_files_all' => ['privates', '.service_locator.rXGVc5v', 'get_ServiceLocator_RXGVc5vService', true],
            'App\\Controller\\SecurityController::view_files_filtre' => ['privates', '.service_locator.rXGVc5v', 'get_ServiceLocator_RXGVc5vService', true],
            'App\\Controller\\SmsController::index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\SmsController::view' => ['privates', '.service_locator.LH_dvk5', 'get_ServiceLocator_LHDvk5Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\ClientController:add_fd' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\ClientController:index' => ['privates', '.service_locator.FqwsLjk', 'get_ServiceLocator_FqwsLjkService', true],
            'App\\Controller\\ClientController:view_files_all' => ['privates', '.service_locator.rXGVc5v', 'get_ServiceLocator_RXGVc5vService', true],
            'App\\Controller\\FdController:Dell_fd' => ['privates', '.service_locator.15TUzD3', 'get_ServiceLocator_15TUzD3Service', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SecurityController:View_clientall' => ['privates', '.service_locator.6AQfHyX', 'get_ServiceLocator_6AQfHyXService', true],
            'App\\Controller\\SecurityController:add_file' => ['privates', '.service_locator.dFxcI4q', 'get_ServiceLocator_DFxcI4qService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Controller\\SecurityController:suppfile' => ['privates', '.service_locator.PpZnYyd', 'get_ServiceLocator_PpZnYydService', true],
            'App\\Controller\\SecurityController:view_files_all' => ['privates', '.service_locator.rXGVc5v', 'get_ServiceLocator_RXGVc5vService', true],
            'App\\Controller\\SecurityController:view_files_filtre' => ['privates', '.service_locator.rXGVc5v', 'get_ServiceLocator_RXGVc5vService', true],
            'App\\Controller\\SmsController:index' => ['privates', '.service_locator.aKM6MDa', 'get_ServiceLocator_AKM6MDaService', true],
            'App\\Controller\\SmsController:view' => ['privates', '.service_locator.LH_dvk5', 'get_ServiceLocator_LHDvk5Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\ClientController::add_fd' => '?',
            'App\\Controller\\ClientController::index' => '?',
            'App\\Controller\\ClientController::view_files_all' => '?',
            'App\\Controller\\FdController::Dell_fd' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::View_clientall' => '?',
            'App\\Controller\\SecurityController::add_file' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\SecurityController::suppfile' => '?',
            'App\\Controller\\SecurityController::view_files_all' => '?',
            'App\\Controller\\SecurityController::view_files_filtre' => '?',
            'App\\Controller\\SmsController::index' => '?',
            'App\\Controller\\SmsController::view' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\ClientController:add_fd' => '?',
            'App\\Controller\\ClientController:index' => '?',
            'App\\Controller\\ClientController:view_files_all' => '?',
            'App\\Controller\\FdController:Dell_fd' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:View_clientall' => '?',
            'App\\Controller\\SecurityController:add_file' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\SecurityController:suppfile' => '?',
            'App\\Controller\\SecurityController:view_files_all' => '?',
            'App\\Controller\\SecurityController:view_files_filtre' => '?',
            'App\\Controller\\SmsController:index' => '?',
            'App\\Controller\\SmsController:view' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
