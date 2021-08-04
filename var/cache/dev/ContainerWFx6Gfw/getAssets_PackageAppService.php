<?php

namespace ContainerWFx6Gfw;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssets_PackageAppService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'assets._package_app' shared service.
     *
     * @return \Symfony\Component\Asset\PathPackage
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/JsonManifestVersionStrategy.php';

        return $container->privates['assets._package_app'] = new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy((\dirname(__DIR__, 4).'/public/build/manifest.json'), NULL), ($container->privates['assets.context'] ?? $container->getAssets_ContextService()));
    }
}
