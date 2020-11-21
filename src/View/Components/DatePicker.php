<?php

namespace LaravelFormItem\View\Components;

use Carbon\Carbon;
use LaravelFormItem\Traits\DateConvert;

class DatePicker extends InputAbstract
{
    use DateConvert;

//    public string $php_value_format = '';
//
//    public string $value_format = '';

    public function __construct(
        $name,
        //$value = '',
        $id = null,
        $type = 'date',
        //$valueFormat = 'yyyy-MM-dd',
        $appendElProp = ''
    ) {
        $this->name = $name;

        //$this->value_format = $valueFormat;

        //$this->php_value_format = $this->elementUI2PHP($valueFormat);

//        if (!empty($value)) {
//            $this->value = Carbon::createFromFormat($this->php_value_format, $value)->toIso8601String();
//        }

        $this->id = $id ?: $this->defaultId();

        $this->type = $type;

        if ($appendElProp) {
            $this->addElProp($appendElProp);
        }
    }

    public function render()
    {
        return view('input::date-picker');
    }
}
