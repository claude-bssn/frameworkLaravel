<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url('./css/style.css')}}">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1 class='title'>Les BD</h1>
        <nav>
            <ul class= "nav">
                <li><a href="/">Accueil</a></li>
                <li><a href="/characters">Personnages</a></li>
                <li><a href="/drawers">Dessinateur</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>©ClaudeBuisson</p>
        <p class="source">Source Wikipédia</p>
    <footer>
</body>
</html>