<?php

namespace App\Http\Requests;

use App\Exceptions\NotEnoughArguments;

class InputProcessorRequest
{
    /**
     * @param array $request
     * @return mixed
     * @throws NotEnoughArguments
     */
    public function requestValidate(array $request) : mixed
    {
        /**
         * the endpoint should receive at least 2 fields
         */
        if (count($request) < 2) {
            if (count($request) == 1) {
                return $request;
            }

            throw new NotEnoughArguments("There Should be at least 1 field in the request body");
        }
        /**
         * Take random two if field counts are more than 2
         */
        if (count($request) >= 2) {
            $randomPick = array_rand($request, 2);
            return [$randomPick[0] => $request[$randomPick[0]], $randomPick[1] => $request[$randomPick[1]]];
        }

    }
}
