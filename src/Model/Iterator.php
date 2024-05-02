<?php

namespace App\Model;

class Iterator implements \Iterator, \SeekableIterator
{
    private $collection = array();

    private $index;

    private $position;

    public function __construct(&$collection)
    {
        $this->collection = &$collection;

        $this->index = array_flip(array_keys($collection));

        $this->position = 0;
    }

    public function seek(int $offset): void
    {
        while($offset !== $this->position)
        {
            if($offset - $this->position < 0)
            {
                $this->prev();
            }

            else
            {
                $this->next();
            }
        }
    }

    public function current(): mixed
    {
        if(is_array($current = current($this->collection)))
        {
            return new Collection($current);
        }

        return $current;
    }

    public function prev(): void
    {
        $prev = prev($this->collection);

        --$this->position;
    }

    public function next(): void
    {
        $next = next($this->collection);

        ++$this->position;
    }

    public function key(): mixed
    {
        $key = key($this->collection);

        return $key;
    }

    public function valid(): bool
    {
        if($this->key() !== null)
        {
            return true;
        }

        return false;
    }

    public function end(): void
    {
        $end = end($this->collection);

        $this->position = count($this->collection);
    }

    public function rewind(): void
    {
        reset($this->collection);

        $this->position = 0;
    }

}