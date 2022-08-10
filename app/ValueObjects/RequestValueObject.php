<?php

namespace App\ValueObjects;

use App\Exceptions\NotEnoughArguments;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class RequestValueObject
{

    private array $inputs;

    /**
     * @throws NotEnoughArguments
     */
    private function __construct(array $inputs)
    {
        if (count($inputs) < 1) {
            throw new NotEnoughArguments("There Should be at least 1 field in the request body");
        }
        $this->inputs = $inputs;
    }


    public static function fromRequest(Request $request)
    {
        return new static($request->all());
    }

    /**
     * @return array
     */
    public function getInputs()
    {
        $this->inputs = Arr::shuffle($this->inputs);
        if (count($this->inputs) === 1) {
            return [array_shift($this->inputs)];
        }
        return [
            array_shift($this->inputs),
            array_shift($this->inputs),
        ];


    }

}
