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
    @foreach($posts as $post)
        <p>{{ $post['id'] }} <a href="{{$post['id']}}">{{$post['title']}}</a> {{$post['desc']}} {{$post['date']}}</p>
        <p><a href="edit/{{$post['id']}}">Редактировать запись № {{$post['id']}} </a></p>
        <p><a href="del/{{$post['id']}}">Удалить запись № {{$post['id']}}</a></p><br/>
    @endforeach
</main>
</body>
</html>