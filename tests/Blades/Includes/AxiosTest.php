<?php

namespace LaravelFormItem\Tests\Blades\Includes;

use LaravelFormItem\Tests\ViewTestCase;

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
        $this->app['config']->set('form_item.axios_url', 'bar');
        $this->blade('foo_first @include("input::include.axios") bar_content @include("input::include.axios") bar_last')
            ->assertSeeInOrder([
                'foo_first',
                '<script src="bar"></script>',
                'bar_content',
            ], false)
            ->assertSee('bar_content  bar_last', false);
    }
}
