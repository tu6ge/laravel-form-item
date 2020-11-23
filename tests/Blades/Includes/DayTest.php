<?php

namespace LaravelFormItem\Tests\Blades\Includes;

use LaravelFormItem\Tests\ViewTestCase;

class DayTest extends ViewTestCase
{
    public function testRender()
    {
        $this->app['config']->set('form_item.day_js', 'bar_day_js');
        $this->view('input::include.day')
            ->assertSee('<script src="bar_day_js"></script>', false);

        $this->app['config']->set('form_item.day_js', null);
        $this->view('input::include.day')
            ->assertDontSee('<script src=""></script>', false);

        $this->app['config']->set('form_item.day_utc_js', 'bar_utc_js');
        $this->view('input::include.day')
            ->assertSee('<script src="bar_utc_js"></script>', false)
            ->assertSee('<script>dayjs.extend(window.dayjs_plugin_utc);</script>', false);

        $this->app['config']->set('form_item.day_utc_js', null);
        $this->view('input::include.day')
            ->assertDontSee('<script src=""></script>', false);

        $this->app['config']->set('form_item.day_utc_js', null);
        $this->view('input::include.day')
            ->assertDontSee('<script>dayjs.extend(window.dayjs_plugin_utc);</script>', false);

        $this->app['config']->set('form_item.day_customParseFormat_js', 'bar_day_customParseFormat_js');
        $this->view('input::include.day')
            ->assertSee('<script src="bar_day_customParseFormat_js"></script>', false)
            ->assertSee('<script>dayjs.extend(window.dayjs_plugin_customParseFormat);</script>', false);

        $this->app['config']->set('form_item.day_customParseFormat_js', null);
        $this->view('input::include.day')
            ->assertDontSee('<script>dayjs.extend(window.dayjs_plugin_customParseFormat);</script>', false);
    }

    public function testOnce()
    {
        $this->app['config']->set('form_item.day_js', 'bar_day_js');
        $this->blade('foo_first @include("input::include.day") bar_content @include("input::include.day") bar_last')
            ->assertSeeInOrder([
                'foo_first',
                '<script src="bar_day_js"></script>',
                'bar_content'
            ], false)
            ->assertSee('bar_content  bar_last', false);
    }
}
