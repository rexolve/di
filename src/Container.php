<?php

namespace Rexolve\DI;

use Rexolve\Interfaces\DI\ContainerInterface;

class Container implements ContainerInterface
{

    public function get(string $key): mixed
    {
        // TODO: Implement get() method.

        return null;
    }

    public function has(string $key): bool
    {
        // TODO: Implement has() method.

        return false;
    }

    public function set(string $key, mixed $value): static
    {
        // TODO: Implement set() method.

        return $this;
    }

    public function setMany(array $definitions): static
    {
        // TODO: Implement setMany() method.

        return $this;
    }

    public function invoke(string $class, string $method, array $parameters): mixed
    {
        // TODO: Implement invoke() method.

        return null;
    }
}