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
    }

    public function getPackageProviders($app)
    {
        return [
            'LaravelFormItem\Providers\LaravelFormItemServiceProvider',
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('view.paths', [
            __DIR__.'/resources/views'
        ]);

        //set routes for the testsystem
        $app['router']->middleware('web')
            ->group(__DIR__.'/routes.php');
    }
}
