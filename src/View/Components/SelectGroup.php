<?php

namespace LaravelFormItem\View\Components;

use Illuminate\Support\Collection;
use LaravelFormItem\Traits\Option;

class SelectGroup extends InputAbstract
{
    use Option;

    /**
     * radio option.
     *
     * @var Collection
     */
    public $options;

    public function __construct($name, $options, $value = null, $id = null)
    {
        $this->name = $name;

        $this->value = $value;

        $this->id = $id ?: $this->defaultId();

        $this->options = $this->formatSelectGroupOptions($options);
    }

    public function render()
    {
        return view('input::select-group');
    }
}
