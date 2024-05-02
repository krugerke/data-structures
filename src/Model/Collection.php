<?php

namespace App\Model;

use Traversable;

/** Mapped SuperClass */
/** Contains Domain Events / Transactional Boundary */
class Collection implements \IteratorAggregate, \ArrayAccess, \Countable
{
    private $collection;

    private $iterator;

    public function __construct(&$collection)
    {
        $this->collection = &$collection;

        $this->iterator = new Iterator($this->collection);
    }

    public function getIterator(): Traversable
    {
        return $this->iterator;
    }

    public function toArray(): array
    {
        return iterator_to_array($this);
    }

    public function foreach(callable $callback): self
    {
        foreach($this as $key => $value)
        {
            $callback($key, $value);
        }

        return $this;
    }

    public function count(): int
    {
        return count($this->collection);
    }

    public function offsetExists(mixed $offset): bool
    {
        return isset($this->collection[$offset]);
    }

    public function offsetGet(mixed $offset): mixed
    {
        return $this->collection[$offset];
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->collection[$offset] = $value;
    }

    public function offsetUnset(mixed $offset): void
    {
        unset($this->collection[$offset]);
    }
}