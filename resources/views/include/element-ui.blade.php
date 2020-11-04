@once

<!-- 开发版 vue -->
@if(config('form_item.vue_url'))
<script src="{{config('form_item.vue_url')}}"></script>
@endif
<!-- 生产 vue -->
{{--<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>--}}


@if(config('form_item.element_ui_css'))
<!-- 引入样式 -->
<link rel="stylesheet" href="{{config('form_item.element_ui_css')}}">
@endif
@if(config('form_item.element_ui_js'))
<!-- 引入组件库 -->
<script src="{{config('form_item.element_ui_js')}}"></script>
@endif

@endonce