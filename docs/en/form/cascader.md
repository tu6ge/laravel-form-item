# Cascader

## Basic usage

<demo-block>
First of all, we build an array of options in the PHP file. Each array must contain `value`,`text` and `children`,
which represent the value of options and the displayed text respectively and subordinate data array.

::: slot source
<el-cascader v-model="cascader1" :options="options1">
</el-cascader>
:::
::: slot highlight
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'cascader1_option' => [
            [
                'value' => 1,
                'text' => 'Fruits',
                'children' => [
                    [
                        'value' => 11,
                        'text' => 'Apply',
                        'children' => [
                            [
                                'value' => 1101,
                                'text'  => 'Fuji apple'
                            ]
                        ]
                    ],
                    [
                        'value' => 12,
                        'text' => 'Banana'
                    ],
                ]
            ],
            [
                'value' => 2,
                'text' => 'Vegetables',
                'children' => []
            ]
        ],
    ]);
});
```
In the `demo-view` view file, set `$cascader1_option` is passed to the `input-cascader` component.
``` html
<x-input-cascader name="cascader1" :options="$cascader1_option" ></x-input-cascader>
```
:::
</demo-block>

## Set default value

<demo-block>
The value needs to be assigned to an array containing the index of each level.
::: slot source
<el-cascader v-model="cascader2" :options="options1">
</el-cascader>
:::
::: slot highlight
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'cascader1_option' => [
            [
                'value' => 1,
                'text' => 'Fruits',
                'children' => [
                    [
                        'value' => 11,
                        'text' => 'Apply',
                        'children' => [
                            [
                                'value' => 1101,
                                'text'  => 'Fuji apple'
                            ]
                        ]
                    ],
                    [
                        'value' => 12,
                        'text' => 'Banana'
                    ],
                ]
            ],
            [
                'value' => 2,
                'text' => 'Vegetables',
                'children' => []
            ]
        ],
    ]);
});
```
In the `demo-view` view file, set `$cascader1_option` is passed to the `input-cascader` component, and set default value.
``` html
<x-input-cascader name="cascader1" :options="$cascader1_option" :value="[1,11,1101]"></x-input-cascader>
```
:::
</demo-block>

## Disable some options

<demo-block>
First of all, we build an array of options in the PHP file. Each array must contain `value`,`text` and `children`,
which represent the value of options and the displayed text respectively and subordinate data array.

::: slot source
<el-cascader v-model="cascader2" :options="options2">
</el-cascader>
:::
::: slot highlight
```php
Route::get('demo', function() {
    return view('demo-view', [
        'cascader1_option' => [
            [
                'value' => 1,
                'text' => 'Fruits',
                'children' => [
                    [
                        'value' => 11,
                        'text' => 'Apply',
                        'children' => [
                            [
                                'value' => 1101,
                                'text'  => 'Fuji apple',
                            ]
                        ]
                    ],
                    [
                        'value' => 12,
                        'text' => 'Banana'
                        'disabled' => true, // Disabled select Banana
                    ],
                ]
            ],
            [
                'value' => 2,
                'text' => 'Vegetables',
                'children' => []
            ]
        ],
    ]);
});
```
In the `demo-view` view file, set `$cascader1_option` is passed to the `input-cascader` component, and set default value.
```html
<x-input-cascader name="cascader1" :options="$cascader1_option" :value="[1,11,1101]"></x-input-cascader>
```
:::
</demo-block>

## Option array conventions

We have agreed on the option data of each level used in the cascade selector. Each option needs to have the following fields:

| Field | Required | Type | Description |
|----|----|----|---|
| value | Required| int or string | The value of the option, which is finally passed to the form |
| text | Required | string | Option is used to display the page |
| disabled | No Required | bool | disable option or not,default is `false` |
| children | No Required | array | The lower level option array corresponding to this option. If there is no lower level, you should set it `[]` |

## Asynchronous loading

If you have more data in each level of your selector, it is not feasible to load all at once. So we provide a `resource` option. You only need to set an API for GET requests and set the API path Set to the `resource` option, for example:
```php
<x-input-cascader name="aaa2" resource="get_child_url/__pid__"></x-input-cascader>
```

You may have found the one in the above example`__ pid__ `,this is the identification bit of a parameter. When the first level data is requested, it will be changed to `0` , and then the API will be requested. If the second level data of an option needs to be requested,
The component is automatically replaced with the value of this option`__ pid__ ` , then request the API to get the lower level of the classification.

This means that when you develop an API, you need to include the following fields to identify the options

| Field | Required | Type | Description |
|----|----|----|---|
| value | Required| int or string | The value of the option, which is finally passed to the form |
| text | Required|string | Option is used to display the page |
| leaf | Required | bool | Identifies whether the node is the final node, If it is final ,it should return `true`, otherwise return `false` |
| disabled | No Required | bool | disable option or not,default is `false` |

<script>
export default {
    data(){
        return {
            cascader1:'',
            cascader2:[1,11,1101],
            options1:[
                {
                    'value' : 1,
                    'label' : 'Fruits',
                    'children' : [
                        {
                            'value' : 11,
                            'label' : 'Apply',
                            'children' : [
                                {
                                    'value' : 1101,
                                    'label'  : 'Fuji apple'
                                }
                            ]
                        },
                        {
                            'value' : 12,
                            'label' : 'Banana',
                        },
                    ]
                },
                {
                    'value' : 2,
                    'label' : 'Vegetables',
                    'children' : []
                }
            ],
            options2:[
                {
                    'value' : 1,
                    'label' : 'Fruits',
                    'children' : [
                        {
                            'value' : 11,
                            'label' : 'Apply',
                            'children' : [
                                {
                                    'value' : 1101,
                                    'label'  : 'Fuji apple'
                                }
                            ]
                        },
                        {
                            'value' : 12,
                            'label' : 'Banana',
                            'disabled': true,
                        },
                    ]
                },
                {
                    'value' : 2,
                    'label' : 'Vegetables',
                    'children' : []
                }
            ],
        };
    }
};
</script>