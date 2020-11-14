<?php

namespace LaravelFormItem\View\Components;

class RadioButton extends Radio
{
    public function __construct($name, $options, $value = null, $id = null, $size = '', $appendElProp = '')
    {
        parent::__construct($name, $options, $value, $id, $appendElProp);

        if ($size) {
            $this->addElProp(sprintf('size=%s', $size));
        }
    }

    public function render()
    {
        return view('input::radio-button');
    }
}
