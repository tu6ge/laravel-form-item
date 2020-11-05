<?php

namespace LaravelFormItem\View\Components;

class TimeSelect extends InputAbstract
{
    /**
     * set default value format ,eg: hh:mm:ss .
     *
     * @var string
     */
    public string $format = '';

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
        $pickerOptions = [],
        $appendElProp = ''
    ) {
        $this->name = $name;

        $this->value = $value;

        $this->picker_options = $pickerOptions;

        $this->id = $id ?: $this->defaultId();

        if ($appendElProp) {
            $this->addElProp($appendElProp);
        }
    }

    public function render()
    {
        return view('input::time-select');
    }
}
