<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    Register
    <form action="{{route('PostRegister')}}" method="post">
        {{ csrf_field() }}
        <input type="text" name="username">
        <input type="text" name="email">
        <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>