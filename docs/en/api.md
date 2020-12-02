---
sidebar: auto
---

# API

## 公共API

### name

- **类型**: `string`
- **要求**： **必填**
- **用法**：

```html
<x-input-text name="text1" ></x-input-text>
```

### id

- **类型**: `string`
- **默认值**： **随机字符串**
- **用法**：

```html
<x-input-text id="age" ></x-input-text>
```

### value

- **类型**: `string|bool|array` 具体格式，请查看各表单域的描述
- **默认值**： 无
- **用法**：

```html
<x-input-text value="age" ></x-input-text>
```

### disabled

- **类型**: `boolean`
- **默认值**： `false`
- **用法**：
如果设置为 `true`, 则该表单域不能编辑
```html
<x-input-text :disabled="true" ></x-input-text>
```

<!--
### readonly

- **类型**: `boolean`
- **默认值**： `false`
- **用法**：
原生属性，是否只读 
-->

## text

### type

- **类型**: `string`
- **默认值**： `text`
- **详细**：
    你可以使用如下值：
    - `text`：默认是一个单行文本框
    - `textarea` ：这样就变成了一个多行文本框。
- **用法**：

```html
<x-input-text type="textarea" ></x-input-text>
```

### maxlength

- **类型**: `number`
- **默认值**： 无
- **用法**：
    最大输入长度
    
### minlength

- **类型**: `number`
- **默认值**： 无
- **用法**：
    最小输入长度
    
### show-word-limit	

- **类型**: `boolean`
- **默认值**： `false`
- **用法**：
是否显示输入字数统计，只在 type = "text" 或 type = "textarea" 时有效

### placeholder	

- **类型**: `string`
- **默认值**： 无
- **用法**：
输入框占位文本

### clearable	

- **类型**: `boolean`
- **默认值**： false`
- **用法**：
如果设置为 `true`, 输入框中会显示清空按钮

### size	

- **类型**: `string`
- **可选值**： `medium | small | mini`
- **用法**：
只有在多行文本框中才会起作用

### rows	

- **类型**: `number`
- **默认值**： `2`
- **用法**：
只有在多行文本框中才会起作用

### autosize	

- **类型**: `boolean`
- **默认值**： `false`
- **用法**：
自适应内容高度，只有在多行文本框中才会起作用

### readonly

- **类型**: `boolean`
- **默认值**： `false`
- **用法**：
是否只读

## number

### min

- **类型**: `number`
- **默认值**： 无
- **用法**：
计数器的最小可设置值

### max

- **类型**: `number`
- **默认值**： 无
- **用法**：
计数器的最大可设置值

### step

- **类型**: `number`
- **默认值**： `1`
- **用法**：
步长，点击 + 或 - 按钮所改变的数量

### size

- **类型**: `string`
- **默认值**： 无
- **用法**：
计数器的尺寸，可选值有 `large`, `small`

## switcher

### width

- **类型**: `number`
- **默认值**： `40`
- **用法**：
开关的宽度

## slider

### min

- **类型**: `number`
- **默认值**： `0`
- **用法**：
滑块可设置的最小值

### max

- **类型**: `number`
- **默认值**： `100`
- **用法**：
滑块可设置的最大值

### step

- **类型**: `number`
- **默认值**： `1`
- **用法**：
滑块每次挪动的最小步长


## radio

### options

- **类型**: `array`
- **要求**： **必填**
- **用法**：
单选框的选项数组，每个值需要包含如下字段：
 - `value` : 用于标识该选项的值
 - `text` : 用于标识该选项在表单中显示的名称

<!--
### size

- **类型**: `string`
- **默认值**： 无
- **用法**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`
-->

## radio button

### options

- **类型**: `array`
- **要求**： **必填**
- **用法**：
单选框的选项数组，每个值需要包含如下字段：
 - `value` : 用于标识该选项的值
 - `text` : 用于标识该选项在表单中显示的名称

<!--
### size

- **类型**: `string`
- **默认值**： 无
- **用法**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`
-->

## checkbox

### options

- **类型**: `array`
- **要求**： **必填**
- **用法**：
多选框的选项数组，每个值需要包含如下字段：
 - `value` : 用于标识该选项的值
 - `text` : 用于标识该选项在表单中显示的名称
 
### value

- **类型**: `array`
- **默认值**： 无
- **用法**：
如果要为多选框设置默认值，传入的值需要是一个数组，包含每一已选项的 `value` 值。

::: tip 提示
多选框提交后，获得的是一个包含所有选中值的字符串，例如 `1,3,6`
:::

### size

- **类型**: `string`
- **默认值**： 无
- **用法**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`

### min

- **类型**: `number`
- **默认值**： 无
- **用法**：
可被勾选的 checkbox 的最少数量

### max

- **类型**: `number`
- **默认值**： 无
- **用法**：
可被勾选的 checkbox 的最多数量

## checkbox button

### options

- **类型**: `array`
- **要求**： **必填**
- **用法**：
多选框的选项数组，每个值需要包含如下字段：
 - `value` : 用于标识该选项的值
 - `text` : 用于标识该选项在表单中显示的名称
 
### value

- **类型**: `array`
- **默认值**： 无
- **用法**：
如果要为多选框设置默认值，传入的值需要是一个数组，包含每一已选项的 `value` 值。

::: tip 提示
多选框提交后，获得的是一个包含所有选中值的字符串，例如 `1,3,6`
:::

### size

- **类型**: `string`
- **默认值**： 无
- **用法**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`

### min

- **类型**: `number`
- **默认值**： 无
- **用法**：
可被勾选的 checkbox 的最少数量

### max

- **类型**: `number`
- **默认值**： 无
- **用法**：
可被勾选的 checkbox 的最多数量

## select

### options

- **类型**: `array`
- **要求**： **必填**
- **用法**：
下列选择器的选项数组，每个值需要包含如下字段：
 - `value` : 用于标识该选项的值
 - `text` : 用于标识该选项在表单中显示的名称

### size

- **类型**: `string`
- **默认值**： 无
- **用法**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`

### clearable	

- **类型**: `boolean`
- **默认值**： `false`
- **用法**：
如果设置为 `true`, 输入框中会显示清空按钮

## select group

### options

- **类型**: `array`
- **要求**： **必填**
- **用法**：
下列选择器的选项数组，每个值需要包含如下字段：
 - `text` : 用于标识该选项分组的名称
 - `children` ：该分组下的选项数组，每个值需要包含 `text`,`value` 字段
 
### size

- **类型**: `string`
- **默认值**： 无
- **用法**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`

### clearable	

- **类型**: `boolean`
- **默认值**： `false`
- **用法**：
如果设置为 `true`, 输入框中会显示清空按钮

## cascader

### options	

- **类型**: `array`
- **默认值**： `[]`
- **要求**： 和 `resource` 不能同时为空
- **用法**：
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

- **类型**: `string`
- **默认值**： 无
- **要求**： 和 `options` 不能同时为空
- **用法**：
使用这个字段，设置异步加载的接口，路径中需要有 `__pid__` 占位符：
```html
<x-input-casacder name="text1" resource="http://xxx.com/category/__pid__"></x-input-casacder>
```

### value

- **类型**: `array`
- **默认值**： 无
- **用法**：
如果要为级联菜单设置默认值，传入的值需要是一个数组，包含每一级的 `value` 值。

::: tip 提示
级联菜单提交后，获得的是一个包含各级数据的字符串，例如 `1,11,1101` 包含了各级的索引信息
:::

### trigger

- **类型**: `string`
- **默认值**： `click`
- **用法**：
次级菜单的展开方式，可选值有 `click`，`hover`

### size

- **类型**: `string`
- **默认值**： 无
- **用法**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`

### clearable	

- **类型**: `boolean`
- **默认值**： `false`
- **用法**：
如果设置为 `true`, 输入框中会显示清空按钮

### show-all-levels		

- **类型**: `boolean`
- **默认值**： `false`
- **用法**：
输入框中是否显示选中值的完整路径

## time picker

### editable		

- **类型**: `boolean`
- **默认值**： `true`
- **用法**：
是否可以在文本框中输入时间，如果设置为 false ,只能选择时间

### size

- **类型**: `string`
- **默认值**： 无
- **用法**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`