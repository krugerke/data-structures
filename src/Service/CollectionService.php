<?php

namespace App\Service;

use App\Repository\CollectionRepository;

class CollectionService
{
    private $repository;

    public function __construct(CollectionRepository $repository)
    {
        $this->repository = $repository;
    }

}