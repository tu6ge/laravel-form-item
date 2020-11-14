<?php

namespace LaravelFormItem\View\Components;

class TimeRange extends InputAbstract
{
    /**
     * input element default value.
     *
     * @var array
     */
    public array $array_value = [];
    /**
     * set default value format ,eg: hh:mm:ss .
     *
     * @var string
     */
    public string $format = '';

    /**
     * set element UI component time-picker picker_options.
     *
     * @var array
     */
    public array $picker_options = [];

    public function __construct(
        $name,
        $id = null,
        $value = [],
        $format = 'hh:mm:ss',
        $pickerOptions = [],
        $appendElProp = ''
    ) {
        $this->name = $name;

        $this->array_value = $value;

        $this->format = $format;

        $this->picker_options = $pickerOptions;

        $this->id = $id ?: $this->defaultId();

        if ($appendElProp) {
            $this->addElProp($appendElProp);
        }
    }

    public function render()
    {
        return view('input::time-range');
    }
}
