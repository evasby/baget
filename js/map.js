// Place your code here.
    /*Yandex_map*/
    var myMap;
    var addrr1
    var addrr2
    var addrr3
    var addrr4
    var addrr1_red
    var addrr2_red
    var addrr3_red
    var addrr4_red

    // Дождёмся загрузки API и готовности DOM.
    //ymaps.ready(init);

ymaps.ready(function () {
  // Создание экземпляра карты и его привязка к контейнеру с
  // заданным id ("map").
  myMap = new ymaps.Map('map', {
      // При инициализации карты обязательно нужно указать
      // её центр и коэффициент масштабирования.
      center: [53.88420578, 27.53978650], // г. Минск, Авторынок "Малиновка"
      zoom: 13
  });
  /*<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=NTqZqCkYwFMRpwC95c7Konze9vWMd7GD&width=100%&height=320"></script>*/
  

  /*document.getElementById('destroyButton').onclick = function () {
      // Для уничтожения используется метод destroy.
      myMap.destroy();
  };*/
  
  addrr1 = new ymaps.Placemark([53.88420578, 27.53978650], {
    hintContent: 'Институт культуры, ул.Могилевская 5 п.6'
  },
  {
    // Опции.
    // Необходимо указать данный тип макета.
    iconLayout: 'default#image',
    // Своё изображение иконки метки.
    iconImageHref: '/image/map_icon_red.png',
    // Размеры метки.
    iconImageSize: [29, 58],
    // Смещение левого верхнего угла иконки относительно
    // её "ножки" (точки привязки).
    iconImageOffset: [0, -58],
  });

  addrr1_red = new ymaps.Placemark([53.88420578, 27.53978650], {
    hintContent: 'Институт культуры, ул.Могилевская 5 п.6'
  },
  {
    // Опции.
    // Необходимо указать данный тип макета.
    iconLayout: 'default#image',
    // Своё изображение иконки метки.
    iconImageHref: '/image/map_icon_red.png',
    // Размеры метки.
    iconImageSize: [29, 58],
    // Смещение левого верхнего угла иконки относительно
    // её "ножки" (точки привязки).
    iconImageOffset: [0, -58],
    visible: false
  });
  
  addrr2 = new ymaps.Placemark([53.90695728, 27.49237350], {
  hintContent: 'Пушкинская, ул. Дунина-Марцинкевича 11 ТЦ "Раковский Кирмаш" 2-й этаж пав.№17'
  },
  {
    // Опции.
    // Необходимо указать данный тип макета.
    iconLayout: 'default#image',
    // Своё изображение иконки метки.
    iconImageHref: '/image/map_icon.png',
    // Размеры метки.
    iconImageSize: [29, 58],
    // Смещение левого верхнего угла иконки относительно
    // её "ножки" (точки привязки).
    iconImageOffset: [0, -58]
  });

  addrr2_red = new ymaps.Placemark([53.90695728, 27.49237350], {
  hintContent: 'Пушкинская, ул. Дунина-Марцинкевича 11 ТЦ "Раковский Кирмаш" 2-й этаж пав.№17'
  },
  {
    // Опции.
    // Необходимо указать данный тип макета.
    iconLayout: 'default#image',
    // Своё изображение иконки метки.
    iconImageHref: '/image/map_icon_red.png',
    // Размеры метки.
    iconImageSize: [29, 58],
    // Смещение левого верхнего угла иконки относительно
    // её "ножки" (точки привязки).
    iconImageOffset: [0, -58],
    visible: false
  });
  
  /*addrr3 = new ymaps.Placemark([53.947303, 27.425531], {
  hintContent: 'Институт культуры, ул.Могилевская 5 п.6'
  },
  {
    // Опции.
    // Необходимо указать данный тип макета.
    iconLayout: 'default#image',
    // Своё изображение иконки метки.
    iconImageHref: '/image/map_icon.png',
    // Размеры метки.
    iconImageSize: [29, 58],
    // Смещение левого верхнего угла иконки относительно
    // её "ножки" (точки привязки).
    iconImageOffset: [0, -58]
  });

  addrr3_red = new ymaps.Placemark([53.947303, 27.425531], {
  hintContent: 'Институт культуры, ул.Могилевская 5 п.6'
  },
  {
    // Опции.
    // Необходимо указать данный тип макета.
    iconLayout: 'default#image',
    // Своё изображение иконки метки.
    iconImageHref: '/image/map_icon_red.png',
    // Размеры метки.
    iconImageSize: [29, 58],
    // Смещение левого верхнего угла иконки относительно
    // её "ножки" (точки привязки).
    iconImageOffset: [0, -58],
    visible: false
  });
  
  addrr4 = new ymaps.Placemark([53.918842, 27.55097], {
  hintContent: 'Пушкинская, ул. Дунина-Марцинкевича 11 ТЦ "Раковский Кирмаш" 2-й этаж пав.№17'
  },
  {
    // Опции.
    // Необходимо указать данный тип макета.
    iconLayout: 'default#image',
    // Своё изображение иконки метки.
    iconImageHref: '/image/map_icon.png',
    // Размеры метки.
    iconImageSize: [29, 58],
    // Смещение левого верхнего угла иконки относительно
    // её "ножки" (точки привязки).
    iconImageOffset: [0, -58]
  });

  addrr4_red = new ymaps.Placemark([53.918842, 27.55097], {
  hintContent: 'Пушкинская, ул. Дунина-Марцинкевича 11 ТЦ "Раковский Кирмаш" 2-й этаж пав.№17'
  },
  {
    // Опции.
    // Необходимо указать данный тип макета.
    iconLayout: 'default#image',
    // Своё изображение иконки метки.
    iconImageHref: '/images/map_icon_red.png',
    // Размеры метки.
    iconImageSize: [29, 58],
    // Смещение левого верхнего угла иконки относительно
    // её "ножки" (точки привязки).
    iconImageOffset: [0, -58],
    visible: false
  });*/
  
  

  
  
  addrr1.events.add(['click'], function (e) {
    addrr1.options.set('iconImageHref', '/image/map_icon_red.png');
    addrr2.options.set('iconImageHref', '/image/map_icon.png');
    /*addrr3.options.set('iconImageHref', '/image/map_icon.png');
    addrr4.options.set('iconImageHref', '/image/map_icon.png');*/
    /*myMap.geoObjects.add(addrr1_red);*/
    myMap.panTo(addrr1.geometry.getCoordinates(), {
      delay: 1500
    });
  });
  addrr2.events.add(['click'], function (e) {
    addrr1.options.set('iconImageHref', '/image/map_icon.png');
    addrr2.options.set('iconImageHref', '/image/map_icon_red.png');
    /*addrr3.options.set('iconImageHref', '/image/map_icon.png');
    addrr4.options.set('iconImageHref', '/image/map_icon.png');*/
    myMap.panTo(addrr2.geometry.getCoordinates(), {
      delay: 1500
    });
  });   
  /*addrr3.events.add(['click'], function (e) {
    addrr1.options.set('iconImageHref', '/image/map_icon.png');
    addrr2.options.set('iconImageHref', '/image/map_icon.png');
    addrr3.options.set('iconImageHref', '/image/map_icon_red.png');
    addrr4.options.set('iconImageHref', '/image/map_icon.png');
    myMap.panTo(addrr3.geometry.getCoordinates(), {
      delay: 1500
    });
  });
  addrr4.events.add(['click'], function (e) {
    addrr1.options.set('iconImageHref', '/image/map_icon.png');
    addrr2.options.set('iconImageHref', '/image/map_icon.png');
    addrr3.options.set('iconImageHref', '/image/map_icon.png');
    addrr4.options.set('iconImageHref', '/image/map_icon_red.png');
    myMap.panTo(addrr4.geometry.getCoordinates(), {
      delay: 1500
    });
  });*/
  

  myMap.geoObjects.add(addrr1);
  myMap.geoObjects.add(addrr1_red);
  myMap.geoObjects.add(addrr2);
  myMap.geoObjects.add(addrr2_red);
  /*myMap.geoObjects.add(addrr3);
  myMap.geoObjects.add(addrr3_red);
  myMap.geoObjects.add(addrr4);
  myMap.geoObjects.add(addrr4_red);*/

});


