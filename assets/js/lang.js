const langArr = {
  unit: {
    ru: "Преобразуйте свой разум и дух на совершенном тантрическом ретрите в Дубае!",
    en: "Transform your mind and spirit with the ultimate Tantra retreat in Dubai!",
  },
  "main-banner__title": {
    ru: "Преобразуйте свой разум и дух на совершенном тантрическом ретрите в Дубае!",
    en: "Transform your mind and spirit with the ultimate Tantra retreat in Dubai!",
  },
  "main-banner__info": {
    ru: "24 - 26 февраля 2023. Отель  Andaz the Palm Dubai by Hyatt.",
    en: "February 24 - 26, 2023. Andaz the Palm Dubai by Hyatt",
  },
  "main-banner__button": {
    ru: "Участвовать!",
    en: "Join!",
  },
  "main-banner__name": {
    ru: "Преподаватель: мастер <a href='https://tantranectar.com' target='blank'>Сатьярти Пратик</a>",
    en: "Teacher: master <a href='https://tantranectar.com' target='blank'>Satyarthi Pratik</a>  ",
  },
  leftInfo: {
    ru: "Присоединяйтесь к нам в роскошном отеле <a href='https://www.hyatt.com/ru-RU/hotel/dubai/andaz-dubai-the-palm/dxbct' target='_blank'>Andaz the Palm Dubai by Hyatt</a> для участия в первом ретрите по тантре в Дубае под руководством известного мастера Сатьярти Пратика. Окунитесь в омолаживающее путешествие самосознания, духовного роста и внутреннего покоя в выходные с 24 по 26 февраля.",
    en: "Join us at the luxurious <a href='https://www.hyatt.com/ru-RU/hotel/dubai/andaz-dubai-the-palm/dxbct' target='_blank'>Andaz the Palm Dubai by Hyatt</a> for a life-changing Tantra retreat led by Grand Master Satyarthi Prateek, for the first time in Dubai. Plunge into a rejuvenated journey of self-awareness, spiritual growth and inner peace during the weekend of 24-26 February.",
  },
  "leftInfo-2": {
    ru: "Событие будет вестись на английском языке с  живым переводом на русский.",
    en: "The event will be conducted in English with live translation into Russian",
  },
  "leftInfo-3": {
    ru: "Отдохните и зарядитесь энергией благодаря практикам йоги и медитации, семинарам и личным наставлениям Мастера Сатьярти. Ретрит поможет вам обратиться к своей внутренней мудрости и раскрыть свой внутренний потенциал. Участие возможно индивидуально, а так же в парах.",
    en: "Unwind and recharge with yoga and meditation practices, workshops and personal guidance from Master Satyarthi. Designed to help you tap into your inner wisdom and unlock your full potential, this exclusive event is both for individuals and couples.",
  },
  reservation__title: {
    ru: "Воспользуйтесь нашей скидкой для ранних пташек в размере 10%, если вы сделаете заказ до 20 февраля.",
    en: "Make the most of our early-bird discount of 10% if you book before February, 20.",
  },
  reservation__info: {
    ru: "Зарезервируйте место сейчас! Не упустите эту возможность преобразить свой ум и ощутить более глубокую связь с собой.",
    en: "Reserve your place now! Don't miss this opportunity to transform your mind and experience a deeper connection with yourself and others.",
  },
  "reservation-card__name": {
    ru: "Люксовый оффлайновый тантра-ретрит в Дубае на Пальме",
    en: "Luxury offline tantra retreat in Dubai on the Palm",
  },
  "reservation-card__date": {
    ru: "24-26 февраля 2023",
    en: "February 24-26, 2023",
  },
  "reservation-card__info": {
    ru: "Цена включает кофебрейк с закусками и десертами, обед, подушку для медитации и коврик для йоги.",
    en: "Price includes coffee break with snacks and desserts, lunch, meditation cushion and yoga mat.",
  },
  "reservation-card__count--first": {
    ru: "1 человек",
    en: "1 person",
  },
  "reservation-card__price--first": {
    ru: "3000 AED / чел.",
    en: "3000 AED / person",
  },
  "reservation-card__buy--first": {
    ru: "Купить",
    en: "Buy",
  },
  "reservation-card__count--second": {
    ru: "Для пары",
    en: "For a couple",
  },
  "reservation-card__price--second": {
    ru: "2500 AED / чел.",
    en: "2500 AED / person ",
  },
  "reservation-card__buy--second": {
    ru: "Купить",
    en: "Buy",
  },
  map__title: {
    ru: "Ссылка на локацию",
    en: "Link to location",
  },
  footer__name: {
    ru: "Организатор Михаил Гончаров",
    en: "Organizer Mikhail Goncharov",
  },
  "popup1-name": {
    ru: "Имя",
    en: "Name",
  },
  "popup1-phone": {
    ru: "Телефон",
    en: "Phone",
  },
  "popup1-man": {
    ru: "Мужчина",
    en: "Man",
  },
  "popup1-women": {
    ru: "Женщина",
    en: "Woman",
  },
  "popup1-price": {
    ru: "Общая стоимость",
    en: "Total price",
  },
  "popup1-pay-aed": {
    ru: "AED",
    en: "AED",
  },
  "popup1-pay-rub": {
    ru: "RUB",
    en: "RUB",
  },
  "popup1-pay-after": {
    ru: "Заплачу позже",
    en: "I'll pay you later",
  },
  "popup1-send": {
    ru: "Отправить",
    en: "Send",
  },
  "popup2-name-man": {
    ru: "Имя мужчины",
    en: "Man's name",
  },
  "popup2-name-women": {
    ru: "Имя женщины",
    en: "Womеn's name",
  },
  "popup2-phone": {
    ru: "Телефон",
    en: "Phone",
  },
  "popup2-price": {
    ru: "Общая стоимость",
    en: "Total price",
  },
  "popup2-send": {
    ru: "Отправить",
    en: "Send",
  },
};

const langInputs = document.querySelectorAll(".header__radio");
const allLang = ["en", "ru"];

let lang;

langInputs.forEach((langInput) => {
  langInput.addEventListener("change", () => {
    if (langInput.checked) {
      lang = langInput.value;
    }

    location.href = window.location.pathname + "#" + lang;
    location.reload();
  });
});

const changeLang = () => {
  let hash = window.location.hash;
  hash = hash.substr(1);
  if (!allLang.includes(hash)) {
    location.href = window.location.pathname + "#ru";
    location.reload();
  }
  langInputs.forEach((langInput) => {
    if (langInput.value === hash) {
      langInput.checked = true;
    } else {
      langInput.checked = false;
    }
  });
  document.querySelector("title").innerHTML = langArr["unit"][hash];
  document.querySelector("html").setAttribute("lang", hash);

  for (let key in langArr) {
    console.log(key);
    let el = document.querySelector("." + key);
    if (el) {
      el.innerHTML = langArr[key][hash];
    }
  }
};
changeLang();
