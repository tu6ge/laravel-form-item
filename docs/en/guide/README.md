# Introduction

This is a laravel 7+ blade component.I can help you when your embedding form item in view file. I haved many frequently-used form item.
ex: input, textarea,number input,radio,select, checkbox,datepicker,timepicker,slider,switche and cascade selector.

You may include any one form item in your blade view file , when you need it. If you submit your form, this form item value can be submited to `action` path with other form data.

You also may import you old value to one form item in edit form page. If you are not modification it, and submit form. this value can remain unchanged.

## Example

Let's take the radio as an example to introduce the following. first, we need to construct the option data in the PHP file:

```php 
Route::get('demo', function() {
    return view('demo-view', [
        'radio1_option' => [
            [
                'value' => 11,
                'text' => 'Watermelon'
            ],
            [
                'value' => 22,
                'text'  => 'Apple'
            ],
            [
                'value' => 23,
                'text'  => 'Banana',
            ]
        ],
    ]);
});
```
In blade file, this have two cases, add data or edit data.Let's introduce them separately.

### Add
```html 
<form>
    <!-- before  -->
    @foreach($radio1_option as $item)
        <input type="radio" name="radio1" value="{{$item['value']}}" /> {{$item['text']}}
    @endforeach

    <!-- use laravel-form-item --->
    <x-input-radio name="radio1" :options="$radio1_option" ></x-input-radio>
</form>
```

### Edit
```html 
<form>
    <!-- before -->
    @foreach($radio1_option as $item)
        <input type="radio" name="radio1" value="{{$item['value']}}" {{$item['value']==$form['radio1'] ? 'checked' : ''}}/> {{$item['text']}}
    @endforeach

    <!-- use laravel-form-item --->
    <x-input-radio name="radio1" :options="$radio1_option" :value="$form['radio1']"></x-input-radio>
</form>
```

::: tip
When designing the radio,we have regulated the options. In any option, must have `text`, `value` field. they respectively represent the displayed content and the form value. click [Radio docs](/en/form/radio.html) see more.
:::
