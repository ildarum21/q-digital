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
            <div class="title job_title">
                Присоединяйтесь к нашей команде
            </div>
            <div class="descr job_descr">
                Мы создаем проекты, которыми гордимся
            </div>

            <div class="job_jobs">
                <div class="jobs_vacancy">
                    <div class="vacancy_wrapper">
                        <div class="subtitle vacancy_subtitle">Руководитель отдела</div>
                        <div class="descr vacancy_descr">Fronted отдел нуждается <br>
                            в мудром руководcтве</div>
                    </div>
                </div>
                <div class="jobs_vacancy">
                    <div class="vacancy_wrapper">
                        <div class="subtitle vacancy_subtitle">Backend-разработчик</div>
                        <div class="descr vacancy_descr">Отдел разработки растет <br>
                            и нам нужен разработчик</div>
                    </div>
                </div>
                <div class="jobs_vacancy">
                    <div class="vacancy_wrapper">
                        <div class="subtitle vacancy_subtitle">Менеджер проектов</div>
                        <div class="descr vacancy_descr">Компания растет, и нам нужны <br>
                            менеджеры с опытом</div>
                    </div>
                </div>
                <div class="jobs_vacancy">
                    <div class="vacancy_wrapper">
                        <div class="subtitle vacancy_subtitle">Fronted-разработчик</div>
                        <div class="descr vacancy_descr">В команду fronted-отдела <br>
                            ищем крутого разработчика</div>
                    </div>
                </div>
                <div class="jobs_vacancy">
                    <div class="vacancy_wrapper">
                        <div class="subtitle vacancy_subtitle">QA engineer</div>
                        <div class="descr vacancy_descr">Отдел растет и нам нужун <br>
                            классный специалист </div>
                    </div>
                </div>
                <div class="jobs_vacancy">
                    <div class="vacancy_wrapper">
                        <div class="subtitle vacancy_subtitle">Дизайнер</div>
                        <div class="descr vacancy_descr">Ищем дизайнера в дружелюбную <br>
                        команду для развития отдела</div>
                    </div>
                </div>
                <div class="jobs_vacancy">
                    <div class="vacancy_wrapper">
                        <div class="subtitle vacancy_subtitle">Интернет-маркетолог</div>
                        <div class="descr vacancy_descr">Поддержка и развитие<br>
                            существующей стратегии</div>
                    </div>
                </div>
                <div class="jobs_vacancy">
                    <div class="vacancy_wrapper">
                        <div class="subtitle vacancy_subtitle">Тестировщик QA </div>
                        <div class="descr vacancy_descr">Отдел растет и нам нужун <br>
                            классный специалист </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="request job_request">
            <div class="container">
                <div class="title title_white req_title ">
                Станьте частью команды Q-Digital
                </div>
                <div class="descr whitedescr  req_descr req_descr_job">Расскажите нам о себе и прикрепите ссылку на резюме. Мы обязательно <br> с вами свяжемся в течении дня</div>

                <input type="text" placeholder="Имя" class="request__input">
                <input type="text " placeholder="E-mail" class="request__input">
                <input type="number" placeholder="Номер телефона" class="request__input anyinput">
                <input type="text" placeholder="Ссылка на резюме" class="request__input anyinput">
                <a href="" class="button white_button req__button">ОТПРАВИТЬ ЗАЯВКУ</a>
                <div class="descr whitedescr small">Нажимая на кнопку, вы даете согласие на обработку персональных данных и соглашаетесь <br> c политикой конфиденциальности</div>

            </div>
        </div>
    </div>
    </div>
    <div class="jobfooter">
        <?php
        include 'footer.php';
        ?>
    </div>
</body>
<script src="./public/js/script.js"></script>
</html>