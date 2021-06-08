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

@include('includes.header')

<body>
<main>
    <h1>Вы можете связаться с нами по телефону 8(800)555-35-35, в ином случае заполните форму:</h1>
    <div class="support__form__container">
        <form method="get" action="">
            <p><label for="templateId" style="font-size: 30px">Тема вашего обращения:
                    <select size="1" name="templateId">
                        <option>Проблема с сайтом</option>
                        <option>Проблема с оплатой</option>
                        <option>Проблема с доставкой</option>
                        <option>Неподобающее поведение персонала</option>
                        <option>Другое</option>
                    </select>
                    <button type="submit" class="button button_green form__save-button">Выбрать</button>
                </label>
            </p>

            <br>
            <a style="font-size: 30px">Вы уже сделали заказ?</a>
            <br>

            <label class='support_label'>Да
                <input type="radio" name='orderChoice' value='yes'>
            </label>

            <br>

            <label class='support_label' >Нет
                <input type='radio' name='orderChoice' value='no'>
            </label>

            <br>
            <br>

            <label style="font-size: 30px">Ваше ФИО:
                <input class='support__input' type='text'>
            </label>

            <br>

            <label style="font-size: 30px"> Ваш адрес элетронной почты:
                <input class='support__input' type='text' placeholder='example@example.com'>
            </label>

            <br>
            <br>
            <br>

                <label for="templateText" style="font-size: 30px">Текст сообщения</label>
                <input hidden name="templateNumber" value="<?php echo $_GET['templateId'] ?? 0 ?>">
                <div contenteditable="true" id="templateText" class="support__input support__form__message"></div>
                <textarea class="hidden support__form__message" name="realTemplateText"></textarea>

            <div class="buttons-bar form__buttons-bar">
                <button type="reset" class="button form__reset-button">Очистить</button>
                <button type="submit" class="button button_green form__save-button">Сохранить</button>
            </div>
        </form>
    </div>
</main>

    @include('includes.footer')

</body>
</html>
