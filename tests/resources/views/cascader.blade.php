<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
@php
$options = [
    [
        'value' => 1,
        'text' => '水果',
        'children' => [
            [
                'value' => 11,
                'text' => '苹果',
                'children' => [
                    [
                        'value' => 1101,
                        'text'  => '富士苹果'
                    ]
                ]
            ],
            [
                'value' => 12,
                'text' => '香蕉'
            ],
        ]
    ],
    [
        'value' => 2,
        'text' => '蔬菜',
        'children' => []
    ]
];
@endphp
    <form method="POST" action="form_action">
        {{ csrf_field() }}
        <x-input-cascader name="bar_name" :options="$options"></x-input-cascader>
        <button type="submit" id="submit">submit</button>
    </form>

    <form method="POST" action="form_action" >
        {{ csrf_field() }}
        <div dusk="second-form">
            <x-input-cascader name="bar_name_edit" :options="$options" :value="[1,11,1101]"></x-input-cascader>
        </div>
        <button type="submit" id="submit-edit">submit</button>
    </form>
</body>
</html>