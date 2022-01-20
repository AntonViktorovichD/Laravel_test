<!DOCTYPE html>
<html>
<head>
    <title>Все статьи</title>
</head>
<style>
    a {
        text-decoration: none;
    }
</style>
<body>
<main>
    <h4>Список удаленных статей:</h4>
    @foreach($posts as $post)
        <p>{{ $post['id'] }} {{$post['desc']}} {{$post['date']}}</p>
    @endforeach
</main>
</body>
</html>