<?php

namespace LaravelFormItem\Providers;

use Illuminate\Support\ServiceProvider;
use LaravelFormItem\View\Components\Cascader;
use LaravelFormItem\View\Components\Checkbox;
use LaravelFormItem\View\Components\CheckboxButton;
use LaravelFormItem\View\Components\DatePicker;
use LaravelFormItem\View\Components\Number;
use LaravelFormItem\View\Components\Radio;
use LaravelFormItem\View\Components\RadioButton;
use LaravelFormItem\View\Components\Select;
use LaravelFormItem\View\Components\SelectGroup;
use LaravelFormItem\View\Components\Slider;
use LaravelFormItem\View\Components\Switcher;
use LaravelFormItem\View\Components\Text;
use LaravelFormItem\View\Components\TimeRange;
use LaravelFormItem\View\Components\TimeSelect;

class LaravelFormItemServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/form_item.php',
            'form_item'
        );
//        // todo delay datepicker
//        $this->publishes([
//            __DIR__.'/../../public/js/app.js' => public_path('vendor/laravel-form-item/app.js'),
//        ], 'public');
    }

    public function boot()
    {
        $this->loadViewComponentsAs('input', [
            Cascader::class,
            Checkbox::class,
            CheckboxButton::class,
            DatePicker::class, // todo delay datepicker
            Number::class,
            Radio::class,
            RadioButton::class,
            Select::class,
            SelectGroup::class,
            Slider::class,
            Switcher::class,
            Text::class,
            TimeRange::class,
            TimeSelect::class,
        ]);

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'input');

        $this->publishes([
            __DIR__.'/../../config/form_item.php' => config_path('form_item.php'),
        ]);
    }
}
