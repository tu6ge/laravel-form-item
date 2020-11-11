<?php

namespace LaravelFormItem\Tests;

use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/bootstrap.php';

        $app->make(Kernel::class)->bootstrap();

        return $app;
    }
}
