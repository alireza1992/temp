<?php

namespace App\Services\Parser\Components;


class SumOfNumbers implements RequestProcessorInterface
{


    /**
     * @param $request
     * @return mixed
     */
    public function isApplicable($request) : bool
    {
//        return $this->getResult(array_values($this->request));
    }

    /**
     * @param $request
     * @return float
     */
    public function getResult($request): float
    {

//        return ($request[0] + $request[1]);
    }
}
