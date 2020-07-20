<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inCase</title>
    <link rel="stylesheet" href="./public/index.css">
</head>

<body>
    <div class="whiteback">
        <?php
        include 'menu.php';
        ?>
    </div>
    <div class="inCase">
        <div class="inCase_mainblock">
            <div class="mainBlock_works">
                <div class="inCase_descr descr">НАШИ РАБОТЫ</div>
                <div class="casessubtitle mainblock_casessubtitle">Notion</div>
                <div class="descr mainblock_descr">Текстовый редактор</div>
                <div class="inCase_steps">
                    <div class="step">
                        <div class="step_subtitle descr">Услуги</div>
                        <div class="step_descr descr">Дизайн и Разработка </div>
                    </div>
                    <div class="step step_sec">
                        <div class="step_subtitle descr">Направление</div>
                        <div class="step_descr descr">Разработка сайтов</div>
                        <div class="step_descr descr">Дизайн сайтов</div>
                        <div class="step_descr descr">Иллюстрации для сайта</div>
                    </div>
                </div>
            </div>
            <img src="./public/images/incasesim1.jpg" alt="" class="mainBlock__img">
        </div>
        <div class="container">
            <div class="inCase_stepsBlock">
                <div class="step first_step">
                    <div class="step_subtitle descr step_anypad">О проекте</div>
                    <div class="step_descr descr">Это система, которая позволяет пользователю</div>
                    <div class="step_descr descr">редактировать и выкладывать информацию, текста в</div>
                    <div class="step_descr descr  last_step">одном приложении</div>
                </div>
                <div class="step">
                    <div class="step_subtitle descr step_anypad">Аудитория</div>
                    <div class="step_descr descr">Целевая аудитория - люди, работающие с различными</div>
                    <div class="step_descr descr">текстами, редакторами</div>
                </div>
                <div class="step step_anystep">
                    <div class="step_subtitle descr step_anypad">Задача</div>
                    <div class="step_descr descr">Разработать сайт, который будет содержать в себе</div>
                    <div class="step_descr descr">все необоходимые инструментами редактирования </div>
                    <div class="step_descr descr last_step">текста</div>
                </div>
                <div class="step step_anystep step_anystep2">
                    <div class="step_subtitle descr step_anypad step_anypad2">Решение</div>
                    <div class="step_descr descr">Мы детально разработали функционал проекта, определили</div>
                    <div class="step_descr descr">цели и задачи. Далее сделали прототип и макет дизайна</div>
                    <div class="step_descr descr last_step">сайта, который удовлетворяет все требования ТЗ</div>
                </div>
            </div>
        </div>
        <div class="imgweb">
            <div class="container">
                <img src="./public/images/incasesim2.jpg" alt="" class="imgweb_img">
            </div>
        </div>
        <div class="anyworks">
            <div class="container">
                <div class="title anyworks_title">Другие работы</div>
                <div class="casesImages anyworks_casesImages">

                    <div class="imagesContainer ">
                        <div class="images anyworks_images">
                            <img src="./public/images/taxibg.png" alt="" class="cases__img">
                            <div class="imagetext  taxi">
                                <div class="casessubtitle ">Objective C</div>
                                <div class="casessubdescr descr ">Приложение для такси</div>
                            </div>
                        </div>
                    </div>
                    <div class="imagesContainer secondcont">
                        <div class="images anyworks_images">
                            <img src="./public/images/im5.jpg" alt="" class="cases__img">
                            <div class="imagetext push">
                                <div class="casessubtitle ">Angular</div>
                                <div class="casessubdescr descr ">Сайт для провайдера IP телефонии</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="anyworksButtonWrapper">
                    <a class="button cases_button">СМОТРЕТЬ ВСЕ РАБОТЫ</a>
                </div>
            </div>
        </div>
        <div class="anyworksFooter">
            <?php
            include 'footer.php';
            ?>
        </div>
</body>
<script src="./public/js/script.js"></script>
</html>