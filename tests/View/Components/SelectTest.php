<?php

namespace LaravelFormItem\Tests\View\Components;

use LaravelFormItem\Tests\TestCase;
use LaravelFormItem\View\Components\Select;

class SelectTest extends TestCase
{
    public function tearDown(): void
    {
        \Mockery::close();

        parent::tearDown();
    }

    public function testNameOption()
    {
        $class = $this->mock(Select::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $class->shouldReceive('defaultId')
            ->once();

        $class->shouldReceive('formatOptions')
            ->with('foo_option')
            ->once()
            ->andReturn('foo_option_new');

        $class->__construct(
            'bar_name',
            'foo_option',
        );

        $this->assertEquals($class->name, 'bar_name');
        $this->assertEquals($class->options, 'foo_option_new');
        $this->assertNull($class->value);
    }

    public function testValue()
    {
        $class = $this->mock(Select::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $class->shouldReceive('formatOptions')
            ->with('foo_option')
            ->once()
            ->andReturn('foo_option_new');

        $class->__construct(
            'bar_name',
            'foo_option',
            'bar_value',
        );

        $this->assertEquals($class->value, 'bar_value');
    }

    public function testId()
    {
        $class = $this->mock(Select::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $class->shouldReceive('defaultId')
            ->never();

        $class->shouldReceive('formatOptions')
            ->with('foo_option')
            ->once()
            ->andReturn('foo_option_new');

        $class->__construct(
            'bar_name',
            'foo_option',
            'bar_value',
            'foo_id'
        );

        $this->assertEquals($class->id, 'foo_id');
    }

    public function testRender()
    {
        $class = $this->mock(Select::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $response = $class->render();

        $this->assertEquals($response->name(), 'input::select');
    }
}
