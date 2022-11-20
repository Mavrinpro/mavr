<?php
use yii\helpers\Html;
use frontend\models\IndexForm;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var \frontend\models\ContactForm $model */

$this->title = 'Шредирование и полное уничтожение документов';
?>
<section class="head">
    <div class="scroll-indicator" id="myBar"></div>
    <section>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="#"><img src="img/logos-1-308x122.png" width="100"></a>
                <div class="hamburger hamburger--spin-r navbar-toggler border-0 collapsed" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger-box navbar-toggler border-0 collapsed">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="#about">Обо мне <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="#servise">Услуги</a>
                        <a class="nav-item nav-link" href="#portfolio">Портфолио</a>
                        <a class="nav-item nav-link" href="#price">Цены</a>
                        <a class="nav-item nav-link" href="#otz">Отзывы</a>
                        <a class="nav-item nav-link" href="#contacts">Контакты</a>
                    </div>
                    <span class="navbar-text text-white ml-auto d-none d-lg-block">
                  <a href="tel:8 (951) 095-64-41" >8 (951) 095-64-41 </a>
                  <a class="tn-atom text-warning" href="https://wa.me/79510956441" target="_blank" onclick="yaCounter66829390.reachGoal('click_whatsapp'); return true;"><u> <img src="img/icons/whatsapp.svg" alt="whatsapp" width="18"> Написать в WhatsApp</u></a>
                </span>
                </div>
            </nav>
        </div>
        <div class="container inherit-height">
            <div class="row inherit-height">
                <div class="col-12">
                    <h5 class="mt-3 d-lg-none text-center mb-3"><a class="btn-outline-warning btn phone_target" href="tel:8 (951) 095-64-41">8 (951) 095-64-41</a></h5>
                    <h5 class="mt-3 d-lg-none text-center mb-3"><a class="tn-atom text-warning" href="https://wa.me/79510956441" target="_blank" onclick="yaCounter66829390.reachGoal('click_whatsapp'); return true;"><u> <img src="img/icons/whatsapp.svg" alt="whatsapp" width="20"> Написать в WhatsApp</u></a></h5>
                </div>
                <div class="col-12 text-center">
                    <div class="row justify-content-center mb-3">
                        <div class="myy d-flex justify-content-center">
                            <img src="img/i.png" width="200" class="rounded-circle">
                        </div>
                    </div>
                    <h1 class="display-3">Создание сайтов в Ульяновске</h1>
                    <h6>Профессиональная разработка сайтов <br> Настройка рекламы</h6>
                    <button class="btn btn-outline-danger btn-lg mt-5 btn-pos" data-remodal-target="modal" data-target="#modalForm" data-position="Топ">Связаться со мной<span class="ink animated"></span></button>
                </div>
            </div>
        </div>
    </section>
</section>
<section>
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="display-4" id="about">Обо мне</h2>
                <p>Привет. Меня зовут Александр. На данный момент живу в России. Коммерческий опыт разработки сайтов под ключ, их продвижение, а так же настройки рекламных кампаний в Яндекс Директ и Google Ads - <b class="color_red">более 10 лет</b>. В клиентских проектах я использую собственные разработки, индивидуальный подход и никаких шаблонных решений. Благодаря этому, созданные мной сайты работают быстро, красиво смотрятся и что самое главное - хорошо продают!.</p>
                <p>Как правило, аудит сайтов и рекламных кампаний я провожу <b class="color_red">БЕСПЛАТНО</b>, а стоимость предоставляемых услуг значительно ниже, чем у веб-студий, так как у меня нет большого штата сотрудников и не нужно платить за аренду помещения. Поэтому сайт под ключ - это недорого.</p>
            </div>
            <div class="col-12">
                <h2 class="display-4" id="about">Почему Вам нужен именно я</h2>
            </div>
            <div class="col-md-3 mb-3 mb-md-3 mb-lg-0 col-sm-6">
                <div class="padding-block shadow rounded text-muted">
                    <img src="img/icons/diamond.svg" class="mx-auto d-block" width="80">
                    <h5 class="text-center text-dark">Качество</h5>
                    Гарантия качества подтверждается десятками довольных клиентов, с большинством из которых я сотрудничаю много лет подряд.
                </div>
            </div>
            <div class="col-md-3 mb-3 mb-md-3 mb-lg-0 col-sm-6">
                <div class="padding-block shadow rounded text-muted">
                    <img src="img/icons/euro.svg" class="mx-auto d-block" width="80">
                    <h5 class="text-center text-dark">Цена</h5>
                    Вы существенно экономите свои деньги, оплачивая только саму услугу без каких-либо наценок и дополнительных платежей.
                </div>
            </div>
            <div class="col-md-3 mb-3 mb-md-3 mb-lg-0 col-sm-6">
                <div class="padding-block shadow rounded text-muted">
                    <img src="img/icons/support.svg" class="mx-auto d-block" width="80">
                    <h5 class="text-center text-dark">Поддержка</h5>
                    После завершения проекта я не бросаю своих клиентов, а оказываю поддержку даже после и предлагаю варианты по дальнейшему развитию.
                </div>
            </div>
            <div class="col-md-3 mb-3 mb-md-3 mb-lg-0 col-sm-6">
                <div class="padding-block shadow rounded text-muted">
                    <img src="img/icons/heart.svg" class="mx-auto d-block" width="80">
                    <h5 class="text-center text-dark">Лояльность</h5>
                    Я не устанавливаю жестких рамок в отношениях с клиентами, всегда иду на компромисс, предоставляю скидки и отсрочку платежей.
                </div>
            </div>
        </div>
    </div>
</section>
<section class="usl">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="display-4" id="servise">Услуги</h2>
                <div class="card-deck">

                    <div class="card text-dark border-0">
                        <img class="card-img-top" src="img/sites2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Создание сайтов</h5>
                            <p class="card-text">Разработка сайтов под ключ любой сложности. От лендингов до многостарничных порталов и интернет-магазинов. HTML верстка, оптимизация сайтов под мобильные устройства. </p>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-sm btn-warning btn-pos" data-position="Создание сайтов" data-remodal-target="modal">Заказать звонок</button>
                        </div>
                    </div>


                    <div class="card text-dark border-0">
                        <img class="card-img-top" src="img/prog.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Программирование</h5>
                            <p class="card-text">Программирование на PHP, MySQL, JavaScript. Написание CRM, скриптов, плагинов для Wordpress, телеграм-ботов, расширение функционала сайтов, создание баз данных.</p>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-sm btn-warning btn-pos" data-position="Программирование" data-remodal-target="modal">Заказать звонок</button>
                        </div>
                    </div>


                    <div class="card text-dark border-0">
                        <img class="card-img-top" src="img/crm.jpg
          " alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Реклама</h5>
                            <p class="card-text">Качественная настройка контекстной рекламы для малого и среднего бизнеса. Аудит и оптимизация существующих кампаний, увеличение конверсии, количества лидов и продаж.</p>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-sm btn-warning btn-pos" data-position="Реклама" data-remodal-target="modal">Заказать звонок</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<section class="about pb-5 pt-5">
    <div class="container">
        <div class="row pb-3">
            <div class="col-md-12 text-white">
                <h3 class="display-4 text-dark" id="portfolio">Портфолио</h3>
            </div>
            <div class="col-lg-3 col-md-6 col-6 thumb">
                <a data-fancybox="gallery" href="img/pholio8.jpg">
                    <img class="img-fluid" src="img/pholio8.jpg" alt="...">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 col-6 thumb">
                <a data-fancybox="gallery" href="img/stroydom.jpg">
                    <img class="img-fluid" src="img/stroydom.jpg" alt="...">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 thumb">
                <a data-fancybox="gallery" href="img/glazcentre2.jpg">
                    <img class="img-fluid" src="img/glazcentre2.jpg" alt="...">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 thumb">
                <a data-fancybox="gallery" href="img/pholio5.jpg">
                    <img class="img-fluid" src="img/pholio5.jpg" alt="...">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 thumb">
                <a data-fancybox="gallery" href="img/ulveter.jpg">
                    <img class="img-fluid" src="img/ulveter.jpg" alt="...">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 thumb">
                <a data-fancybox="gallery" href="img/pholio3.jpg">
                    <img class="img-fluid" src="img/pholio3.jpg" alt="...">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 thumb">
                <a data-fancybox="gallery" href="img/clever.jpg">
                    <img class="img-fluid" src="img/clever.jpg" alt="...">
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-6 thumb">
                <a data-fancybox="gallery" href="img/ecovata.jpg">
                    <img class="img-fluid" src="img/ecovata.jpg" alt="...">
                </a>
            </div>
        </div>
    </div>
</section>
<section class="usl mt-5">
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="display-4" id="price">Цены</h2>
                <p>Стоимость разработки проектов всегда индивидуальна и зависит от множества факторов. Например начальная стоимость сайта под ключ с доменом и хостингом - от 20 000 ₽. Для уточнения цены свяжитесь со мной через этот сайт.</p>
                <div class="text-md-right text-sm-right text-center">
                    <a class="btn btn-outline-warning btn-lg mt-2 btn-pos btn_calk" data-toggle="collapse" href="#collapseprice" role="button"  data-text-alt="Свернуть"> Рассчитать стоимость<span class="ink animated"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="calc " >
    <div class="container collapse" id="collapseprice">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="display-4" id="price">Калькулятор проекта</h2>
            </div>
            <div class="col-lg-12">
                <form id="calc">
                    <div class="form-group">
                        <label for=""><b>Выберите сайт</b></label>
                        <div class="row justify-content-around">
                            <div class="checkbox col-md-2 col-3">
                                <input id="checkbox2" type="radio" name="sites" class="che" value="20000" required="" checked="">
                                <label for="checkbox2">
                                    <img src="img/icons/Webpage.png" class="radio-img">
                                    <span class="text-center">Лендинг</span>
                                </label>
                            </div>
                            <div class="checkbox col-md-2 col-3">
                                <input id="checkbox3" type="radio" name="sites" class="che" value="25000" required="">
                                <label for="checkbox3">
                                    <img src="img/icons/Webpage-red.png" class="radio-img">
                                    <span class="text-center">Визитка</span>
                                </label>
                            </div>
                            <div class="checkbox col-md-2 col-3">
                                <input id="checkbox4" type="radio" name="sites" class="che" value="40000" required="">
                                <label for="checkbox4">
                                    <img src="img/icons/Webpage-green.png" class="radio-img">
                                    <span class="text-center">Каталог</span>
                                </label>
                            </div>
                            <div class="checkbox col-md-2 col-3">
                                <input id="checkbox5" type="radio" name="sites" class="che" value="50000" required="">
                                <label for="checkbox5">
                                    <img src="img/icons/Webpage-yellow.png" class="radio-img">
                                    <span class="text-center">Магазин</span>
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="mt-3">
                                <input type="checkbox" value="0.5" class="checkboxes" id="uniq-design">
                                <label for="uniq-design">Уникальный дизайн</label> <div class="badge badge-warning rounded text-left" data-toggle="tooltip" data-placement="top" title="На основе фирменного стиля компании, корпоративных цветов и других пожеланий"> ?</div><br>
                                <input type="checkbox" class="checkboxes" value="1" id="domen">
                                <label for="domen">Нужен домен</label> <div class="badge badge-warning rounded text-left" data-toggle="tooltip" data-placement="top" title="Домен на 1 год в подарок при оплате хостинга от 6 мес."> ?</div><br>
                                <input type="checkbox" class="checkboxes" value="1" id="promo">
                                <label for="promo">Нужна реклама</label> <div class="badge badge-warning rounded text-left" data-toggle="tooltip" data-placement="top" title="Настройка Яндекс директ и Google Ads + 3 месяца оптимизации объявлений"> ?</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="customRange3" class="mt-3 "><b>Хостинг, 6 мес.</b></label>
                                <!-- <input type="range" id="hosting" class="custom-range " min="0" max="12" step="1" value="6"> -->
                                <input type="range" min="0" max="12" value="6" id="hosting" class="js-range-slider" name="my_range">
                            </div>
                            <!--  <div class="col-md-6">
                               <label for="customRange4" class="mt-3 "><b>Толщина утеплителя, 15 см.</b></label>
                               <input type="range" id="weight2" class="custom-range " min="0" max="50" step="1" value="15">
                             </div> -->
                        </div>
                    </div>
                    <table class="table table-striped table-hover" style="display: none;">
                        <tbody>
                        <tr>
                            <td>Дизайн</td>
                            <td class="sum2 bold"></td>
                        </tr>
                        <tr>
                            <td>Домен</td>
                            <td class="sum4 bold"></td>
                        </tr>
                        <tr>
                            <td>Хостинг</td>
                            <td class="sum3 bold"></td>
                        </tr>
                        <tr>
                            <td>Стоимость</td>
                            <td class="sum bold"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <small class="text-dark"><button class="btn btn-sm btn-warning btn-xs-block btn-pos" data-remodal-target="modal" data-position="Калькулятор"><i class="fa fa-cloud-download anim-circle"></i> Получить прайс</button></small>
                            </td>
                        </tr>
                        </tbody></table>
                </form>
            </div>
        </div>
    </div>
</section>
<section >
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="display-4" id="otz">Отзывы</h2></div>
            <div class="owl-carousel">
                <div class="padding-block shadow rounded text-muted">
                    <img src="img/user/ivan.jpg" class="rounded-circle mx-auto d-block" width="80">
                    <h5 class="text-center text-dark">Иван</h5>
                    <span class="otz d-block">Выражаю благодарностьза продвижение наших услуг на просторах интернета и оказание существенного влияния на увеличение прибыли.</span>
                    <div class="bs-fix">
                        <button class="btn btn-outline-danger btn-sm ml-auto" data-remodal-target="ot">Читать отзыв</button>
                    </div>
                </div>
                <div class="padding-block shadow rounded text-muted">
                    <img src="img/user/oleg.jpg" class="rounded-circle mx-auto d-block" width="80">
                    <h5 class="text-center text-dark">Олег</h5>
                    <span class="otz d-block">Это уже не первый проект который был успешно завершен Александром в рамках нашего многолетнего сотрудничества. Очень радует то факт, что Александр является специалистом не только в разработке сайтов под ключ, но так же и продвижении бизнеса через интернет и автоматизации бизнес-процессов. Нет никаких сомнений в его компетентности. рекомендую обращаться к Александру, тем самым вы убъете сразу двух зайцев.</span>
                    <div class="bs-fix">
                        <button class="btn btn-outline-danger btn-sm ml-auto" data-remodal-target="ot">Читать отзыв</button>
                    </div>
                </div>
                <div class="padding-block shadow rounded text-muted">
                    <img src="img/user/svetlana.jpg" class="rounded-circle mx-auto d-block" width="80">
                    <h5 class="text-center text-dark">Светлана</h5>
                    <span class="otz d-block">Александр, благодарю за ваш профессионализм в создании сайтов. Было очень приятно иметь с вами дело. Я уже порекомендовала вас своим знакомым, как ответственного человека. В дальшейшем буду на вас рассчитывать.</span>
                    <div class="bs-fix">
                        <button class="btn btn-outline-danger btn-sm ml-auto" data-remodal-target="ot">Читать отзыв</button>
                    </div>
                </div>
                <div class="padding-block shadow rounded text-muted">
                    <img src="img/user/tata.jpg" class="rounded-circle mx-auto d-block" width="80">
                    <h5 class="text-center text-dark">Татьяна</h5>
                    <span class="otz d-block">Александр, большое спасибо! Очень хорошая работа. Мне уже поступают заявки с сайта и это радует.</span>
                    <div class="bs-fix">
                        <button class="btn btn-outline-danger btn-sm ml-auto" data-remodal-target="ot">Читать отзыв</button>
                    </div>
                </div>
                <div class="padding-block shadow rounded text-muted">
                    <img src="img/user/artemjpg.jpg" class="rounded-circle mx-auto d-block" width="80">
                    <h5 class="text-center text-dark">Артем</h5>
                    <span class="otz d-block">Был приятно удивлен соотношением цены и качества предоставляемых услуг Александром. До этого был опыт (не очень позитивный) сотрудничества с веб-студией. Там и цены на порядок выше и качество ничуть не лучше, а где-то даже и хуже и плюс ко всему сроки были смещены почти на 2 недели. Поэтому если стоит вопрос  кому обратиться за созданием сайтов и настройки рекламы, то однозначно к частному специалисту, такому, как Александр. И в пользу этого есть несколько весомых аргументов: <br>
            1. Стоимость (очень низкие цены)<br>
          2. Качество (сказывается профессионализм)</span>
                    <div class="bs-fix">
                        <button class="btn btn-outline-danger btn-sm ml-auto" data-remodal-target="ot">Читать отзыв</button>
                    </div>
                </div>
                <div class="padding-block shadow rounded text-muted">
                    <img src="img/user/dmitry.jpg" class="rounded-circle mx-auto d-block" width="80">
                    <h5 class="text-center text-dark">Дмитрий</h5>
                    <span class="otz d-block">Нужен был сайт для продвижения юридических услуг с возможностью записи к специалисту онайн и Александр справился с этим заданием на ОТЛИЧНО!. отдельная благодарность за профессиональный подход и разъяснения в интересующих меня вопросах.</span>
                    <div class="bs-fix">
                        <button class="btn btn-outline-danger btn-sm ml-auto" data-remodal-target="ot">Читать отзыв</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="count">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="display-4">Немного цифр</h2>
            </div>
            <div class="col-6 col-md-3 text-center">
                <img src="img/icons/calendar.svg" width="80">
                <h5 class="text-center text-dark mt-3">Всего проектов</h5>
                <p class="display-4">395</p>
            </div>
            <div class="col-6 col-md-3 text-center">
                <img src="img/icons/year.svg" width="80">
                <h5 class="text-center text-dark mt-3">Лет работы</h5>
                <p class="display-4">10</p>
            </div>
            <div class="col-6 col-md-3 text-center">
                <img src="img/icons/customers.svg" width="80">
                <h5 class="text-center text-dark mt-3">Повторные кл-ты %</h5>
                <p class="display-4">96</p>
            </div>
            <div class="col-6 col-md-3 text-center">
                <img src="img/icons/euro.svg" width="80">
                <h5 class="text-center text-dark mt-3">Средняя стоимость</h5>
                <p class="display-4">35000</p>
            </div>
            <div class="col-12 text-center">
                <button class="btn btn-outline-danger btn-lg mt-5 btn-pos" data-remodal-target="modal" data-target="#modalForm" data-position="Консультация">Консультация<span class="ink animated"></span></button>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container mt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h2 class="display-4" id="contacts">Контакты</h2>
            </div>
            <div class="col-lg-3">
                <h5><img src="img/icons/mail.svg" width="20"> <a href="mailto:mavrin79@mail.ru">mavrin79@mail.ru</a></h5>
            </div>
            <div class="col-lg-3">
                <h5><img src="img/icons/telegram.svg" width="20"> <a href="https://t.me/Mavrinn" target="_blank" onclick="yaCounter66829390.reachGoal('click_telegram'); return true;">@mavrinn</a></h5>
            </div>
            <div class="col-lg-3">
                <h5><img src="img/icons/vk.svg" width="20"> <a href="https://vk.com/cibermavr" target="_blank" onclick="yaCounter66829390.reachGoal('click_vk'); return true;">cibermavr</a></h5>
            </div>
            <div class="col-lg-3">
                <h5><img src="img/icons/phone.svg" width="20"> <a href="tel:+7(951)095-64-41">8(951)095-64-41</a></h5>
            </div>
        </div>
    </div>
</section>
<div class="remodal rounded" data-remodal-id="modal">
    <button data-remodal-action="close" class="remodal-close"></button>
    <h6>Заполните форму</h6>
    <?= $this->render('__form', ['model' => $model]); ?>
</div>
