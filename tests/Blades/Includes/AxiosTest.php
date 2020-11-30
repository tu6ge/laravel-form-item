<?php

namespace LaravelFormItem\Tests\Blades\Includes;

use Illuminate\View\Compilers\BladeCompiler;
use LaravelFormItem\Tests\ViewTestCase;
use Mockery;

class AxiosTest extends ViewTestCase
{
    public function testRender()
    {
        $this->app['config']->set('form_item.axios_url', 'bar');
        $this->view('input::include.axios')
            ->assertSee('<script src="bar"></script>', false);

        $this->app['config']->set('form_item.axios_url', null);
        $this->view('input::include.axios')
            ->assertDontSee('<script', false);
    }

    public function testOnce()
    {
        $this->app['config']->set('form_item.vue_url', 'bar');

        $this->instance('blade.compiler', Mockery::mock(
            BladeCompiler::class,
            [$this->app['files'], $this->app['config']['view.compiled']],
            function ($mock) {
                $mock->shouldAllowMockingProtectedMethods();
                $mock->makePartial();
                $mock->shouldReceive('isExpired')->andReturn(true);
                $mock->shouldReceive('compileOnce')->once();
                $mock->shouldReceive('compileEndOnce')->once();
            }
        ));

        $this->view('input::include.axios');

        $this->assertEquals($this->app['blade.compiler']->isExpired('bar'), true);
    }
}
