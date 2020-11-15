<?php

namespace LaravelFormItem\Tests;

use Orchestra\Testbench\TestCase as TestbenchTestCase;

abstract class TestCase extends TestbenchTestCase
{
    public function getPackageProviders($app)
    {
        return [
            'LaravelFormItem\Providers\LaravelFormItemServiceProvider',
        ];
    }
}
