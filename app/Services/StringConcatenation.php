<?php

namespace App\Services;

use App\Contracts\RequestProcessorInterface;

class StringConcatenation implements RequestProcessorInterface
{


    private mixed $request;

    /**
     * @param $requestContent
     */
    public function __construct($requestContent)
    {
        $this->request = $requestContent;
    }

    /**
     * @param $request
     * @return string|void
     */
    public function isApplicable($request)
    {

        if (array_filter($this->request, function ($element) {
            return gettype($element) == 'string';
        })) {
            return $this->getResult(array_values($this->request));
        }
    }

    /**
     * @param $request
     * @return string
     */
    public function getResult($request): string
    {
        return $request[0] . ' ' . $request[1];
    }
}
