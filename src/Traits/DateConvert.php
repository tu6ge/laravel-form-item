<?php

namespace LaravelFormItem\Traits;

trait DateConvert
{
    /**
     * ElementUI date format convert to PHP format.
     * links:https://element.eleme.cn/#/en-US/component/date-picker#date-formats.
     *
     * @param $format
     * @return string|string[]|null
     */
    public function elementUI2PHP($format)
    {
        // todo 有待完善
        return preg_replace('/^yyyy-MM-dd$/', 'Y-m-d', $format);
    }

    /**
     * PHP format convert to ElementUI date format.
     *
     * @param $format
     * @return string|string[]|null
     */
    public function PHP2ElementUI($format)
    {
        // todo 有待完善
        return preg_replace('/^Y-m-d$/', 'yyyy-MM-dd', $format);
    }
}