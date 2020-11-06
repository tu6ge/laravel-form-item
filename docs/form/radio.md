# 单选框

## 基础用法

<demo-block>
默认选中苹果
::: slot source
<el-radio-group v-model="radio1">
<el-radio :label="11">西瓜</el-radio>
<el-radio :label="22">苹果</el-radio>
<el-radio :label="23">香蕉</el-radio>
</el-radio-group>
:::
::: slot highlight
在 php 文件中构建选项数组，要求每个数组中必须有 `value` 和 `text` ，分别表示选项的值和显示的文本
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'radio1_option' => [
            [
                'value' => 11,
                'text' => '西瓜'
            ],
            [
                'value' => 22,
                'text'  => '苹果'
            ],
            [
                'value' => 23,
                'text'  => '香蕉',
            ]
        ],
    ]);
});
```
在 `demo-view` 视图文件中将 `$radio1_option` 传递给 `input-radio` 组件
``` html
<x-input-radio name="radio1" :options="$radio1_option" :value="22" ></x-input-radio>
```
:::
</demo-block>

## 禁用某些选项

<demo-block>
禁止选择香蕉
::: slot source
<el-radio-group v-model="radio2">
<el-radio :label="11">西瓜</el-radio>
<el-radio :label="22">苹果</el-radio>
<el-radio :label="23" disabled>香蕉</el-radio>
</el-radio-group>
:::
::: slot highlight
在 php 文件中构建选项数组，要求每个数组中必须有 `value` 和 `text` ，分别表示选项的值和显示的文本
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'radio1_option' => [
            [
                'value' => 11,
                'text' => '西瓜'
            ],
            [
                'value' => 22,
                'text'  => '苹果'
            ],
            [
                'value' => 23,
                'text'  => '香蕉',
                'prop'  => 'disabled', // 禁用该选项
            ]
        ],
    ]);
});
```
在 `demo-view` 视图文件中将 `$radio1_option` 传递给 `input-radio` 组件
``` html
<x-input-radio name="radio1" :options="$radio1_option" :value="22" ></x-input-radio>
```
:::
</demo-block>

## 按钮样式

<demo-block>
默认选中苹果
::: slot source
<el-radio-group v-model="radio3">
<el-radio-button :label="11">西瓜</el-radio-button>
<el-radio-button :label="22">苹果</el-radio-button>
<el-radio-button :label="23">香蕉</el-radio-button>
</el-radio-group>
:::
::: slot highlight
在 php 文件中构建选项数组，要求每个数组中必须有 `value` 和 `text` ，分别表示选项的值和显示的文本
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'radio3_option' => [
            [
                'value' => 11,
                'text' => '西瓜'
            ],
            [
                'value' => 22,
                'text'  => '苹果'
            ],
            [
                'value' => 23,
                'text'  => '香蕉',
                //'prop'  => 'disabled', // 按钮样式也可以禁用某些选项
            ]
        ],
    ]);
});
```
在 `demo-view` 视图文件中将 `$radio3_option` 传递给 `input-radio-button` 组件
``` html
<x-input-radio-button name="radio1" :options="$radio3_option" :value="22" ></x-input-radio-button>
```
:::
</demo-block>

## 按钮尺寸

<demo-block>
默认选中苹果
::: slot source
<p>
<el-radio-group v-model="radio3">
<el-radio-button :label="11">西瓜</el-radio-button>
<el-radio-button :label="22">苹果</el-radio-button>
<el-radio-button :label="23">香蕉</el-radio-button>
</el-radio-group>
</p>
<p>
<el-radio-group v-model="radio3" size="medium">
<el-radio-button :label="11">西瓜</el-radio-button>
<el-radio-button :label="22">苹果</el-radio-button>
<el-radio-button :label="23">香蕉</el-radio-button>
</el-radio-group>
</p>
<p>
<el-radio-group v-model="radio3" size="small">
<el-radio-button :label="11">西瓜</el-radio-button>
<el-radio-button :label="22">苹果</el-radio-button>
<el-radio-button :label="23">香蕉</el-radio-button>
</el-radio-group>
</p>
<p>
<el-radio-group v-model="radio3" size="mini">
<el-radio-button :label="11">西瓜</el-radio-button>
<el-radio-button :label="22">苹果</el-radio-button>
<el-radio-button :label="23">香蕉</el-radio-button>
</el-radio-group>
</p>
:::
::: slot highlight
在 php 文件中构建选项数组，要求每个数组中必须有 `value` 和 `text` ，分别表示选项的值和显示的文本
``` php
 // ... 省略 php 代码
```
在 `demo-view` 视图文件中将 `$radio3_option` 传递给 `input-radio-button` 组件
``` html
<x-input-radio-button name="radio1" :options="$radio3_option" :value="22" ></x-input-radio-button>
<x-input-radio-button name="radio1" :options="$radio3_option" :value="22" size="medium"></x-input-radio-button>
<x-input-radio-button name="radio1" :options="$radio3_option" :value="22" size="small" ></x-input-radio-button>
<x-input-radio-button name="radio1" :options="$radio3_option" :value="22" size="mini" ></x-input-radio-button>
```
:::
</demo-block>

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