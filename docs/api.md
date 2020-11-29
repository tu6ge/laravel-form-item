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

## text 输入框

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

## number 计数器

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

## switcher 开关

### width

- **类型**: `number`
- **默认值**： `40`
- **用法**：
开关的宽度

## 滑块

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

<!--
## radio 单选框

### size

- **类型**: `string`
- **默认值**： 无
- **用法**：
单选框的尺寸，可设置的值有：`medium` / `small` / `mini`
-->

## checkbox 多选框

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

## select 下列选择器

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

## cascader 级联选择器

### options	

- **类型**: `array`
- **默认值**： `[]`
- **用法**：
可以使用这个参数给级联选择器设置固定的选项

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

## time picker 时间选择器

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