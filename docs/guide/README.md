# 介绍

这是一个 Laravel 视图组件，可以让开发者在 Laravel 视图中便捷地嵌入各种表单域，有文本输入框、单选框、多选框、下拉列表框、数字输入框、
时间选择器、日期选择器、滑块、开关以及强大的级联选择器。

您可以在已有的 form 表单中嵌入上面提到的任意一个表单域，当你提交表单的时候，该表单域的值会伴随着已有的表单域的值一起提交到 action 设置
的链接中。

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

::: tip 提示
我们在设计单选框的时候，对选项进行了约定，每个选项中的 `text` 和 `value` 对应显示的内容和最终的表单值，点击 [文档](/form/radio.html) 查看详情
:::