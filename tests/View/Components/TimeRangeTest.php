<?php

namespace LaravelFormItem\Tests\View\Components;

use LaravelFormItem\Tests\TestCase;
use LaravelFormItem\View\Components\TimeRange;

class TimeRangeTest extends TestCase
{
    public function tearDown(): void
    {
        \Mockery::close();
        parent::tearDown();
    }

    public function testName()
    {
        $class = $this->mock(TimeRange::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $class->shouldReceive('defaultId')
            ->once();

        $class->__construct(
            'bar_name',
        );

        $this->assertEquals($class->name, 'bar_name');
        $this->assertEquals($class->array_value, []);
        $this->assertEquals($class->format, 'hh:mm:ss');
        $this->assertEquals($class->picker_options, []);
    }

    public function testId()
    {
        $class = $this->mock(TimeRange::class)
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
        $class = $this->mock(TimeRange::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $class->shouldReceive('defaultId')
            ->once();

        $class->__construct(
            'bar_name',
            null,
            ['bar_value']
        );

        $this->assertEquals($class->array_value, ['bar_value']);
    }

    public function testFormat()
    {
        $class = $this->mock(TimeRange::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $class->shouldReceive('defaultId')
            ->once();

        $class->__construct(
            'bar_name',
            null,
            ['bar_value'],
            'bar_format'
        );

        $this->assertEquals($class->format, 'bar_format');
    }

    public function testPickerOption()
    {
        $class = $this->mock(TimeRange::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $class->shouldReceive('defaultId')
            ->once();

        $class->__construct(
            'bar_name',
            null,
            ['bar_value'],
            'bar_format',
            ['option_1']
        );

        $this->assertEquals($class->picker_options, ['option_1']);
    }

    public function testRender()
    {
        $class = $this->mock(TimeRange::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $response = $class->render();

        $this->assertEquals($response->name(), 'input::time-range');
    }
}
