<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
@php
$options = [
    [
        'value' => 11,
        'text' => '西瓜'
    ],
    [
        'value' => 22,
        'text'  => '苹果'
    ],
    [
        'value' => 23,
        'text'  => '香蕉'
    ]
];
@endphp
    <form method="POST" action="form_action">
        {{ csrf_field() }}
        <x-input-radio name="bar_name" :options="$options"></x-input-radio>
        <button type="submit" id="submit">submit</button>
    </form>

    <form method="POST" action="form_action" >
        {{ csrf_field() }}
        <div dusk="second-form">
            <x-input-radio name="bar_name_edit" :options="$options" :value="22"></x-input-radio>
        </div>
        <button type="submit" id="submit-edit">submit</button>
    </form>
</body>
</html>