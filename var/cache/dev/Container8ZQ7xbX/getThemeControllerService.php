<?php

namespace Container8ZQ7xbX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getThemeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ThemeController' shared autowired service.
     *
     * @return \App\Controller\ThemeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ThemeController.php';

        $container->services['App\\Controller\\ThemeController'] = $instance = new \App\Controller\ThemeController();

        $instance->setContainer(($container->privates['.service_locator.g9CqTPp'] ?? $container->load('get_ServiceLocator_G9CqTPpService'))->withContext('App\\Controller\\ThemeController', $container));

        return $instance;
    }
}