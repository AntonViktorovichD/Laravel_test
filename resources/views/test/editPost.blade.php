<!DOCTYPE html>
<html>
<head>
    <title>My view</title>
    <style>
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
{{ $attention }}
{{ $title }}
<br/><a href="{{ url($link) }}">На главную</a>
</body>
</html>