<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\JsonResponse;

class NotEnoughArguments extends Exception
{
    /**
     * @return JsonResponse
     */
    public function render(): JsonResponse
    {
        return response()->json(["status" => 422, "message" => $this->getMessage()]);

    }
}
