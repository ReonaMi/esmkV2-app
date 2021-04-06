<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <link rel="stylesheet" href="{{ asset('css/signin.css') }}">
    <title>{{ $title }}</title>
</head>
<body class="text-center">
    <main class="form-signin">
        <form action="{{ route('post.loginPengelola') }}" method="post">
            @csrf
            <img src="{{ asset('assets/brand/bootstrap-logo.svg') }}" alt="" height="57" width="72">
            <h1 class="h3 mb-3 fw-normal">{{ $title }}</h1>
            @if($message = \Illuminate\Support\Facades\Session::get('error'))
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
            @endif
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="email" placeholder="E-Mail">
                <label for="email">E-Mail</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <label for="password">Password</label>
            </div>
            <button type="submit" class="w-100 btn btn-lg btn-primary">Login</button>
        </form>
    </main>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
