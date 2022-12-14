<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class NotEnoughArguments extends Exception
{
    /**
     * @return JsonResponse
     */
    public function render(): JsonResponse
    {
        return response()->json(["data"=>[], "message" => $this->getMessage()],ResponseAlias::HTTP_UNPROCESSABLE_ENTITY);

    }
}
