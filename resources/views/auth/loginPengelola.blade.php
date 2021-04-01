<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Document</title>
</head>
<body class="text-center">
    <form action="{{ route('post.loginPengelola') }}" method="post">
        @csrf
        <input type="email" name="email" id="email">
        <input type="password" name="password" id="password">
        <button type="submit">Login</button>
    </form>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>