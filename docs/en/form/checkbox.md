# Checkbox

## Basic usage

<demo-block>
The default value needs to pass an array
::: slot source
<el-checkbox-group v-model="checkbox1">
<el-checkbox label="watermelon">Watermelon</el-checkbox>
<el-checkbox label="apple">Apple</el-checkbox>
<el-checkbox label="banana">Banana</el-checkbox>
</el-checkbox-group>
:::
::: slot highlight
To build an array of options in PHP file, each array must have `value` and `text`,
 which represent the value of options and the displayed text, respectively.
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'checkbox1_value' => [ // The default value is an array.
            'apple',
            'banana',
        ],
        'checkbox1_option' => [
            [
                'value' => 'watermelon',
                'text' => 'Watermelon'
            ],
            [
                'value' => 'apple',
                'text'  => 'Apple',
            ],
            [
                'value' => 'banana',
                'text'  => 'Banana'
            ]
        ],
    ]);
});
```
In the `demo-view` view file, set `$checkbox1_option` and `$checkbox1_value` is passed to the `input-checkbox` component.
``` html
<x-input-checkbox name="checkbox1" :options="$checkbox1_option" :value="$checkbox1_value"></x-input-checkbox>
```
:::
</demo-block>

::: tip
After submitting the form, the value of the checkbox is a string in the format of `11,22`.
Please use `explode` or other methods to convert it into an array.
:::

## Disable some options

<demo-block>
The default value needs to pass an array
::: slot source
<el-checkbox-group v-model="checkbox2">
<el-checkbox label="watermelon">Watermelon</el-checkbox>
<el-checkbox label="apple">Apple</el-checkbox>
<el-checkbox label="banana">Banana</el-checkbox>
</el-checkbox-group>
:::
::: slot highlight
To build an array of options in PHP file, each array must have `value` and `text`,
 which represent the value of options and the displayed text, respectively.
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'checkbox1_value' => [ // The default value is an array.
            'apple',
        ],
        'checkbox1_option' => [
            [
                'value' => 'watermelon',
                'text' => 'Watermelon',
            ],
            [
                'value' => 'apple',
                'text'  => 'Apple',
            ],
            [
                'value' => 'banana',
                'text'  => 'Banana',
            ]
        ],
    ]);
});
```
In the `demo-view` view file, set `$checkbox1_option` and `$checkbox1_value` is passed to the `input-checkbox` component.
``` html
<x-input-checkbox name="checkbox1" :options="$checkbox1_option" :value="$checkbox1_value"></x-input-checkbox>
```
:::
</demo-block>

## Button Style

<demo-block>
The default value needs to pass an array
::: slot source
<el-checkbox-group v-model="checkbox1">
<el-checkbox-button label="watermelon">Watermelon</el-checkbox-button>
<el-checkbox-button label="apple">Apple</el-checkbox-button>
<el-checkbox-button label="banana">Banana</el-checkbox-button>
</el-checkbox-group>
:::
::: slot highlight
To build an array of options in PHP file, each array must have `value` and `text`,
 which represent the value of options and the displayed text, respectively.
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'checkbox1_value' => [ // The default value is an array.
            'apple',
            'banana',
        ],
        'checkbox1_option' => [
            [
                'value' => 'watermelon',
                'text' => 'Watermelon'
            ],
            [
                'value' => 'apple',
                'text'  => 'Apple',
            ],
            [
                'value' => 'banana',
                'text'  => 'Banana'
            ]
        ],
    ]);
});
```
In the `demo-view` view file, set `$checkbox1_option` and `$checkbox1_value` is passed to the `input-checkbox` component.
``` html
<x-input-checkbox-button name="checkbox1" :options="$checkbox1_option" :value="$checkbox1_value"></x-input-checkbox-button>
```
:::
</demo-block>

## Option Array Rule

We have agreed on the option data used in the checkbox. Each option needs to have the following fields:

| Field | Required | Type | Description |
|----|----|----|---|
| value | Required| int or string | The value of the option, which is finally passed to the form |
| text | Required|string | Option is used to display the page |
| prop | No Required | string | It is used to control certain features of a single option, eg: `disabled`, see [API docs](/en/api.html#checkbox) look more. |

<script>
export default {
    data(){
        return {
            checkbox1:['apple','banana'],
            checkbox2:['apple'],
            slider2:80,
        };
    }
};
</script>