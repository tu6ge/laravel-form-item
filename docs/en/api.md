---
sidebar: auto
---

# API

## Common API

### name

- **type**: `string`
- **must**： **required**
- **usage**：

```html
<x-input-text name="text1" ></x-input-text>
```

### id

- **type**: `string`
- **default**： **random string**
- **usage**：

```html
<x-input-text id="age" ></x-input-text>
```

### value

- **type**: `string|bool|array` For the specific type, please see the description of each form item
- **default**： nothing
- **usage**：

```html
<x-input-text value="age" ></x-input-text>
```

### disabled

- **type**: `boolean`
- **default**： `false`
- **usage**：
If you set this value is `true`, this form field is can not edited.
```html
<x-input-text :disabled="true" ></x-input-text>
```

<!--
### readonly

- **type**: `boolean`
- **default**： `false`
- **usage**：
原生属性，是否只读 
-->

## text

### type

- **type**: `string`
- **default**： `text`
- **description**：
    You can use the following values:
    - `text`: A single line text input
    - `textarea` : A multiline text input
- **usage**：

```html
<x-input-text type="textarea" ></x-input-text>
```

### maxlength

- **type**: `number`
- **default**： nothing
- **usage**：
    same as `maxlength` in native input
    
### minlength

- **type**: `number`
- **default**： nothing
- **usage**：
    same as `minlength` in native input
    
### show-word-limit	

- **type**: `boolean`
- **default**： `false`
- **usage**：
whether show word count，only works when type is `text` or `textarea`

### placeholder	

- **type**: `string`
- **default**： nothing
- **usage**：
placeholder of Input

### clearable	

- **type**: `boolean`
- **default**： false`
- **usage**：
whether to show clear button

### size	

- **type**: `string`
- **option**： `medium` , `small` or `mini`
- **usage**：
size of input, works when type is not `textarea`

### rows	

- **type**: `number`
- **default**： `2`
- **usage**：
number of rows of textarea, works when type is not `textarea`

### autosize

- **type**: `boolean`
- **default**：`false`
- **usage**：
whether textarea has an adaptive height, only works when type is `textarea`

### readonly

- **type**: `boolean`
- **default**： `false`
- **usage**：
same as `readonly` in native input

## number

### min

- **type**: `number`
- **default**： -Infinity
- **usage**：
the minimum allowed value

### max

- **type**: `number`
- **default**： Infinity
- **usage**：
the maximum allowed value

### step

- **type**: `number`
- **default**： `1`
- **usage**：
incremental step

### size

- **type**: `string`
- **default**： nothing
- **usage**：
size of the component,optional values is `large`, `small`

## switcher

### width

- **type**: `number`
- **default**： `40`
- **usage**：
width of Switch

## slider

### min

- **type**: `number`
- **default**： `0`
- **usage**：
minimum value of slider

### max

- **type**: `number`
- **default**： `100`
- **usage**：
maximum value of slider

### step

- **type**: `number`
- **default**： `1`
- **usage**：
step size


## radio

### options

- **type**: `array`
- **must**： **rquired**
- **usage**：
The options array of radio. Each value needs to contain the following fields:
 - `value` : The value that identifies the option
 - `text` : Identifies the name of the option as it appears in the form

<!--
### size

- **type**: `string`
- **default**： nothing
- **usage**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`
-->

## radio button

### options

- **type**: `array`
- **must**： **rquired**
- **usage**：
The options array of radio. Each value needs to contain the following fields:
 - `value` : The value that identifies the option
 - `text` : Identifies the name of the option as it appears in the form

<!--
### size

- **type**: `string`
- **default**： nothing
- **usage**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`
-->

## checkbox

### options

- **type**: `array`
- **must**： **rquired**
- **usage**：
The options array of checkbox. Each value needs to contain the following fields:
 - `value` : The value that identifies the option
 - `text` : Identifies the name of the option as it appears in the form
 
### value

- **type**: `array`
- **default**： nothing
- **usage**：
If you want to set the default value for multiple checkbox,
 the value you pass in needs to be an array containing the `value` of each selected item.

::: tip
After submitting a checkbox, you get a string containing all the selected values. eg: `1,3,6`
:::

### size

- **type**: `string`
- **default**： nothing
- **usage**：
size of checkbox, The values that can be set are `medium` , `small` or `mini`.

### min

- **type**: `number`
- **default**： nothing
- **usage**：
Minimum number of the checkbox can be checked.

### max

- **type**: `number`
- **default**： nothing
- **usage**：
Maximum number of the checkbox can be checked.

## checkbox button

### options

- **type**: `array`
- **must**： **rquired**
- **usage**：
The options array of checkbox button. Each value needs to contain the following fields:
 - `value` : The value that identifies the option
 - `text` : Identifies the name of the option as it appears in the form
 
### value

- **type**: `array`
- **default**： nothing
- **usage**：
If you want to set the default value for multiple checkbox,
 the value you pass in needs to be an array containing the `value` of each selected item.

::: tip
After submitting a checkbox, you get a string containing all the selected values. eg: `1,3,6`
:::

### size

- **type**: `string`
- **default**： nothing
- **usage**：
size of checkbox, The values that can be set are `medium` , `small` or `mini`.

### min

- **type**: `number`
- **default**： nothing
- **usage**：
Minimum number of the checkbox can be checked.

### max

- **type**: `number`
- **default**： nothing
- **usage**：
Maximum number of the checkbox can be checked.

## select

### options

- **type**: `array`
- **must**： **rquired**
- **usage**：
The options array of select. Each value needs to contain the following fields:
 - `value` : The value that identifies the option
 - `text` : Identifies the name of the option as it appears in the form
 

### size

- **type**: `string`
- **default**： nothing
- **usage**：
size of select, The values that can be set are `medium` , `small` or `mini`.

### clearable

- **type**: `boolean`
- **default**： `false`
- **usage**：
whether to show clear button

## select group

### options

- **type**: `array`
- **must**： **rquired**
- **usage**：
The options array of select group. Each value needs to contain the following fields:
 - `text` : The name used to identify the group of options
 - `children`:For the option array under this group, each value needs to contain `text`,`value` fields.
 
### size

- **type**: `string`
- **default**： nothing
- **usage**：
size of select group, The values that can be set are `medium` , `small` or `mini`.

### clearable	

- **type**: `boolean`
- **default**： `false`
- **usage**：
whether to show clear button.

## cascader

### options

- **type**: `array`
- **default**： `[]`
- **must**： And `resource` cannot be empty at the same time.
- **usage**：
This parameter can set fixed options for the cascade selector

The parameter passed in needs to be a tree array. Each value needs to contain the following fields:
 - `value` : The value that identifies the option
 - `text` : Identifies the name of the option as it appears in the form
 - `children`:Identifies the lower level list of this option, If it is empty, set it value is `[]`.
 
Example:
```php
$category = [
    [
        'value' => 1,
        'text' => 'Fruits',
        'children' => [
            [
                'value' => 11,
                'text' => 'Apple',
                'children' => [],
            ],
            [
                'value' => 12,
                'text' => 'Banana',
                'children' => [],
            ],
        ]
    ],
    [
        'value' => 2,
        'text' => 'Vegetables',
        'children' => [],
    ]
]
```
```html
<x-input-casacder name="text1" :options="$category"></x-input-casacder>
```

### resource

- **type**: `string`
- **default**： nothing
- **must**： And `options` cannot be empty at the same time.
- **usage**：
Use this field to set the API for asynchronous loading,It needs to be in its path`__ pid__ ` place holder.

Example:
```html
<x-input-casacder name="text1" resource="http://xxx.com/category/__pid__"></x-input-casacder>
```

### value

- **type**: `array`
- **default**： nothing
- **usage**：
If you want to set default values for cascading menus, the values you pass in need to be an array.It must contain the `value` value of each level.

::: tip
After the cascading menu is submitted, a string containing data at all levels is obtained. For example, `1,111101` contains index information of all levels
:::

### trigger

- **type**: `string`
- **default**： `click`
- **usage**：
How to expand the secondary menu,options contain `click` or `hover`.

### size

- **type**: `string`
- **default**： nothing
- **usage**：
size of cascader, The values that can be set are `medium` , `small` or `mini`.

### clearable	

- **type**: `boolean`
- **default**： `false`
- **usage**：
whether to show clear button

### show-all-levels		

- **type**: `boolean`
- **default**： `false`
- **usage**：
Whether to display the full path of the selected value in the input box.

## time picker

### editable

- **type**: `boolean`
- **default**： `true`
- **usage**：
Whether the time can be entered in the text box. If it is set to `false`, you only change time with select.

### size

- **type**: `string`
- **default**： nothing
- **usage**：
size of time picker, The values that can be set are `medium` , `small` or `mini`.