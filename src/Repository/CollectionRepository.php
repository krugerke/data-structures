<?php

namespace App\Repository;

use Symfony\Component\EventDispatcher\EventDispatcher;

class CollectionRepository
{
    private $evm;

    public function __construct(EventDispatcher $evm)
    {
        $this->evm = $evm;
    }

}