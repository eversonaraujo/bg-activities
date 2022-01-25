<?php

namespace Container5JsSECr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLinkControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\LinkController' shared autowired service.
     *
     * @return \App\Controller\LinkController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/LinkController.php';

        $container->services['App\\Controller\\LinkController'] = $instance = new \App\Controller\LinkController();

        $instance->setContainer(($container->privates['.service_locator.l1ae.Qz'] ?? $container->load('get_ServiceLocator_L1ae_QzService'))->withContext('App\\Controller\\LinkController', $container));

        return $instance;
    }
}
