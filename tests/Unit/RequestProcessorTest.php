<?php

namespace Tests\Unit;
use App\Http\Requests\InputProcessorRequest;
use App\Services\SumOfNumbers;
use Illuminate\Http\Response;
use Mockery;
use Mockery\MockInterface;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use Tests\TestCase;


class RequestProcessorTest extends TestCase
{
    /**
     *
     */
    public function test_sum_of_two_numbers()
    {
        $request = [
           1,2
       ];
        $sumClass = new SumOfNumbers($request);
        $this->assertEquals(3,$sumClass->isApplicable($request));
    }

    /**
     * @throws \App\Exceptions\NotEnoughArguments
     */
    public function test_max_fields_in_request_pay_load()
    {
        $request = [
            'first_name'=>'alireza',
            'last_name'=>'amro',
            'number1'=>123,
            'number2'=>1
        ];
        $class = new InputProcessorRequest();
        $this->assertCount(2,$class->requestValidate($request));
    }

    /**
     *
     */
    public function test_http_status_of_the_end_point()
    {
        $response = $this->withHeaders([
            'accept' => 'application/json',
        ])->post('/api/v1/json-output', ['name' => 'Sally']);

        $response->assertStatus(200);
    }

    public function test_http_status_401_on_empty_body()
    {
        $response = $this->withHeaders([
            'accept' => 'application/json',
        ])->post('/api/v1/json-output', []);

        $response->assertExactJson([
            "status" => ResponseAlias::HTTP_UNPROCESSABLE_ENTITY,
            "message" => "There Should be at least 1 field in the request body"
        ]);
    }
}
