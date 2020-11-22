<?php

namespace LaravelFormItem\Tests\Blades;

use LaravelFormItem\Tests\ViewTestCase;

class SliderTest extends ViewTestCase
{
    public function testId()
    {
        $this->view('input::slider', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
        ])->assertSee('<div id="bar_id" >', false)
            ->assertSee('var x_input_bar_id = new Vue({', false)
            ->assertSee('el:\'#bar_id\',', false);
    }

    public function testName()
    {
        $this->view('input::slider', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
        ])->assertSee('<input type="hidden" name="foo_name" v-model="value" />', false);
    }

    public function testValue()
    {
        $this->view('input::slider', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
        ])->assertSee('return {
                value:"foo_val",', false);
    }

    public function testAttributes()
    {
        $this->view('input::slider', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
        ])->assertSee('<el-slider v-model="value" foo_attr></el-slider>', false);
    }
}
