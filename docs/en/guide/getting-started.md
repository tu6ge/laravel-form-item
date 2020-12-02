# Quick start

## Required

- PHP 7.4 +
- Laravel 7 | 8

## Installation

use composer

``` base
composer require tu6ge/laravel-form-item
```

## Custom Config

::: tip
This packagist is included Vue and ElementUI, If your view is included they, you may set related config to `null` in config file.
In this way, the page can avoid repeated introduction of js,css files.
:::

### Publish Config File

You can run this command for publish config file:

``` bash
php artisan vendor:publish --provider=LaravelFormItem\\Providers\\LaravelFormItemServiceProvider
```
After published. you can find `form_item.php` file in your `config` path. and its content:

```php
<?php

return [
     /**
     * import Vue
     * dev : https://cdn.jsdelivr.net/npm/vue/dist/vue.js
     * prod: https://cdn.jsdelivr.net/npm/vue@2.6.12
     * If your page is already import vue.js ,you should set this value is null.
     */
    'vue_url' => 'https://cdn.jsdelivr.net/npm/vue@2.6.12',

    /**
     * import element UI css style
     * in china ,you may change it to http://unpkg.zhimg.com/element-ui@2.13.2/lib/theme-chalk/index.css
     * If your page is already import element-ui.css ,you should set this value is null.
     */
    'element_ui_css' => 'https://cdn.jsdelivr.net/npm/element-ui@2.14.1/lib/theme-chalk/index.css',

    /**
     * import element UI js
     * in china ,you may change it to http://unpkg.zhimg.com/element-ui/lib/index.js
     * If your page is already import element-ui.js ,you should set this value is null.
     */
    'element_ui_js' => 'https://cdn.jsdelivr.net/npm/element-ui@2.14.1/lib/index.js',

    /**
     * import axios js
     * in china ,you may change it to http://unpkg.zhimg.com/axios@0.19.2/dist/axios.min.js
     * If your page is already import axios.js ,you should set this value is null.
     */
    'axios_url' => 'https://cdn.jsdelivr.net/npm/axios@0.21.0/dist/axios.min.js',

    /**
     * import day.js
     * in china ,you may change it to http://unpkg.zhimg.com/dayjs@1.9.6/dayjs.min.js
     * If your page is already import day.js ,you should set this value is null.
     */
    'day_js' => 'https://cdn.jsdelivr.net/npm/dayjs@1.9.5/dayjs.min.js',

    /**
     * import day utc plugin
     * in china ,you may change it to http://unpkg.zhimg.com/dayjs@1.9.6/plugin/utc.js
     * If your page is already import day utc plugin ,you should set this value is null.
     */
    'day_utc_js' => 'https://cdn.jsdelivr.net/npm/dayjs@1.9.5/plugin/utc.js',

    /**
     * import day customParseFormat plugin
     * in china ,you may change it to http://unpkg.zhimg.com/dayjs@1.9.6/plugin/customParseFormat.js
     * If your page is already import day customParseFormat plugin ,you should set this value is null.
     */
    'day_customParseFormat_js' => 'https://cdn.jsdelivr.net/npm/dayjs@1.9.5/plugin/customParseFormat.js',
];

```

You can modify the configuration files according to the needs of the project.