<?php

namespace LaravelFormItem\View\Components;

use Illuminate\Support\Collection;
use LaravelFormItem\Traits\Option;

class Checkbox extends InputAbstract
{
    use Option;

    /**
     * checkbox option.
     *
     * @var Collection
     */
    public $options;

    /**
     * checkbox value.
     *
     * @var array
     */
    public array $arr_value;

    public function __construct(
        $name,
        $options,
        $value = [],
        $id = null
    ) {
        $this->name = $name;

        $this->arr_value = $value;

        $this->id = $id ?: $this->defaultId();

        $this->options = $this->formatOptions($options);
    }

    public function render()
    {
        return view('input::checkbox');
    }
}
