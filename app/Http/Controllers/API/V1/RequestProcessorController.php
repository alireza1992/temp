<?php

namespace App\Http\Controllers\API\V1;

use App\Contracts\RequestProcessorInterface;
use App\Http\Controllers\Controller;

class RequestProcessorController extends Controller
{
    /**
     * @param RequestProcessorInterface $requestProcessor
     * @return mixed
     */
    public function requestProcessor(RequestProcessorInterface $requestProcessor) : mixed
    {

        return response()->json([$requestProcessor->isApplicable($requestProcessor)]);
    }
}
