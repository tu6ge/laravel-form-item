# Select

## Basic usage

<demo-block>
默认选中苹果
::: slot source
<el-select v-model="select1">
<el-option label="西瓜" :value="11"></el-option>
<el-option label="苹果" :value="22"></el-option>
<el-option label="香蕉" :value="23"></el-option>
</el-select>
:::
::: slot highlight
在 php 文件中构建选项数组，要求每个数组中必须有 `value` 和 `text` ，分别表示选项的值和显示的文本
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'select1_option' => [
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
在 `demo-view` 视图文件中将 `$select1_option` 传递给 `input-radio` 组件
``` html
<x-input-select name="select1" :options="$select1_option" :value="22" ></x-input-select>
```
:::
</demo-block>

## 分组选项

<demo-block>
默认选中苹果
::: slot source
<el-select v-model="select2">
<el-option-group label="水果">
<el-option label="西瓜" :value="11"></el-option>
<el-option label="苹果" :value="22" disabled></el-option>
<el-option label="香蕉" :value="23"></el-option>
</el-option-group>
<el-option-group label="蔬菜" disabled>
<el-option label="韭菜" :value="21"></el-option>
<el-option label="芸豆" :value="33"></el-option>
<el-option label="白菜" :value="44"></el-option>
</el-option-group>
</el-select>
:::
::: slot highlight
在 php 文件中构建选项数组，要求每个数组中必须有 `value` 和 `text` ，分别表示选项的值和显示的文本
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'select2_option' => [
            [
                'text' => '水果', // 组名字
                'children' => [
                    [
                        'value' => 11,
                        'text' => '西瓜' //选项
                    ],
                    [
                        'value' => 22,
                        'text'  => '苹果',
                        'prop'  => 'disabled', // 可以禁用某个选项
                    ],
                    [
                        'value' => 23,
                        'text'  => '香蕉'
                    ]
                ]
            ],
            [
                'text' => '蔬菜',
                'prop'  => 'disabled', // 也可以禁用某一组选项
                'children' => [
                    [
                        'value' => 21,
                        'text' => '韭菜'
                    ],
                    [
                        'value' => 33,
                        'text'  => '芸豆'
                    ],
                    [
                        'value' => 44,
                        'text'  => '白菜'
                    ]
                ]
            ]
        ],
    ]);
});
```
在 `demo-view` 视图文件中将 `$select2_option` 传递给 `input-radio` 组件
``` html
<x-input-select-group name="select2" :options="$select2_option" :value="22" ></x-input-select-group>
```
:::
</demo-block>

## 选项数组约定

我们对下拉列表中用到的选项数据进行了约定，每个选项需要有如下字段。

- 下列列表选项：

| 字段 | 是否必填 | 格式 | 说明|
|----|----|----|---|
| value | 必填| int 或 string | 选项的值，最终传递给 `form` 表单的数据 |
| text | 必填|string | 选项的显示信息，用于单选框的显示 |
| prop | 选填 | string | 用于控制单个选项的某些特性，如 `disabled` ，了解更多请查看[API](/en/api.html#select) |

- 分组下拉列表

| 字段 | 是否必填 | 格式 | 说明|
|----|----|----|---|
| text | 必填|string | 分组的名称 |
| children | 必填| array | 分组下的选项数组，每个选项都是一个普通的 **下列列表选项** |

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