<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rustystore</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="css/style.css" >
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
            <img class="main__img" src='img/main.jpg' alt="">
        </div>
        <div class='main__description'>
            RustyStore - один из самых надежных и качественных современных магазинов девайсов.
            <br />
            Мы предлагаем вам попробовать что-нибудь приобрести и убедиться в этом самим. Для этого просто перейдите в интересующий вас раздел.
        </div>
    </div>
    <footer>
        @include('includes.footer')
    </footer>
</body>
</html>
