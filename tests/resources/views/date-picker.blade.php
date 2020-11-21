<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
    <form method="POST" action="form_action">
        {{ csrf_field() }}
        <x-input-date-picker name="bar_name" value-format="yyyy-MM-dd"></x-input-date-picker>
        <button type="submit" id="submit">submit</button>
    </form>

    <form method="POST" action="form_action" >
        {{ csrf_field() }}
        <div dusk="second-form">
            <x-input-date-picker name="bar_name_edit" value-format="yyyy-MM-dd" value="2020-11-21"></x-input-date-picker>
        </div>
        <button type="submit" id="submit-edit">submit</button>
    </form>
</body>
</html>