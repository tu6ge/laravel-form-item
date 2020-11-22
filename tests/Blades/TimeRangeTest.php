<?php

namespace LaravelFormItem\Tests\Blades;

use LaravelFormItem\Tests\ViewTestCase;

class TimeRangeTest extends ViewTestCase
{
    public function testId()
    {
        $this->view('input::time-range', [
            'id'                => 'bar_id',
            'attributes'        => 'foo_attr',
            'name'              => 'foo_name',
            'array_value'       => ['val1', 'val2'],
            'format'            => 'bar_format',
            'picker_options'    => '',
        ])->assertSee('<div id="bar_id" >', false)
            ->assertSee('var x_input_bar_id = new Vue({', false)
            ->assertSee('el:\'#bar_id\',', false);
    }

    public function testName()
    {
        $this->view('input::time-range', [
            'id'                => 'bar_id',
            'attributes'        => 'foo_attr',
            'name'              => 'foo_name',
            'array_value'       => ['val1', 'val2'],
            'format'            => 'bar_format',
            'picker_options'    => '',
        ])->assertSee('<input type="hidden" name="foo_name" :value="value_string" />', false);
    }

    public function testValue()
    {
        $this->view('input::time-range', [
            'id'                => 'bar_id',
            'attributes'        => 'foo_attr',
            'name'              => 'foo_name',
            'array_value'       => ['val1', 'val2'],
            'format'            => 'bar_format',
            'picker_options'    => '',
        ])->assertSee('return {
                value: [
                                            dayjs("val1", "bar_format").toDate(),
                                                                dayjs("val2", "bar_format").toDate(),', false);

        $this->view('input::time-range', [
            'id'                => 'bar_id',
            'attributes'        => 'foo_attr',
            'name'              => 'foo_name',
            'array_value'       => [],
            'format'            => 'bar_format',
            'picker_options'    => '',
        ])->assertSee('return {
                value: [
                                            dayjs().toDate(),
                                                                dayjs().toDate(),', false);
    }

    public function testComputed()
    {
        $this->view('input::time-range', [
            'id'                => 'bar_id',
            'attributes'        => 'foo_attr',
            'name'              => 'foo_name',
            'array_value'       => [],
            'format'            => 'bar_format',
            'picker_options'    => '',
        ])->assertSee('computed:{
            value_string(){
                return dayjs(this.value[0]).format(\'HH:mm:ss\')
                 + \',\' + dayjs(this.value[1]).format(\'HH:mm:ss\')
            }
        }', false);
    }

    public function testAttributes()
    {
        $this->view('input::time-range', [
            'id'                => 'bar_id',
            'attributes'        => 'foo_attr',
            'name'              => 'foo_name',
            'array_value'       => ['val1', 'val2'],
            'format'            => 'bar_format',
            'picker_options'    => '',
        ])->assertSee('el-time-picker v-model="value" is-range foo_attr ', false);
    }

    public function testOptions()
    {
        $this->view('input::time-range', [
            'id'                => 'bar_id',
            'attributes'        => 'foo_attr',
            'name'              => 'foo_name',
            'array_value'       => ['val1', 'val2'],
            'format'            => 'bar_format',
            'picker_options'    => '',
        ])->assertDontSee(':picker-options=', false);

        $this->view('input::time-range', [
            'id'                => 'bar_id',
            'attributes'        => 'foo_attr',
            'name'              => 'foo_name',
            'array_value'       => ['val1', 'val2'],
            'format'            => 'bar_format',
            'picker_options'    => 'bar_opt',
        ])->assertDontSee(':picker-options=\'bar_opt\'', false);
    }
}
