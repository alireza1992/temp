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
     * @return float
     */
    public function getResult($request): float
    {

        return ($request[0] + $request[1]);
    }
}
