<?php

namespace Bermuda;

use Psr\Container\ContainerInterface;

trait ContainerAwareTrait
{
    private ContainerInterface $container;
    public function setContainer(ContainerInterface $container): void
    {
        $this->container = $container;
    }
}