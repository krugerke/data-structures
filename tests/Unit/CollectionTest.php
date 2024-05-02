<?php

namespace Unit;

use App\Model\Collection;
use App\Model\Entity;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class CollectionTest extends KernelTestCase
{
    private array $collection;

    public function setUp(): void
    {
        parent::setUp();

        $this->collection = [
            'a' => ['a' => 'v', 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' =>8, 'j' => 9],
            'b' => ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' =>8, 'j' => 9],
            'c' => ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' =>8, 'j' => 9],
            'd' => ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' =>8, 'j' => 9],
            'e' => ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' =>8, 'j' => 9],
            ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' =>8, 'j' => 9],
        ];
    }

    /**
     * @return void
     *
     */
    public function testCollectionOutput()
    {
        $collection = new Collection($this->collection);

        foreach($collection as $id => $value)
        {
            echo 'key => '.$id;

            echo PHP_EOL;

            echo 'value => ';

            var_dump($value);
        }

        $this->assertTrue(true);
    }

    public function testWhileLoop()
    {
        $collection = new Collection($this->collection);

        $iterator = $collection->getIterator();

        while($iterator->valid())
        {
            $data = $iterator->current();

            $id = $iterator->key();

            $iterator->next();
        }

        $this->assertTrue(true);
    }

    public function testIteratorSeek()
    {
        $collection = new Collection($this->collection);

        $iterator = $collection->getIterator();

        $iterator->seek(3);

        $id = $iterator->key();

        $record = $iterator->current();

        $iterator2 = $record->getIterator();

        $iterator2->seek(4);

        $key = $iterator->key();

        $record2 = $iterator->current();
    }

    public function testStringCollection()
    {
        $string = str_split("This is a string", 1);

        $collection = new Collection($string);

        $collection->foreach(function($key, $value){});

    }

    /**
     * @return void
     * @doesNotPerformAssertions
     */
    public function testBaseTentoBinary()
    {
        $base10Digit = 127;

        $offset = 0;

        for($base10Digit; $base10Digit > 1; ++$offset)
        {
            $base10Digit = $base10Digit / 2;

            $string[$offset] = $base10Digit % 2;
        }

        $string;
    }

    public function testFFT()
    {
        /* full length or period of wave */
        $N_Wave = 128;

        $size = $N_Wave-$N_Wave/4;

        $x = 0;
        $y = 0;

        $offset = 1;

        while($offset < 128)
        {
            $int = rand(0, 127);

            $int = 0;

            $bin = decbin(0^$int);

            $len = strlen($bin);

            $chr = chr($int);

            ++$offset;
        }
    }
}