<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ url('css/app.css') }}" />
        <script src="{{ url('js/app.js') }}"></script>

    </head>
    <body style="background-image: url('{{ url('/img/background-marvel2.jpg') }}'); background-color: #FF1E22; background-attachment: fixed">

        <div>
            <a class="title" href="{{ url('/characters') }}"><h1>MARVEL</h1></a>
        </div>


        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
