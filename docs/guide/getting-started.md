# 快速上手

## 环境要求

- PHP 7
- Laravel Blade x

## 安装

使用 composer

``` base
composer require tu6ge/laravel-form-item
```

## 自定义配置

::: tip 提示
本插件内置了前端框架 Vue 和前端组件 ElementUI ，如果开发者的视图中已经引入了其中一个，可以在配置文件中将相应的文件路径设置为 `null` ，
可以避免页面重复引入 js，css 文件
:::

### 发布配置文件

``` bash
php artisan vendor:publish --provider=LaravelFormItem\\Providers\\LaravelFormItemServiceProvider
```
发布后，可以在项目的 `config` 目录中增加一个文件 `form_item.php`，内容：

```php
<?php

return [
    /**
     * import Vue
     * dev : https://cdn.jsdelivr.net/npm/vue/dist/vue.js
     * prod: https://cdn.jsdelivr.net/npm/vue@2.6.12
     * 如果你的页面中已经引入了 vue.js 文件，请将该值设置为 null
     */
    'vue_url' => 'https://cdn.jsdelivr.net/npm/vue@2.6.12',

    /**
     * import element UI css style
     * 如果你的页面中已经引入了 element-ui.css 文件，请将该值设置为 null
     */
    'element_ui_css' => '//unpkg.zhimg.com/element-ui/lib/theme-chalk/index.css',

    /**
     * import element UI js
     * 如果你的页面中已经引入了 element-ui.js 文件，请将该值设置为 null
     */
    'element_ui_js' => '//unpkg.zhimg.com/element-ui/lib/index.js',

    /**
     * import axios js
     * 如果你的页面中已经引入了 axios.js 文件，请将该值设置为 null
     */
    'axios_url' => '//unpkg.zhimg.com/axios/dist/axios.min.js',

    /**
     * import day.js
     * 如果你的页面中已经引入了 dayjs.js 文件，请将该值设置为 null
     */
    'day_js' => '//unpkg.zhimg.com/dayjs@1.8.21/dayjs.min.js',

    /**
     * import day utc plugin
     * 如果你的页面中已经引入了 dayjs 的 utc 插件，请将该值设置为 null
     */
    'day_utc_js' => '//unpkg.zhimg.com/dayjs@1.8.21/plugin/utc.js',

    /**
     * import day customParseFormat plugin
     * 如果你的页面中已经引入了 dayjs 的 customParseFormat 文件，请将该值设置为 null
     */
    'day_customParseFormat_js' => '//unpkg.zhimg.com/dayjs@1.8.21/plugin/customParseFormat.js',
];

```

开发者可以根据项目需要，自行修改配置文件