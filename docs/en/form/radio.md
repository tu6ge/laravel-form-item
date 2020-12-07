# Radio

## Basic usage

<demo-block>
Default selected is Apple.
::: slot source
<el-radio-group v-model="radio1">
<el-radio :label="11">Watermelon</el-radio>
<el-radio :label="22">Apple</el-radio>
<el-radio :label="23">Banana</el-radio>
</el-radio-group>
:::
::: slot highlight
To build an array of options in PHP file, each array must have `value` and `text`,
 which represent the value of options and the displayed text, respectively.
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'radio1_option' => [
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
In the `demo-view` view file, set `$radio1_option` is passed to the `input-radio` component.
``` html
<x-input-radio name="radio1" :options="$radio1_option" :value="22" ></x-input-radio>
```
:::
</demo-block>

## Disabled some options

<demo-block>
Disabled banana.
::: slot source
<el-radio-group v-model="radio2">
<el-radio :label="11">Watermelon</el-radio>
<el-radio :label="22">Apple</el-radio>
<el-radio :label="23" disabled>Banana</el-radio>
</el-radio-group>
:::
::: slot highlight
To build an array of options in PHP file, each array must have `value` and `text`,
 which represent the value of options and the displayed text, respectively.
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'radio1_option' => [
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
                'prop'  => 'disabled', // This option is disabled.
            ]
        ],
    ]);
});
```
In the `demo-view` view file, set `$radio1_option` is passed to the `input-radio` component.
``` html
<x-input-radio name="radio1" :options="$radio1_option" :value="22" ></x-input-radio>
```
:::
</demo-block>

## Button Style

<demo-block>
Default Selected is Apple.
::: slot source
<el-radio-group v-model="radio3">
<el-radio-button :label="11">Watermelon</el-radio-button>
<el-radio-button :label="22">Apple</el-radio-button>
<el-radio-button :label="23">Banana</el-radio-button>
</el-radio-group>
:::
::: slot highlight
To build an array of options in PHP file, each array must have `value` and `text`,
 which represent the value of options and the displayed text, respectively.
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'radio3_option' => [
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
                // 'prop'  => 'disabled', // This option is disabled.
            ]
        ],
    ]);
});
```
In the `demo-view` view file, set `$radio3_option` is passed to the `input-radio-button` component.
``` html
<x-input-radio-button name="radio1" :options="$radio3_option" :value="22" ></x-input-radio-button>
```
:::
</demo-block>

## Button Size

<demo-block>
Default Selected is Apple.
::: slot source
<p>
<el-radio-group v-model="radio3">
<el-radio-button :label="11">Watermelon</el-radio-button>
<el-radio-button :label="22">Apple</el-radio-button>
<el-radio-button :label="23">Banana</el-radio-button>
</el-radio-group>
</p>
<p>
<el-radio-group v-model="radio3" size="medium">
<el-radio-button :label="11">Watermelon</el-radio-button>
<el-radio-button :label="22">Apple</el-radio-button>
<el-radio-button :label="23">Banana</el-radio-button>
</el-radio-group>
</p>
<p>
<el-radio-group v-model="radio3" size="small">
<el-radio-button :label="11">Watermelon</el-radio-button>
<el-radio-button :label="22">Apple</el-radio-button>
<el-radio-button :label="23">Banana</el-radio-button>
</el-radio-group>
</p>
<p>
<el-radio-group v-model="radio3" size="mini">
<el-radio-button :label="11">Watermelon</el-radio-button>
<el-radio-button :label="22">Apple</el-radio-button>
<el-radio-button :label="23">Banana</el-radio-button>
</el-radio-group>
</p>
:::
::: slot highlight
To build an array of options in PHP file, each array must have `value` and `text`,
 which represent the value of options and the displayed text, respectively.
``` php
 // ... This is PHP code.
```
In the `demo-view` view file, set `$radio3_option` is passed to the `input-radio-button` component.
``` html
<x-input-radio-button name="radio1" :options="$radio3_option" :value="22" ></x-input-radio-button>
<x-input-radio-button name="radio1" :options="$radio3_option" :value="22" size="medium"></x-input-radio-button>
<x-input-radio-button name="radio1" :options="$radio3_option" :value="22" size="small" ></x-input-radio-button>
<x-input-radio-button name="radio1" :options="$radio3_option" :value="22" size="mini" ></x-input-radio-button>
```
:::
</demo-block>

## Option Array Rule

We have agreed on the option data used in the radio. Each option needs to have the following fields:

| Field | Required | Type | Description |
|----|----|----|---|
| value | Required| int or string | The value of the option, which is finally passed to the form |
| text | Required|string | Option is used to display the page |
| prop | No Required | string | It is used to control certain features of a single option, eg: `disabled`, see [API docs](/en/api.html#radio) look more. |

<script>
export default {
    data(){
        return {
            radio1:22,
            radio2:22,
            radio3:22,
        };
    }
};
</script>