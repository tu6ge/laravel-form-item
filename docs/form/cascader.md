# 级联选择器

## 基础用法

<demo-block>
在 php 文件中构建选项数组，要求每个数组中必须有 `value` , `text` 和 `children` ，分别表示选项的值,显示的文本
和下级数据数组
::: slot source
<el-cascader v-model="cascader1" :options="options1">
</el-cascader>
:::
::: slot highlight
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'cascader1_option' => [
            [
                'value' => 1,
                'text' => '水果',
                'children' => [
                    [
                        'value' => 11,
                        'text' => '苹果',
                        'children' => [
                            [
                                'value' => 1101,
                                'text'  => '富士苹果'
                            ]
                        ]
                    ],
                    [
                        'value' => 12,
                        'text' => '香蕉'
                    ],
                ]
            ],
            [
                'value' => 2,
                'text' => '蔬菜',
                'children' => []
            ]
        ],
    ]);
});
```
在 `demo-view` 视图文件中将 `$cascader1_option` 传递给 `input-cascader` 组件
``` html
<x-input-cascader name="cascader1" :options="$cascader1_option" ></x-input-cascader>
```
:::
</demo-block>

## 设置默认值

<demo-block>
value 值需要赋值为一个数组，包含每个级别的索引

在 php 文件中构建选项数组，要求每个数组中必须有 `value` , `text` 和 `children` ，分别表示选项的值,显示的文本
和下级数据数组
::: slot source
<el-cascader v-model="cascader2" :options="options1">
</el-cascader>
:::
::: slot highlight
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'cascader1_option' => [
            [
                'value' => 1,
                'text' => '水果',
                'children' => [
                    [
                        'value' => 11,
                        'text' => '苹果',
                        'children' => [
                            [
                                'value' => 1101,
                                'text'  => '富士苹果'
                            ]
                        ]
                    ],
                    [
                        'value' => 12,
                        'text' => '香蕉'
                    ],
                ]
            ],
            [
                'value' => 2,
                'text' => '蔬菜',
                'children' => []
            ]
        ],
    ]);
});
```
在 `demo-view` 视图文件中将 `$cascader1_option` 传递给 `input-cascader` 组件
``` html
<x-input-cascader name="cascader1" :options="$cascader1_option" :value="[1,11,1101]"></x-input-cascader>
```
:::
</demo-block>

## 禁用某些选项

<demo-block>
value 值需要赋值为一个数组，包含每个级别的值

在 php 文件中构建选项数组，要求每个数组中必须有 `value` , `text` 和 `children` ，分别表示选项的值,显示的文本
和下级数据数组
::: slot source
<el-cascader v-model="cascader2" :options="options2">
</el-cascader>
:::
::: slot highlight
``` php
Route::get('demo', function() {
    return view('demo-view', [
        'cascader1_option' => [
            [
                'value' => 1,
                'text' => '水果',
                'children' => [
                    [
                        'value' => 11,
                        'text' => '苹果',
                        'children' => [
                            [
                                'value' => 1101,
                                'text'  => '富士苹果'
                            ]
                        ]
                    ],
                    [
                        'value' => 12,
                        'text' => '香蕉'
                        'disabled' => true, // 禁止选择香蕉
                    ],
                ]
            ],
            [
                'value' => 2,
                'text' => '蔬菜',
                'children' => []
            ]
        ],
    ]);
});
```
在 `demo-view` 视图文件中将 `$cascader1_option` 传递给 `input-cascader` 组件
``` html
<x-input-cascader name="cascader1" :options="$cascader1_option" :value="[1,11,1101]"></x-input-cascader>
```
:::
</demo-block>

## 选项数组约定

我们对级联选择器中用到的每一级的选项数据进行了约定，每个选项需要有如下字段：

| 字段 | 是否必填 | 格式 | 说明|
|----|----|----|---|
| value | 必填| int 或 string | 选项的值，最终传递给 `form` 表单的数据 |
| text | 必填|string | 选项的显示信息，用于单选框的显示 |
| disabled | 选填 | bool | 是否禁用该选项，默认是 `false` |
| children | 选填 | array | 该选项对应的下级选项数组，没有下级，可以为空 |



<script>
export default {
    data(){
        return {
            cascader1:'',
            cascader2:[1,11,1101],
            options1:[
                {
                    'value' : 1,
                    'label' : '水果',
                    'children' : [
                        {
                            'value' : 11,
                            'label' : '苹果',
                            'children' : [
                                {
                                    'value' : 1101,
                                    'label'  : '富士苹果'
                                }
                            ]
                        },
                        {
                            'value' : 12,
                            'label' : '香蕉',
                        },
                    ]
                },
                {
                    'value' : 2,
                    'label' : '蔬菜',
                    'children' : []
                }
            ],
            options2:[
                {
                    'value' : 1,
                    'label' : '水果',
                    'children' : [
                        {
                            'value' : 11,
                            'label' : '苹果',
                            'children' : [
                                {
                                    'value' : 1101,
                                    'label'  : '富士苹果'
                                }
                            ]
                        },
                        {
                            'value' : 12,
                            'label' : '香蕉',
                            'disabled': true,
                        },
                    ]
                },
                {
                    'value' : 2,
                    'label' : '蔬菜',
                    'children' : []
                }
            ],
        };
    }
};
</script>