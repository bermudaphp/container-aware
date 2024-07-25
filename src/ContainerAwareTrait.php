<?php

namespace Bermuda;

use Psr\Container\ContainerInterface;

trait ContainerAwareTrait
{
    private ?ContainerInterface $container = null;
    public function setContainer(ContainerInterface $container): void
    {
        $this->container = $container;
    }
}
