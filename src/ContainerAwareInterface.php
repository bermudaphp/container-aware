<?php
namespace Bermuda;

use Psr\Container\ContainerInterface;

/**
 * Interface for objects that can receive a dependency injection container.
 *
 * This interface is intended for classes that need to gain access to a
 * dependency injection container after their creation. Usually used in
 * Service Locator pattern or for container injection into services that
 * are not created through the container.
 */
interface ContainerAwareInterface
{
    /**
     * Sets the dependency injection container for the object.
     *
     * @param ContainerInterface $container The dependency injection container
     * @return void
     */
    public function setContainer(ContainerInterface $container): void;
}
