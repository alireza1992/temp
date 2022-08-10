<?php

namespace App\Services\Parser\Components;


class StringConcatenation implements RequestProcessorInterface
{




    /**
     * @param $request
     * @return mixed
     */
    public function isApplicable($request): bool
    {

//        if (array_filter($this->request, function ($element) {
//            return gettype($element) == 'string';
//        })) {
//            return $this->getResult(array_values($this->request));
//        }
    }

    /**
     * @param $request
     * @return string
     */
    public function getResult($request): string
    {
//        return $request[0] . ' ' . $request[1];
    }
}
