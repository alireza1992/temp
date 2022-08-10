<?php

namespace App\Services;

use App\Contracts\RequestProcessorInterface;
use JetBrains\PhpStorm\Pure;

class EmojiOutput implements RequestProcessorInterface
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
    public function isApplicable($request): mixed
    {
       return $this->getResult($this->request);
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
