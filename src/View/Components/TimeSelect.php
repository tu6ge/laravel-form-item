<?php

namespace LaravelFormItem\View\Components;

class TimeSelect extends InputAbstract
{
    /**
     * set element UI component picker-options.
     *
     * @var array
     */
    public array $picker_options = [];

    public function __construct(
        $name,
        $id = null,
        $value = '',
        $pickerOptions = [],
        $appendElProp = ''
    ) {
        $this->name = $name;

        $this->id = $id ?: $this->defaultId();

        $this->value = $value;

        $this->picker_options = $pickerOptions;

        if ($appendElProp) {
            $this->addElProp($appendElProp);
        }
    }

    public function render()
    {
        return view('input::time-select');
    }
}
