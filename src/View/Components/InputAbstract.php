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

    /**
     * input element type attribute.
     *
     * @var string
     */
    public string $type = '';

    /**
     * append to Element UI component prop
     *
     * @var string
     */
    public string $append_el_prop = '';

    public function __construct($name, $value = null, $id = null, $type = '', $placeholder = '', $appendElProp = '')
    {
        $this->name = $name;

        $this->value = $value;

        $this->id = $id ?: $this->defaultId();

        $this->type = $type;

        if ($placeholder) {
            $this->addElProp(sprintf('placeholder=%s', $placeholder));
        }

        if ($appendElProp) {
            $this->addElProp($appendElProp);
        }
    }

    public function defaultId()
    {
        return sprintf('input_%s', (new ShortUuid())->encode(Uuid::uuid4()));
    }

    public function render()
    {
        return view(sprintf('input::%s', strtolower(static::class)));
    }

    public function addElProp($prop)
    {
        $this->append_el_prop .= sprintf(' %s', $prop);
    }
}
