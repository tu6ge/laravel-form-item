<?php

namespace LaravelFormItem\Tests\View\Components;

use LaravelFormItem\Tests\TestCase;
use LaravelFormItem\View\Components\Number;

class NumberTest extends TestCase
{
    public function testRender()
    {
        $class = $this->mock(Number::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $response = $class->render();

        $this->assertEquals($response->name(), 'input::number');
    }
}
