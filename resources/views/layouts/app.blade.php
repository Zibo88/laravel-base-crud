<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('page_title')</title>
</head>
<body>
    <header>
        <ul>
            <li>
                <a href="{{route ('comics.index')}}">Home</a>
            </li>
            <li>
                <a href="{{route('comics.show', ['comic' => $comic->id ])}}">Single Comic</a>
            </li>
        </ul>
    </header>

    <main>
        @yield('main_content')
    </main>
</body>
</html>