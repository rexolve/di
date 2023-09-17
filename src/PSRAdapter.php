<?php

namespace Rexolve\DI;

use Psr\Container\ContainerInterface as PSRContainerInterface;
use Rexolve\Interfaces\DI\ContainerInterface;

class PSRAdapter implements PSRContainerInterface
{
    private ContainerInterface $container;
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function get(string $id)
    {
        return $this->container->get($id);
    }

    public function has(string $id): bool
    {
        return $this->container->has($id);
    }

    public function __call(string $name, array $arguments)
    {
        if (method_exists($this->container, $name)) {
            return $this->container->$name(...$arguments);
        }

        return null;
    }
}