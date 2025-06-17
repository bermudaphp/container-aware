<?php

namespace Bermuda;

use Psr\Container\ContainerInterface;

/**
 * Interface for objects that provide access to dependency injection container.
 *
 * This interface extends ContainerAwareInterface and uses PHP 8.4 property hooks
 * to provide convenient read access to the container through a property. The
 * container can be set through the inherited setContainer() method and accessed
 * via the $container property.
 */
interface ContainerProviderInterface extends ContainerAwareInterface
{
    /**
     * Dependency injection container with read-only property hook support.
     *
     * This property provides read access to the dependency injection container.
     * The container is set through the setContainer() method and can be accessed
     * directly via this property, allowing for clean and intuitive API usage.
     *
     * @var ContainerInterface|null
     */
    public ContainerInterface|null $container {
        /**
         * Gets the current dependency injection container.
         *
         * @return ContainerInterface|null The container or null if not set
         */
        get;
    }
}
