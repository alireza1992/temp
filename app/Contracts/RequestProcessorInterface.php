<?php

namespace App\Contracts;

interface RequestProcessorInterface
{
    //todo return types and parameter types


    public function isApplicable($request);

    public function getResult($request);
}
