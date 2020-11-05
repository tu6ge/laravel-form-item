<?php

namespace LaravelFormItem\View\Components;

class DatePicker extends InputAbstract
{
    public function __construct(
        $name,
        $id = null,
        $type = 'date',
        $appendElProp = ''
    ) {
        $this->name = $name;

        $this->value = ''; // todo 默认值未设置

        $this->id = $id ?: $this->defaultId();

        $this->type = $type;

        if ($appendElProp) {
            $this->addElProp($appendElProp);
        }
    }

    public function render()
    {
        return view('input::date-picker');
    }
}
