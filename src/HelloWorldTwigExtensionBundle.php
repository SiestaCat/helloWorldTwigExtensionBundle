<?php

namespace SiestaCat\HelloWorldTwigExtensionBundle;


use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * HelloWorldTwigExtensionBundle
 */
class HelloWorldTwigExtensionBundle extends AbstractBundle
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../config')
        );
        $loader->load('services.yaml');
    }
}