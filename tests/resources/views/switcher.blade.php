<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
    <form method="POST" action="form_action">
        {{ csrf_field() }}
        <x-input-switcher name="bar_name" ></x-input-switcher>
        <button type="submit" id="submit">submit</button>
    </form>

    <form method="POST" action="form_action" >
        {{ csrf_field() }}
        <div dusk="second-form">
            <x-input-switcher name="bar_name_edit" :value="true"></x-input-switcher>
        </div>
        <button type="submit" id="submit-edit">submit</button>
    </form>
</body>
</html>