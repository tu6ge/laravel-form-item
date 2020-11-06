# 级联选择器

## 基础用法

<demo-block>
在 php 文件中构建选项数组，要求每个数组中必须有 `value` , `text` 和 `children` ，分别表示选项的值,显示的文本
和下级数据数组
::: slot source
<el-cascader v-model="cascader1" :options="options">
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