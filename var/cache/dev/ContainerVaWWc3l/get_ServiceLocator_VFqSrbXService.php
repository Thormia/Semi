<?php

namespace ContainerVaWWc3l;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VFqSrbXService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vFqSrbX' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vFqSrbX'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'quer' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'quer' => '?',
        ]);
    }
}
