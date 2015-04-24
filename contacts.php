<!DOCTYPE html>
<html lang="ru">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta charset="UTF-8">
  <title>Baget</title>
  <link rel="stylesheet" type="text/css" href="css/all.css">
  
  <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="js/jquery.bxslider.js"></script>
  
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
      var slider;
      var slidermin;
      var slidermin1;
      var slidermin2;
      var slidermin3;
      var slidermin4;
      /*slidermin = $('.cslidermin_list').bxSlider({
        pagerCustom: '.cslidermin_pager',
        controls: false,
        //mode: 'fade'
      });*/
			/*$('.cslidermin_list').each(function() {
			  $(this).bxSlider({
	        pagerCustom: '.cslidermin_pager',
	        controls: false,
	      });
			});*/
			/*slidermin = $('.cslidermin_list').bxSlider({
        //pagerCustom: '.cslidermin_pager',
        controls: false,
      });  */
    	/*$('.cslidermin_list_1').each(function() {
			  $(this).bxSlider({
	        pagerCustom: '.cslidermin_pager_1',
	        controls: false,
	      });
			});
			$('.cslidermin_list_2').each(function() {
			  $(this).bxSlider({
	        pagerCustom: '.cslidermin_pager_2',
	        controls: false,
	      });
			});
			$('.cslidermin_list_3').each(function() {
			  $(this).bxSlider({
	        pagerCustom: '.cslidermin_pager_3',
	        controls: false,
	      });
			});
			$('.cslidermin_list_4').each(function() {
			  $(this).bxSlider({
	        pagerCustom: '.cslidermin_pager_4',
	        controls: false,
	      });
			});*/
			slidermin1 = $('.cslidermin_list_1').bxSlider({
        pagerCustom: '.cslidermin_pager_1',
        controls: false,
      });
      slidermin2 = $('.cslidermin_list_2').bxSlider({
        pagerCustom: '.cslidermin_pager_2',
        controls: false,
      });
      slidermin3 = $('.cslidermin_list_3').bxSlider({
        pagerCustom: '.cslidermin_pager_3',
        controls: false,
      });
      slidermin4 = $('.cslidermin_list_4').bxSlider({
        pagerCustom: '.cslidermin_pager_4',
        controls: false,
      });

      slider = $('.bxslider').bxSlider({
        pagerCustom: '#bx-pager',
        controls: false,
        mode: 'fade',
        onSliderLoad: function(currentIndex){
        	slidermin1 = $('.cslidermin_list_1').bxSlider({
		        pagerCustom: '.cslidermin_pager_1',
		        controls: false,
		      });
        },
        onSlideAfter: function($slideElement, oldIndex, newIndex){

        	//$slideElement: jQuery element of the destination element
				  //oldIndex: element index of the previous slide (before the transition)
				  //newIndex: element index of the destination slide (after the transition)
				  /*switch (oldIndex) {
				  	case (0):
	          	slidermin1.destroySlider();
	          	break;
	          case (1):
	          	slidermin2.destroySlider();
	          	break;
	          case (2):
	          	slidermin3.destroySlider();
	          	break;
	          case (3):
	          	slidermin4.destroySlider();
	          	break;
	        }*/

				  switch (newIndex) {
	          case (0):
	          	slidermin1.reloadSlider({
		        		pagerCustom: '.cslidermin_pager_1',
		        		controls: false,
		        	});
		        	/*slidermin2 = $('.cslidermin_list_2').bxSlider({
				        pagerCustom: '.cslidermin_pager_2',
				        controls: false,
				      });*/
	          	break;
	          case (1):
	          	slidermin2.reloadSlider({
		        		pagerCustom: '.cslidermin_pager_2',
		        		controls: false,
		        	});
		        	/*slidermin2 = $('.cslidermin_list_2').bxSlider({
				        pagerCustom: '.cslidermin_pager_2',
				        controls: false,
				      });*/
	          	break;
	          case (2):
	     				slidermin3.reloadSlider({
		        		pagerCustom: '.cslidermin_pager_3',
		        		controls: false,
		        	});
		        	/*slidermin3 = $('.cslidermin_list_3').bxSlider({
				        pagerCustom: '.cslidermin_pager_3',
				        controls: false,
				      });*/
	          	break;
	          case (3):
	     				slidermin4.reloadSlider({
		        		pagerCustom: '.cslidermin_pager_4',
		        		controls: false,
		        	});
		        	/*slidermin4 = $('.cslidermin_list_4').bxSlider({
				        pagerCustom: '.cslidermin_pager_4',
				        controls: false,
				      });*/
	          	break;
	          default:
     			}
				  /*console.log($slideElement);
				  console.log(oldIndex);
				  console.log(newIndex);*/
        },
        onSlideBefore: function(){
        },
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
          <a href="catalog.php" class="menu_link">каталог багета</a>
        </li>
        <li class="menu_item">
          <a href="#" class="menu_link">галерея работ</a>
        </li>
        <li class="menu_item">
          <a href="#" class="menu_link">дисконтная программа</a>
        </li>
        <li class="menu_item">
          <a href="contacts.php" class="menu_link menu_link__active">контакты</a>
        </li>
      </ul>
    </nav>
    <div class="content">
      <div class="title"><h1>Контакты</h1></div>
      <div class="contacts">
        <div class="contacts_row">
          <div class="contacts_item">
            <ul id="bx-pager">
              <li><a href="" data-slide-index="0">Институт культуры</a></li>
              <li><a href="" data-slide-index="1">Пушкинская</a></li>
              <li><a href="" data-slide-index="2">Институт культуры</a></li>
              <li><a href="" data-slide-index="3">Пушкинская</a></li>
            </ul>
          </div>
          <div class="contacts_item">
            <div class="cslider">
              <ul class="bxslider">
                <li>
                  <div class="cslidermin">
                    <div class="cslidermin_title">Время работы с 10.00 до 20.00</div>
                    <ul class="cslidermin_list cslidermin_list_1">
                      <li>
                        <img src="/image/slide.jpg" />
                      </li>
                      <li>
                        <img src="/image/slide.jpg" />
                      </li>
                      <li>
                        <img src="/image/slide.jpg" />
                      </li>
                    </ul>
                    <div class="cslidermin_pager cslidermin_pager_1">
                      <a href="" data-slide-index="0"><img src="/image/slide.jpg" /></a>
                      <a href="" data-slide-index="1"><img src="/image/slide.jpg" /></a>
                      <a href="" data-slide-index="2"><img src="/image/slide.jpg" /></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="cslidermin">
                    <div class="cslidermin_title">Время работы с 11.00 до 20.00</div>
                    <ul class="cslidermin_list cslidermin_list_2">
                      <li>
                        <img src="/image/slide.jpg" />
                      </li>
                      <li>
                        <img src="/image/slide.jpg" />
                      </li>
                      <li>
                        <img src="/image/slide.jpg" />
                      </li>
                    </ul>
                    <div class="cslidermin_pager cslidermin_pager_3">
                      <a href="" data-slide-index="0"><img src="/image/slide.jpg" /></a>
                      <a href="" data-slide-index="1"><img src="/image/slide.jpg" /></a>
                      <a href="" data-slide-index="2"><img src="/image/slide.jpg" /></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="cslidermin">
                    <div class="cslidermin_title">Время работы с 12.00 до 20.00</div>
                    <ul class="cslidermin_list cslidermin_list_3">
                      <li>
                        <img src="/image/slide.jpg" />
                      </li>
                      <li>
                        <img src="/image/slide.jpg" />
                      </li>
                      <li>
                        <img src="/image/slide.jpg" />
                      </li>
                    </ul>
                    <div class="cslidermin_pager cslidermin_pager_3">
                      <a href="" data-slide-index="0"><img src="/image/slide.jpg" /></a>
                      <a href="" data-slide-index="1"><img src="/image/slide.jpg" /></a>
                      <a href="" data-slide-index="2"><img src="/image/slide.jpg" /></a>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="cslidermin">
                    <div class="cslidermin_title">Время работы с 13.00 до 20.00</div>
                    <ul class="cslidermin_list cslidermin_list_4">
                      <li>
                        <img src="/image/slide.jpg" />
                      </li>
                      <li>
                        <img src="/image/slide.jpg" />
                      </li>
                      <li>
                        <img src="/image/slide.jpg" />
                      </li>
                    </ul>
                    <div class="cslidermin_pager cslidermin_pager_4">
                      <a href="" data-slide-index="0"><img src="/image/slide.jpg" /></a>
                      <a href="" data-slide-index="1"><img src="/image/slide.jpg" /></a>
                      <a href="" data-slide-index="2"><img src="/image/slide.jpg" /></a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="contacts_item">map</div>
        </div>
        <div class="contacts_row"></div>
      </div>
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
              <a href="catalog.php" class="fmenu_link">Каталог багета</a>
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