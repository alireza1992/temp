<?php

namespace App\Contracts;

interface RequestProcessorInterface
{

    public function isApplicable($request): mixed;

    public function getResult($request) : mixed;
}
