# Checkbox

## Basic usage

<demo-block>
默认值需要传一个数组
::: slot source
<el-checkbox-group v-model="checkbox1">
<el-checkbox label="watermelon">西瓜</el-checkbox>
<el-checkbox label="apple">苹果</el-checkbox>
<el-checkbox label="banana">香蕉</el-checkbox>
</el-checkbox-group>
:::
::: slot highlight
在 php 文件中构建选项数组，要求每个数组中必须有 `value` 和 `text` ，分别表示选项的值和显示的文本
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'checkbox1_value' => [ // 默认值是一个数组
            'apple',
            'banana',
        ],
        'checkbox1_option' => [
            [
                'value' => 'watermelon',
                'text' => '西瓜'
            ],
            [
                'value' => 'apple',
                'text'  => '苹果',
            ],
            [
                'value' => 'banana',
                'text'  => '香蕉'
            ]
        ],
    ]);
});
```
在 `demo-view` 视图文件中将 `$checkbox1_option`,`$checkbox1_value` 传递给 `input-checkbox` 组件
``` html
<x-input-checkbox name="checkbox1" :options="$checkbox1_option" :value="$checkbox1_value"></x-input-checkbox>
```
:::
</demo-block>

::: tip 提示
提交表单后，多选框的值是一个形如 `11,22` 的字符串，请自行使用 `explode` 或其他方式转化成数组
:::

## 禁用某些选项

<demo-block>
默认值需要传一个数组
::: slot source
<el-checkbox-group v-model="checkbox2">
<el-checkbox label="watermelon">西瓜</el-checkbox>
<el-checkbox label="apple">苹果</el-checkbox>
<el-checkbox label="banana" disabled>香蕉</el-checkbox>
</el-checkbox-group>
:::
::: slot highlight
在 php 文件中构建选项数组，要求每个数组中必须有 `value` 和 `text` ，分别表示选项的值和显示的文本
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'checkbox1_value' => [ // 默认值是一个数组
            'apple',
        ],
        'checkbox1_option' => [
            [
                'value' => 'watermelon',
                'text' => '西瓜'
            ],
            [
                'value' => 'apple',
                'text'  => '苹果',
            ],
            [
                'value' => 'banana',
                'text'  => '香蕉',
                'prop'  => 'disabled',
            ]
        ],
    ]);
});
```
在 `demo-view` 视图文件中将 `$checkbox1_option`,`$checkbox1_value` 传递给 `input-checkbox` 组件
``` html
<x-input-checkbox name="checkbox1" :options="$checkbox1_option" :value="$checkbox1_value"></x-input-checkbox>
```
:::
</demo-block>

## 按钮样式

<demo-block>
默认值需要传一个数组
::: slot source
<el-checkbox-group v-model="checkbox1">
<el-checkbox-button label="watermelon">西瓜</el-checkbox-button>
<el-checkbox-button label="apple">苹果</el-checkbox-button>
<el-checkbox-button label="banana">香蕉</el-checkbox-button>
</el-checkbox-group>
:::
::: slot highlight
在 php 文件中构建选项数组，要求每个数组中必须有 `value` 和 `text` ，分别表示选项的值和显示的文本
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'checkbox1_value' => [ // 默认值是一个数组
            'apple',
            'banana',
        ],
        'checkbox1_option' => [
            [
                'value' => 'watermelon',
                'text' => '西瓜'
            ],
            [
                'value' => 'apple',
                'text'  => '苹果',
            ],
            [
                'value' => 'banana',
                'text'  => '香蕉'
            ]
        ],
    ]);
});
```
在 `demo-view` 视图文件中将 `$checkbox1_option`,`$checkbox1_value` 传递给 `input-checkbox` 组件
``` html
<x-input-checkbox-button name="checkbox1" :options="$checkbox1_option" :value="$checkbox1_value"></x-input-checkbox-button>
```
:::
</demo-block>

## 选项数组约定

我们对多选框中用到的选项数据进行了约定，每个选项需要有如下字段：

| 字段 | 是否必填 | 格式 | 说明|
|----|----|----|---|
| value | 必填| int 或 string | 选项的值，最终传递给 `form` 表单的数据 |
| text | 必填|string | 选项的显示信息，用于单选框的显示 |
| prop | 选填 | string | 用于控制单个选项的某些特性，如 `disabled` ，了解更多请查看[API](/en/api.html#checkbox) |

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