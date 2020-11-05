<?php

namespace LaravelFormItem\View\Components;

class CheckboxButton extends Checkbox
{
    public function render()
    {
        return view('input::checkbox-button');
    }
}
