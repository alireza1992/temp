<?php

namespace App\Services\Parser\Components;


/**
 * This could happen when we (for instance) have one number and one boolean data
 */
class OtherScenarios implements RequestProcessorInterface
{

    /**
     * @param $request
     * @return mixed
     */
    public function isApplicable($request) : bool
    {
//        return  $this->request;
    }

    /**
     * @param $request
     */
    public function getResult($request): mixed
    {
        // TODO: Implement getResult() method.
    }
}
