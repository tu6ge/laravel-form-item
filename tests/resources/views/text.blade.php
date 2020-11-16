<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <form method="POST" action="form_action">
        {{ csrf_field() }}
        <x-input-text name="bar_name" value="aaa"></x-input-text>
        <button type="submit" id="submit">submit</button>
    </form>
</body>
</html>