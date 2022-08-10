<?php

namespace App\Services;

use App\Contracts\RequestProcessorInterface;

class PrintOutput implements RequestProcessorInterface
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
     * @return mixed|void
     */
    public function isApplicable($request): mixed
    {
        $requestContent = ($this->request->request->all());
        if (count($requestContent) == 1){
            return $this->getResult($requestContent);
        }
    }

    /**
     * @param $request
     * @return mixed
     */
    public function getResult($request): mixed
    {

        return $request;
    }
}
