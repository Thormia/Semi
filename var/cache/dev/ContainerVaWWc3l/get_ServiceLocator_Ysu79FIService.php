<?php

namespace ContainerVaWWc3l;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Ysu79FIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ysu79FI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ysu79FI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'contact' => ['privates', '.errored..service_locator.ysu79FI.App\\Entity\\Contact', NULL, 'Cannot autowire service ".service_locator.ysu79FI": it needs an instance of "App\\Entity\\Contact" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'contact' => 'App\\Entity\\Contact',
            'entityManager' => '?',
        ]);
    }
}