<?php

namespace LaravelFormItem\Tests\Blades;

use LaravelFormItem\Tests\ViewTestCase;

class TimeSelectTest extends ViewTestCase
{
    public function testId()
    {
        $this->view('input::time-select', [
            'id'                => 'bar_id',
            'attributes'        => 'foo_attr',
            'name'              => 'foo_name',
            'value'             => 'foo_val',
            'picker_options'    => '',
        ])->assertSee('<div id="bar_id" >', false)
            ->assertSee('var x_input_bar_id = new Vue({', false)
            ->assertSee('el:\'#bar_id\',', false);
    }

    public function testName()
    {
        $this->view('input::time-select', [
            'id'                => 'bar_id',
            'attributes'        => 'foo_attr',
            'name'              => 'foo_name',
            'value'             => 'foo_val',
            'picker_options'    => '',
        ])->assertSee('<input type="hidden" name="foo_name" v-model="value" />', false);
    }

    public function testValue()
    {
        $this->view('input::time-select', [
            'id'                => 'bar_id',
            'attributes'        => 'foo_attr',
            'name'              => 'foo_name',
            'value'             => 'foo_val',
            'picker_options'    => '',
        ])->assertSee('return {
                value:"foo_val",', false);
    }

    public function testAttributes()
    {
        $this->view('input::time-select', [
            'id'                => 'bar_id',
            'attributes'        => 'foo_attr',
            'name'              => 'foo_name',
            'value'             => 'foo_val',
            'picker_options'    => '',
        ])->assertSee('<el-time-select v-model="value" foo_attr ', false);
    }

    public function testOption()
    {
        $this->view('input::time-select', [
            'id'                => 'bar_id',
            'attributes'        => 'foo_attr',
            'name'              => 'foo_name',
            'value'             => 'foo_val',
            'picker_options'    => 'bar_opt',
        ])->assertSee(':picker-options=\'"bar_opt"\'></el-time-select>', false);
    }
}
