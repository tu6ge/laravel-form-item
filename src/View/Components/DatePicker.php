<?php

namespace LaravelFormItem\View\Components;

class DatePicker extends InputAbstract
{
    public function __construct($name, $id = null)
    {
        $this->name = $name;

        $this->value = ''; // todo 默认值未设置

        $this->id = $id ?: $this->defaultId();
    }

    public function render()
    {
        return view('input::date-picker');
    }
}
