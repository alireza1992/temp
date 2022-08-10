<?php

namespace App\Services\Parser\Components;


class PrintOutput implements RequestProcessorInterface
{



    /**
     * @param $request
     * @return mixed|void
     */
    public function isApplicable($request): bool
    {
//        $requestContent = ($this->request->request->all());
//        if (count($requestContent) == 1){
//            return $this->getResult($requestContent);
//        }
    }

    /**
     * @param $request
     * @return mixed
     */
    public function getResult($request): mixed
    {

//        return $request;
    }
}
