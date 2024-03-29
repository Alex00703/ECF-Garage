<?php

namespace Container6jSNAW8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FwGa6DpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.fwGa6Dp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.fwGa6Dp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'carRepository' => ['privates', 'App\\Repository\\CarRepository', 'getCarRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'schedulesRepository' => ['privates', 'App\\Repository\\SchedulesRepository', 'getSchedulesRepositoryService', true],
        ], [
            'carRepository' => 'App\\Repository\\CarRepository',
            'entityManager' => '?',
            'schedulesRepository' => 'App\\Repository\\SchedulesRepository',
        ]);
    }
}
