<?php

namespace LaravelFormItem\Traits;

use Illuminate\Support\Collection;
use InvalidArgumentException;

trait Option
{
    protected function formatOptions($options)
    {
        if (empty($options)) {
            throw new InvalidArgumentException(sprintf('%s input option is null', strtolower(__CLASS__)));
        }
        $options = is_array($options) ? collect($options) : $options;

        $check_item = $options->every(function ($item) {
            return isset($item['value']) && isset($item['text']);
        });
        if ($check_item == false) {
            throw new InvalidArgumentException(
                sprintf('%s option Collection is must have "value","text" property', strtolower(__CLASS__))
            );
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
            return isset($item['value']) && isset($item['text']) && isset($item['children']) && is_array($item['children']);
        });
        if ($check_item == false) {
            throw new InvalidArgumentException(sprintf(
                '%s option Collection is must have "value","text","children" property, and children must is an array',
                strtolower(__CLASS__)
            ));
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
            if(!isset($item['value']) || !isset($item['text'])){
                throw new InvalidArgumentException('cascader option is must has value,text field');
            }
            $item['label'] = $item['text'];
            if (!empty($item['children'])) {
                $item['children'] = $this->convertOptions($item['children']);
            }

            return $item;
        });

        return $options;
    }

    protected function formatSelectGroupOptions($options)
    {
        if (empty($options)) {
            throw new InvalidArgumentException('select group option is null');
        }
        $options = is_array($options) ? collect($options) : $options;

        $check_item = $options->every(function ($item) {
            return isset($item['text']) && isset($item['children']);
        });
        if ($check_item == false) {
            throw new InvalidArgumentException('select group option Collection is must have "text" and "children" property');
        }
        $check_item = $options->every(function ($item) {
            return is_array($item['children']);
        });
        if ($check_item == false) {
            throw new InvalidArgumentException('select group option property"children" must is an array');
        }

        return $options;
    }
}
