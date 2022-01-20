<!DOCTYPE html>
<html>
<head>
    <title>Все удаленные статьи</title>
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
        <p><a href="restore/{{$post['id']}}">Восстановить запись № {{$post['id']}} </a></p>
    @endforeach
</main>
</body>
</html>