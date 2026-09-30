<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Tandartspraktijk')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
 @if (!request()->routeIs('login', 'register'))
    <nav>
        <a href="/">Home</a>
        <a href="/diensten">Diensten</a>
        <a href="/over-ons">Over ons</a>
        <a href="/contact">Contact</a>

        @guest
            <a href="{{ route('login') }}">Inloggen</a>
            <a href="{{ route('register') }}">Registreren</a>
        @endguest
        @auth 
        <a href="/afsprqken">Mijn afspraken</a>

          <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Uitloggen</button>
    </form>
@endauth
    </nav>
@endif
    @yield('content')
</body>
</html>
