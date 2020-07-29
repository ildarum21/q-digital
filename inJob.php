<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta name="viewport" content="width=device-width,initial-scale =1.0 , maximum-scale=1.0 , user-scalable = 0">
    <link rel="stylesheet" href="./public/index.css">
    <title>Job</title>
</head>

<body>
    <div class="job">
        <div class="whiteback">
            <?php
            include 'menu.php';
            ?>
        </div>
        <div class="container">
            <div class="title job_title inJob_title">
                Присоединяйтесь к нашей команде
            </div>
            <div class="descr job_descr imjob_descr">
                Здась вы можете подробнее узнать о вакансии
            </div>
            <div class="inServ_textBlock inJob_textBlock">
                <div class="subtitle inJob_subtitle">
                    Backend-разработчик
                </div>
                <div class="descr inJob_descr ">От кандидата мы ожидаем:</div>
               
                
                        <div class="descr descrbig ">Отличные знания и навыки разработки на PHP;</div>
                   
                    <ul>
                    <li>
                        <div class="descr descrbig">Знания и навыки использования MySQL;</div>
                    </li>
                    <li>
                        <div class="descr descrbig">Базовые знания HTML, CSS, JS/JQuery;</div>
                    </li>
                    <li>
                        <div class="descr descrbig">Базовые знания Linux, Nginx, Redis, Elastic, Gearman, Git;</div>
                    </li>
                    <li>
                        <div class="descr descrbig ">Умение разбираться в чужом коде и улучшать его;</div>
                    </li>
                    <li>
                        <div class="descr descrbig">Технический английский;</div>
                    </li>
                    <li>
                        <div class="descr descrbig">Внимание к UX;</div>
                    </li>
                    <li>
                        <div class="descr descrbig">Умение думать с точки зрения пользователя.</div>
                    </li>
                </ul>
                <div class="descr inJob_descr second_inJob_descr">Здорово, если у вас есть:</div>
                <ul>
                    <li>
                        <div class="descr descrbig">Опыт разработки SAAS сервисов;</div>
                    </li>
                    <li>
                        <div class="descr descrbig">Опыт разработки мультиязычных сервисов;</div>
                    </li>
                    <li>
                        <div class="descr descrbig">Хороший стиль написания кода; </div>
                    </li>
                    <li>
                        <div class="descr descrbig">Опыт рефакторинга кода;</div>
                    </li>
                    <li>
                        <div class="descr descrbig">Опыт микросервисной архитектуры;</div>
                    </li>
                    <li>
                        <div class="descr descrbig">Опыт работы с AWS;</div>
                    </li>
                    <li>
                        <div class="descr descrbig">Опыт работы по Scrum.</div>
                    </li>
                </ul>
                <div class="descr inJob_descr second_inJob_descr">Спектр задач:</div>
                <ul>
                    <li>
                        <div class="descr descrbig">Создание новых функциональных модулей и сервисов платформы;</div>
                    </li>
                    <li>
                        <div class="descr descrbig">Аналитика нагрузки на сервис и своевременная оптимизация;</div>
                    </li>
                    <li>
                        <div class="descr descrbig">Увеличение скорости работы системы; </div>
                    </li>
                    <li>
                        <div class="descr descrbig">Расширение интеграции с сервисами;</div>
                    </li>
                    <li>
                        <div class="descr descrbig">Устранение технических сбоев.</div>
                    </li>
                </ul>
                <div class="descr  location">Ул. Кирова, 112, г. Ижевск, Россия, полная занятость, гибкий
                график. Зарплата — достойная, «белая», по результатам
                собеседования. Пожалуйста, пишите нам на <a class =" communication_inline"href="">client@q-digital.ru</a>
                </div>
            </div>
        </div>
        <div class="request injob_request">
            <div class="container">
                <div class="title title_white req_title ">
                    Станьте частью команды Q-Digital
                </div>
                <div class="descr whitedescr  req_descr req_descr_job">Расскажите нам о себе и прикрепите ссылку на резюме. Мы обязательно  с вами свяжемся в течении дня</div>

                <input type="text" placeholder="Имя" class="request__input">
                <input type="text " placeholder="E-mail" class="request__input">
                <input type="text" placeholder="Номер телефона" class="request__input anyinput">
                <input type="text" placeholder="Ссылка на резюме" class="request__input anyinput">
                <a href="" class="button white_button req__button">ОТПРАВИТЬ ЗАЯВКУ</a>
                <div class="descr whitedescr small">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь <br> c политикой конфиденциальности</div>
            </div>
        </div>
    </div>
    <div class="injobfooter">
        <?php
        include 'footer.php';
        ?>
    </div>
</body>
<script src="./public/js/script.js"></script>

</html>