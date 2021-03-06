<?php

namespace LaravelFormItem\Tests\View\Components;

use LaravelFormItem\Tests\TestCase;
use LaravelFormItem\View\Components\TimeSelect;

class TimeSelectTest extends TestCase
{
    public function tearDown(): void
    {
        \Mockery::close();
        parent::tearDown();
    }

    public function testName()
    {
        $class = $this->mock(TimeSelect::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $class->shouldReceive('defaultId')
            ->once();

        $class->__construct(
            'bar_name',
        );

        $this->assertEquals($class->name, 'bar_name');
        $this->assertEquals($class->value, '');
        $this->assertEquals($class->picker_options, []);
    }

    public function testId()
    {
        $class = $this->mock(TimeSelect::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $class->shouldReceive('defaultId')
            ->never();

        $class->__construct(
            'bar_name',
            'bar_id',
        );

        $this->assertEquals($class->id, 'bar_id');
    }

    public function testValue()
    {
        $class = $this->mock(TimeSelect::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $class->shouldReceive('defaultId')
            ->once();

        $class->__construct(
            'bar_name',
            null,
            'bar_value'
        );

        $this->assertEquals($class->value, 'bar_value');
    }

    public function testPickerOption()
    {
        $class = $this->mock(TimeSelect::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $class->shouldReceive('defaultId')
            ->once();

        $class->__construct(
            'bar_name',
            null,
            'bar_value',
            ['option_1']
        );

        $this->assertEquals($class->picker_options, ['option_1']);
    }

    public function testRender()
    {
        $class = $this->mock(TimeSelect::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $response = $class->render();

        $this->assertEquals($response->name(), 'input::time-select');
    }
}
