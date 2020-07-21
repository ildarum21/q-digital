<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width,initial-scale =1.0 , maximum-scale=1.0 , user-scalable = 0">
    <link rel="stylesheet" href="./public/index.css">
    <title>Brief</title>
</head>

<body class="page_brief">
    <div class="brief">
    <div class="whiteback">
        <?php
        include 'menu.php';
        ?>
    </div>
        <div class="container">
            <div class="brief__title  title">
                Расскажите нам о своем проекте
            </div>
            <div class="brief__descr descr">
                Оставьте заявку, либо свяжитесь с нами и мы сами все заполним
            </div>
            <div class="formElem">
                <div class="Elem__title title">
                    Тип продукта
                </div>
                <div class="inputs">
                    <div class="inputWrapper">
                        <input class="input" type="radio" name="type" id="system">
                        <label class="label descr " for="system">Система или сервис</label>
                    </div>
                    <div class="inputWrapper">
                        <input class="input" type="radio" name="type" id="shop">
                        <label class="label descr" for="shop">Интернет магазин</label>
                    </div>
                    <div class="inputWrapper">
                        <input class="input" type="radio" name="type" id="app">
                        <label class="label descr" for="app">Мобильное приложение</label>
                    </div>
                    <div class="inputWrapper">
                        <input class="input" type="radio" name="type" id="web-site">
                        <label class="label descr first" for="web-site">Корпоративный сайт</label>
                    </div>
                    <div class="inputWrapper">
                        <input class="input" type="radio" name="type" id="brend">
                        <label class="label descr" for="brend">Брендинг</label>

                    </div>
                    <div class="inputWrapper">
                        <input class="input" type="radio" name="type" id="help">
                        <label class="label descr" for="help">Дизайн -поддержка</label>
                    </div>
                </div>
            </div>
            <div class="formElem">
                <div class="Elem__title title price">
                    Бюджет
                </div>
                <div class="inputs secondinputs ">
                    <div class="inputWrapper">
                        <input class="input" type="radio" name="price" id="20k">
                        <label class="label2 descr " for="20k">Менее 20 т.р</label>
                    </div>
                    <div class="inputWrapper">
                        <input class="input" type="radio" name="price" id="40k">
                        <label class="label2 descr" for="40k">20-40 т.р.</label>
                    </div>
                    <div class="inputWrapper">
                        <input class="input" type="radio" name="price" id="80k">
                        <label class="label2 descr" for="80k">40-80 т.р.</label>
                    </div>
                    <div class="inputWrapper">
                        <input class="input" type="radio" name="price" id="100k">
                        <label class="label2 descr " for="100k">90-100 т.р.</label>
                    </div>
                    <div class="inputWrapper">
                        <input class="input" type="radio" name="price" id="more">
                        <label class="label2 descr" for="more">Более 100 т.р.</label>
                    </div>
                    <div class="inputWrapper">
                        <input class="input" type="radio" name="price" id="0k">
                        <label class="label2 descr" for="0k">Не знаю</label>
                    </div>
                </div>
                <hr class="hr">
            </div>
            <div class="formElem tusk">
                <div class="Elem__title title tusk">
                    Задача
                </div>
                <textarea placeholder="      Расскажите про свою задачу" class="tusk__textarea" name="" id=""></textarea>
                <div>
                    <input class="file" type="file" name="" id="file">
                    <div class="typeFile">
                        <label class="file__label descr" for="file">Прикрепить файл</label>
                        <div class="file__descr descr">Файл не выбран</div>
                    </div>
                </div>
            </div>
            <hr class="hr contacts">
            <div class="formElem ">
                <div class="Elem__title title contacts  ">
                    Ваши контакты
                </div>
                <div class="inputTextWrapper">
                    <input type="text" placeholder="Ваше имя" class="inputText">
                    <input type="text" placeholder="E-mail" class="inputText ">
                    <input type="text" placeholder="Название компании" class="inputText">
                    <input type="number" placeholder="Телефон" class="inputText">
                </div>
            </div>
            <a href="#" class="briefButton">отправить заявку</a>
            <div class="politic descr">Нажимая на кнопку, вы даете согласие на обработку своих персональных данных</div>
        </div>
    </div>
    <div class="footerBrief">
        <?php
        include 'footer.php';
        ?>
    </div>
</body>
<script src="./public/js/script.js"></script>

</html>