<?php
namespace App\Tests\Integration;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class OpenALWrapperTest extends KernelTestCase
{
    private $container;

    public function setUp(): void
    {
        parent::setUp();

        static::bootKernel();

        $this->container = static::getContainer();
    }

    public function testOpenBuffer()
    {
        $resource = openal_buffer_create();

        $device = openal_device_open();

        $context = openal_context_create($device);

        $file = fopen('.env', 'rw');

        $resources = get_resources();

        $resource_type = get_resource_type($resource);
    }
}