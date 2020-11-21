<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
    <form method="POST" action="form_action">
        {{ csrf_field() }}
        <x-input-time-select name="bar_name" ></x-input-time-select>
        <button type="submit" id="submit">submit</button>
    </form>

    <form method="POST" action="form_action" >
        {{ csrf_field() }}
        <div dusk="second-form">
            <x-input-time-select name="bar_name_edit" value="09:30"></x-input-time-select>
        </div>
        <button type="submit" id="submit-edit">submit</button>
    </form>
</body>
</html>