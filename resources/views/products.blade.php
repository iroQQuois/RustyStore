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
    <div class='product__wrapper'>
        <h1>Выберите бренд интересующей категории устройств</h1>
        <br>
        @foreach (json_decode($products, true) as $product)
            <div class="product">
                <img class="product__img" src="/img/{{ $product['prev_image'] }}" alt=""/>
                <div class="product__data">
                    <strong>Бренд: </strong>{{ ucfirst($brand) }}
                    <br>
                    <strong>Модель: </strong>{{ ucfirst($product['model']) }}
                    <br>
                    <strong>Цвет: </strong>{{ ucfirst($product['color']) }}
                    <br>
                    <strong>Описание: </strong>{{ ucfirst($product['description']) }}
                    <br>
                </div>
            </div>
        @endforeach
            <br />
    </div>
</div>
</body>

<footer>
    @include('includes.footer')
</footer>
</html>
