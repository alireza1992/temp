<?php

namespace App\Services;

use App\Contracts\RequestProcessorInterface;

/**
 * This could happen when we (for instance) have one number and one boolean data
 */
class OtherScenarios implements RequestProcessorInterface
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
        return  $this->request;
    }

    /**
     * @param $request
     */
    public function getResult($request)
    {
        // TODO: Implement getResult() method.
    }
}
