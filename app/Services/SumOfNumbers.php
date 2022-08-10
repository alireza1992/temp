<?php

namespace App\Services;

use App\Contracts\RequestProcessorInterface;

class SumOfNumbers implements RequestProcessorInterface
{
    private mixed $request;

    /**
     * @param $request
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function isApplicable($request) : mixed
    {
        return $this->getResult(array_values($this->request));
    }

    /**
     * @param $request
     * @return int
     */
    public function getResult($request): int
    {

        return ((int)$request[0] + (int)$request[1]);
    }
}
