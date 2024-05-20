<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/layoutsite.css') }}">

    @yield('header')
</head>

<body>
    <header>
        <h1>Header</h1>
    </header>
    
    
    
    <main>
        @yield('content')
    </main>




    <footer>Footer</footer>

    @yield('footer')
</body>

</html>
