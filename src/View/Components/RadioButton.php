<?php

namespace LaravelFormItem\View\Components;

class RadioButton extends Radio
{
    public function __construct($name, $value = null, $id = null, $options, $size = '', $appendElProp = '')
    {
        parent::__construct($name, $value, $id, $options, $appendElProp = '');

        if ($size) {
            $this->addElProp(sprintf('size=%s', $size));
        }
    }

    public function render()
    {
        return view('input::radio-button');
    }
}
