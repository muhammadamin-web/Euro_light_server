const langData = {
  "uz": {
      "home": "Bosh sahifa",
      "about": "Biz haqimizda",
      "projects": "Loyihalarimiz",
      "contact": "Bog'lanish",
      "products_category": "Mahsulotlarimiz turlari", 
      "products": "Mahsulotlarimiz", 
      "about_text": "\"\Euro Light\"\ eksklyuziv ko'rgazma zalida noyob zamonaviy texnologiyalar va dizayn loyihalari yordamida yaratilgan 800 dan ortiq premium yoritish mahsulotlarini taqdim etadi. Qadimgi klassikadan tortib eng so'nggi yuqori texnologiyali yo'nalishlargacha bo'lgan eng yaxshi interyer uslublarida ishlab chiqarilgan qandillar,\nlampalar, pol lampalarining keng assortimenti hatto eng talabchan mijozlarni ham xursand qiladi.",
      
      "location": "Toshkent sh. Ohongaron yo'li",
      "job_time": "Har kuni 9:00 dan 18:00 gacha",
      "powered_by": "©  2023 Powered by",
      "job_time_title": "Ish vaqti",
      "social_title": "Ijtimoiy tarmoq sahifalarimiz",
      "projects1": "QANDILLAR PROJECT",
      "projects2": "YORITGICHLAR PROJECT",
      "projects3": "BRA PROJECT",
      "products1": "QANDILLAR",
      "products2": "YORITGICHLAR",
      "products3": "BRA",
      "more": "ko'proq",
      "": "",
      "": "",
  

  },
  "ru": {
      "home": "Главная страница",
      "about": "О нас",
      "projects": "Наши проекты",
      "contact": "Контакты",
      "products_category": "Виды нашей продукции", 
      "products": "Продукты",
      "about_text": "Эксклюзивный шоурум “Candela” представляет более 800 осветительных приборов премиум-класса, созданных по уникальным современным технологиям и дизайнерским проектам. Широкий ассортимент люстр, бра, светильников, торшеров, изготовленных в лучших стилях интерьера от нестареющей классики до последних тенденций Hi -Tech, порадует даже самых требовательных клиентов.",
      "location": "г. Ташкент, Охонгара р.",
      "job_time": "Каждый день с 9:00 до 18:00",
      "powered_by": "©  2023 Powered by",
      "job_time_title": "Режим работы",
      "social_title": "Социальные сети",
      "projects1": "ЛЮСТРЫ проекты",
      "projects2": "СВЕТИЛЬНИКИ проекты",
      "projects3": "БРА проекты",
      "products1": "ЛЮСТРЫ",
      "products2": "СВЕТИЛЬНИКИ",
      "products3": "БРА",
    "more": "подробнее",
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
