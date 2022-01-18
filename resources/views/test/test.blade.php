<!DOCTYPE html>
<html>
<head>
    <title>My view</title>
</head>
<body>
    @foreach($posts as $user)
        {{ $user->id }}
    @endforeach()
</body>
</html>