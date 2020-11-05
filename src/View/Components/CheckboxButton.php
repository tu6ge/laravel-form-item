<?php

namespace LaravelFormItem\View\Components;

use Illuminate\Support\Collection;
use LaravelFormItem\Traits\Option;

class CheckboxButton extends Checkbox
{

    public function render()
    {
        return view('input::checkbox-button');
    }
}
