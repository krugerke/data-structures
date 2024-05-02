<?php

namespace Unit;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class StarterTest extends KernelTestCase
{
    private $container;

    public function setUp(): void
    {
        parent::setUp();

        static::bootKernel();

        $this->container = static::getContainer();
    }

    public function testMethod()
    {
        $this->assertEquals(true, true);
    }
}
