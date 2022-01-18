<!DOCTYPE html>
<html>
<head>
    <title>Новая запись</title>
</head>
<body>
<header>
    <h1>Новая запись</h1>
</header>
<main>
    <form action="/test/result/" method="POST">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="title"><br/>
        <input type="text" name="desc" placeholder="desc"><br/>
        <input type="text" name="text" placeholder="text"><br/>
        <input type="date" name="date" placeholder="date"><br/>
        <input type="submit">
    </form>
</main>
</body>
</html>