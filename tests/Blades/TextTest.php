<?php

namespace LaravelFormItem\Tests\Blades;

use LaravelFormItem\Tests\ViewTestCase;

class TextTest extends ViewTestCase
{
    public function testId()
    {
        $this->view('input::text', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
            'type'          => '',
        ])->assertSee('<div id="bar_id" >', false)
            ->assertSee('var x_input_bar_id = new Vue({', false)
            ->assertSee('el:\'#bar_id\',', false);
    }

    public function testName()
    {
        $this->view('input::text', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
            'type'          => '',
        ])->assertSee('<input type="hidden" name="foo_name" v-model="value" />', false);
    }

    public function testValue()
    {
        $this->view('input::text', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
            'type'          => '',
        ])->assertSee('return {
                value:"foo_val",', false);
    }

    public function testAttributes()
    {
        $this->view('input::text', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
            'type'          => '',
        ])->assertSee('<el-input v-model="value" type="text" foo_attr></el-input>', false);
    }

    public function testType()
    {
        $this->view('input::text', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
            'type'          => 'bar_type',
        ])->assertSee('<el-input v-model="value" type="bar_type" foo_attr></el-input>', false);
    }
}
