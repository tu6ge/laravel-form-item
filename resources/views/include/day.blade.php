@once

@if(config('form_item.day_js'))
    <script src="{{config('form_item.day_js')}}"></script>
@endif

@if(config('form_item.day_utc_js'))
    <script src="{{config('form_item.day_utc_js')}}"></script>
    <script>dayjs.extend(window.dayjs_plugin_utc);</script>
@endif

@if(config('form_item.day_customParseFormat_js'))
    <script src="{{config('form_item.day_customParseFormat_js')}}"></script>
    <script>dayjs.extend(window.dayjs_plugin_customParseFormat);</script>
@endif

@endonce