<?php

namespace LaravelFormItem\Tests\Blades;

use LaravelFormItem\Tests\ViewTestCase;

class CascaderTest extends ViewTestCase
{
    public function testId()
    {
        $this->view('input::cascader', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'resource'      => 'foo_res',
            'value'         => 'foo_val',
            'trigger'       => 'foo_trigger',
            'options'       => '',
        ])->assertSee('<div id="bar_id" >', false)
            ->assertSee('var x_input_bar_id = new Vue({', false)
            ->assertSee('el:\'#bar_id\',', false);
    }

    public function testOptions()
    {
        $this->view('input::cascader', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'resource'      => 'foo_res',
            'value'         => 'foo_val',
            'trigger'       => 'foo_trigger',
            'options'       => '',
        ])->assertSee('v-model="value" :props="props"', false);

        $this->view('input::cascader', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'resource'      => 'foo_res',
            'value'         => 'foo_val',
            'trigger'       => 'foo_trigger',
            'options'       => '[11,22]',
        ])->assertSee('v-model="value" :options=\'"[11,22]"\'', false);
    }

    public function testAttributes()
    {
        $this->view('input::cascader', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'resource'      => 'foo_res',
            'value'         => 'foo_val',
            'trigger'       => 'foo_trigger',
            'options'       => '',
        ])->assertSee('v-model="value" :props="props" foo_attr', false);

        $this->view('input::cascader', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'resource'      => 'foo_res',
            'value'         => 'foo_val',
            'trigger'       => 'foo_trigger',
            'options'       => '[11,22]',
        ])->assertSee('v-model="value" :options=\'"[11,22]"\' :props="props" foo_attr', false);
    }

    public function testName()
    {
        $this->view('input::cascader', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'resource'      => 'foo_res',
            'value'         => 'foo_val',
            'trigger'       => 'foo_trigger',
            'options'       => '',
        ])->assertSee('<input type="hidden" name="foo_name" v-model="value" />', false);
    }

    public function testResource()
    {
        $this->app['config']->set('form_item.axios_url', 'bar');

        $this->view('input::cascader', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'resource'      => 'foo_res',
            'value'         => 'foo_val',
            'trigger'       => 'foo_trigger',
            'options'       => '',
        ])
            ->assertSee('<script src="bar"></script>', false)
            ->assertSee('let resource = \'foo_res\';', false);

        $this->view('input::cascader', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'resource'      => null,
            'value'         => 'foo_val',
            'trigger'       => 'foo_trigger',
            'options'       => '',
        ])
            ->assertDontSee('<script src="bar"></script>', false)
            ->assertSee('let resource = \'\';', false);
    }

    public function testValue()
    {
        $this->view('input::cascader', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'resource'      => 'foo_res',
            'value'         => 'foo_val',
            'trigger'       => 'foo_trigger',
            'options'       => '',
        ])->assertSee('return {
                value:"foo_val",', false);
    }

    public function testTrigger()
    {
        $this->view('input::cascader', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'resource'      => 'foo_res',
            'value'         => 'foo_val',
            'trigger'       => 'foo_trigger',
            'options'       => '',
        ])->assertSee('expandTrigger: "foo_trigger",', false);
    }
}
