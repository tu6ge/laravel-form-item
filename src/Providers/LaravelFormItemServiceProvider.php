<?php

namespace LaravelFormItem\Providers;

use Illuminate\Support\ServiceProvider;
use LaravelFormItem\View\Components\Cascader;
use LaravelFormItem\View\Components\Checkbox;
use LaravelFormItem\View\Components\DatePicker;
use LaravelFormItem\View\Components\Number;
use LaravelFormItem\View\Components\Radio;
use LaravelFormItem\View\Components\Select;
use LaravelFormItem\View\Components\Slider;
use LaravelFormItem\View\Components\Switcher;
use LaravelFormItem\View\Components\Text;
use LaravelFormItem\View\Components\TimeSelect;

class LaravelFormItemServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/form_item.php',
            'form_item'
        );
    }

    public function boot()
    {
        $this->loadViewComponentsAs('input', [
            Text::class,
            Radio::class,
            Checkbox::class,
            Number::class,
            Select::class,
            Cascader::class,
            Switcher::class,
            Slider::class,
            TimeSelect::class,
            DatePicker::class,
        ]);

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'input');

        $this->publishes([
            __DIR__.'/../../config/form_item.php' => config_path('form_item.php'),
        ]);
    }
}
