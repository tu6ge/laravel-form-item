<?php

namespace LaravelFormItem\Tests\Blades\Includes;

use Illuminate\View\Compilers\BladeCompiler;
use LaravelFormItem\Tests\ViewTestCase;
use Mockery;

class ElementUITest extends ViewTestCase
{
    public function tearDown(): void
    {
        Mockery::close();

        parent::tearDown();
    }

    public function testRender()
    {
        $this->app['config']->set('form_item.vue_url', 'bar');
        $this->view('input::include.element-ui')
            ->assertSee('<script src="bar"></script>', false);

        $this->app['config']->set('form_item.vue_url', null);
        $this->view('input::include.element-ui')
            ->assertDontSee('<script src=""></script>', false);

        $this->app['config']->set('form_item.element_ui_css', 'bar_css');
        $this->view('input::include.element-ui')
            ->assertSee('<link rel="stylesheet" type="text/css" href="bar_css">', false);

        $this->app['config']->set('form_item.element_ui_css', null);
        $this->view('input::include.element-ui')
            ->assertDontSee('<link rel="stylesheet"', false);

        $this->app['config']->set('form_item.element_ui_js', 'bar_ui_js');
        $this->view('input::include.element-ui')
            ->assertSee('<script src="bar_ui_js"></script>', false);

        $this->app['config']->set('form_item.element_ui_js', null);
        $this->view('input::include.element-ui')
            ->assertDontSee('<script src=""></script>', false);
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

        $this->view('input::include.element-ui');

        $this->assertEquals($this->app['blade.compiler']->isExpired('bar'), true);
    }
}
