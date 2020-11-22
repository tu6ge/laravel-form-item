<?php

namespace LaravelFormItem\Tests\Blades;

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
}
