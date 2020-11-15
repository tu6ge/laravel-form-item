<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <form>
        {{ csrf_field() }}
        <x-input-text name="bar_name" ></x-input-text>
        <button type="submit" id="submit">submit</button>
    </form>
</body>
</html>