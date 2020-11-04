<?php

namespace LaravelFormItem\Traits;

use InvalidArgumentException;

trait Option
{
    protected function formatOptions($options)
    {
        if (empty($options)) {
            throw new InvalidArgumentException('radio input option is null');
        }
        $options = is_array($options) ? collect($options) : $options;

        $check_item = $options->every(function ($item) {
            return isset($item['value']) && isset($item['text']);
        });
        if ($check_item == false) {
            throw new InvalidArgumentException('radio option Collection is must have "value","text" property');
        }

        return $options;
    }
}
