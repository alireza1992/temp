<?php

namespace App\Services\Parser\Components;

interface RequestProcessorInterface
{

    public function isApplicable($request): bool;

    public function getResult($request) : mixed;
}
