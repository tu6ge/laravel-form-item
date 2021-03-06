<?php

namespace LaravelFormItem\View\Components;

use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use InvalidArgumentException;
use LaravelFormItem\Traits\Option;

class Cascader extends InputAbstract
{
    use Option;

    /**
     * cascade option.
     *
     * @var Collection
     */
    public $options;

    /**
     * asynchronous request url.
     *
     * @var string
     */
    public $resource;

    /**
     * There are two ways (hover or click) to expand child option items.
     *
     * @var string
     */
    public $trigger = 'click';

    public function __construct(
        $name,
        $value = null,
        $id = null,
        $options = [],
        $resource = '',
        $trigger = ''
    ) {
        $this->name = $name;

        $this->value = $value;

        $this->id = $id ?: $this->defaultId();

        if (empty($options) && empty($resource)) {
            throw new InvalidArgumentException('options and resource can not be empty at the same time.');
        }

        $this->options = $this->formateCascaderOptions($options);

        $this->checkResource($resource);

        $this->resource = $resource;

        $trigger && $this->trigger = $trigger;
    }

    protected function checkResource($resource)
    {
        if (empty($resource)) {
            return true;
        }

        if (Str::contains($resource, '__pid__') == false) {
            throw new InvalidArgumentException('resource must be have "__pid__" string.');
        }
    }

    public function render()
    {
        return view('input::cascader');
    }
}
