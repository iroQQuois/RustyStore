<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rustystore</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="/css/style.css" >
</head>

<header class="header__bg">
    @include('includes.header')
</header>

<body>
    <nav class="nav">
        @include('includes.nav')
    </nav>

    <div class='main'>
        <div class='main__wrapper-img'>
            <h1>Выберите бренд интересующей категории устройств</h1>
            <br>
            @foreach ($brands as $brand)
                <a class="nav__a" href="/category/{{ $category }}/{{ $brand->brand }}">
                    <img class="main__img" src="/img/{{ $brand->image }}" alt=""/>
                    <h2><strong>{{ ucfirst($brand->brand) }}</strong></h2>
                </a>
                <br />
            @endforeach
        </div>
    </div>
</body>

<footer>
    @include('includes.footer')
</footer>
</html>
