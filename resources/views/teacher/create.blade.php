<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('teacher.store')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="enter your name">
        <input type="email" name="email" placeholder="enter your email">
        <input type="number" name="phone" placeholder="enter your phone">
        <input type="submit">
    </form>
</body>
</html>