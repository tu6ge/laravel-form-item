<?php

namespace LaravelFormItem\Tests\View\Components;

use LaravelFormItem\Tests\TestCase;
use LaravelFormItem\View\Components\Checkbox;

class CheckboxTest extends TestCase
{
    public function testRender()
    {
        $class = $this->mock(Checkbox::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $response = $class->render();

        $this->assertEquals($response->name(), 'input::checkbox');
    }
}
