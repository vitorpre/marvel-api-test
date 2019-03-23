<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ url('css/app.css') }}" />
        <script src="{{ url('js/app.js') }}"></script>

    </head>
    <body style="">

        <div>
            <a href="{{ url('/characters') }}"><h1 style="font-family: 'Helvetica';
    letter-spacing: 2.2rem;
    text-align: center;
    color: white;
    font-size: 8rem;
    text-shadow: #555 2px 2px 7px;">MARVEL</h1></a>
        </div>


        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
