<?//require '../www/vendor/autoload.php';
require '../www/api/classes/FormatUrl/FormatUrl.php';
require '../www/api/classes/FormatUrl/Validator.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="app/css/style.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&family=Source+Sans+Pro:wght@400&display=swap" rel="stylesheet">
</head>
<body>

<div class="container">
    <section class="static-info">
        <div class="static-info__item static-info__item-left">
            <div class="static-info__item-content">
                <h2 class="static-info__title">Заявите о себе</h2>
                <p class="static-info__text">
                    Расскажите о себе и о брендах Amway, с которыми вы работаете. Соберите команду и развивайте её.
                </p>
            </div>
            <div class="static-info__item-img">
                <img class="" src="/app/img/Frame557.svg" alt="">
            </div>
        </div>
        <div class="static-info__item static-info__item-bg static-info__item-right">
            <div class="static-info__item-img">
                <img class="static-info__pict-left" src="/app/img/Frame558.svg" alt="">
            </div>
            <div class="static-info__item-content">
                <h2 class="static-info__title">Выберите свой стиль</h2>
                <p class="static-info__text">
                    Подберите оформление Личной страницы, ориентируясь на свои бизнес-задачи и собственный вкус.
                </p>
            </div>
        </div>
        <div class="static-info__item static-info__item-left">
            <div class="static-info__item-content">
                <h2 class="static-info__title">Заходите с любой платформы</h2>
                <p class="static-info__text">
                    Просматривать Личную страницу можно с любого устройства – ПК, планшета или смартфона. И не забудьте поделиться ей в социальных сетях.
                </p>
            </div>
            <div class="static-info__item-img">
                <img class="" src="/app/img/frame_560.svg" alt="">
            </div>
        </div>
    </section>

    <section class="fast-access">
        <div class="fast-access__item">
            <div class="fast-access__item-img">
                <img class="" src="/app/img/frame_562.svg" alt="">
            </div>
            <div class="fast-access__item-content static-info__item-content">
                <h2 class="fast-access__title static-info__title">Быстрый доступ с Amway ID</h2>
                <p class="fast-access__text static-info__text">
                    Теперь легко войти в сервис и пользоваться интерактивом благодаря Amway ID — единому ключу ко всем сервисам Amway.
                </p>
                <button type="submit" class="container__btn"><span>Создать страницу</span></button>

            </div>
        </div>
    </section>
    <section class="static-info">
        <div class="static-info__item static-info__item-left">
            <div class="static-info__item-content">
                <h2 class="static-info__title">Удобно для клиента</h2>
                <p class="static-info__text">
                    Вся информация о вас представлена в доступном и ёмком формате. Потенциальные клиенты не пройдут мимо.
                </p>
            </div>
            <div class="static-info__item-img">
                <img class="" src="/app/img/frame_559.svg" alt="">
            </div>
        </div>
        <div class="static-info__item static-info__item-right static-info__item-none">
            <div class="static-info__item-img">
                <img class="static-info__pict-left" src="/app/img/frame_561.svg" alt="">
            </div>
            <div class="static-info__item-content">
                <h2 class="static-info__title">Анализируйте аудиторию</h2>
                <p class="static-info__text">
                    Просматривайте статистику посещений своей страницы: количество посетителей, их пол, возраст и время заходов.
                </p>
            </div>
        </div>
    </section>

    <section class="all-stars">
        <div class="all-stars__inner">
            <div class="all-stars__item">
                <div class="all-stars__content">
                    <img class="all-stars__img all-stars__img-phonograph" src="app/img/image_30.svg">
                    <h2 class="all-stars__title static-info__title">Участник проекта All Stars?</h2>
                    <p class="all-stars__text">
                        Каждый из участников проекта получает уникальные шаблоны оформления в Конструкторе страниц.
                    </p>
                    <p class="all-stars__text">
                        Партнерам Amway, попавшим на онлайн-доску достижений, необходимо создать новую Личную страницу, чтобы фотография профиля загрузилась из Конструктора.
                    </p>
                    <button type="submit" class="container__btn"><span>О проекте All Stars</span></button>
                </div>
            </div>
        </div>
    </section>

    <section class="join">
        <h2 class="join__inner-title static-info__title">Присоединяйтесь</h2>
        <div class="join__inner-content">
            <div class="join__item">
                <div class="join__img">
                    <img class="" src="app/images/rectangle_293.svg" alt="">
                </div>
                <div class="join__content">
                    <p class="join__content-number content-number__color-one">5 500</p>
                    <p class="join__content-title">Личных страниц</p>
                    <p class="join__content-text">уже создано</p>
                </div>
            </div>
            <div class="join__item">
                <div class="join__img">
                    <img class="" src="app/images/Rectangle_293-1.svg" alt="">
                </div>
                <div class="join__content">
                    <p class="join__content-number content-number__color-two">2 500</p>
                    <p class="join__content-title">Посетителей</p>
                    <p class="join__content-text">ежедневно</p>
                </div>
            </div>
            <div class="join__item">
                <div class="join__img">
                    <img class="" src="app/images/Rectangle_293-3.svg" alt="">
                </div>
                <div class="join__content">
                    <p class="join__content-number content-number__color-three">800</p>
                    <p class="join__content-title">Партнеров</p>
                    <p class="join__content-text">попали на онлайн-доску достижений</p>
                </div>
            </div>
        </div>
    </section>

    <section class="questions">
        <div class="questions-inner">
            <div class="questions__item">
                <div class="questions__item-img">
                    <img class="" src="app/img/Group_547.svg" alt="">
                </div>
                <div class="questions__item-content">
                    <h2 class="questions__item-content-title static-info__title">Как создать страницу?</h2>
                    <p class="questions__item-content-text">Узнайте об инструментах Личной страницы и как их использовать.</p>
                    <button type="submit" class="container__btn"><span>Смотреть инструкцию</span></button>
                </div>
            </div>
            <div class="questions__item">
                <div class="questions__item-img"><img class="" src="app/img/Group_546.svg" alt=""></div>
                <div class="questions__item-content">
                    <h2 class="questions__item-content-title static-info__title">Готовы присоединиться?</h2>
                    <p class="questions__item-content-text">Создайте свою страницу. Расскажите о себе и о брендах Amway, с которыми вы работаете. Соберите команду и развивайте её.</p>
                    <button type="submit" class="container__btn"><span>Создать страницу</span></button>
                </div>
            </div>
        </div>
    </section>

    <section class="short-url">
        <form action="" method="post"  class='short-url__form' id="ajax_form">
            <input type="text" name="text" id="text" value="Введите ссылку" autocomplete>
            <button type="submit" class ='url container__btn'><span>Сократить ссылку</span></button>
        </form>

        <div class='short-url__form-result' id="result-form"></div>
    </section>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="app/js/main.min.js"></script>
</body>
</html>