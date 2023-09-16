<?php

namespace ContainerBi2x9eA;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CategoryController' shared autowired service.
     *
     * @return \App\Controller\CategoryController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CategoryController.php';

        $container->services['App\\Controller\\CategoryController'] = $instance = new \App\Controller\CategoryController(($container->services['router'] ?? $container->getRouterService()));

        $instance->setContainer(($container->privates['.service_locator.dJbsK7N'] ?? $container->load('get_ServiceLocator_DJbsK7NService'))->withContext('App\\Controller\\CategoryController', $container));

        return $instance;
    }
}
