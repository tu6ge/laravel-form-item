<?php

namespace LaravelFormItem\Tests\View\Components;

use LaravelFormItem\Tests\TestCase;
use LaravelFormItem\View\Components\Checkbox;

class CheckboxTest extends TestCase
{
    public function tearDown(): void
    {
        \Mockery::close();

        parent::tearDown(); // TODO: Change the autogenerated stub
    }

    public function testNameOption()
    {
        $class = $this->mock(Checkbox::class)
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
        $this->assertEquals($class->append_el_prop, '');
    }

    public function testValue()
    {
        $class = $this->mock(Checkbox::class)
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
        $class = $this->mock(Checkbox::class)
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
            'foo_id',
        );

        $this->assertEquals($class->id, 'foo_id');
    }

    public function testAppendElProp()
    {
        $class = $this->mock(Checkbox::class)
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
            'bar_value',
            null,
            'foo_prop'
        );

        $this->assertEquals($class->append_el_prop, ' foo_prop');
    }

    public function testRender()
    {
        $class = $this->mock(Checkbox::class)
            ->makePartial()
            ->shouldAllowMockingProtectedMethods();

        $response = $class->render();

        $this->assertEquals($response->name(), 'input::checkbox');
    }
}
