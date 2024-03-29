<!DOCTYPE html>
<html class="has-navbar-fixed-bottom">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') . ' - Laravel' }}@yield('subtitle')</title>

    <link rel="stylesheet" href="{{ asset('css/bulma.css') }}">

    <script src="//cdn.jsdelivr.net/npm/eruda"></script>
    <script>
        eruda.init();
    </script>
    @yield('sendFileScript')
</head>

<body>
    <div id="app" class="container">
        <nav class="navbar is-fixed-bottom" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ url('home') }}">
                    <p class="title is-5">
                        {{ config('app.name') }}
                    </p>
                </a>
            </div>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>