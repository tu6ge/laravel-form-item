<?php

namespace LaravelFormItem\Tests\Blades;

use LaravelFormItem\Tests\ViewTestCase;

class SwitcherTest extends ViewTestCase
{
    public function testId()
    {
        $this->view('input::switcher', [
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
        $this->view('input::switcher', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
        ])->assertSee('<input type="hidden" name="foo_name" v-model="value" />', false);
    }

    public function testValue()
    {
        $this->view('input::switcher', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
        ])->assertSee('return {
                value:true,', false);

        $this->view('input::switcher', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => '',
        ])->assertSee('return {
                value:false,', false);
    }

    public function testAttributes()
    {
        $this->view('input::switcher', [
            'id'            => 'bar_id',
            'attributes'    => 'foo_attr',
            'name'          => 'foo_name',
            'value'         => 'foo_val',
        ])->assertSee('<el-switch v-model="value" foo_attr></el-switch>', false);
    }
}
