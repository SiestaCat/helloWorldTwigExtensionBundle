<?php

namespace SiestaCat\helloWorldTwigExtensionBundle\Tests\Twig;

use Twig\Test\IntegrationTestCase;
use Twig\Extension\ExtensionInterface;
use SiestaCat\HelloWorldTwigExtensionBundle\Twig\HelloWorldExtension;

final class HelloWorldExtensionTest extends IntegrationTestCase
{

    /**
     * @return ExtensionInterface[]
     */
    protected function getExtensions()
    {
        return [new HelloWorldExtension];
    }

    protected function getFixturesDir() {
        return __DIR__ . '/Fixtures/';
    }
   
}