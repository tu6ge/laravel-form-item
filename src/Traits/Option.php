<?php

namespace LaravelFormItem\Traits;

use Illuminate\Support\Collection;
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

    protected function formateCascaderOptions($options)
    {
        if (empty($options)) {
            return [];
        }
        $options = is_array($options) ? collect($options) : $options;

        $check_item = $options->every(function ($item) {
            return isset($item['value']) && isset($item['text']) && isset($item['children']);
        });
        if ($check_item == false) {
            throw new InvalidArgumentException('radio option Collection is must have "value","text","children" property');
        }

        $options = $this->convertOptions($options);

        return $options;
    }

    /**
     * update text attribute to label.
     *
     * @param $options
     *
     * @return Collection
     */
    protected function convertOptions($options)
    {
        $options = collect($options)->map(function ($item) {
            $item['label'] = $item['text'];
            if (!empty($item['children'])) {
                $item['children'] = $this->convertOptions($item['children']);
            }

            return $item;
        });

        return $options;
    }
}
