<?php

namespace LaravelFormItem\Tests\Blades;

use LaravelFormItem\Tests\ViewTestCase;

class SelectGroupTest extends ViewTestCase
{
    public function testId()
    {
        $this->view('input::select-group', [
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
        $this->view('input::select-group', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
            'options'       => [],
        ])->assertSee('<input type="hidden" name="foo_name" v-model="value" />', false);
    }

    public function testValue()
    {
        $this->view('input::select-group', [
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
        $this->view('input::select-group', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
            'options'       => [],
        ])->assertSee('<el-select v-model="value" foo_attr>', false);
    }

    public function testOptions()
    {
        $this->view('input::select-group', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
            'options'       => [
                [
                    'text'      => '水果',
                    'children'  => [
                        [
                            'value' => 11,
                            'text'  => '西瓜',
                        ],
                        [
                            'value' => 22,
                            'text'  => '苹果',
                            'prop'  => 'disabled',
                        ],
                        [
                            'value' => 23,
                            'text'  => '香蕉',
                        ],
                    ],
                ],
            ],
        ])->assertSeeInOrder([
            '<el-select',
            '<el-option-group',
            '<el-option :value=\'11\' label="西瓜" ></el-option>',
            '<el-option :value=\'22\' label="苹果" disabled></el-option>',
            '<el-option :value=\'23\' label="香蕉" ></el-option>',
            '</el-option-group>',
            '</el-select>',
        ], false);
    }
}
