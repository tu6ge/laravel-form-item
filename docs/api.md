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

## 输入框

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