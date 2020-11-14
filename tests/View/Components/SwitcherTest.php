<?php

namespace LaravelFormItem\Tests\View\Components;

use LaravelFormItem\Tests\TestCase;
use LaravelFormItem\View\Components\Switcher;

class SwitcherTest extends TestCase
{
    public function testRender()
    {
        $class = $this->mock(Switcher::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $response = $class->render();

        $this->assertEquals($response->name(), 'input::switcher');
    }
}
