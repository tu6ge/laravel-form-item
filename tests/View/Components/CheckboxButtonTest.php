<?php

namespace LaravelFormItem\Tests\View\Components;

use LaravelFormItem\Tests\TestCase;
use LaravelFormItem\View\Components\CheckboxButton;

class CheckboxButtonTest extends TestCase
{
    public function testRender()
    {
        $class = $this->mock(CheckboxButton::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $response = $class->render();

        $this->assertEquals($response->name(), 'input::checkbox-button');
    }
}