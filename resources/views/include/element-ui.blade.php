@php
    // @codeCoverageIgnoreStart
@endphp
@once
@php
    // @codeCoverageIgnoreEnd
@endphp

@if(config('form_item.vue_url'))
<script src="{{config('form_item.vue_url')}}"></script>
@endif

@if(config('form_item.element_ui_css'))
<!-- 引入样式 -->
<link rel="stylesheet" type="text/css" href="{{config('form_item.element_ui_css')}}">
@endif
@if(config('form_item.element_ui_js'))
<!-- 引入组件库 -->
<script src="{{config('form_item.element_ui_js')}}"></script>
@endif

@php
    // @codeCoverageIgnoreStart
@endphp
@endonce
@php
    // @codeCoverageIgnoreEnd
@endphp