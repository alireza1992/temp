<?php

namespace App\Http\Controllers\API\V1;

use App\Exceptions\NotEnoughArguments;
use App\Http\Controllers\Controller;
use App\Services\Parser\ParserService;
use App\ValueObjects\RequestValueObject;
use Illuminate\Http\Request;

class RequestProcessorController extends Controller
{

    /**
     * @throws NotEnoughArguments
     */
    public function requestProcessor(Request $request,ParserService $parserService)
    {
        $inputs = RequestValueObject::fromRequest($request)->getInputs();
        $parserService->getResult($inputs);
    }
}
