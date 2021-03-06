<?php

namespace LaravelFormItem\View\Components;

use Illuminate\Support\Collection;
use LaravelFormItem\Traits\Option;

class Select extends InputAbstract
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

        $this->options = $this->formatOptions($options);
    }

    public function render()
    {
        return view('input::select');
    }
}
