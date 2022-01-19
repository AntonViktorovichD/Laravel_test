<!DOCTYPE html>
<html>
<head>
    <title>Удаление записи</title>
</head>
<body>
<header>
    <h3>Удаление записи</h3>
</header>
<main>
    <form action="" method="POST">
        {{ csrf_field() }}
        <p>{{ $post->title }}</p>
        <input name="submit" type="submit">
    </form>
</main>
</body>
</html>