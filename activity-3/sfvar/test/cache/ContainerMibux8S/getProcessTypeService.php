<?php

namespace ContainerMibux8S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProcessTypeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Form\ProcessType' shared autowired service.
     *
     * @return \App\Form\ProcessType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ProcessType.php';

        return $container->privates['App\\Form\\ProcessType'] = new \App\Form\ProcessType();
    }
}
