<?php

namespace App\Tests\Unit;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class StreamWrapperTest extends KernelTestCase
{
    /**
     * @return void
     * @doesNotPerformAssertions
     */
    public function testDefaultStreamcontextAsWrapper()
    {
        $resource = get_resources();

        //$wrapper = stream_context_get_default();

        $resource = get_resources();
    }
}