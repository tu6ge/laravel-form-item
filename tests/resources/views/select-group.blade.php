<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
@php
$options = [
    [
        'text' => '水果',
        'children' => [
            [
                'value' => 11,
                'text' => '西瓜'
            ],
            [
                'value' => 22,
                'text'  => '苹果',
                'prop'  => 'disabled',
            ],
            [
                'value' => 23,
                'text'  => '香蕉'
            ],
        ],
    ],
    [
        'text' => '蔬菜',
        //'prop'  => 'disabled',
        'children' => [
            [
                'value' => 21,
                'text' => '韭菜'
            ],
            [
                'value' => 33,
                'text'  => '芸豆'
            ],
            [
                'value' => 44,
                'text'  => '白菜'
            ],
        ],
    ],
];
@endphp
    <form method="POST" action="form_action">
        {{ csrf_field() }}
        <x-input-select-group name="bar_name" :options="$options"></x-input-select-group>
        <button type="submit" id="submit">submit</button>
    </form>

    <form method="POST" action="form_action" >
        {{ csrf_field() }}
        <div dusk="second-form">
            <x-input-select-group name="bar_name_edit" :options="$options" :value="23"></x-input-select-group>
        </div>
        <button type="submit" id="submit-edit">submit</button>
    </form>
</body>
</html>