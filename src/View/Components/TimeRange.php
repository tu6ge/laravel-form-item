<?php

namespace LaravelFormItem\View\Components;

class TimeRange extends InputAbstract
{
    /**
     * set default value format ,eg: hh:mm:ss
     *
     * @var string
     */
    public string $format = '';

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
        $pickerOptions = [],
        $appendElProp = ''
    ) {
        $this->name = $name;

        $this->value = $value;

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
