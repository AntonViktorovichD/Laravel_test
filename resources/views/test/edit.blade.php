<!DOCTYPE html>
<html>
<head>
    <title>Редактирование записи</title>
</head>
<body>
<header>
    <h3>Редактирование записи</h3>
</header>
<main>
    <form action="" method="POST">
        {{ csrf_field() }}
        <p><input name="title" value="{{ $post->title }}"></p>
        <p><input name="desc" value="{{ $post->desc }}"></p>
        <p><input name="date" value="{{ $post->date }}"></p>
        <p><textarea name="text">{{ $post->text }}</textarea></p>
        <input name="submit" type="submit">
    </form>
</main>
</body>
</html>
