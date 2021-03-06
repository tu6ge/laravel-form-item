<?php

namespace LaravelFormItem\Tests\View\Components;

//use Carbon\Carbon;
use LaravelFormItem\Tests\TestCase;
use LaravelFormItem\View\Components\DatePicker;

class DatePickerTest extends TestCase
{
    public function tearDown(): void
    {
        \Mockery::close();

        parent::tearDown();
    }

    public function testName()
    {
        //dd(Carbon::createFromFormat('Y-m-d', '2020-10-11')->toString());
        $class = $this->mock(DatePicker::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $class->shouldReceive('defaultId')
            ->once()
            ->andReturn('rand_id');

        $class->__construct(
            'foo_name'
        );

        $this->assertEquals($class->name, 'foo_name');
        $this->assertEquals($class->value, '');
        $this->assertEquals($class->id, 'rand_id');
        $this->assertEquals($class->type, 'date');
    }

    public function testValue()
    {
        $class = $this->mock(DatePicker::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $class->shouldReceive('defaultId')
            ->once()
            ->andReturn('rand_id');

        $class->__construct(
            'foo_name',
            '2020-10-11',
        );

        $this->assertEquals(substr($class->value, 0, 10), '2020-10-11');
    }

    public function testId()
    {
        $class = $this->mock(DatePicker::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $class->shouldReceive('defaultId')
            ->never()
            ->andReturn('rand_id');

        $class->__construct(
            'foo_name',
            '2020-10-11',
            'foo_id'
        );

        $this->assertEquals($class->id, 'foo_id');
    }

    public function testType()
    {
        $class = $this->mock(DatePicker::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $class->shouldReceive('defaultId')
            ->never()
            ->andReturn('rand_id');

        $class->__construct(
            'foo_name',
            '2020-10-11',
            'foo_id',
            'bar_type'
        );

        $this->assertEquals($class->type, 'bar_type');
    }

    public function testRender()
    {
        $class = $this->mock(DatePicker::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $response = $class->render();

        $this->assertEquals($response->name(), 'input::date-picker');
    }
}
