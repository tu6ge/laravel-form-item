<?php

namespace LaravelFormItem\View\Components;

use Illuminate\Support\Collection;
use LaravelFormItem\Traits\Option;
use PascalDeVink\ShortUuid\ShortUuid;
use Ramsey\Uuid\Uuid;

class Cascader extends InputAbstract
{
    use Option;

    /**
     * radio option.
     * @var Collection
     */
    public $options;

    public function __construct($name, $value = null, $id = null, $options)
    {
        $this->name = $name;

        $this->value = $value;

        $this->id = $id ?: $this->defaultId();

        $this->options = $this->formatOptions($options);
    }

    public function render()
    {
        return view('input::cascader');
    }
}
