<?php

namespace LaravelFormItem\View\Components;

class TimeSelect extends InputAbstract
{
    /**
     * set element UI component picker-options.
     *
     * @var array
     */
    public $picker_options = [];

    public function __construct(
        $name,
        $id = null,
        $value = '',
        $pickerOptions = []
    ) {
        $this->name = $name;

        $this->id = $id ?: $this->defaultId();

        $this->value = $value;

        $this->picker_options = $pickerOptions;
    }

    public function render()
    {
        return view('input::time-select');
    }
}
