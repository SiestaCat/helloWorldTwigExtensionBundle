<?php

namespace SiestaCat\HelloWorldTwigExtensionBundle\Twig;

use Twig\Environment;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * HelloWorldExtension
 */
final class HelloWorldExtension extends AbstractExtension
{

    const HELLO_WORLD_STR = 'This is a hello world Bundle';

    public function getFunctions()
    {
        return [
            new TwigFunction('hello_world', [$this, 'hello_world']),
        ];
    }

    /**
     * Returns hello world string
     * @return string 
     */
    public function hello_world():string
    {
        return self::HELLO_WORLD_STR;
    }
}