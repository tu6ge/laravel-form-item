<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
        .foo{
            position: absolute;
            top:150px;
            left: 40px;
            background: #2c815b;
            z-index: 5000;
        }
    </style>
</head>
<body>
    <form method="POST" action="form_action">
        {{ csrf_field() }}
        <x-input-cascader name="bar_name" resource="foo_api/__pid__"></x-input-cascader>
        <button type="submit" id="submit">submit</button>
    </form>

    <form method="POST" action="form_action" >
        {{ csrf_field() }}
        <div dusk="second-form">
            <x-input-cascader name="bar_name_edit" resource="foo_api/__pid__" :value="[2,21]"></x-input-cascader>
        </div>
        <button type="submit" id="submit-edit">submit</button>
    </form>
{{--    <div class="foo">aa</div>--}}
</body>
</html>