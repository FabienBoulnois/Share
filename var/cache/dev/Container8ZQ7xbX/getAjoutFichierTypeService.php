<?php

namespace Container8ZQ7xbX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAjoutFichierTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\AjoutFichierType' shared autowired service.
     *
     * @return \App\Form\AjoutFichierType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/AjoutFichierType.php';

        return $container->privates['App\\Form\\AjoutFichierType'] = new \App\Form\AjoutFichierType();
    }
}
