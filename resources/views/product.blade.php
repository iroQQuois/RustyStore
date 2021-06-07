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
        <div class="product__header">
            <button class="product__button__back" onclick="goBack()">Вернуться</button>
        </div>
        <div class="product">
            <img class="product__img" src="/img/{{ $product[0]['prev_image'] }}" alt=""/>
            <div class="product__data">
                <h1>{{ $product[0]['full_title'] }}</h1>
                <br>
                <br>
                <strong>Бренд: </strong>{{ ucfirst($brand) }}
                <br>
                <strong>Модель: </strong>{{ ucfirst($product[0]['model']) }}
                <br>
                <strong>Цвет: </strong>{{ ucfirst($product[0]['color']) }}
                <br>
                <strong>Описание: </strong>{{ ucfirst($product[0]['description']) }}
                <br>
                <div>
                    <a class="nav__a">
                        @if(\Illuminate\Support\Facades\Auth::check())
                            <button class="product__button">Добавить в корзину</button>
                        @else
                            <a>Чтобы добавить товар в корзину,</a> <a href="/register"> зарегистрируйтесь</a><a> или </a> <a href="/login">войдите</a>
                        @endif
                    </a>
                </div>
            </div>
        </div>
        <br />
    </div>
</div>
</body>

<footer>
    @include('includes.footer')
</footer>
</html>

<script>
    function goBack() {
        window.history.back();
    }
</script>
