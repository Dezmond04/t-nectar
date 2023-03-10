<?php
if(!empty($_GET['success'])) {
  header('Location: /success.html');
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <link rel="shortcut icon" href="/lotus-flower.png" type="image/x-icon"/>
    <title>Главная</title>
    <script defer="defer" src="./assets/js/app.js"></script>
    <link href="./assets/css/app.css" rel="stylesheet" />
    <link href="./assets/css/intlTelInput.css" rel="stylesheet">
  </head>
  <body>
    <div class="wrapper">
      <header class="header">
        <div class="header__container">
          <div class="header__wrapper">
            <div class="header__phone">
              <a
                href="tel:+971 58 553-64-77"
                class="header__phone-link header__phone-link--desk"
                >+971 58 553-64-77</a
              >
              <a
                href="tel:+971 58 553-64-77"
                class="header__phone-link header__phone-link--mob"
                ><img src="assets/img/icons/phone.svg" alt="phone" /> </a
              ><a
                href="https://t.me/tantrissimo"
                target="_blank"
                class="header__telegram-link"
                ><img src="assets/img/icons/telegram.svg" alt="telegram" /> </a
              ><a
                href="https://telegra.ph/Retrit-Tantra-Nektar-v-Dubae-24-26-fevralya-01-31"
                target="_blank"
                class="header__telegraph-link"
                ><img src="assets/img/icons/telegraph.svg" alt="telegraph"
              /></a>
            </div>
            <div class="header__logo">
              <a href="/" class="header__logo-link"
                ><span>T-Nectar Luxury</span> Retreat</a
              >
            </div>
            <div class="header__lang">
              <label class="header__lang-label"
                ><input
                  value="ru"
                  name="lang"
                  type="radio"
                  class="header__radio"
                />
                <span class="header__lang-text">ru</span></label
              >
              <label class="header__lang-label"
                ><input
                  value="en"
                  name="lang"
                  type="radio"
                  class="header__radio"
                />
                <span class="header__lang-text">eng</span></label
              >
            </div>
          </div>
        </div>
      </header>
      <main class="main">
        <section class="main-banner">
          <div class="main-banner__container">
            <div class="main-banner__title-wrapper">
              <div class="main-banner__info">
                24 - 26 февраля 2023. Отель Andaz the Palm Dubai by Hyatt (5*).
              </div>
              <h1 class="main-banner__title">
                Преобразуйте свой разум и дух на самом совершенном тантрическом
                ретрите в Дубае!
              </h1>
              <button
                data-go="#reservation"
                class="main-banner__button mainBtn"
              >
                Участвовать
              </button>
            </div>
          </div>
          <div class="main-banner__wrapper-bg">
            <div class="wave-top">
              <svg
                width="100%"
                height="100%"
                id="svg"
                viewBox="0 0 1440 320"
                xmlns="http://www.w3.org/2000/svg"
                class="transition duration-300 ease-in-out delay-150"
              >
                <path
                  d="M 0,400 C 0,400 0,200 0,200 C 124.71428571428572,201.75 249.42857142857144,203.5 364,185 C 478.57142857142856,166.5 583.0000000000001,127.75 713,141 C 842.9999999999999,154.25 998.5714285714284,219.5 1124,238 C 1249.4285714285716,256.5 1344.7142857142858,228.25 1440,200 C 1440,200 1440,400 1440,400 Z"
                  stroke="none"
                  stroke-width="0"
                  fill="#d6ece1"
                  fill-opacity="1"
                  class="transition-all duration-300 ease-in-out delay-150 path-0"
                  transform="rotate(-180 720 200)"
                ></path>
              </svg>
            </div>
            <div class="main-banner__container">
              <div class="main-banner__name">
                Преподаватель: мастер
                <a target="_blank" href="https://tantranectar.com" target="_blank"
                  >Сатьярти Пратик</a
                >
              </div>
              <div class="main-banner__wrapper">
                <div class="main-banner__content">
                  <p class="main-banner__text leftInfo">
                    Присоединяйтесь к нам в роскошном отеле
                    <a
                      href="https://www.hyatt.com/ru-RU/hotel/dubai/andaz-dubai-the-palm/dxbct"
                      target="_blank"
                      >Andaz the Palm Dubai by Hyatt</a
                    >
                    для участия в преображающем ретрите по тантре под
                    руководством мастера Сатьярти Пратика, впервые в Дубае.
                    Окунитесь в омолаживающее путешествие самосознания,
                    духовного роста и внутреннего покоя в выходные 24-26
                    февраля.
                  </p>
                  <p class="main-banner__text leftInfo-2">
                    Событие будет вестись на английском языке с живым переводом
                    на русский.
                  </p>
                  <p class="main-banner__text leftInfo-3">
                    Отдохните и зарядитесь энергией благодаря практикам йоги и
                    медитации, семинарам и личным наставлениям Мастера Сатьярти.
                    Это эксклюзивное мероприятие, призванное помочь вам
                    обратиться к своей внутренней мудрости и раскрыть весь свой
                    потенциал, предназначено как для одиночек, так и для пар.
                  </p>
                </div>
                <div class="main-banner__slider main-banner-slider">
                  <div class="main-banner-slider__swiper swiper">
                    <div class="main-banner-slider__wrapper swiper-wrapper">
                      <div class="main-banner-slider__slide swiper-slide">
                        <div class="main-banner-slider__image">
                          <img
                            src="assets/img/main-banner-slider/main-banner-slider-image-0.jpg"
                            alt="Slider Image"
                            class="main-banner-slider__img"
                          />
                        </div>
                      </div>
                      <div class="main-banner-slider__slide swiper-slide">
                        <div class="main-banner-slider__image">
                          <img
                            src="assets/img/main-banner-slider/main-banner-slider-image-1.jpg"
                            alt="Slider Image"
                            class="main-banner-slider__img"
                          />
                        </div>
                      </div>
                      <div class="main-banner-slider__slide swiper-slide">
                        <div class="main-banner-slider__image">
                          <img
                            src="assets/img/main-banner-slider/main-banner-slider-image-2.jpg"
                            alt="Slider Image"
                            class="main-banner-slider__img"
                          />
                        </div>
                      </div>
                      <div class="main-banner-slider__slide swiper-slide">
                        <div class="main-banner-slider__image">
                          <img
                            src="assets/img/main-banner-slider/main-banner-slider-image-3.jpg"
                            alt="Slider Image"
                            class="main-banner-slider__img"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="main-banner-slider__control">
                    <button
                      class="main-banner-slider__button main-banner-slider__button--prev"
                    >
                      <img
                        src="assets/img/icons/arrow-slider.svg"
                        alt="Slider Arrow"
                      />
                    </button>
                    <button
                      class="main-banner-slider__button main-banner-slider__button--next"
                    >
                      <img
                        src="assets/img/icons/arrow-slider.svg"
                        alt="Slider Arrow"
                      />
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="wave">
              <svg
                width="100%"
                height="100%"
                id="svg"
                viewBox="0 0 1440 320"
                xmlns="http://www.w3.org/2000/svg"
                class="transition duration-300 ease-in-out delay-150"
              >
                <path
                  d="M 0,400 C 0,400 0,200 0,200 C 86.46923076923076,190.20000000000002 172.93846153846152,180.40000000000003 248,187 C 323.0615384615385,193.59999999999997 386.71538461538466,216.59999999999997 462,232 C 537.2846153846153,247.40000000000003 624.1999999999999,255.2 703,256 C 781.8000000000001,256.8 852.4846153846154,250.6 943,233 C 1033.5153846153846,215.4 1143.8615384615384,186.4 1230,179 C 1316.1384615384616,171.6 1378.0692307692307,185.8 1440,200 C 1440,200 1440,400 1440,400 Z"
                  stroke="none"
                  stroke-width="0"
                  fill="#d6ece1"
                  fill-opacity="1"
                  class="transition-all duration-300 ease-in-out delay-150 path-0"
                ></path>
              </svg>
            </div>
          </div>
          <div class="main-banner__container">
            <div class="main-banner__links">
              <a
                href="https://www.facebook.com/events/2430554847103573/?active_tab=about"
                class="main-banner__link"
                target="_blank"
                ><div class="main-banner__facebook">
                  <img src="assets/img/icons/facebook.svg" alt="Facebook" />
                </div>
                <span>Facebook</span></a
              >
            </div>
            <div id="reservation" class="main-banner__reservation reservation">
              <h2 class="reservation__title">Зарезервируйте место сейчас!</h2>
              <div class="reservation__info">
                Не упустите эту возможность преобразить свой ум и ощутить более
                глубокую связь с собой и другими.
              </div>
              <div class="reservation__card reservation-card">
                <div class="reservation-card__name">
                  Люксовый оффлайновый тантра-ретрит в Дубае на Пальме (18+)
                </div>
                <div class="reservation-card__date">24-26 февраля 2023</div>
                <div class="reservation-card__info">
                  Цена включает кофебрейк с закусками и десертами, обед, подушку
                  для медитации и коврик для йоги.
                </div>
                <div class="reservation-card__wrapper">
                  <div class="reservation-card__ticked">
                    <div
                      class="reservation-card__count reservation-card__count--first"
                    >
                      1 человек
                    </div>
                    <div style="text-decoration:line-through;"
                      class="reservation-card__price reservation-card__price--first"
                    >
                      3000 AED / чел.
                    </div>
                    <div style="color:#ff0000;"
                      class="reservation-card__price reservation-card__price--first--discount"
                    >
                      2700 AED / чел.
                    </div>
                    <button
                      data-popup="#onePerson"
                      class="reservation-card__buy reservation-card__buy--first"
                    >
                      Купить
                    </button>
                  </div>
                  <div class="reservation-card__ticked">
                    <div
                      class="reservation-card__count reservation-card__count--second"
                    >
                      Для пары
                    </div>
                    <div style="text-decoration:line-through;"
                      class="reservation-card__price reservation-card__price--second"
                    >
                      2500 AED / чел.
                    </div>
                    <div style="color:#ff0000;"
                      class="reservation-card__price reservation-card__price--second--discount"
                    >
                      2500 AED / чел.
                    </div>
                    <button
                      data-popup="#twoPerson"
                      class="reservation-card__buy reservation-card__buy--second"
                    >
                      Купить
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="main-banner__map map">
              <a
                href="https://yandex.ru/maps/org/andaz_dubai_the_palm_a_concept_by_hyatt/107164697011/?from=tabbar&ll=55.141204%2C25.116822&mode=search&sctx=ZAAAAAgCEAAaKAoSCXHLR1LSwUJAER0hA3l290tAEhIJf7%2BYLVkVtT8RVyHlJ9U%2BuT8iBgABAgMEBSgKOABA1gFIAWIhYWRkX3NuaXBwZXQ9dG9wb255bV9kaXNjb3ZlcnkvMS54YkJyZWFycj1zY2hlbWVfTG9jYWwvR2VvL0xpc3REaXNjb3ZlcnkvRW5hYmxlRGlzY292ZXJ5VGV4dFJlcXVlc3RzPTFiNXJlYXJyPXNjaGVtZV9Mb2NhbC9HZW8vTGlzdERpc2NvdmVyeS9FbmFibGVSZXF1ZXN0cz0xYjpyZWFycj1zY2hlbWVfTG9jYWwvR2VvL0xpc3REaXNjb3ZlcnkvRW5hYmxlRW1wdHlSZXF1ZXN0cz0xYjVyZWFycj1zY2hlbWVfTG9jYWwvR2VvL0xpc3REaXNjb3ZlcnkvRW5hYmxlVmVydGljYWw9MWIwcmVhcnI9c2NoZW1lX0xvY2FsL0dlby9Bc2tEaXNjb3ZlcnlGb3JUb3Bvbnltcz0xYjpyZWFycj1zY2hlbWVfTG9jYWwvR2VvL0xpc3REaXNjb3ZlcnkvRW5hYmxlQ29tbW9uUGljTWVudT0xagJydZ0BzcxMPaABAKgBAL0BeRC%2BHcIBGLODjpyPA9SG0aHzAZTdvMHmBvuAoYCKBOoBAPIBAPgBAIICHUFuZGF6IHRoZSBQYWxtIER1YmFpIGJ5IEh5YXR0igIAkgIFMTE0OTmaAgxkZXNrdG9wLW1hcHM%3D&sll=55.141204%2C25.116822&source=serp_navig&sspn=0.078278%2C0.043605&text=Andaz%20the%20Palm%20Dubai%20by%20Hyatt&z=14"
                class="map__title"
                target="_blank"
                >Ссылка на локацию</a
              >
              <div class="map__iframe">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40626.095986659646!2d55.12449599808791!3d25.114302359045038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6b058a43c3bf%3A0xaf36750efbddf27a!2sAndaz%20Dubai%20The%20Palm%20-%20a%20Concept%20by%20Hyatt!5e0!3m2!1sru!2sru!4v1676236466549!5m2!1sru!2sru"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
              </div>
            </div>
          </div>
        </section>
      </main>
      <footer class="footer">
        <div class="footer__container">
          <div class="footer__container">
            <a href="tel:+971 58 553-64-77" class="footer__link"
              >+971 58 553-64-77</a
            >
            <span class="footer__name">Организатор Михаил Гончаров</span>
          </div>
        </div>
      </footer>
    </div>
    <div id="onePerson" class="popup">
      <div class="popup__wrapper">
        <div class="popup__content">
          <button class="popup__close"></button>
          <div class="popup__body">
            <form class="popup__form request_form">
              <input type="hidden" name="count" value="1">
              <div class="popup__inputs">
                <label class="popup__man popup1-name">Имя</label>
                <input type="text" name="name" required/>

                <label class="popup__phone popup1-phone">Телефон</label>
                <input type="tel" name="phone" required/>
                  <label class="popup__email popup1-email">Email</label>
                  <input type="email" name="email"/>
              </div>
              <div class="popup__labels">
                <label class="popup__label"
                  ><input name="sex" type="radio" class="popup__radio" value="male" checked/>
                  <span class="popup__check"></span>
                  <span class="popup__check-text popup1-man"
                    >Мужчина</span
                  ></label
                >
                <label class="popup__label"
                  ><input name="sex" type="radio" class="popup__radio" value="female" />
                  <span class="popup__check"></span>
                  <span class="popup__check-text popup1-women"
                    >Женщина</span
                  ></label
                >
              </div>
              <div class="popup__labels">
                <label class="popup__label"
                  ><input name="paymethod" type="radio" class="popup__radio" value="AED" checked/>
                  <span class="popup__check"></span>
                  <span class="popup__check-text popup1-pay-aed"
                    >AED</span
                  ></label
                >
                <label class="popup__label"
                  ><input name="paymethod" type="radio" class="popup__radio" value="RUB" />
                  <span class="popup__check"></span>
                  <span class="popup__check-text popup1-pay-rub"
                    >RUB</span
                  ></label
                >
                <label class="popup__label"
                  ><input name="paymethod" type="radio" class="popup__radio" value="later" />
                  <span class="popup__check"></span>
                  <span class="popup__check-text popup1-pay-after"
                    >Заплачу позже</span
                  ></label
                >
              </div>
              <div class="popup__price">
                <label class="popup__price-label popup1-price"
                  >Общая стоимость</label
                >
                <input value="3000" disabled="disabled" placeholder="3000" />
              </div>
              <button class="popup__send popup1-send send">Отправить</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="twoPerson" class="popup">
      <div class="popup__wrapper">
        <div class="popup__content">
          <button class="popup__close"></button>
          <div class="popup__body">
            <form class="popup__form request_form">
              <input type="hidden" name="count" value="2">
              <div class="popup__inputs">
                <label class="popup__man popup2-name-man">Имя мужчины</label>
                <input type="text" name="male_name" required/>
                <label class="popup__man popup2-name-women">Имя женщины</label>
                <input type="text" name="female_name" required/>
                <label class="popup__phone popup2-phone">Телефон</label>
                <input type="tel" name="phone" required/>
                <label class="popup__email popup2-email">Email</label>
                <input type="email" name="email"/>
              </div>
              <div class="popup__labels">
                <label class="popup__label"
                  ><input name="paymethod" type="radio" class="popup__radio" value="AED" checked/>
                  <span class="popup__check"></span>
                  <span class="popup__check-text popup1-pay-aed"
                    >AED</span
                  ></label
                >
                <label class="popup__label"
                  ><input name="paymethod" type="radio" class="popup__radio" value="RUB"/>
                  <span class="popup__check"></span>
                  <span class="popup__check-text popup1-pay-rub"
                    >RUB</span
                  ></label
                >
                <label class="popup__label"
                  ><input name="paymethod" type="radio" class="popup__radio" value="later"/>
                  <span class="popup__check"></span>
                  <span class="popup__check-text popup1-pay-after"
                    >Заплачу позже</span
                  ></label
                >
              </div>
              <div class="popup__price">
                <label class="popup__price-label popup2-price"
                  >Общая стоимость</label
                >
                <input value="5000" disabled="disabled" placeholder="5000" />
              </div>
              <button class="popup__send popup2-send send">Отправить</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div id="thanksModal" class="popup thanks-popup">
      <div class="popup__wrapper">
        <div class="popup__content">
          <button class="popup__close"></button>
          <div class="popup__body">
            <h5 class="popup__title">Благодарим вас!</h5>
            <div class="popup__info">
              Ждём 24 февраля 2023 в Andaz the Palm Dubai by Hyatt на
              тантрическом ретрите в Дубае
            </div>
            <div class="social">
              <a href="tel:+971 58 553-64-77" class="social__phone">
                <img src="assets/img/icons/phone.svg  " alt="phone" />
              </a>
              <a href="" class="social__facebook">
                <img
                  src="assets/img/icons/facebook.svg"
                  alt="facebook-icon"
                  class="social__facebook-icon"
                />
              </a>
              <a
                href="https://t.me/+971585536477"
                target="_blank"
                class="social__telegram"
              >
                <img src="assets/img/icons/telegram.svg" alt="telegram" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="./assets/js/lang.js"></script>
    <script src="./assets/js/intlTelInput.js"></script>
    <script src="./assets/js/request.js" type="module"></script>
  </body>
</html>
