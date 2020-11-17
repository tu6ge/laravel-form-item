<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
    <form method="POST" action="form_action">
        {{ csrf_field() }}
        <x-input-text name="bar_name" value=""></x-input-text>
        <button type="submit" id="submit">submit</button>
    </form>

    <form method="POST" action="form_action" >
        {{ csrf_field() }}
        <div dusk="second-form">
        <x-input-text name="bar_name_edit" value="aaa"></x-input-text>
        </div>
        <button type="submit" id="submit-edit">submit</button>
    </form>
</body>
</html>