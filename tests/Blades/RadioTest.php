<?php

namespace LaravelFormItem\Tests\Blades;

use LaravelFormItem\Tests\ViewTestCase;

class RadioTest extends ViewTestCase
{
    public function testId()
    {
        $this->view('input::radio', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
            'options'       => [],
        ])->assertSee('<div id="bar_id" >', false)
            ->assertSee('var x_input_bar_id = new Vue({', false)
            ->assertSee('el:\'#bar_id\',', false);
    }

    public function testName()
    {
        $this->view('input::radio', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
            'options'       => [],
        ])->assertSee('<input type="hidden" name="foo_name" v-model="value" />', false);
    }

    public function testValue()
    {
        $this->view('input::radio', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
            'options'       => [],
        ])->assertSee('return {
                value:"foo_val",', false);
    }

    public function testAttributes()
    {
        $this->view('input::radio', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
            'options'       => [],
        ])->assertSee('<el-radio-group v-model="value" foo_attr>', false);
    }

    public function testOptions()
    {
        $this->view('input::radio', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
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
            '<el-radio :label=\'11\' >西瓜</el-radio>',
            '<el-radio :label=\'22\' >苹果</el-radio>',
            '<el-radio :label=\'23\' bar_prop>香蕉</el-radio>',
        ], false);
    }
}
