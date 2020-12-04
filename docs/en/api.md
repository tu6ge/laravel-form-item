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
    - `text`：默认是一个单行文本框
    - `textarea` ：这样就变成了一个多行文本框。
- **usage**：

```html
<x-input-text type="textarea" ></x-input-text>
```

### maxlength

- **type**: `number`
- **default**： nothing
- **usage**：
    最大输入长度
    
### minlength

- **type**: `number`
- **default**： nothing
- **usage**：
    最小输入长度
    
### show-word-limit	

- **type**: `boolean`
- **default**： `false`
- **usage**：
是否显示输入字数统计，只在 type = "text" 或 type = "textarea" 时有效

### placeholder	

- **type**: `string`
- **default**： nothing
- **usage**：
输入框占位文本

### clearable	

- **type**: `boolean`
- **default**： false`
- **usage**：
如果设置为 `true`, 输入框中会显示清空按钮

### size	

- **type**: `string`
- **可选值**： `medium | small | mini`
- **usage**：
只有在多行文本框中才会起作用

### rows	

- **type**: `number`
- **default**： `2`
- **usage**：
只有在多行文本框中才会起作用

### autosize	

- **type**: `boolean`
- **default**： `false`
- **usage**：
自适应内容高度，只有在多行文本框中才会起作用

### readonly

- **type**: `boolean`
- **default**： `false`
- **usage**：
是否只读

## number

### min

- **type**: `number`
- **default**： nothing
- **usage**：
计数器的最小可设置值

### max

- **type**: `number`
- **default**： nothing
- **usage**：
计数器的最大可设置值

### step

- **type**: `number`
- **default**： `1`
- **usage**：
步长，点击 + 或 - 按钮所改变的数量

### size

- **type**: `string`
- **default**： nothing
- **usage**：
计数器的尺寸，可选值有 `large`, `small`

## switcher

### width

- **type**: `number`
- **default**： `40`
- **usage**：
开关的宽度

## slider

### min

- **type**: `number`
- **default**： `0`
- **usage**：
滑块可设置的最小值

### max

- **type**: `number`
- **default**： `100`
- **usage**：
滑块可设置的最大值

### step

- **type**: `number`
- **default**： `1`
- **usage**：
滑块每次挪动的最小步长


## radio

### options

- **type**: `array`
- **must**： **rquired**
- **usage**：
单选框的选项数组，每个值需要包含如下字段：
 - `value` : 用于标识该选项的值
 - `text` : 用于标识该选项在表单中显示的名称

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
单选框的选项数组，每个值需要包含如下字段：
 - `value` : 用于标识该选项的值
 - `text` : 用于标识该选项在表单中显示的名称

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
多选框的选项数组，每个值需要包含如下字段：
 - `value` : 用于标识该选项的值
 - `text` : 用于标识该选项在表单中显示的名称
 
### value

- **type**: `array`
- **default**： nothing
- **usage**：
如果要为多选框设置默认值，传入的值需要是一个数组，包含每一已选项的 `value` 值。

::: tip 提示
多选框提交后，获得的是一个包含所有选中值的字符串，例如 `1,3,6`
:::

### size

- **type**: `string`
- **default**： nothing
- **usage**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`

### min

- **type**: `number`
- **default**： nothing
- **usage**：
可被勾选的 checkbox 的最少数量

### max

- **type**: `number`
- **default**： nothing
- **usage**：
可被勾选的 checkbox 的最多数量

## checkbox button

### options

- **type**: `array`
- **must**： **rquired**
- **usage**：
多选框的选项数组，每个值需要包含如下字段：
 - `value` : 用于标识该选项的值
 - `text` : 用于标识该选项在表单中显示的名称
 
### value

- **type**: `array`
- **default**： nothing
- **usage**：
如果要为多选框设置默认值，传入的值需要是一个数组，包含每一已选项的 `value` 值。

::: tip 提示
多选框提交后，获得的是一个包含所有选中值的字符串，例如 `1,3,6`
:::

### size

- **type**: `string`
- **default**： nothing
- **usage**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`

### min

- **type**: `number`
- **default**： nothing
- **usage**：
可被勾选的 checkbox 的最少数量

### max

- **type**: `number`
- **default**： nothing
- **usage**：
可被勾选的 checkbox 的最多数量

## select

### options

- **type**: `array`
- **must**： **rquired**
- **usage**：
下列选择器的选项数组，每个值需要包含如下字段：
 - `value` : 用于标识该选项的值
 - `text` : 用于标识该选项在表单中显示的名称

### size

- **type**: `string`
- **default**： nothing
- **usage**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`

### clearable	

- **type**: `boolean`
- **default**： `false`
- **usage**：
如果设置为 `true`, 输入框中会显示清空按钮

## select group

### options

- **type**: `array`
- **must**： **rquired**
- **usage**：
下列选择器的选项数组，每个值需要包含如下字段：
 - `text` : 用于标识该选项分组的名称
 - `children` ：该分组下的选项数组，每个值需要包含 `text`,`value` 字段
 
### size

- **type**: `string`
- **default**： nothing
- **usage**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`

### clearable	

- **type**: `boolean`
- **default**： `false`
- **usage**：
如果设置为 `true`, 输入框中会显示清空按钮

## cascader

### options	

- **type**: `array`
- **default**： `[]`
- **must**： 和 `resource` 不能同时为空
- **usage**：
可以使用这个参数给级联选择器设置固定的选项

传入的参数需要是一个树形数组。每个值需要包含如下字段：
 - `value` : 用于标识该选项的值
 - `text` : 用于标识该选项在表单中显示的名称
 - `children`：标识该选项的下级列表，如果为空，请设置为 `[]`
 
例如：
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
- **要求**： 和 `options` 不能同时为空
- **usage**：
使用这个字段，设置异步加载的接口，路径中需要有 `__pid__` 占位符：
```html
<x-input-casacder name="text1" resource="http://xxx.com/category/__pid__"></x-input-casacder>
```

### value

- **type**: `array`
- **default**： nothing
- **usage**：
如果要为级联菜单设置默认值，传入的值需要是一个数组，包含每一级的 `value` 值。

::: tip 提示
级联菜单提交后，获得的是一个包含各级数据的字符串，例如 `1,11,1101` 包含了各级的索引信息
:::

### trigger

- **type**: `string`
- **default**： `click`
- **usage**：
次级菜单的展开方式，可选值有 `click`，`hover`

### size

- **type**: `string`
- **default**： nothing
- **usage**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`

### clearable	

- **type**: `boolean`
- **default**： `false`
- **usage**：
如果设置为 `true`, 输入框中会显示清空按钮

### show-all-levels		

- **type**: `boolean`
- **default**： `false`
- **usage**：
输入框中是否显示选中值的完整路径

## time picker

### editable		

- **type**: `boolean`
- **default**： `true`
- **usage**：
是否可以在文本框中输入时间，如果设置为 false ,只能选择时间

### size

- **type**: `string`
- **default**： nothing
- **usage**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`