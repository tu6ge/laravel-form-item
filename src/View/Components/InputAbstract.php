<?php

namespace LaravelFormItem\View\Components;

use Illuminate\View\Component;
use PascalDeVink\ShortUuid\ShortUuid;
use Ramsey\Uuid\Uuid;

abstract class InputAbstract extends Component
{
    /**
     * input element name attribute.
     *
     * @var string
     */
    public $name;

    /**
     * input element default value.
     *
     * @var null
     */
    public $value = null;

    /**
     * input element id attribute.
     *
     * @var string|null
     */
    public $id = null;

    public function __construct($name, $value = null, $id = null)
    {
        $this->name = $name;

        $this->value = $value;

        $this->id = $id ?: $this->defaultId();
    }

    public function defaultId()
    {
        return sprintf('input_%s', (new ShortUuid())->encode(Uuid::uuid4()));
    }

    public function render()
    {
        return view(sprintf('input::%s', strtolower(static::class)));
    }
}
