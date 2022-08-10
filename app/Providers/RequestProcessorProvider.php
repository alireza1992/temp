<?php

namespace App\Providers;

use App\Contracts\RequestProcessorInterface;
use App\Http\Requests\InputProcessorRequest;
use App\Traits\EmojiDetector;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;
use App\Services\{EmojiOutput,
    OtherScenarios,
    PrintOutput,
    StringConcatenation,
    SumOfNumbers
};

class RequestProcessorProvider extends ServiceProvider
{
    use EmojiDetector;

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(RequestProcessorInterface::class, function ($app) {
//request in app

            $request = $app->make(Request::class);
            $validator = $app->make(InputProcessorRequest::class);
            $requestContent = $validator->requestValidate($request->request->all());

            if (count($requestContent) == 1) {
                return new PrintOutput($request);
            } elseif (count($requestContent) === count(array_filter($requestContent, 'is_numeric'))) {

                return new SumOfNumbers($requestContent);

            } elseif (array_filter($requestContent, function ($element) {
                return gettype($element) == 'string';
            })) {

                if ($emoji = EmojiDetector::isEmoji($requestContent)) {

                    return new EmojiOutput($emoji);
                }

                return new StringConcatenation($requestContent);

            } else {
                return new OtherScenarios($requestContent);
            }
        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {

    }
}
