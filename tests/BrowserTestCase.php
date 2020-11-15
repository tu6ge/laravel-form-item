<?php

namespace LaravelFormItem\Tests;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Orchestra\Testbench\Dusk\TestCase as DuskTestCase;

abstract class BrowserTestCase extends DuskTestCase
{
    //use CreatesApplication;

    public function setUp(): void
    {
        parent::setUp();

        View::addLocation(__DIR__ . '/resources/views');
    }

    protected function registerTestRoute($uri, callable $post = null): self
    {
        Route::middleware('web')->group(function () use ($uri, $post) {
            Route::view($uri, $uri);

            if ($post) {
                Route::post($uri, $post);
            }
        });

        return $this;
    }
}