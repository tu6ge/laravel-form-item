# Laravel Form Item Component

[![Tests](https://github.com/tu6ge/laravel-form-item/workflows/Tests/badge.svg?branch=master)](https://github.com/tu6ge/laravel-form-item/)
[![Coverage Status](https://coveralls.io/repos/github/tu6ge/laravel-form-item/badge.svg?branch=master)](https://coveralls.io/github/tu6ge/laravel-form-item?branch=master)
[![Latest Stable Version](https://poser.pugx.org/tu6ge/laravel-form-item/v)](//packagist.org/packages/tu6ge/laravel-form-item)

[English](./README.md)

这是一个 Laravel 视图组件，可以让开发者在 Laravel 视图中便捷地嵌入各种表单域，有文本输入框、单选框、多选框、下拉列表框、数字输入框、 时间选择器、日期选择器、滑块、开关以及强大的级联选择器。

您可以在已有的 form 表单中嵌入上面提到的任意一个表单域，当你提交表单的时候，该表单域的值会伴随着已有的表单域的值一起提交到 action 设置 的链接中。

当你的表单在编辑一条数据的时候，你也可以方便地将已有的值传递给这个表单域，当你不做修改直接提交表单的时候，该值会原样提交到 action 链接中

## 使用案例

让我们以单选框为例来介绍以下，首先我们需要在 php 文件中构造选项数据
```php 
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

在视图中有两种情况，一种是新建数据，一种是编辑数据，让我们分别介绍一下他们的区别
### 新建
```html 
<form>
    <!-- 原生写法 -->
    @foreach($radio1_option as $item)
        <input type="radio" name="radio1" value="{{$item['value']}}" /> {{$item['text']}}
    @endforeach

    <!-- 使用组件 --->
    <x-input-radio name="radio1" :options="$radio1_option" ></x-input-radio>
</form>
```

### 编辑
```html 
<form>
    <!-- 原生写法 -->
    @foreach($radio1_option as $item)
        <input type="radio" name="radio1" value="{{$item['value']}}" {{$item['value']==$form['radio1'] ? 'checked' : ''}}/> {{$item['text']}}
    @endforeach

    <!-- 使用组件 --->
    <x-input-radio name="radio1" :options="$radio1_option" :value="$form['radio1']"></x-input-radio>
</form>
```

[查看文档](https://tu6ge.github.io/laravel-form-item) 了解更多

## 测试

- 运行全部测试
```base
composer test
```
- 只运行单元测试
```base
composer test-unit
```
- 只运行浏览器测试(dusk)
```base
composer test-browser
```

## TODO

1. 打算使用 blade 的 push 方式插入 js 和 css 文件，
由于 laravel 开放的 api 中无法判断开发者是否启用了某个 `@stack` ，这个功能延期处理
2. ~~文档中，级联菜单的数据源，必须设置 `leaf` 字段，声明这个是否是叶子节点，
可以设置 `disabled` 声明节点是否被禁用~~ 已完成
3. element 本地化设置，影响到了 `date-picker`
4. 在 laravel 之外使用 blade 模板引擎 -- 一个人精力有限，期待社区能给出测试用例
5. ~~计数器，可以加一个步数属性，待更新文档~~ 已完成
6. ~~添加单元测试~~ 已完成
7. 已知问题，多选按钮，提交后返回页面，再次提交数据异常，计划给 Element-UI 提交 issue
8. 已知问题，select 没有默认值的时候，没有默认选中第一个值
9. 日期选择器已知问题
10. 中文文档修改
11. 英文文档
12. ~~级联菜单的异步加载，未实现浏览器测试~~ 已完成
13. 滑块的范围选择
