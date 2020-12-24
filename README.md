# Laravel Form Item Component

[![Tests](https://github.com/tu6ge/laravel-form-item/workflows/Tests/badge.svg?branch=master)](https://github.com/tu6ge/laravel-form-item/)
[![Coverage Status](https://coveralls.io/repos/github/tu6ge/laravel-form-item/badge.svg?branch=master)](https://coveralls.io/github/tu6ge/laravel-form-item?branch=master)
[![Latest Stable Version](https://poser.pugx.org/tu6ge/laravel-form-item/v)](//packagist.org/packages/tu6ge/laravel-form-item)

[中文](./README_zh.md)

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

## Document

See [docs](https://tu6ge.github.io/laravel-form-item/en)

## Test

- run all test case
```base
composer test
```
- only run unit test
```base
composer test-unit
```
- only run browser test (dusk)
```base
composer test-browser
```

## TODO

1. I plan to use the push mode of blade to insert JS and CSS files
2. element UI i18n affects `date-picker`.
3. Using blade template engine outside of laravel -- one's energy is limited, and the community is expected to give test cases
4. If the problem is known, select multiple buttons, return to the page after submitting, and submit the data again，[issue](https://github.com/ElemeFE/element/issues/20468)
5. If there is no default value for select, the first value is not selected by default.
6. date picker is not available.
7. slider range select.
