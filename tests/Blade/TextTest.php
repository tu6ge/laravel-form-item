<?php

namespace LaravelFormItem\Tests\Blade;

use LaravelFormItem\Tests\ViewTestCase;

class TextTest extends ViewTestCase
{
    public function testRender()
    {
        $this->view('input::text', [
            'id' => 'foo_id',
            'name' => 'foo_name',
            'append_el_prop' => 'foo_prop',
            'value' => 'bar_1',
            'type' => 'bar_type',
        ])
            ->assertSee('<div id="foo_id" >', false)
            ->assertSee('v-model="value" type="bar_type"', false)
            ->assertSee('foo_prop></el-input>', false)
            ->assertSee('name="foo_name" v-model="value"', false)
            ->assertSee('var x_input_foo_id = new Vue({', false)
            ->assertSee('el:\'#foo_id\',', false)
            ->assertSee('return {
                value:\'bar_1\'
            };', false)
        ;

        $this->view('input::text', [
            'id' => 'foo_id',
            'name' => 'foo_name',
            'append_el_prop' => 'foo_prop',
            'value' => 'bar_1',
            'type' => '',
        ])
            ->assertSee('v-model="value" type="text"', false)
        ;
    }
}