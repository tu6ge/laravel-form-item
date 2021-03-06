<?php

namespace LaravelFormItem\View\Components;

class TimeRange extends InputAbstract
{
    /**
     * input element default value.
     *
     * @var array
     */
    public $array_value = [];
    /**
     * set default value format ,eg: hh:mm:ss .
     *
     * @var string
     */
    public $format = '';

    /**
     * set element UI component time-picker picker_options.
     *
     * @var array
     */
    public $picker_options = [];

    public function __construct(
        $name,
        $id = null,
        $value = [],
        $format = 'hh:mm:ss',
        $pickerOptions = []
    ) {
        $this->name = $name;

        $this->array_value = $value;

        $this->format = $format;

        $this->picker_options = $pickerOptions;

        $this->id = $id ?: $this->defaultId();
    }

    public function render()
    {
        return view('input::time-range');
    }
}
