<?php

session_start();

// Читаем ошибки и подсвечиваемые поля из cookies
$errors = isset($_COOKIE['errors']) ? json_decode($_COOKIE['errors'], true) : [];
$errorFields = isset($_COOKIE['error_fields']) ? json_decode($_COOKIE['error_fields'], true) : [];
$get = fn($key) => isset($_COOKIE[$key]) ? htmlspecialchars($_COOKIE[$key]) : '';

$username = $get('username'); 
// Вспомогатели для подстановки старых значений
$getArray = fn($key) => isset($_COOKIE[$key]) ? json_decode($_COOKIE[$key], true) : [];

// После чтения очищаем
setcookie('errors',     '', time() - 3600, '/');
setcookie('error_fields','', time() - 3600, '/');
setcookie('name',       '', time() - 3600, '/');
setcookie('phone',      '', time() - 3600, '/');
setcookie('email',      '', time() - 3600, '/');
setcookie('dob',        '', time() - 3600, '/');
setcookie('gender',     '', time() - 3600, '/');
setcookie('languages',  '', time() - 3600, '/');
setcookie('bio',        '', time() - 3600, '/');
setcookie('contract',   '', time() - 3600, '/');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link href="styleproject.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap"
      rel="stylesheet"
    />-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <title>Проект</title>
  </head>

  <style>
    .cookie-error-description{
        color: red;
    }

    placeholder{
        color: rgb(105, 93, 93);
    }
    </style>
  <body>
    <!--Header-->

    <section id="block-support-main" class="block blockh block-block-content block-block-content2f979322-24f2-4ba0-a45e-930ca3dc84a6 clearfix">
      <div class="">
        <div class="video">
          <div class="vid_bg"></div>
          <video autoplay="autoplay" loop="" class="fillWidth" playsinline preload="auto" muted>
            <source src="img/video.mp4" type="video/mp4" />
            Video lost
          </video>
          <img src="img/MaskGroup.png" class="mkg" />
          <div class="mt-5 mb-5 header">
            <div class="container4">
              <div class="mb-5 navbar t">
                <img class="rupal-coder" src="img/Group 9.png" />
                <a href="#" style="text-decoration: underline; color: #fff; text-decoration-color: #f14d34; text-decoration-thickness: 2px">Поддержка Drupal</a>
                <div class="line1"></div>
                
                <a href="#">Продвижение</a>
                <a href="#">Реклама</a>

               
                <a href="#">Проект</a>
                <a href="#">Контакты</a>
                <div class="nomberru">
                  <div class="mr-4">8 800 222 26-73 RU ∨</div>
                </div>
              </div>
              <div class="content-flex">
                <div class="mx-auto mx-5 header_title">
                  <div class="ptitle">
                    Поддержка<br />
                    сайтов на Drupal
                  </div>
                  <div class="ptext">Сопровождение и поддержка сайтов<br />на CMS Drupal любых версий и запущенности</div>

                  <p>
                    <button class="my-5 ml-1 header_button">
                      <div>
                        <a href="#tarif" style="color: #fff; text-decoration: none">ТАРИФЫ</a>
                      </div>
                    </button>
                  </p>
                </div>

                <div class="my-auto pt-4 header_box">
                  <div>
                    <div class="headbl header_block_text">#1</div>
                    <div class="headbltext">Drupal-разработчик в России по версии Рейтинга Рунета</div>
                  </div>
                  <div>
                    <div class="headbl">3+</div>
                    <div class="headbltext">средний опыт специалистов более 3 лет</div>
                  </div>
                  <div>
                    <div class="headbl">14</div>
                    <div class="headbltext">лет опыта в сфере Drupal</div>
                  </div>
                  <div>
                    <div class="headbl">200+</div>
                    <div class="headbltext">модулей и тем в формате DrupalGive</div>
                  </div>
                  <div>
                    <div class="headbl">35 000</div>
                    <div class="headbltext">часов поддержки сайтов на Drupal</div>
                  </div>
                  <div>
                    <div class="headbl">200+</div>
                    <div class="headbltext">Проектов на поддержке</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Меню  для мобайл-->
    <div class="mobile_head_menu">
      <div class="container">
        <img src="img/Group 9.png" alt="" />
        <div class="mob_menu">
          <div class="mob_menu_1"></div>
        </div>
      </div>
    </div>

    <nav>
      <ul class="menu">
        <li>ПОДДЕРЖКА DRUPAL</li>
        <li class="menu_podcat">
          <span>АДМИНИСТРИРОВАНИЕ</span>
          <ul>
            <li>МИГРАЦИЯ</li>
            <li>БЭКАПЫ</li>
            <li>АУДИТ БЕЗОПАСНОСТИ</li>
            <li>ОПТИМИЗАЦИЯ СКОРОСТИ</li>
            <li>ПЕРЕЕЗД НА HTTPS</li>
          </ul>
        </li>
        <li>ПРОДВИЖЕНИЕ</li>
        <li>РЕКЛАМА</li>
        <li class="menu_podcat">
          <span>О НАС</span>
          <ul>
            <li>КОМАНДА</li>
            <li>DRUPALGIVE</li>
            <li>БЛОГ</li>
            <li>КУРСЫ DRUPAL</li>
          </ul>
        </li>
        <li>ПРОЕКТЫ</li>
        <li>КОНТАКТЫ</li>
      </ul>
    </nav>

    <div id="main">
      <!-- Сетка 4х2-->
      <div>
        <section class="about">
          <div class="mt-5 container">
            <div class="row">
              <div class="col-12">
                <h2 class="text-left text-uppercase">13 лет совершенствуем компетенции в Друпал поддержке!</h2>
                <div class="pt-3 pb-5">
                  <p>Разрабатываем и оптимизируем модели, расширяем функциональность сайтов, обновляем дизайн</p>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6 col-md-3 mb-4">
                <div class="dd1">
                  <img src="img/dd.png" class="dd" alt="" />
                  <img src="img/competency-1.svg" alt="картинка 1" />
                </div>
                <p class="text-left">
                  Добавление <br />
                  информации на сайт, <br />создание новых <br />
                  разделов
                </p>
              </div>
              <div class="col-6 col-md-3 mb-4">
                <div class="dd1">
                  <img src="img/dd.png" class="dd" alt="" />
                  <img src="img/competency-2.svg" alt="картинка 2" />
                </div>
                <p class="text-left">
                  Разработка <br />и оптимизация<br />
                  модулей сайта
                </p>
              </div>
              <div class="col-6 col-md-3 mb-4">
                <div class="dd1">
                  <img src="img/dd.png" class="dd" alt="" />
                  <img src="img/competency-3.svg" alt="картинка 3" />
                </div>
                <p class="text-left">
                  Интеграция с CRM,<br />
                  1С, платежными <br />системами, любыми<br />
                  веб-сервисами
                </p>
              </div>
              <div class="col-6 col-md-3 mb-4">
                <div class="dd1">
                  <img src="img/dd.png" class="dd" alt="" />
                  <img src="img/competency-4.svg" alt="картинка 4" />
                </div>
                <p class="text-left">
                  Любые доработки<br />
                  функционала <br />и дизайна
                </p>
              </div>
              <div class="col-6 col-md-3 mb-4">
                <div class="dd1">
                  <img src="img/dd.png" class="dd" alt="" />
                  <img src="img/competency-5.svg" alt="картинка 5" />
                </div>
                <p class="text-left">Аудит и мониторинг <br />безопасности Drupal <br />сайтов</p>
              </div>
              <div class="col-6 col-md-3 mb-4">
                <div class="dd1">
                  <img src="img/dd.png" class="dd" alt="" />
                  <img src="img/competency-6.svg" alt="картинка 6" />
                </div>
                <p class="text-left">Миграция, импорт <br />контента и апгрейд <br />Drupal</p>
              </div>
              <div class="col-6 col-md-3 mb-4">
                <div class="dd1">
                  <img src="img/dd.png" class="dd" alt="" />
                  <img src="img/competency-7.svg" alt="картинка 7" />
                </div>
                <p class="text-left">Оптимизация <br />и ускорение <br />Drupal сайтов</p>
              </div>
              <div class="col-6 col-md-3 mb-4">
                <div class="dd1">
                  <img src="img/dd.png" class="dd" alt="" />
                  <img src="img/competency-8.svg" alt="картинка 8" />
                </div>
                <p class="text-left">Веб-маркетинг, <br />консультации <br />и работы по SEO</p>
              </div>
            </div>
          </div>
        </section>
      </div>

      <!-- 8 Блоков -->

      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-4 mt-5">
            <h2 class="text-center">
              Поддержка <br />
              от Drupal-coder
            </h2>
          </div>
        </div>
        <div class="mb-5 row row-flex advantages-row poddr">
          <div class="block col-12 col-md-3 mb-4">
            <p>01.</p>
            <h5>Постановка задачи по Email</h5>

            <div class="text">Удобная и привычная модель постановки задач, при которой задачи фиксируются и никогда не теряются.</div>
            <div class="iconss"><img src="img/support1.svg" /></div>
          </div>

          <div class="block col-12 col-md-3 mb-4">
            <p>02.</p>
            <h5>Система Helpdesk – отчетность, прозрачность</h5>

            <div class="text">Возможность посмотреть все заявки в работе и отработанные часы в личном кабинете через браузер. Более 122737 тикетов уже выполнено!</div>
            <div class="iconss"><img src="img/support2.svg" /></div>
          </div>

          <div class="block col-12 col-md-3 mb-4">
            <p>03.</p>
            <h5>Расширенная техническая поддержка</h5>

            <div class="text">Возможность организации расширенной техподдержки с 6:00 до 22:00 без выходных.</div>
            <div class="iconss"><img src="img/support3.svg" /></div>
          </div>

          <div class="block col-12 col-md-3 mb-4">
            <p>04.</p>
            <h5>Персональный менеджер проекта</h5>

            <div class="text">Ваш менеджер проекта всегда в курсе текущего состояния проекта и в любой момент готов ответить на любые вопросы.</div>
            <div class="iconss"><img src="img/support4.svg" /></div>
          </div>

          <div class="block col-12 col-md-3 mb-4">
            <p>05.</p>
            <h5>Удобные способы оплаты</h5>

            <div class="text">Безналичный расчет по договору или электронные деньги: WebMoney, Яндекс.Деньги, Paypal.</div>
            <div class="iconss"><img src="img/support5.svg" /></div>
          </div>

          <div class="block col-12 col-md-3 mb-4">
            <p>06.</p>
            <h5>Работаем с SLA и NDA</h5>

            <div class="text">Работа в рамках соглашений о конфиденциальности и об уровне качества работ.</div>
            <div class="iconss"><img src="img/support6.svg" /></div>
          </div>

          <div class="block col-12 col-md-3 mb-4">
            <p>07.</p>
            <h5>Штатные специалисты</h5>

            <div class="text">Надежные штатные специалисты, никаких фрилансеров.</div>
            <div class="iconss"><img src="img/support7.svg" /></div>
          </div>

          <div class="block col-12 col-md-3 mb-4">
            <p>08.</p>
            <h5>Удобные каналы связи</h5>

            <div class="text">Консультации по телефону, скайпу, в мессенджерах.</div>
            <div class="iconss"><img src="img/support8.svg" /></div>
          </div>
        </div>
      </div>

      <div>
        <div class="fon">
          <img src="img/MaskGroup.png" class="mkg" />
          <section class="laptop">
            <div class="container1">
              <div class="row d-flex ffw justify-content-between">
                <div>
                  <img src="img/laptop.png" class="laptop_img" alt="laptop" />
                </div>
                <div class="row ffw2">
                  <div class="pl-5 text-laptop col-sm-6 col-xs-12">
                    <h1>Экспертиза в Drupal, <br />опыт 14 лет!</h1>
                    <div class="container">
                      <div class="row">
                        <div class="mt-4 laptop_box">
                          <div class="mr-4 boxred">
                            <p>
                              Только системный подход- <br />контроль версий,<br />
                              резервирование <br />
                              и тестирование!
                            </p>
                          </div>
                          <div class="boxred">
                            <p>
                              Только в Drupal сайты,<br />
                              не берем на поддержку сайты<br />
                              на других CMS!
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        <!--Тарифы-->

        <section class="p-md-5 p-3 fon_tariff1">
          <h2 class="m-5 pt-5 block-title text-center">Тарифы</h2>
          <div id="tarif">
            <div class="tariffs">
              <div class="fon_tariff">
                <!-- <img src="img/D.jpg" /> -->
                <div class="container">
                  <div class="row row-flex tariffs-row">
                    <div class="mb-5 col-sm-4 col-xs-12">
                      <div class="tariff">
                        <div class="tariff-header">
                          <h3 class="tariff-title pt-5 pl-4">Стартовый</h3>

                          <div class="tariff-price pl-4">2000 <span class="rub">₽</span></div>
                          <div class="pl-4"><p>в час</p></div>

                          <div class="line2 bg2"></div>
                        </div>
                        <div class="tariff-body">
                          <ol>
                            <li>Предоплата от двух часов</li>
                            <li>Консультации и работы по SEO</li>
                            <li>Услуги дизайнера</li>
                            <li>Стандартное время реакции</li>
                            <li>Неиспользованные оплаченные часы переносятся на следующий месяц</li>
                          </ol>
                        </div>
                        <div class="pb-4 tariff-footer">
                          <a href="#footer" class="py-3 btn btn-itd text-uppercase">Оставить заявку</a>
                        </div>
                      </div>
                    </div>

                    <div class="mb-5 col-sm-4 col-xs-12">
                      <div class="tariff">
                        <div class="tariff-header">
                          <h3 class="tariff-title pt-5 pl-4">Бизнес</h3>

                          <div class="tariff-price pl-4">2000 <span class="rub">₽</span></div>
                          <div class="pl-4"><p>в час</p></div>

                          <div class="line2 bg2"></div>
                        </div>
                        <div class="tariff-body">
                          <ol>
                            <li>Предоплата от 10 часов</li>
                            <li>Консультации и работы по SEO</li>
                            <li>Услуги дизайнера</li>
                            <li>Высокое время реакции – до 2 часов</li>
                            <li>Неиспользованные часы не переносятся</li>
                          </ol>
                        </div>
                        <div class="pb-4 tariff-footer">
                          <a href="#footer" class="py-3 btn btn-itd text-uppercase">Оставить заявку</a>
                        </div>
                      </div>
                    </div>

                    <div class="mb-5 col-sm-4 col-xs-12">
                      <div class="tariff">
                        <div class="tariff-header">
                          <h3 class="tariff-title pt-5 pl-4">VIP</h3>

                          <div class="tariff-price pl-4">1800 <span class="rub">₽</span></div>
                          <div class="pl-4"><p>в час</p></div>

                          <div class="line2 bg2"></div>
                        </div>
                        <div class="tariff-body">
                          <ol>
                            <li>Предоплата от 10 часов</li>
                            <li>Консультации и работы по SEO</li>
                            <li>Услуги дизайнера</li>
                            <li>Максимальное время реакции - в день обращения</li>
                            <li>Неиспользованные часы не переносятся</li>
                          </ol>
                        </div>
                        <div class="pb-4 tariff-footer">
                          <a href="#footer" class="py-3 btn btn-itd text-uppercase">Оставить заявку</a>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="mt-5 d-flex justify-content-center">
                    <div class="tariffs-ps">
                      Вам не подходят наши тарифы? Оставьте заявку и мы
                      <br />предложим вам индивидуальные условия!
                      <p>
                        <a href="#footer" class="tariff-individ">Получить индивидуальный тариф</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!--Картинки flex-->
        <div class="container2">
          <div>
            <h1 class="text-flex text-center pb-4">Последние кейсы</h1>
            <div class="fleximg">
              <ul>
                <li>
                  <img src="img/aa1.jpg" alt="1" loading="lazy" />
                  <h4>
                    Настройка выгрузки YML для <br />
                    Яндекс. Маркета
                  </h4>
                  <p>
                    22.04.2019<br />
                    Эти слова совершенно справедливы, <br />однако гипнотический рифф продолжает <br />паузный пласт
                  </p>
                </li>
                <li id="elee" style="width: 66%">
                  <div id="tekst_sverhu_kartinki">
                    <img src="img/aa2.jpg" alt="2" loading="lazy" />
                    <div class="tekst_sverhu_kartinki_1">
                      <h4>
                        Настройка выгрузки YML для <br />
                        Яндекс. Маркета
                      </h4>
                    </div>
                  </div>
                </li>
                <li>
                  <div id="tekst_sverhu_kartinki">
                    <img src="img/image 8.3.png" alt="3" loading="lazy" />
                    <div class="tekst_sverhu_kartinki_1">
                      <h4>
                        Настройка выгрузки YML для <br />
                        Яндекс. Маркета
                      </h4>
                      <span>22.04.2019</span>
                    </div>
                  </div>
                </li>
                <li>
                  <div id="tekst_sverhu_kartinki">
                    <img src="img/image 7.3.png" alt="4" loading="lazy" />
                    <div class="tekst_sverhu_kartinki_1">
                      <h4>
                        Настройка выгрузки YML для <br />
                        Яндекс. Маркета
                      </h4>

                      <span>22.04.2019</span>
                    </div>
                  </div>
                </li>
                <li>
                  <img src="img/image 6.2.png" alt="5" loading="lazy" />
                  <h4>
                    Настройка выгрузки YML для <br />
                    Яндекс. Маркета
                  </h4>
                  <p>
                    22.04.2019<br />
                    Эти слова совершенно справедливы, <br />однако гипнотический рифф продолжает <br />паузный пласт
                  </p>
                </li>

                <li id="elee" style="width: 66%">
                  <div id="tekst_sverhu_kartinki">
                    <img src="img/aa3.jpg" alt="6" loading="lazy" />
                    <div class="tekst_sverhu_kartinki_1">
                      <h4>
                        Настройка выгрузки YML для <br />
                        Яндекс. Маркета
                      </h4>
                    </div>
                  </div>
                </li>
                <li>
                  <div id="tekst_sverhu_kartinki">
                    <img src="img/image 6.3.png" alt="7" loading="lazy" />
                    <div class="tekst_sverhu_kartinki_1">
                      <h4>
                        Настройка выгрузки YML для <br />
                        Яндекс. Маркета
                      </h4>
                      <span>22.04.2019</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <button class="butpic">Показать ещё</button>
          </div>
        </div>

        <!--  Задачи 3х1-->
        <div>
          <section class="tasks m-5 pt-5">
            <div class="container">
              <div class="mt-5 row">
                <div class="col-9">
                  <h2 class="text-left text-uppercase color1 mb-5">Наши профессиональные разработчики выполняют быстро любые задачи</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-12">
                  <img src="img/competency-20.svg" alt="картинка 1" />
                  <h2>от 1ч</h2>
                  <p class="text-left">Настройка события GA в интернет-магазине</p>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                  <img src="img/competency-21.svg" alt="картинка 2" />
                  <h2>от 20ч</h2>
                  <p class="text-left">Разработка мобильной версии сайта</p>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12">
                  <img src="img/competency-22.svg" alt="картинка 3" />
                  <h2>от 8ч</h2>
                  <p class="text-left">Интеграция смодуля оплаты</p>
                </div>
              </div>
            </div>
          </section>
        </div>

        <!--Команда -->
        <div>
          <section class="tasks">
            <div class="mt-5 d-flex justify-content-center">
              <div class="comanda-title m-5">
                <h2>Команда</h2>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="mb-4 col-xl-4 col-md-6 col-12">
                  <img src="img/IMG_2472_0.jpg" alt="фото 1" />
                  <div class="my-5">
                    <h5>Сергей Синица</h5>
                    <p class="text-left">Руководитель отдела веб-разработки, канд. техн. наук, заместитель директора</p>
                  </div>
                </div>
                <div class="mb-4 col-xl-4 col-md-6 col-sm-12">
                  <img src="img/IMG_2539_0.jpg" alt="фото 2" />
                  <div class="my-5">
                    <h5>Роман Агабеков</h5>
                    <p class="text-left">Руководитель отдела DevOPS, директор</p>
                  </div>
                </div>
                <div class="mb-4 col-xl-4 col-md-6 col-sm-12">
                  <img src="img/IMG_2474_1.jpg" alt="фото 3" />
                  <div class="my-5">
                    <h5>Алексей Синица</h5>
                    <p class="text-left">Руководитель отдела поддержки сайтов</p>
                  </div>
                </div>
                <div class="mb-4 col-xl-4 col-md-6 col-sm-12">
                  <img src="img/IMG_2522_0.jpg" alt="фото 4" />
                  <div class="my-5">
                    <h5>Дарья Бочкарёва</h5>
                    <p class="text-left">Руководитель отдела продвижения, контекстной рекламы и контент-поддержки сайтов</p>
                  </div>
                </div>
                <div class="mb-4 col-xl-4 col-md-6 col-sm-12">
                  <img src="img/IMG_9971_16.jpg" alt="фото 5" />
                  <div class="my-5">
                    <h5>Ирина Торкунова</h5>
                    <p class="text-left">Менеджер по работе с клиентами</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>

        <!--Слайдер-->
        <div class="container3">
          <div class="text-slider">
            <div class="mt-5 d-flex justify-content-center">
              <div class="comanda-title m-5">
                <h2>Отзывы</h2>
              </div>
            </div>
            <div class="container">
              <div class="txts">
                <div class="row">
                  <div class="">
                    <div class="a" style="overflow: hidden; transition: 0.5s">
                      <div class="aa">
                        <div class="">
                          <img src="img/logo_0.png" />

                          <div class="pt-3 slidertext_text">«Сотрудничество с Drupal стало для нас настоящим открытием! Профессиональная команда разработчиков учла все наши пожелания и создала сайт, который идеально подходит для продвижения наших услуг. Спасибо за оперативность и высокое качество работы!»</div>
                        </div>

                        <div class="">
                          <img src="img/logo.png" />

                          <div class="pt-3 slidertext_text">«Drupal — это команда, которой можно доверить даже самые сложные задачи. Мы получили современный и функциональный сайт, который привлёк новых клиентов уже в первые месяцы работы. Рекомендуем!»</div>
                        </div>

                        <div class="">
                          <img src="img/farbors_ru.jpg" />

                          <div class="pt-3 slidertext_text">«Отличный сервис и внимательное отношение к деталям. Drupal не только разработали сайт для моего интернет-магазина, но и помогли с SEO-настройками. Продажи выросли, а я осталась очень довольна результатом!»</div>
                        </div>

                        <div class="">
                          <img src="img/nashagazeta_ch.png" />

                          <div class="pt-3 slidertext_text">«С Drupal мы смогли запустить крупный информационный портал. Работа выполнена на высшем уровне, поддержка — быстрая и профессиональная. Спасибо за надёжное партнёрство!»</div>
                        </div>

                        <div class="">
                          <img src="img/logo-estee.png" />

                          <div class="pt-3 slidertext_text">«Drupal показали себя как эксперты в веб-разработке. Наш корпоративный сайт получился стильным, удобным и полностью адаптированным для мобильных устройств. Рекомендуем всем, кто ищет качественные IT-решения!»</div>
                        </div>

                        <div class="">
                          <img src="img/cableman_ru.png" />

                          <div class="pt-3 slidertext_text">«Команда Drupal полностью оправдала наши ожидания. Они внимательно подошли к созданию структуры сайта и учли специфику нашего бизнеса. Всё было сделано вовремя и без лишних затрат!»</div>
                        </div>

                        <div class="">
                          <img src="img/logo_2.png" />

                          <div class="pt-3 slidertext_text">«Drupal — это синоним надёжности и качества. Мы получили не просто сайт, а полноценный инструмент для ведения бизнеса. Отдельное спасибо за интеграцию CRM-системы!»</div>
                        </div>

                        <div class="">
                          <img src="img/lpcma_rus_v4.jpg" />

                          <div class="pt-3 slidertext_text">«Работать с Drupal было легко и приятно. Они не только создали сайт с нуля, но и предоставили подробные инструкции по управлению контентом. Отличная команда!»</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="pt-5 row">
                    <div class="">
                      <div class="button_slide">
                        <button class="b1 b11">
                          <img src="img/arrow-left.svg" alt="arrow-left" />
                        </button>

                        <div class="ednum" style="font: 3em Montserrat">01</div>
                        <div style="font: 3em Montserrat">/</div>
                        <div style="font: 3em Montserrat">08</div>

                        <button class="b1 b22">
                          <img src="img/arrow-right.svg" alt="arrow-right" />
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!--Слайдер-->
        <div class="mt-5 d-flex justify-content-center">
          <div class="slider-title mb-4">
            <h2>С нами работают</h2>

            <p>
              Десятки компаний доверяют нам самое ценное, что у них есть в интернете - свои <br />
              сайты. Мы доверяем всё, чтобы наше сотрудничество было долгим
            </p>
          </div>
        </div>
        <div class="mr-1">
          <div class="slider autoplay">
            <div class="mr-1">
              <img src="img/Росатом.png" />
            </div>
            <div class="mr-1">
              <img src="img/КУБГУ.png" />
            </div>
            <div class="mr-1">
              <img src="img/газпром.png" />
            </div>
            <div class="mr-1">
              <img src="img/ВТБ.png" />
            </div>
            <div class="mr-1">
              <img src="img/Росатом.png" />
            </div>
            <div class="mr-1">
              <img src="img/КУБГУ.png" />
            </div>
            <div class="mr-1">
              <img src="img/газпром.png" />
            </div>
            <div class="mr-1">
              <img src="img/ВТБ.png" />
            </div>
          </div>
        </div>

        <div id="main" class="">
          <div class="slider autoplay2">
            <div class="mr-1">
              <img src="img/ВТБ.png" />
            </div>
            <div class="mr-1">
              <img src="img/Росатом.png" />
            </div>
            <div class="mr-1">
              <img src="img/КУБГУ.png" />
            </div>
            <div class="mr-1">
              <img src="img/газпром.png" />
            </div>
            <div class="mr-1">
              <img src="img/ВТБ.png" />
            </div>
            <div class="mr-1">
              <img src="img/Росатом.png" />
            </div>
            <div class="mr-1">
              <img src="img/КУБГУ.png" />
            </div>
            <div class="mr-1">
              <img src="img/газпром.png" />
            </div>
          </div>
        </div>

        <!-- 12 Пунктов -->
        <div>
          <section class="punkt12">
            <div class="container">
              <div class="row p-5">
                <div class="col-12">
                  <h2 class="text-center text-uppercase">FAQ</h2>
                </div>
              </div>
              <div class="row mb-5">
                <div class="red col-md-12 col-sm-12">
                  <h5 class="color_red text-left">1. Кто непосредственно занимается поддержкой?</h5>
                  <p>Сайты поддерживают штатные сотрудники ООО "Инитлаб", г. Краснодар, прошедшие специальное обучение и имеющие опыт работы с Друпал от 4 до 15 лет: 8 web-разработчиков, 2 специалиста по SEO, 4 системных администратора.</p>
                </div>
                <div class="col-md-12 col-sm-12">
                  <h5 class="text-left">2. Как организована работа поддержки?</h5>
                </div>
                <div class="col-md-12 col-sm-12">
                  <h5 class="text-left">3. Что происходит, когда отработаны все предоплаченные часы за месяц?</h5>
                </div>
                <div class="col-md-12 col-sm-12">
                  <h5 class="text-left">4. Что происходит, когда не отработаны все предоплаченные часы за месяц?</h5>
                </div>
                <div class="col-md-12 col-sm-12">
                  <h5 class="text-left">5. Как происходит оценка и согласование планируемого времени на выполнение заявок?</h5>
                </div>
                <div class="col-md-12 col-sm-12">
                  <h5 class="text-left">6. Сколько программистов выделяется на проект?</h5>
                </div>
                <div class="col-md-12 col-sm-12">
                  <h5 class="text-left">7. Как подать заявку на внесение изменений на сайте?</h5>
                </div>
                <div class="col-md-12 col-sm-12">
                  <h5 class="text-left">8. Как подать заявку на добавление пользователя, изменение настроек веб-сервера и других задач по администрированию?</h5>
                </div>
                <div class="col-md-12 col-sm-12">
                  <h5 class="text-left">9. В течение какого времени начинается работа по заявке?</h5>
                </div>
                <div class="col-md-12 col-sm-12">
                  <h5 class="text-left">10. В какое время работает поддержка?</h5>
                </div>
                <div class="col-md-12 col-sm-12">
                  <h5 class="text-left">11. Подходят ли услуги поддержки, если необходимо произвести обновление ядра Drupal или модулей?</h5>
                </div>
                <div class="col-md-12 col-sm-12">
                  <h5 class="text-left">12. Можно ли пообщаться со специалистом голосом или в мессенджере?</h5>
                </div>
              </div>
            </div>
          </section>
        </div>

        <!--Footer-->
        <div id="footer">
          <footer class="footer">
            <div class="footer-container">
              <div class="text-content">
                <div class="slewa">
                  <div class="cont">
                    <div class="zayawka">
                      <b>
                        Оставить заявку на
                        <div>поддержку сайта</div>
                      </b>
                    </div>
                    <div class="podderjka">Срочно нужна поддержка сайта? Ваша команда не успевает справиться самостоятельно или предыдущий подрядчик не справился с работой? Тогда вам точно к нам! Просто оставьте заявку и наш менеджер с вами свяжется!</div>
                    <div>
                      <div class="nomertel">
                        <a href=""> 8 800 222-26-73</a>
                      </div>
                      <div class="pochta">
                        <a href=""> info@dpural-coder.ru</a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form">
                    <?php if (!empty($errors)): ?>
            <?php foreach ($errors as $err): ?>
                <p class="error-message"><?= htmlspecialchars($err) ?></p>
            <?php endforeach; ?>
        <?php endif; ?>

        <!-- Если пользователь не авторизован — показываем форму ввода заявки -->
         <?php if (empty($username)): ?>
            <form class="contact-form" id="forma" method="post" action="form.php">
                
                <!-- Поле ФИО -->
                <div class="form-group">
                    <div class="form-item form-type-textfield form-group">
                        <label>ФИО</lable>
                        <input 
                            class="form-text <?php if (in_array("name", $errorFields)): ?>cookie-error-group<?php endif; ?>" 
                            id="field-name-value" 
                            name="name" 
                            value="<?= $get('name') ?>" 
                            placeholder="ФИО"
                        >
                    </div>
                    <?php if (in_array("name", $errorFields)): ?>
                        <div class="cookie-error-description">
                            Допустимы только буквы кириллицы и латиницы (например, Иванов Иван Иванович).
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Поле телефон -->
                <div class="form-group" id="form-phone-wrapper">
                    <div class="form-item js-form-item form-type-textfield form-group">
                        <label>Телефон</lable>
                        <input 
                            class="form-text <?php if (in_array("phone", $errorFields)): ?>cookie-error-group<?php endif; ?>" 
                            name="phone" 
                            value="<?= $get('phone') ?>" 
                            placeholder="Номер телефона"
                        >
                    </div>
                    <?php if (in_array("phone", $errorFields)): ?>
                        <div class="cookie-error-description">
                            Номер телефона указывается в формате +XXXXXXXXXXX; допустимы только цифры.
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Поле e-mail -->
                <div class="form-group">
                    <div class="form-item form-group">
                        <label>Почта</lable>
                        <input 
                            class="form-text <?php if (in_array("email", $errorFields)): ?>cookie-error-group<?php endif; ?>" 
                            name="email" 
                            value="<?= $get('email') ?>" 
                            placeholder="Эл. почта"
                        >
                    </div>
                    <?php if (in_array("email", $errorFields)): ?>
                        <div class="cookie-error-description">
                            Формат адреса: example@domain.com; допустимы буквы, цифры, точки, дефисы и символ @.
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Поле дата рождения -->
                <div class="form-group">
                    <div class="form-item form-group">
                        <input 
                            class="form-text <?php if (in_array("dob", $errorFields)): ?>cookie-error-group<?php endif; ?>" 
                            name="dob" 
                            value="<?= $get('dob') ?>" 
                            placeholder="Дата рождения" 
                            type="date"
                        >
                    </div>
                    <?php if (in_array("dob", $errorFields)): ?>
                        <div class="cookie-error-description">
                            Поле должно содержать дату в формате ГГГГ-ММ-ДД.
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Радиокнопки для выбора пола -->
                <div class="form-group">
                    <div class="form-item form-group <?php if (in_array("gender", $errorFields)): ?>cookie-error-group<?php endif; ?>">
                        Ваш пол:<br>
                        <input 
                            type="radio" 
                            class="form-type-radio radio"
                            name="gender" 
                            value="male" 
                            <?= $get('gender') === 'male' ? 'checked' : '' ?>
                        > Мужчина<br>
                        <input 
                            type="radio" 
                            class="form-type-radio radio"
                            name="gender" 
                            value="female" 
                            <?= $get('gender') === 'female' ? 'checked' : '' ?>
                        > Женщина
                    </div>
                    <?php if (in_array("gender", $errorFields)): ?>
                        <div class="cookie-error-description">
                            Поле обязательно для выбора; выберите один из вариантов.
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Множественный выбор языков программирования -->
                <div class="form-group">
                    <div class="form-item form-group">
                        Ваши любимые языки программирования:<br>
                        <select 
                            name="languages" 
                            class="form-type-select select <?php if (in_array("languages", $errorFields)): ?>cookie-error-group<?php endif; ?>" 
                            multiple="multiple"
                        >
                            <?php
                                $chosen = isset($_COOKIE['languages'])
                                    ? json_decode($_COOKIE['languages'], true)
                                    : [];
                                $all = ['Pascal','C','C++','JavaScript','PHP','Python','Java','Haskell','Clojure','Prolog','Scala','Go'];
                                foreach ($all as $lang):
                            ?>
                                <option 
                                    value="<?= $lang ?>" 
                                    <?= in_array($lang, $chosen) ? 'selected' : '' ?>
                                >
                                    <?= $lang ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <?php if (in_array("languages", $errorFields)): ?>
                        <div class="cookie-error-description">
                            Поле должно содержать хотя бы один выбранный язык программирования; можно выбрать несколько.
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Текстовое поле для биографии -->
                <div class="form-group">
                    <div class="form-item form-group">
                        <textarea 
                            class="form-text <?php if (in_array("bio", $errorFields)): ?>cookie-error-group<?php endif; ?>" 
                            id="Bio" 
                            name="bio" 
                            placeholder="Биография"
                        ><?= $get('bio') ?></textarea>
                    </div>
                    <?php if (in_array("bio", $errorFields)): ?>
                        <div class="cookie-error-description">
                            Допустимы латинские и кириллические буквы, цифры, пробельные символы и символы ";,.:-!?
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Чекбокс для подтверждения соглашения -->
                <div class="form-item form-type-checkbox checkbox">
                    <label for="agreement" class="control-label option form-required <?php if (in_array("contract", $errorFields)): ?>cookie-error-group<?php endif; ?>">
                        <input 
                            class="form-checkbox required" 
                            type="checkbox" 
                            name="contract"
                        >
                        Отправляя заявку, я даю согласие на 
                        <a href="" target="_blank" rel="nofollow">обработку персональных данных.*</a>
                    </label>
                    <?php if (in_array("contract", $errorFields)): ?>
                        <div class="cookie-error-description">
                            Поле обязательно для подтверждения; поставьте галочку.
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Кнопка отправки заявки -->
                <div class="form-group" id="edit-actions">
                    <button class="btn" type="submit" id="edit-submit" name="op">
                        Сохранить данные
                    </button>
                </div>
            </form>

            <!-- Кнопка для перехода на страницу входа -->
            <form class="form-container" action="login.php" method="get">
                Уже есть профиль?
                <div class="form-group" id="edit-actions">
                    <button class="btn" type="submit">Войти</button>
                </div>
            </form>

        <!-- Если пользователь уже авторизован — показываем приветствие и кнопки -->
        <?php else: ?>
            <form class="form-container">
                Здравствуйте, <?= htmlspecialchars($username) ?>!
                <div class="form-group">
                    <button class="btn" type="button" onclick="window.location.href = 'edit.php'">
                        Изменить данные
                    </button>
                </div>
                <br>
                Это не вы?
                <div class="form-group">
                    <button class="btn" type="button" onclick="window.location.href = 'logout.php'">
                        Выйти
                    </button>
                </div>
            </form>
        <?php endif; ?>
        </div>
    </div>
</div>
                </div>
              </div>
            </div>
            <div class="ss"></div>
            <div class="footer-container">
              <div class="podfooter">
                <div class="social">
                  <ul>
                    <li class="links">
                      <a href="" title="Facebook"><img src="img/facebook.svg" /></a>
                    </li>
                    <li class="links">
                      <a href="" title="Вконтакте"><img src="img/vk.svg" /></a>
                    </li>
                    <li class="links">
                      <a href="" title="Telegram"><img src="img/telegram.svg" /></a>
                    </li>
                    <li class="links">
                      <a href="" title="Youtube"><img src="img/youtube.svg" /></a>
                    </li>
                  </ul>
                </div>
                <div class="podpod">
                  Проект ООО «Инитлаб», Краснодар, Россия. <br />
                  Drupal валяется зарегистрированной торговой маркой Dries Buytaert.
                </div>
              </div>
            </div>
          </footer>
        </div>

        <!-- <script src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
        <script src="jquery-3.4.1.min.js"></script>
        <script src="slick/slick.min.js"></script>
        <script src="project.js"></script>
      </div>
    </div>
  </body>
</html>
