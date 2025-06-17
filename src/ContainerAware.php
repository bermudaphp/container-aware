<?php

namespace Bermuda;

use Psr\Container\ContainerInterface;

/**
 * Trait providing basic container awareness functionality.
 *
 * This trait implements the ContainerAwareInterface and provides a simple
 * implementation for storing and setting a dependency injection container
 * using PHP 8.4 property hooks with private setter access.
 */
trait ContainerAware
{
    /**
     * The dependency injection container instance with private setter.
     *
     * This property uses PHP 8.4 property hooks to provide controlled access
     * to the container. The setter is private, ensuring the container can only
     * be modified through the public setContainer() method, while still allowing
     * direct read access to the property.
     *
     * @var ContainerInterface|null
     */
    private(set) ContainerInterface|null $container = null;

    /**
     * Sets the dependency injection container for the object.
     *
     * This method provides the public interface for setting the container,
     * ensuring proper encapsulation while leveraging the private setter
     * property hook for internal storage.
     *
     * @param ContainerInterface $container The dependency injection container
     * @return void
     */
    public function setContainer(ContainerInterface $container): void
    {
        $this->container = $container;
    }
}
