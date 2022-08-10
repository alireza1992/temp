<?php

namespace App\Providers;


use App\Services\Parser\Components\EmojiOutput;
use App\Services\Parser\Components\OtherScenarios;
use App\Services\Parser\Components\PrintOutput;
use App\Services\Parser\Components\RequestProcessorInterface;
use App\Services\Parser\Components\StringConcatenation;
use App\Services\Parser\Components\SumOfNumbers;
use App\Services\Parser\ParserService;
use Illuminate\Support\ServiceProvider;


class ParserServiceProvider extends ServiceProvider
{

    private const Parsers = [
        PrintOutput::class,
        SumOfNumbers::class,
        StringConcatenation::class,
        OtherScenarios::class,
        EmojiOutput::class,
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->tag(self::Parsers, 'parsers');

        /// 1 ,2 ,5 solid
        $this->app->bind(RequestProcessorInterface::class, function ($app) {
            return new ParserService($app->tagged('parsers'));
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
