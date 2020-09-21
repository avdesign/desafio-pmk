<?php

namespace App\Interfaces;

interface DonorInterface
{
    /**
     * Date: 21/09/2020
     * 
     * @return \App\Repositories\DonorRepository
     */
    public function getAll($request);
}