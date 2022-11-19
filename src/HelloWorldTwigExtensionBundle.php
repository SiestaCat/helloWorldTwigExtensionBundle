<?php

namespace SiestaCat\HelloWorldTwigExtensionBundle;

use SiestaCat\HelloWorldTwigExtensionBundle\Twig\HelloWorldExtension;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

/**
 * HelloWorldTwigExtensionBundle
 */
class HelloWorldTwigExtensionBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->services()->set('helloworldtwigextensionbundle', HelloWorldExtension::class);
    }
}