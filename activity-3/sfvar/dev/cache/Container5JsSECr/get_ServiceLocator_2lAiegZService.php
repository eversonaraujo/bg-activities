<?php

namespace Container5JsSECr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2lAiegZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2lAiegZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2lAiegZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repository' => ['privates', 'App\\Repository\\LinksRepository', 'getLinksRepositoryService', true],
        ], [
            'repository' => 'App\\Repository\\LinksRepository',
        ]);
    }
}
