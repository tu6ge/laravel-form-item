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
}
