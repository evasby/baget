<!DOCTYPE html>
<html lang="ru">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="UTF-8">
  <title>Baget</title>
  <link rel="stylesheet" type="text/css" href="css/all.css">
  
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.bxslider.js"></script>
  <script type="text/javascript" src="js/jQuery.GI.TheWall.js"></script>
  
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <!--[if lte IE 8]>
    <link rel="stylesheet" href="css/all-old-ie.css">
  <![endif]-->
  <!--[if gt IE 8]>
    <link rel="stylesheet" href="css/all.css">
  <![endif]-->
  <!--[if lt IE 10]> 
  <script type="text/javascript" src="js/jquery.placeholder.js"></script>
  <![endif]-->
  <script>
    $(document).ready(function(){
      $('.bxslider').bxSlider({
        /*nextSelector: '#slider-next',
        prevSelector: '#slider-prev',
        nextText: 'Onward →',
        prevText: '← Go back'*/
      });
      function go(){
        /*$('.catitem_wrap').stop().show();
        $('.catitem_wrap').css('opacity','1');
        $('.catitem_wrap').animate({
          opacity: 0,
        }, 500, function() {
          $('.catitem_wrap').hide();
        });*/
        $('.catitem').css('opacity','0');
        $('.catitem').animate({
          opacity: 1,
        }, 500, function() {
          //$('.catitem_wrap').hide();
        });
      };
      var wall = $('.GITheWall').GITheWall({
        animationSpeed: 300,
        arrows: true,
        nextButtonClass: 'wall_right',
        prevButtonClass: 'wall_left',
        closeButtonClass: 'wall_close',
        initialWrapperHeight: 360,
        dynamicHeight: false,
        autoscroll: true,
        margin: {
          top: 3,
          bottom: 0
        },
        onItemChange: go
      });
    });
    
  </script>
</head>
<body>
  <div class="inner">
    <header class="header">
      <a href="/" class="header_logo">БелБагетМастер</a>
      <div class="header_center">
        <div class="header_slang"></div>
        <div class="hmenu">
          <ul class="hmenu_list">
            <li class="hmenu_item">
              <a href="#" class="hmenu_link">Частным лицам</a>
            </li>
            <li class="hmenu_item">
              <a href="#" class="hmenu_link">Юридическим лицам</a>
            </li>
            <li class="hmenu_item">
              <a href="#" class="hmenu_link">Дизайнерам</a>
            </li>
            <li class="hmenu_item">
              <a href="#" class="hmenu_link">Дилерам</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="header_info">
        <div class="header_phone">
          <p>8(029)175 10 48</p>
          <p>8(029)224 56 05</p>
        </div>
        <div class="header_sub">
          <p>Институт культуры</p>
          <p>Пушкинская</p>
        </div>
        <div class="header_time">
          <p>Звоните нам по будним</p>
          <p>с 10.00 до 20.00</p>
        </div>
      </div>
    </header>
    <nav class="menu">
      <ul class="menu_list">
        <li class="menu_item">
          <a href="/" class="menu_link">главная</a>
        </li>
        <li class="menu_item">
          <a href="#" class="menu_link">о компании</a>
        </li>
        <li class="menu_item">
          <a href="#" class="menu_link">услуги</a>
        </li>
        <li class="menu_item">
          <a href="#" class="menu_link menu_link__active">каталог багета</a>
        </li>
        <li class="menu_item">
          <a href="#" class="menu_link">галерея работ</a>
        </li>
        <li class="menu_item">
          <a href="#" class="menu_link">дисконтная программа</a>
        </li>
        <li class="menu_item">
          <a href="contacts.php" class="menu_link">контакты</a>
        </li>
      </ul>
    </nav>
    <div class="content">
      <div class="slider">
        <ul class="bxslider">
          <li><img src="/image/slider/slide1.jpg" /></li>
          <li><img src="/image/slider/slide2.jpg" /></li>
          <li><img src="/image/slider/slide3.jpg" /></li>
          <li><img src="/image/slider/slide4.jpg" /></li>
          <li><img src="/image/slider/slide5.jpg" /></li>
        </ul>
      </div>
      <div class="typelist">
        <a href="#" class="typelist_item">Деревянный багет</a>
        <a href="#" class="typelist_item">Пластиковый багет</a>
        <a href="#" class="typelist_item">Алюминиевый багет</a>
      </div>
      <div class="search">
        <a href="" class="search_link">Расширенный поиск >></a>
        <div class="search_wrap">
          <form action="#">
            <input type="text" placeholder="Поиск">
            <button type="submit">Искать</button>
          </form>  
        </div>
      </div>
      <div class="title"><h1>Каталог багета</h1></div>
      <!--<section class="catalogwidth">
        <div class="catalogwidth_title">Ширина 10-30 мм.</div>
        <div class="catalogwidth_wrap GITheWall">
          <ul>
            <li class="catalogwidth_item" data-contenttype="image" data-href="image/catalog/1.jpg">
              <img src="image/catalog/2.jpg" alt="">
            </li>
            <li class="catalogwidth_item" data-contenttype="image" data-href="image/catalog/2.jpg">
              <img src="image/catalog/2.jpg" alt="">
            </li>
            <li class="catalogwidth_item" data-contenttype="image" data-href="image/catalog/3.jpg">
              <img src="image/catalog/3.jpg" alt="">
            </li>
            <li class="catalogwidth_item" data-contenttype="image" data-href="image/catalog/4.jpg">
              <img src="image/catalog/4.jpg" alt="">
            </li>
            <li class="catalogwidth_item" data-contenttype="image" data-href="image/catalog/5.jpg">
              <img src="image/catalog/5.jpg" alt="">
            </li>
            <li class="catalogwidth_item" data-contenttype="image" data-href="image/catalog/6.jpg"">
              <img src="image/catalog/6.jpg" alt="">
            </li>
            <li class="catalogwidth_item" data-contenttype="image" data-href="image/catalog/7.jpg">
              <img src="image/catalog/7.jpg" alt="">
            </li>
            <li class="catalogwidth_item" data-contenttype="image" data-href="image/catalog/8.jpg">
              <img src="image/catalog/8.jpg" alt="">
            </li>
          </ul>
        </div>
      </section>
      <section class="catalogwidth">
        <div class="catalogwidth_title">Ширина 30-60 мм.</div>
        <div class="catalogwidth_wrap GITheWall2">
          <ul>
            <li class="catalogwidth_item" data-contenttype="image" data-href="image/catalog/9.jpg">
              <img src="image/catalog/9.jpg" alt="">
            </li>
            <li class="catalogwidth_item" data-contenttype="image" data-href="image/catalog/10.jpg">
              <img src="image/catalog/10.jpg" alt="">
            </li>
            <li class="catalogwidth_item" data-contenttype="image" data-href="image/catalog/11.jpg">
              <img src="image/catalog/11.jpg" alt="">
            </li>
            <li class="catalogwidth_item" data-contenttype="image" data-href="image/catalog/12.jpg">
              <img src="image/catalog/12.jpg" alt="">
            </li>
            <li class="catalogwidth_item" data-contenttype="image" data-href="image/catalog/13.jpg">
              <img src="image/catalog/13.jpg" alt="">
            </li>
            <li class="catalogwidth_item" data-contenttype="image" data-href="image/catalog/14.jpg">
              <img src="image/catalog/14.jpg" alt="">
            </li>
            <li class="catalogwidth_item" data-contenttype="image" data-href="image/catalog/15.jpg">
              <img src="image/catalog/15.jpg" alt="">
            </li>
            <li class="catalogwidth_item" data-contenttype="image" data-href="image/catalog/16.jpg">
              <img src="image/catalog/16.jpg" alt="">
            </li>
          </ul>
        </div>
      </section>-->
      <section class="catalogwidth GITheWall">
        <ul class="catalogwidth_list">
          <div class="catalogwidth_title">ШИРИНА 10-30 мм.</div>
          <li class="catalogwidth_item" data-contenttype="inline" data-href="#inline-template1">
            <img src="image/catalog/1b.jpg" alt="">
          </li>
          <div class="hide">
            <div id="inline-template1">
              <div class="catitem">
                <div class="catitem_image">
                  <img src="image/catalog/1b.jpg" alt="">
                </div>
                <div class="catitem_text">
                  <div class="catitem_title">Название рамы</div>
                  <div class="catitem_art">Артикул 1001</div>
                  <div class="catitem_descr">
                    <p>Блокнот для записей, оформленный известным дизайнером-иллюстратором Яной Франк, содержит интересные факты о городе и окрестностях.</p>
                    <p>Яркое оформление делает издание великолепным подарком.</p>
                  </div>
                  <a href="#" class="catitem_link">Оформить заказ</a>
                </div>
                <div class="catitem_wrap"></div>
              </div>
            </div>
          </div>
          <li class="catalogwidth_item" data-contenttype="inline" data-href="#inline-template2">
            <img src="image/catalog/2b.jpg" alt="">
          </li>
          <div class="hide">
            <div id="inline-template2">
              <div class="catitem">
                <div class="catitem_image">
                  <img src="image/catalog/2b.jpg" alt="">
                </div>
                <div class="catitem_text">
                  <div class="catitem_title">Название рамы 2</div>
                  <div class="catitem_art">Артикул 1002</div>
                  <div class="catitem_descr">
                    <p>Блокнот для записей, оформленный известным дизайнером-иллюстратором Яной Франк, содержит интересные факты о городе и окрестностях.</p>
                    <p>Яркое оформление делает издание великолепным подарком.</p>
                  </div>
                  <a href="#" class="catitem_link">Оформить заказ</a>
                </div>
                <div class="catitem_wrap"></div>
              </div>
            </div>
          </div>
          <li class="catalogwidth_item" data-contenttype="inline" data-href="#inline-template3">
            <img src="image/catalog/3b.jpg" alt="">
          </li>
          <div class="hide">
            <div id="inline-template3">
              <div class="catitem">
                <div class="catitem_image">
                  <img src="image/catalog/3b.jpg" alt="">
                </div>
                <div class="catitem_text">
                  <div class="catitem_title">Название рамы 3</div>
                  <div class="catitem_art">Артикул 1003</div>
                  <div class="catitem_descr">
                    <p>Блокнот для записей, оформленный известным дизайнером-иллюстратором Яной Франк, содержит интересные факты о городе и окрестностях.</p>
                    <p>Яркое оформление делает издание великолепным подарком.</p>
                  </div>
                  <a href="#" class="catitem_link">Оформить заказ</a>
                </div>
                <div class="catitem_wrap"></div>
              </div>
            </div>
          </div>
          <li class="catalogwidth_item" data-contenttype="inline" data-href="#inline-template4">
            <img src="image/catalog/4b.jpg" alt="">
          </li>
          <div class="hide">
            <div id="inline-template4">
              <div class="catitem">
                <div class="catitem_image">
                  <img src="image/catalog/4b.jpg" alt="">
                </div>
                <div class="catitem_text">
                  <div class="catitem_title">Название рамы 4</div>
                  <div class="catitem_art">Артикул 1004</div>
                  <div class="catitem_descr">
                    <p>Блокнот для записей, оформленный известным дизайнером-иллюстратором Яной Франк, содержит интересные факты о городе и окрестностях.</p>
                    <p>Яркое оформление делает издание великолепным подарком.</p>
                  </div>
                  <a href="#" class="catitem_link">Оформить заказ</a>
                </div>
                <div class="catitem_wrap"></div>
              </div>
            </div>
          </div>
          <li class="catalogwidth_item" data-contenttype="inline" data-href="#inline-template5">
            <img src="image/catalog/5b.jpg" alt="">
          </li>
          <div class="hide">
            <div id="inline-template5">
              <div class="catitem">
                <div class="catitem_image">
                  <img src="image/catalog/5b.jpg" alt="">
                </div>
                <div class="catitem_text">
                  <div class="catitem_title">Название рамы 5</div>
                  <div class="catitem_art">Артикул 1005</div>
                  <div class="catitem_descr">
                    <p>Блокнот для записей, оформленный известным дизайнером-иллюстратором Яной Франк, содержит интересные факты о городе и окрестностях.</p>
                    <p>Яркое оформление делает издание великолепным подарком.</p>
                  </div>
                  <a href="#" class="catitem_link">Оформить заказ</a>
                </div>
                <div class="catitem_wrap"></div>
              </div>
            </div>
          </div>
          <li class="catalogwidth_item" data-contenttype="inline" data-href="#inline-template6">
            <img src="image/catalog/6b.jpg" alt="">
          </li>
          <div class="hide">
            <div id="inline-template6">
              <div class="catitem">
                <div class="catitem_image">
                  <img src="image/catalog/6b.jpg" alt="">
                </div>
                <div class="catitem_text">
                  <div class="catitem_title">Название рамы 6</div>
                  <div class="catitem_art">Артикул 1006</div>
                  <div class="catitem_descr">
                    <p>Блокнот для записей, оформленный известным дизайнером-иллюстратором Яной Франк, содержит интересные факты о городе и окрестностях.</p>
                    <p>Яркое оформление делает издание великолепным подарком.</p>
                  </div>
                  <a href="#" class="catitem_link">Оформить заказ</a>
                </div>
                <div class="catitem_wrap"></div>
              </div>
            </div>
          </div>
          <li class="catalogwidth_item" data-contenttype="inline" data-href="#inline-template7">
            <img src="image/catalog/7b.jpg" alt="">
          </li>
          <div class="hide">
            <div id="inline-template7">
              <div class="catitem">
                <div class="catitem_image">
                  <img src="image/catalog/7b.jpg" alt="">
                </div>
                <div class="catitem_text">
                  <div class="catitem_title">Название рамы 7</div>
                  <div class="catitem_art">Артикул 1007</div>
                  <div class="catitem_descr">
                    <p>Блокнот для записей, оформленный известным дизайнером-иллюстратором Яной Франк, содержит интересные факты о городе и окрестностях.</p>
                    <p>Яркое оформление делает издание великолепным подарком.</p>
                  </div>
                  <a href="#" class="catitem_link">Оформить заказ</a>
                </div>
                <div class="catitem_wrap"></div>
              </div>
            </div>
          </div>
          <li class="catalogwidth_item" data-contenttype="inline" data-href="#inline-template8">
            <img src="image/catalog/8b.jpg" alt="">
          </li>
          <div class="hide">
            <div id="inline-template8">
              <div class="catitem">
                <div class="catitem_image">
                  <img src="image/catalog/8b.jpg" alt="">
                </div>
                <div class="catitem_text">
                  <div class="catitem_title">Название рамы 8</div>
                  <div class="catitem_art">Артикул 1008</div>
                  <div class="catitem_descr">
                    <p>Блокнот для записей, оформленный известным дизайнером-иллюстратором Яной Франк, содержит интересные факты о городе и окрестностях.</p>
                    <p>Яркое оформление делает издание великолепным подарком.</p>
                  </div>
                  <a href="#" class="catitem_link">Оформить заказ</a>
                </div>
                <div class="catitem_wrap"></div>
              </div>
            </div>
          </div>
          <div class="catalogwidth_more"><a href="#">Смотреть все багеты с шириной 10-30 мм.>></a></div>
          <div class="catalogwidth_title">ШИРИНА 30-60 мм.</div>
          <li class="catalogwidth_item" data-contenttype="inline" data-href="#inline-template9">
            <img src="image/catalog/9.jpg" alt="">
          </li>
          <div class="hide">
            <div id="inline-template9">
              <div class="catitem">
                <div class="catitem_image">
                  <img src="image/catalog/9.jpg" alt="">
                </div>
                <div class="catitem_text">
                  <div class="catitem_title">Название рамы 9</div>
                  <div class="catitem_art">Артикул 1009</div>
                  <div class="catitem_descr">
                    <p>Блокнот для записей, оформленный известным дизайнером-иллюстратором Яной Франк, содержит интересные факты о городе и окрестностях.</p>
                    <p>Яркое оформление делает издание великолепным подарком.</p>
                  </div>
                  <a href="#" class="catitem_link">Оформить заказ</a>
                </div>
                <div class="catitem_wrap"></div>
              </div>
            </div>
          </div>
          <li class="catalogwidth_item" data-contenttype="inline" data-href="#inline-template10">
            <img src="image/catalog/10.jpg" alt="">
          </li>
          <div class="hide">
            <div id="inline-template10">
              <div class="catitem">
                <div class="catitem_image">
                  <img src="image/catalog/10.jpg" alt="">
                </div>
                <div class="catitem_text">
                  <div class="catitem_title">Название рамы 10</div>
                  <div class="catitem_art">Артикул 1010</div>
                  <div class="catitem_descr">
                    <p>Блокнот для записей, оформленный известным дизайнером-иллюстратором Яной Франк, содержит интересные факты о городе и окрестностях.</p>
                    <p>Яркое оформление делает издание великолепным подарком.</p>
                  </div>
                  <a href="#" class="catitem_link">Оформить заказ</a>
                </div>
                <div class="catitem_wrap"></div>
              </div>
            </div>
          </div>
          <li class="catalogwidth_item" data-contenttype="inline" data-href="#inline-template11">
            <img src="image/catalog/11.jpg" alt="">
          </li>
          <div class="hide">
            <div id="inline-template11">
              <div class="catitem">
                <div class="catitem_image">
                  <img src="image/catalog/11.jpg" alt="">
                </div>
                <div class="catitem_text">
                  <div class="catitem_title">Название рамы 11</div>
                  <div class="catitem_art">Артикул 1011</div>
                  <div class="catitem_descr">
                    <p>Блокнот для записей, оформленный известным дизайнером-иллюстратором Яной Франк, содержит интересные факты о городе и окрестностях.</p>
                    <p>Яркое оформление делает издание великолепным подарком.</p>
                  </div>
                  <a href="#" class="catitem_link">Оформить заказ</a>
                </div>
                <div class="catitem_wrap"></div>
              </div>
            </div>
          </div>
          <li class="catalogwidth_item" data-contenttype="inline" data-href="#inline-template12">
            <img src="image/catalog/12.jpg" alt="">
          </li>
          <div class="hide">
            <div id="inline-template12">
              <div class="catitem">
                <div class="catitem_image">
                  <img src="image/catalog/12.jpg" alt="">
                </div>
                <div class="catitem_text">
                  <div class="catitem_title">Название рамы 12</div>
                  <div class="catitem_art">Артикул 1012</div>
                  <div class="catitem_descr">
                    <p>Блокнот для записей, оформленный известным дизайнером-иллюстратором Яной Франк, содержит интересные факты о городе и окрестностях.</p>
                    <p>Яркое оформление делает издание великолепным подарком.</p>
                  </div>
                  <a href="#" class="catitem_link">Оформить заказ</a>
                </div>
                <div class="catitem_wrap"></div>
              </div>
            </div>
          </div>
          <li class="catalogwidth_item" data-contenttype="inline" data-href="#inline-template13">
            <img src="image/catalog/13.jpg" alt="">
          </li>
          <div class="hide">
            <div id="inline-template13">
              <div class="catitem">
                <div class="catitem_image">
                  <img src="image/catalog/13.jpg" alt="">
                </div>
                <div class="catitem_text">
                  <div class="catitem_title">Название рамы 13</div>
                  <div class="catitem_art">Артикул 1013</div>
                  <div class="catitem_descr">
                    <p>Блокнот для записей, оформленный известным дизайнером-иллюстратором Яной Франк, содержит интересные факты о городе и окрестностях.</p>
                    <p>Яркое оформление делает издание великолепным подарком.</p>
                  </div>
                  <a href="#" class="catitem_link">Оформить заказ</a>
                </div>
                <div class="catitem_wrap"></div>
              </div>
            </div>
          </div>
          <li class="catalogwidth_item" data-contenttype="inline" data-href="#inline-template14">
            <img src="image/catalog/14.jpg" alt="">
          </li>
          <div class="hide">
            <div id="inline-template14">
              <div class="catitem">
                <div class="catitem_image">
                  <img src="image/catalog/14.jpg" alt="">
                </div>
                <div class="catitem_text">
                  <div class="catitem_title">Название рамы 14</div>
                  <div class="catitem_art">Артикул 1014</div>
                  <div class="catitem_descr">
                    <p>Блокнот для записей, оформленный известным дизайнером-иллюстратором Яной Франк, содержит интересные факты о городе и окрестностях.</p>
                    <p>Яркое оформление делает издание великолепным подарком.</p>
                  </div>
                  <a href="#" class="catitem_link">Оформить заказ</a>
                </div>
                <div class="catitem_wrap"></div>
              </div>
            </div>
          </div>
          <li class="catalogwidth_item" data-contenttype="inline" data-href="#inline-template15">
            <img src="image/catalog/15.jpg" alt="">
          </li>
          <div class="hide">
            <div id="inline-template15">
              <div class="catitem">
                <div class="catitem_image">
                  <img src="image/catalog/15.jpg" alt="">
                </div>
                <div class="catitem_text">
                  <div class="catitem_title">Название рамы 15</div>
                  <div class="catitem_art">Артикул 1015</div>
                  <div class="catitem_descr">
                    <p>Блокнот для записей, оформленный известным дизайнером-иллюстратором Яной Франк, содержит интересные факты о городе и окрестностях.</p>
                    <p>Яркое оформление делает издание великолепным подарком.</p>
                  </div>
                  <a href="#" class="catitem_link">Оформить заказ</a>
                </div>
                <div class="catitem_wrap"></div>
              </div>
            </div>
          </div>
          <li class="catalogwidth_item" data-contenttype="inline" data-href="#inline-template16">
            <img src="image/catalog/16.jpg" alt="">
          </li>
          <div class="hide">
            <div id="inline-template16">
              <div class="catitem">
                <div class="catitem_image">
                  <img src="image/catalog/16.jpg" alt="">
                </div>
                <div class="catitem_text">
                  <div class="catitem_title">Название рамы 16</div>
                  <div class="catitem_art">Артикул 1016</div>
                  <div class="catitem_descr">
                    <p>Блокнот для записей, оформленный известным дизайнером-иллюстратором Яной Франк, содержит интересные факты о городе и окрестностях.</p>
                    <p>Яркое оформление делает издание великолепным подарком.</p>
                  </div>
                  <a href="#" class="catitem_link">Оформить заказ</a>
                </div>
                <div class="catitem_wrap"></div>
              </div>
            </div>
          </div>
          <div class="catalogwidth_more"><a href="#">Смотреть все багеты с шириной 30-60 мм.>></a></div>
        </ul>
      </section>
    </div>
    <footer class="footer">
      <div class="follow">
        <div class="follow_title">Следуйте за нами</div>
        <div class="follow_list">
          <div class="follow_item"><a href="#" class="follow_link follow_link__vk">Вконтакте</a></div>
          <div class="follow_item"><a href="#" class="follow_link follow_link__ok">Одноклассники</a></div>
          <div class="follow_item"><a href="#" class="follow_link follow_link__fb">Facebook</a></div>
          <div class="follow_item"><a href="#" class="follow_link follow_link__ig">Instagram</a></div>
          <div class="follow_item"><a href="#" class="follow_link follow_link__tt">Twitter</a></div>
          <div class="follow_item"><a href="#" class="follow_link follow_link__yt">Наше видео</a></div>
        </div>
      </div>
      <div class="footer_top">
        <div class="fmenu">
          <div class="fmenu_title">О нас</div>
          <ul class="fmenu_list">
            <li class="fmenu_item">
              <a href="" class="fmenu_link">Главная</a>
            </li>
            <li class="fmenu_item">
              <a href="" class="fmenu_link">О компании</a>
            </li>
            <li class="fmenu_item">
              <a href="" class="fmenu_link">Услуги</a>
            </li>
            <li class="fmenu_item">
              <a href="" class="fmenu_link">Каталог багета</a>
            </li>
            <li class="fmenu_item">
              <a href="" class="fmenu_link">Галерея работ</a>
            </li>
            <li class="fmenu_item">
              <a href="" class="fmenu_link">Дисконтная программа</a>
            </li>
            <li class="fmenu_item">
              <a href="" class="fmenu_link">Наша команда</a>
            </li>
            <li class="fmenu_item">
              <a href="" class="fmenu_link">Наша экспертность</a>
            </li>
            <li class="fmenu_item">
              <a href="" class="fmenu_link">Отзывы</a>
            </li>
            <li class="fmenu_item">
              <a href="contacts.php" class="fmenu_link">Контакты</a>
            </li>
          </ul>
        </div>
        <div class="fmenu2">
          <div class="fmenu2_title">Сотрудничество</div>
          <div class="fmenu2_descr"><p>Мы предлагаем хорошие условия для сотрудничества, возможно с другими городами</p></div>
          <ul class="fmenu2_list">
            <li class="fmenu2_item">
              <a href="" class="fmenu2_link">Дизайнерам</a>
            </li>
            <li class="fmenu2_item">
              <a href="" class="fmenu2_link">Дилерам</a>
            </li>
            <li class="fmenu2_item">
              <a href="" class="fmenu2_link">Частным лицам</a>
            </li>
            <li class="fmenu2_item">
              <a href="" class="fmenu2_link">Юридическим лицам</a>
            </li>
          </ul>
        </div>
        <div class="fshops">
          <div class="fshops_title">Магазины</div>
          <div class="fshops_city">г.Минск</div>
          <div class="fshops_item">
            <p>Институт культуры,</p>
            <p>ул.Могилевская 5 п.6</p>
          </div>
          <div class="fshops_item">
            <p>Пушкинская,</p>
            <p>ул.Дунина-Марцинкевича 11 ТЦ "Раковский Кирмаш" 2-й этаж пав.№17</p>
          </div>
        </div>
        <div class="fcontacts">
          <div class="fcontacts_title">Контакты</div>
          <div class="fcontacts_phone">
            <p>8(029)175 10 48</p>
            <p>8(029)224 56 05</p>
          </div>
          <div class="fcontacts_email">
            <a href="">buch@baget.by</a>
          </div>
          <div class="fcontacts_skype">
            <p>Skype: bbm_office</p>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <a class="wf" href="https://webformat.by">Создание и продвижение сайтов</a>
      </div>
    </footer>
  </div>
</body>
</html>