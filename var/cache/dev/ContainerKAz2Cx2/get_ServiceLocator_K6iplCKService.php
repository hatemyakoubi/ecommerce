<?php

namespace ContainerKAz2Cx2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_K6iplCKService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.K6iplCK' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.K6iplCK'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'prod' => ['privates', 'App\\Repository\\ProduitRepository', 'getProduitRepositoryService', true],
        ], [
            'prod' => 'App\\Repository\\ProduitRepository',
        ]);
    }
}
