<?php

namespace Bermuda;

use Psr\Container\ContainerInterface;

interface ContainerAwareInterface
{
    public function setContainer(ContainerInterface $container): void ;
}