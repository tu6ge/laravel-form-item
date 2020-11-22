<?php

namespace LaravelFormItem\Tests\Blades;

use LaravelFormItem\Tests\ViewTestCase;

class CheckboxTest extends ViewTestCase
{
    public function testId()
    {
        $this->view('input::checkbox', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'arr_value'     => 'foo_val',
            'options'       => [],
        ])->assertSee('<div id="bar_id" >', false)
            ->assertSee('var x_input_bar_id = new Vue({', false)
            ->assertSee('el:\'#bar_id\',', false);
    }

    public function testName()
    {
        $this->view('input::checkbox', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'arr_value'     => 'foo_val',
            'options'       => [],
        ])->assertSee('<input type="hidden" name="foo_name" v-model="value" />', false);
    }

    public function testValue()
    {
        $this->view('input::checkbox', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'arr_value'     => 'foo_val',
            'options'       => [],
        ])->assertSee('return {
                value:"foo_val",', false);
    }

    public function testAttributes()
    {
        $this->view('input::checkbox', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'arr_value'     => 'foo_val',
            'options'       => [],
        ])->assertSee('el-checkbox-group v-model="value" foo_attr', false);
    }

    public function testOptions()
    {
        $this->view('input::checkbox', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'arr_value'     => 'foo_val',
            'options'       => [
                [
                    'value' => 11,
                    'text'  => '西瓜'
                ],
                [
                    'value' => 22,
                    'text'  => '苹果'
                ],
                [
                    'value' => 23,
                    'text'  => '香蕉',
                    'prop'  => 'bar_prop'
                ],
            ],
        ])->assertSeeInOrder([
            '<el-checkbox :label=\'11\' >西瓜</el-checkbox>',
            '<el-checkbox :label=\'22\' >苹果</el-checkbox>',
            '<el-checkbox :label=\'23\' bar_prop>香蕉</el-checkbox>',
        ], false);
    }
}
