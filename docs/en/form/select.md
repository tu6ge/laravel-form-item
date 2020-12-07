# Select

## Basic usage

<demo-block>
Default Selected is Apple.
::: slot source
<el-select v-model="select1">
<el-option label="Watermelon" :value="11"></el-option>
<el-option label="Apple" :value="22"></el-option>
<el-option label="Banana" :value="23"></el-option>
</el-select>
:::
::: slot highlight
To build an array of options in PHP file, each array must have `value` and `text`,
 which represent the value of options and the displayed text, respectively.
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'select1_option' => [
            [
                'value' => 11,
                'text' => 'Watermelon'
            ],
            [
                'value' => 22,
                'text'  => 'Apple'
            ],
            [
                'value' => 23,
                'text'  => 'Banana',
            ]
        ],
    ]);
});
```
In the `demo-view` view file, set `$radio1_option` is passed to the `input-select` component.
``` html
<x-input-select name="select1" :options="$select1_option" :value="22" ></x-input-select>
```
:::
</demo-block>

## Option Group

<demo-block>
Default selected is Apple.
::: slot source
<el-select v-model="select2">
<el-option-group label="Fruits">
<el-option label="Watermelon" :value="11"></el-option>
<el-option label="Apple" :value="22" disabled></el-option>
<el-option label="Banana" :value="23"></el-option>
</el-option-group>
<el-option-group label="Vegetables" disabled>
<el-option label="Leek" :value="21"></el-option>
<el-option label="kidney bean" :value="33"></el-option>
<el-option label="Chinese cabbage" :value="44"></el-option>
</el-option-group>
</el-select>
:::
::: slot highlight
To build an array of options in PHP file, each array must have `value` and `text`,
 which represent the value of options and the displayed text, respectively.
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'select2_option' => [
            [
                'text' => '水果', // 组名字
                'children' => [
                    [
                        'value' => 11,
                        'text' => 'Watermelon' //option text
                    ],
                    [
                        'value' => 22,
                        'text'  => 'Apple',
                        'prop'  => 'disabled', // You can disable an option
                    ],
                    [
                        'value' => 23,
                        'text'  => 'Banana'
                    ]
                ]
            ],
            [
                'text' => 'Vegetables',
                'prop'  => 'disabled', // You also can disable an group
                'children' => [
                    [
                        'value' => 21,
                        'text' => 'Leek'
                    ],
                    [
                        'value' => 33,
                        'text'  => 'kidney bean'
                    ],
                    [
                        'value' => 44,
                        'text'  => 'Chinese cabbage'
                    ]
                ]
            ]
        ],
    ]);
});
```
In the `demo-view` view file, set `$select2_option` is passed to the `input-select` component.
``` html
<x-input-select-group name="select2" :options="$select2_option" :value="22" ></x-input-select-group>
```
:::
</demo-block>

## Option Array Rule

We have agreed on the option data used in the radio. Each option needs to have the following fields.

- Select Option:

| Field | Required | Type | Description |
|----|----|----|---|
| value | Required| int 或 string | The value of the option, which is finally passed to the form |
| text | Required|string | Option is used to display the page |
| prop | No Required | string | It is used to control certain features of a single option, eg: `disabled`, see [API docs](/en/api.html#select) look more. |

- Select Group Option:

| Field | Required | Type | Description |
|----|----|----|---|
| text | Required|string | group name |
| children | Required| array | The array of options of group, each option is a normal **Select Option** |

<script>
export default {
    data(){
        return {
            select1:22,
            select2:11,
            radio3:22,
        };
    }
};
</script>