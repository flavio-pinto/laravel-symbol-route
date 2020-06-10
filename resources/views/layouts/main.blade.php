<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <ul class="main-nav">
            <li><a href="#">About</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Our Team</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </header>

    <div class="app">
        @yield('content')
    </div>

    <footer class="footer">
        <h3>By Flavio - Classe #12</h3>
    </footer>
    {{-- Javascript --}}
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>