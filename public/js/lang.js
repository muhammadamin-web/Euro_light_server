const langData = {
  "uz": {
      "home": "Bosh sahifa",
      "about": "Biz haqimizda",
      "projects": "Loyihalarimiz",
      "contact": "Bog'lanish",
      "products": "Mahsulotlarimiz", 
      "interier_design": "Interier dizayn", 
      "about_text": "\"\Euro Light\"\ eksklyuziv ko'rgazma zalida noyob zamonaviy texnologiyalar va dizayn loyihalari yordamida yaratilgan 800 dan ortiq premium yoritish mahsulotlarini taqdim etadi. Qadimgi klassikadan tortib eng so'nggi yuqori texnologiyali yo'nalishlargacha bo'lgan eng yaxshi interyer uslublarida ishlab chiqarilgan qandillar,\nlampalar, pol lampalarining keng assortimenti hatto eng talabchan mijozlarni ham xursand qiladi.",
      
      "location": "Toshkent sh. Ohongaron yo'li",
      "job_time": "Har kuni 9:00 dan 18:00 gacha",
      "powered_by": " ©  Ushbu sayt CMD TECH jamoasi tomonidan 2023\
      yilda ishlab chiqilgan",
      "job_time_title": "Ish vaqti",
      "social_title": "Ijtimoiy tarmoq sahifalarimiz",
      "projects1": "QANDILLAR PROJECT",
      "projects2": "YORITGICHLAR PROJECT",
      "projects3": "BRA PROJECT",
      "products1": "QANDILLAR",
      "products2": "YORITGICHLAR",
      "products3": "BRA",
      "telegram": "TELEGRAM",
      "instagram": "INSTAGRAM",
      "more": "ko'proq...",
      "interier_detail_title_text": "Interyer",
      "more_button": "batafsil",
      "footer_title": "Bizning ijtimoiy tarmoq sahifalarimizga obuna bo’ling",
      "categories": "Kategoriyalar",
      "about_title": "Euro Light haqida",
      "about_text1": "\"Euro Light\" eksklyuziv ko'rgazma zalida noyob zamonaviy texnologiyalar va dizayn loyihalari yordamida yaratilgan 800 dan ortiq premium yoritish mahsulotlarini taqdim etadi.",
      "about_text2": "Qadimgi klassikadan tortib eng so'nggi yuqori texnologiyali yo'nalishlargacha bo'lgan eng yaxshi interyer uslublarida ishlab chiqarilgan qandillar, lampalar, pol lampalarining keng assortimenti hatto eng talabchan mijozlarni ham xursand qiladi.",
  

  },
  "ru": {
      "home": "Главная страница",
      "about": "О нас",
      "projects": "Наши проекты",
      "contact": "Контакты",
      "products": "Продукты",
      "categories": "Категории",

      "interier_design": "Интерьер дизайн",
      "about_text": "Эксклюзивный шоурум “Candela” представляет более 800 осветительных приборов премиум-класса, созданных по уникальным современным технологиям и дизайнерским проектам. Широкий ассортимент люстр, бра, светильников, торшеров, изготовленных в лучших стилях интерьера от нестареющей классики до последних тенденций Hi -Tech, порадует даже самых требовательных клиентов.",
      "location": "г. Ташкент, Охонгара р.",
      "job_time": "Каждый день с 9:00 до 18:00",
      "powered_by": "© Этот сайт создан командой CMD TECH 2023\
      разработан в",
      "job_time_title": "Режим работы",
      "social_title": "Социальные сети",
      "projects1": "ЛЮСТРЫ проекты",
      "projects2": "СВЕТИЛЬНИКИ проекты",
      "projects3": "БРА проекты",
      "products1": "ЛЮСТРЫ",
      "products2": "СВЕТИЛЬНИКИ",
      "products3": "БРА",
      "telegram": "TELEGRAM",
      "instagram": "INSTAGRAM",
    "more": "подробнее...",
    "more_button": "подробнее",
    "footer_title": "Подпишитесь на наши страницы в социальных сетях",
    "about_title": "О Евро Лайт",
    "about_text2": "Широкий ассортимент люстр, светильников, торшеров, выполненных в лучших интерьерных стилях, от старой классики до последних тенденций высоких технологий, порадует даже самых требовательных покупателей.",

    "about_text1": "«Евро Лайт» представляет в эксклюзивном шоу-руме более 800 наименований светотехнической продукции премиум-класса, созданной с использованием уникальных современных технологий и дизайнерских проектов.",
    "interier_detail_title_text": "Интерьер",
    "": "",
    "": "",
    "": "",
    "": "",
    "": "",
    "": "",
    "": "",
    "": "",
    "": "",
    "": "",
    "": "",
    "": "",

  }
};

const langElements = document.querySelectorAll('.lang');

function changeLanguage(language) {
  selectedLanguage = language;
  langElements.forEach(el => {
    el.textContent = langData[selectedLanguage][el.getAttribute('key')];
  });
}



// Tilni qayta belgilash
let selectedLanguage = 'uz';
langElements.forEach(el => {
  el.textContent = langData[selectedLanguage][el.getAttribute('key')];
});

const langButtons = document.querySelectorAll('.lang-button');
langButtons.forEach(btn => {
btn.addEventListener('click', () => {
  changeLanguage(btn.dataset.lang);
  langButtons.forEach(btn => {
    btn.classList.remove('active_lang');
  });
  btn.classList.add('active_lang');
});
});
