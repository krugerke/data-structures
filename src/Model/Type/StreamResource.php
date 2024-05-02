<?php

namespace App\Model\Type;

use App\Model\Collection;

class StreamResource extends Collection
{

    private $context;

    public function __construct($context = null)
    {
        $this->context = $context;
    }

}