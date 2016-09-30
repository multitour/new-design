<!DOCTYPE html>
<html lang='ru'>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Подбор отеля - NEW Мультитур</title>



<link href="css/bootstrap/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/tabs.css" rel="stylesheet" type="text/css" />
<link href="css/podbor.css" rel="stylesheet" type="text/css" />
<link href="css/sprite.css" rel="stylesheet" type="text/css" />

<link href="css/jquery.formstyler.css" rel="stylesheet" type="text/css" />
<link href="css/formstyle.css" rel="stylesheet" type="text/css" />


<!--[if IE 8]>
	<link href="css/ie8.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 9]>
	<link href="css/ie9.css" rel="stylesheet" type="text/css" />
<![endif]-->

<link href="css/jquery.ui.datepicker.css" rel="stylesheet" type="text/css" />
<link href="css/jquery-ui-1.8.18.custom.css" rel="stylesheet" type="text/css" />
<link href="css/media_queries.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>


<!-- <script type="text/javascript" src="js/jquery.ui.core.min.js"></script> -->

<script type="text/javascript" src="js/jquery.qtip-1.0.0-rc3.min.js"></script>

<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.tabs.min.js"></script>

<script type="text/javascript" src="js/jquery.ui.datepicker.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.datepicker-ru.js"></script>


<script type="text/javascript" src="js/checkbox.js"></script>
<script type="text/javascript" src="js/jquery.formstyler.min.js"></script>

<script type="text/javascript" src="js/main.js"></script>
	
</head>



<body style="background: url(img/page_bg/winter/bg_winter_center.png) top center repeat-y;">
	<div class='spring_top' style="background: url(img/page_bg/winter/bg_winter_top.png) top center no-repeat;">

	<div class="authPopUp">
	    <div id="popup" class="popup" >
			<div class="popup-content">
			<h2 class="popup-title">Авторизация</h2>
				<div class="block_link auth">
					<div class="f_left">
						<a href="http://www.multitour.ru/privateoffice/"><div class="agency"></div></a>
						<p><a href="http://www.multitour.ru/privateoffice/">Турагентство</a></p>
					</div>
					<div class="f_left f_right">
						<a href="/PrivateCabinet"><div class="private"></div></a>
						<p><a href="/PrivateCabinet">Частное лицо</a></p>
					</div>
					<div class="clear"></div>
				</div> <!-- .block_link -->
			</div> <!-- #popup-content -->
			<div id="btn-close" class="btn-close" title="Закрыть" unselectable="on"></div>
		</div> <!-- popup -->

	    <div id="hide-layout" class="hide-layout"></div>
	</div>  <!-- .authPopUp -->
	    

	<div class='spring_bot' style="background: url(img/page_bg/winter/bg_winter_bot.png) bottom center no-repeat">

	<div class="container">
		<div class="row">
		<!-- header -->
			<header>
				<div class='header'>
					<div class='logo f-left' style="position: relative">
						<a href=''><img src="img/logo.png" alt="" /></a>
											</div>
					
					<div class='f-left cap-info'>
						<div class='f-left'>
							<!-- <a class='city' href=''>Москва</a> -->
							<div class="delivery_block">
								<div class="delivery_list">
									<!-- <div id="btn"> </div> -->
									<span>Москва</span>
								</div> <!-- .delivery_list -->
								<ul class="cities_list">
									<li data-city="msk">Москва</li>
									<li data-city="nn">Нижний Новгород</li>
									<li data-city="rnd">Ростов-на-Дону</li>
									<li data-city="krn">Краснодар</li>
									<li data-city="smf">Симферополь</li>
								</ul>
							</div> <!-- .delivery_block -->
						</div> <!-- .f-left -->

						<div class='f-left phone'>
							<div class='str_cap' data-city="msk">Туристам <span><span class='call'></span><a href="tel:+74954119057">(495) 411-90-57</a></span></div>
							<div class='str_cap' data-city="msk">Агентствам <span><span class='call'></span><a href="tel:+74959566110">(495) 956-61-10</a></span></div>
				            
				    		<div class='str_cap' data-city="nn" style="display:none;">тел.: <span><span class='call'></span><a href="tel:+78314363655">(831) 436-36-55</a></span></div>
							<div class='str_cap' data-city="nn" style="display:none;">тел.: <span><span class='call'></span><a href="tel:+7834196496">(831) 419-64-96</a></span></div>
				            
				   			<div class='str_cap' data-city="rnd" style="display:none;">тел.: <span><span class='call'></span><a href="tel:+78632180953">(863) 218-09-53</a></span></div>
							<div class='str_cap' data-city="rnd" style="display:none;">тел.: <span><span class='call'></span><a href="tel:+78632180952">(863) 218-09-52</a></span></div>
				            
				    		<div class='str_cap' data-city="krn" style="display:none;">тел.: <span><span class='call'></span><a href="tel:+78612552586">(861) 255-25-86</a></span></div>
				    		<div class='str_cap' data-city="smf" style="display:none;">тел.: <span><span class='call'></span><a href="tel:+70652548583">(0652) 54-85-83</span></div>
						</div> <!-- .phone -->

											</div> <!-- #cap-info -->

					<div class="f-left f-right lk "  style='display:none;'><a class='lk dotted' href=''>Личный кабинет</a></div>
					<div class="f-left f-right lk">
						<div class='f-left login'>UltraMegaManager PAROVA MT 777</div>
						<a class='f-left out dotted' href=''>Выйти</a>
						<a href='' class='f-left out_bg'></a>
					</div>
					
					<div class="clearfix"></div>
					<nav>
						<div class="menu_block">
							<div class='menu-top clearfix'>
								<div class="f-left search_icon"><a class='search_icon' title="Подбор тура" href=""></a></div>
								<div class="f-left">
									<a href="" class="search">Подбор тура</a> |
									<!-- <a class='search_icon' href=""></a> -->
									<a href="">Туристам</a> |
									<a href="">Агентствам</a> |
									<a href="">О компании</a>
								</div>
								<div class="f-left f-right old_site">
									<a href="">Старая версия сайта</a> <span>&#9658;</span>
								</div>
							</div> <!-- .menu-top -->
						</div> <!-- .menu_block -->
					</nav>
				</div> <!-- .header -->
			</header>
		</div> <!-- .row -->
	</div> <!-- .conteiner -->
	<div class="container">
		<div class="row">
	
<div class='content'>
	<div class='block-center'>
		<!-- <div class='f_left'> -->
		<div class='bron_tabs'>
			<div class='bron_tabs_block'>
				<div class='bron_tabs_block_text'>
					<a href="#">Подбор тура</a>
				</div>
			</div>
		</div><div class='bron_tabs active'>
			<div class='bron_tabs_block'>
				<div class='bron_tabs_block_text'>
					Подбор отеля
				</div>
			</div>
		</div><div class='bron_tabs'>
			<div class='bron_tabs_block'>
				<div class='bron_tabs_block_text'>
					<a href="#">Сравнение отелей</a>
				</div>
			</div>
		</div><div class='bron_tabs'>
			<div class='bron_tabs_block'>
				<div class='bron_tabs_block_text'>
					<a href="#">Каталог экскурсионно-развлекательных туров</a>
				</div>
			</div>
		</div>
		<div class='content_bg podbor_search_hotel'>
			<div class='podbor_hotel_param clearfix'>
				<div class="f-left">
					<select name='tur_tip1'>
						<option value='0'>Россия Краснодарский край</option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
					</select>
				</div>
				<div class="f-left">
					<select name='tur_tip2'>
						<option value='0'>Курорты</option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
					</select>
				</div>
				<div class="f-left">
					<select name='tur_tip3'>
						<option value='0'>Регион/Город</option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
					</select>
				</div>
				<div class="f-left clear">
					<select name='tur_tip1'>
						<option value='0'>Уровень отеля</option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
					</select>
				</div>
				<div class="f-left">
					<select name='tur_tip2'>
						<option value='0'>Дети принимаются с, лет</option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
					</select>
				</div>
				<div class="f-left">
					<select name='tur_tip3'>
						<option value='0'>Пляж</option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
					</select>
				</div>
				<div class="f-left clear">
					<select name='tur_tip1'>
						<option value='0'>Питание</option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
					</select>
				</div>
				<div class="f-left">
					<select name='tur_tip2'>
						<option value='0'>От моря, м</option>
						<option value='1'>1</option>
						<option value='2'>2</option>
						<option value='3'>3</option>
						<option value='4'>4</option>
					</select>
				</div>
			</div> <!-- #podbor_hotel_param -->
			<div class='podbor_dop_param_check'>
				<p class='podbor_dop_param_toggle' onclick="$(this).toggleClass('podbor_dop_param_toggle_v')">Дополнительные параметры</p>
				<div class='clear'></div>
				<div class='block_apply_button' style="display:none;">
					<div class='f-left'>
						<div>
							<label for='a1' class="checkbox-inline"><input type='checkbox' name='a1' id='a1' /> Анимация</label>
						</div>
						<div>
							<label for='a2' class="checkbox-inline"><input type='checkbox' name='a2' id='a2' /> Баня/сауна</label>
						</div>
						<div>
							<label for='a3' class="checkbox-inline"><input type='checkbox' name='a1' id='a3' /> Бассейн</label>
						</div>
					</div>
					<div class='f-left'>
						<div>
							<label for='a4' class="checkbox-inline"><input type='checkbox' name='a1' id='a4' /> Боулинг</label>
						</div>
						<div>
							<label for='a5' class="checkbox-inline"><input type='checkbox' name='a2' id='a5' /> Водоем</label>
						</div>
						<div>
							<label for='a6' class="checkbox-inline"><input type='checkbox' name='a1' id='a6' /> Возможность подселения</label>
						</div>
					</div>
					<div class='f-left'>
						<div>
							<label for='a7' class="checkbox-inline"><input type='checkbox' name='a1' id='a7' /> Детская комната</label>
						</div>
						<div>
							<label for='a8' class="checkbox-inline"><input type='checkbox' name='a2' id='a8' /> Интернет</label>
						</div>
						<div>
							<label for='a9' class="checkbox-inline"><input type='checkbox' name='a1' id='a9' /> Кондиционер в номере</label>
						</div>
					</div>
					<div class='f-left'>
						<div>
							<label for='a10' class="checkbox-inline"><input type='checkbox' name='a1' id='a10' /> Лошади</label>
						</div>
						<div>
							<label for='a11' class="checkbox-inline"><input type='checkbox' name='a2' id='a11' /> Парковка</label>
						</div>
						<div>
							<label for='a12' class="checkbox-inline"><input type='checkbox' name='a1' id='a12' /> Проживание в коттеджах</label>
						</div>
					</div>
				</div> <!-- #block_apply_button -->

			</div><!-- #podbor_dop_param_check -->

			<div class='podbor_dop_param_check'>
				<p class='podbor_dop_param_toggle_prof' onclick="$(this).toggleClass('podbor_dop_param_toggle_v_prof')">Профили лечения</p>
				<div class='clear'></div>
				<div class='block_apply_button_prof clearfix' style="display:none;">
					<div class='f-left'>
						<div>
							<label for='p1' class="checkbox-inline"><input type='checkbox' name='p1' id='p1' /> Гинекология</label>
						</div>
						<div>
							<label for='p2' class="checkbox-inline"><input type='checkbox' name='p2' id='p2' /> Кожные заболевания</label>
						</div>
						<div>
							<label for='p3' class="checkbox-inline"><input type='checkbox' name='p3' id='p3' /> Нервная система</label>
						</div>
					</div>
					<div class='f-left'>
						<div>
							<label for='p4' class="checkbox-inline"><input type='checkbox' name='p4' id='p4' /> Опорно-двигательная система</label>
						</div>
						<div>
							<label for='p5' class="checkbox-inline"><input type='checkbox' name='p5' id='p5' /> Органы дыхания</label>
						</div>
						<div>
							<label for='p6' class="checkbox-inline"><input type='checkbox' name='p6' id='p6' /> Органы зрения</label>
						</div>
					</div>
					<div class='f-left'>
						<div>
							<label for='p7' class="checkbox-inline"><input type='checkbox' name='p7' id='p7' /> Пищеварительная система (ЖКТ)</label>
						</div>
						<div>
							<label for='p8' class="checkbox-inline"><input type='checkbox' name='p8' id='p8' /> Почки и мочевыводящие пути</label>
						</div>
						<div>
							<label for='p9' class="checkbox-inline"><input type='checkbox' name='p9' id='p9' /> Сердечно-сосудистая система</label>
						</div>
					</div>
				</div> <!-- #block_apply_button_prof -->
			</div> <!-- # podbor_dop_param_check -->



			<div class='podbor_submit f-right'>
				<div class='button_orange f-left'>
					<div class='button_orange_l'>
						<div class='button_orange_r'>
							<div class='button_orange_c'>
								<input type="submit" value='Найти' />
							</div>
						</div>
					</div>
				</div>
			</div> <!-- #podbor_submit -->
			<div class='clear'></div>
			<div class='podbor_results box_shadow'>
				<div class='podbor_results_value clearfix'>
					<div class='f-left podbor_results_l'>
						<h3>Россия Краснодарский край</h3>
						<div><span>Дополнительные параметры:</span> не выбраны</div>
						<div><span>Профили лечения:</span> не выбраны</div>
					</div>
					<div class='f-left podbor_results_r'>
						<ul>
							<li><a href='#'>Все туры</a></li><li class='active'>Автобусные туры из Москвы</li><li><a href='#'>Автобусные туры из Н. Новогорода</a></li><li><a href='#'>Автобусные туры из Иваново</a></li><li><a href='#'>Авиатуры из Москвы</a></li></ul>					</div>
				</div> <!-- /.podbor_results_value -->
				<div class="podbor_results_hotel clearfix">
					<table cellpadding="0" cellspacing="0" class='all_hotel all_hotel_c'>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Жемчужина, парк-отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Park Inn by Radisson Rosa Khutor, отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Олимпик Отель Сочи (быв. Олимпийский-Дагомыс)</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Жемчужина, парк-отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Park Inn by Radisson Rosa Khutor, отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
					</table>

					<table cellpadding="0" cellspacing="0" class='all_hotel all_hotel_c'>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Жемчужина, парк-отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Park Inn by Radisson Rosa Khutor, отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Олимпик Отель Сочи (быв. Олимпийский-Дагомыс)</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Жемчужина, парк-отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Park Inn by Radisson Rosa Khutor, отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
					</table>

					<table cellpadding="0" cellspacing="0" class='all_hotel '>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Жемчужина, парк-отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Park Inn by Radisson Rosa Khutor, отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Олимпик Отель Сочи (быв. Олимпийский-Дагомыс)</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Жемчужина, парк-отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Park Inn by Radisson Rosa Khutor, отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>
							<td class='action_img'>
								<img src='img/icon_down.png' alt='цены ниже стойки' title='цены ниже стойки' />
								<img src='img/recommend.png' alt='мультитур рекомендует' title='мультитур рекомендует' />
								<img src='img/multibonus_pic.png' alt='акция мультибонус' title='акция мультибонус' />
								<img src='img/small-star.png' alt='акции отеля' title='акции отеля' />
								<img src='img/spo2.png' alt='Специальное предложение' title='Специальное предложение' />
								<img src='img/new.png' alt='Новый' title='Новый' />
							</td>
						</tr>
					</table>
				</div> <!-- /.podbor_results_hotel -->
				<div class='hotel_close_bg'>
					<div class='hotel_close hotel_close_toggle_v f-left' onclick="$(this).toggleClass('hotel_close_toggle_v')">Неактивные предложения</div>

					<div class='clear'></div>
				</div>
				<div class='no_active_hotel' style="display:none;">
					<table cellpadding="0" cellspacing="0" class='all_hotel all_hotel_c'>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Жемчужина, парк-отель</a></td>

						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Park Inn by Radisson Rosa Khutor, отель</a></td>

						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>

						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>

						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>

						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Олимпик Отель Сочи (быв. Олимпийский-Дагомыс)</a></td>

						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Жемчужина, парк-отель</a></td>

						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Park Inn by Radisson Rosa Khutor, отель</a></td>

						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>

						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>

						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>

						</tr>
					</table>

					<table cellpadding="0" cellspacing="0" class='all_hotel all_hotel_c'>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Жемчужина, парк-отель</a></td>

						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Park Inn by Radisson Rosa Khutor, отель</a></td>

						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>

						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>

						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>

						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Олимпик Отель Сочи (быв. Олимпийский-Дагомыс)</a></td>

						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Жемчужина, парк-отель</a></td>

						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Park Inn by Radisson Rosa Khutor, отель</a></td>

						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>

						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>

						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>

						</tr>
					</table>

					<table cellpadding="0" cellspacing="0" class='all_hotel '>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Жемчужина, парк-отель</a></td>

						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Park Inn by Radisson Rosa Khutor, отель</a></td>

						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>

						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>

						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>

						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Олимпик Отель Сочи (быв. Олимпийский-Дагомыс)</a></td>

						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Жемчужина, парк-отель</a></td>

						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Park Inn by Radisson Rosa Khutor, отель</a></td>

						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>

						</tr>
						<tr>
							<td class='name_hotel'><a href="#">Оливия, гостевой дом</a></td>

						</tr>
						<tr class='bg_color'>
							<td class='name_hotel'><a href="#">Green Hosta, отель</a></td>

						</tr>
					</table>
				</div>
				<div class='clear'></div>
				<div class='mt_action_img'>
					<span><img src='img/icon_down.png' alt='цены ниже стойки' /> - цены ниже стойки</span>
					<span><img src='img/recommend.png' alt='мультитур рекомендует' /> - мультитур рекомендует</span>
					<span><img src='img/multibonus_pic.png' alt='акция мультибонус' /> - акция мультибонус</span>
					<span><img src='img/small-star.png' alt='акции отелей' /> - акции отелей</span>
				</div>
			</div> <!-- #podbor_results -->
			<!-- описание и карта -->
			<!-- лево -->
			<div class='map_desc visible-lg'>
				<div class='map f-left'>
					<!-- карта -->
					<div class='map_img'>
						<img src='img/map_hotels2.jpg' alt='карта' />
					</div>
					<!-- //карта -->
					<!-- дополнитеьная информация -->

					<div class='hotel_page_blockleft hotel_page_dop_info'>
						<div class='hotel_icon_block blockleft_name blockleft_dop_info'>
							Дополнительная информация
						</div>
						<div class='blockleft_ul'>
							<ul>
								<li><a href="#">Информация о стране</a></li>
								<li><a href="#">Информация о курорте</a></li>
								<li><a href="#">Информация о городе </a></li>
								<li><a href="#">Авиа билеты</a></li>
								<li><a href="#">ЖД билеты</a></li>
								<li><a href="#">Трансфер</a></li>
								<li><a href="#">Документы для туристов</a></li>
								<li><a href="#">Информация</a></li>
								<li><a href="#">Страхование</a></li>
							</ul>
						</div>
					</div>

					<!-- #дополнитеьная информация -->
					<!-- новости -->

					<div class='hotel_page_blockleft hotel_page_news spa_news'>
						<div class='hotel_icon_block blockleft_name blockleft_news'>
							Новости курорта
						</div>
						<div class='blockleft_ul'>
							<div class='blockleft_name_news'>
								<div class='f-left blockleft_name_news_date'>18.11.13</div>
								<div class='f-left blockleft_name_text'>
									<a href="#">Около 12 тысяч селян остаются без света на Кубани, где бушует ветер</a>
								</div>
							</div>
							<div class='blockleft_name_news'>
								<div class='f-left blockleft_name_news_date'>18.11.13</div>
								<div class='f-left blockleft_name_text'>
									<a href="#">Около 12 тысяч селян остаются без света на Кубани, где бушует ветер</a>
								</div>
							</div>
							<div class='blockleft_name_news'>
								<div class='f-left blockleft_name_news_date'>18.11.13</div>
								<div class='f-left blockleft_name_text'>
									<a href="#">Около 12 тысяч селян остаются без света на Кубани, где бушует ветер</a>
								</div>
							</div>
						</div>
					</div>

					<!-- #новости -->
				</div>
				<!-- //лево -->

				<!-- право -->
				<div class='desc f-left'>

					<ul class='str_ul'>
						<li>- <a href="#">График движения автобусов Москва-Анапа-Москва</a></li>
						<li>- <a href="#">Памятка для пассажира автобуса</a></li>
						<li>- <a href="#">Рассадка в автобусе</a></li>
					</ul>
					<br/>
					<h1>Автобусный тур из Москвы «ЮЖНЫЙ ЭКСПРЕСС»</h1>


					<p>В 2013 году наша компания предлагает  автобусные туры к побережью Краснодарского Края  под названием «ЮЖНЫЙ ЭКСПРЕСС». В Анапу и Геленджик автобусы отправляются в июне и сентябре два раза в неделю (воскресенье и четверг). В июле и августе три раза в неделю  (воскресенье, вторник и четверг). В этом году мы продлеваем маршрут от г. Туапсе до п. Лазаревское. Автобус отправляется один раз в неделю по воскресеньям. Благоприятные погодные условия в районе п. Лазаревское позволяют комфортно отдыхать с начала июня до конца сентября.</p>
					<p><b>Преимущества автобусных туров:</b></p>

					<ul class="desc_ul">
						<li><span class="indent"></span>это экономичный тур: проезд на автобусе к месту отдыха дешевле, чем на любом другом виде транспорта, плюс экономия на трансфере до места отдыха;</li>
						<li><span class="indent"></span>время в пути составляет 22-26 часов, что сопоставимо со скорым поездом, время в пути которого 24 часа, и гораздо быстрее пассажирского – время в пути около 36 часов. Туристов из Москвы доставят прямо к месту отдыха - не нужно заботиться о проезде от транспортного узла до здравницы;</li>
						<li><span class="indent"></span>комфортабельные современные автобусы с большим расстоянием между кресел;</li>
						<li><span class="indent"></span>сопровождающий на всем протяжении поездки.</li>
					</ul>

					<p>Проезд из Москвы осуществляется на комфортабельных автобусах 2004 – 2008 гг. выпуска (Mercedes-Benz, Неоплан, Setra). Маршрут движения автобуса: Москва – Елец – Воронеж – Ростов-на-Дону – Краснодар – Черноморское побережье. Автобусы рассчитаны на 46 пассажирских мест и двух водителей, оснащены кондиционером, двумя телевизорами с DVD - плеером, туалетом (не везде), кулером с горячей и холодной водой.</p>
					<p>Перед рейсом автобусы проходят техническую подготовку в сертифицированном сервисном центре. Хорошее техническое состояние всех автобусов и высокий профессионализм водителей обеспечивают комфорт и безопасность поездки.</p>

					<p><b>Информация по отправлению:</b></p>

					<p><b>Из Москвы</b>  автобусы, с логотипом «ЮЖНЫЙ ЭКСПРЕСС» на лобовом стекле,  отправляются от станции метро «Орехово» (<a href="#" title="схема">схема</a>) (последний вагон из центра, выход на право)  в 9:00 на Туапсе и  Лазаревское и в 11:00  на Анапу и Геленджик. Начало посадки в автобус начинается  за полчаса до отправления. Время ожидания опоздавших туристов не более 10 минут. Посадку осуществляет сопровождающий, который находится в автобусе на протяжении всей поездки.<br/>
						<b>В Москву</b> автобус отправляется с места стоянки в 16:00 и забирает туристов от пансионатов с 16:00 до 19:00. Возвращение в Москву ориентировочно в 16:00–18:00 часов.</p>

					<div>
						<img src="img/bus_1.jpg" width="198" height="128" alt="1" />
						<img src="img/bus_2.jpg" width="198" height="128" alt="2" />
						<img src="img/bus_3.jpg" width="198" height="128" alt="3" />
					</div>
				</div>
				<!-- //право -->
				<div class='clear'></div>
			</div>

			<!-- //описание и карта -->
		</div> <!-- #content_bg -->
	</div> <!-- #block-center -->
</div> <!-- #content -->


		<div class="clear blue-bg">
			<div class="footer-menu">
				<div class='f-left div3'><a href=''>Подбор тура</a></div>
				<div class='f-left div3'><a href=''>Туристам</a></div>
				<div class='f-left div3'><a href=''>Агентствам</a></div>
								<div class='f-left f-right div2 footer-lk-link'><a href=''>Вход в Личный кабинет</a></div>
			</div> <!-- .footer-menu -->
			<div class="clear"></div>
			
			<div class='footer-bg'>
				<div class="footer-solid-bg">
					<div class='footer-bg-color'>
			
						<table class='office'>
							<tr>
								<td colspan='3'>
									<p class='footer-dop-menu'>
										<a href="">Подбор тура</a> <a href="">Каталог туров</a> <a href="">Где купить</a> <a href="">Контакты</a> <a href="">Акции</a> <a href="">Спецпредложения</a> <a href="">Карта сайта</a>
									</p>
								</td>
								<td rowspan="3" class="footer-logo hidden-xs" style='padding-right:20px;vertical-align:top;'>
									<img src="img/footer-logo.png" class="img-responsive" alt="" />
									<div class="clear"></div>
									<div style='margin:0 0 10px 0;width:80px;' class="f-left">
										<span class='copy-multitour-blue'>МУЛЬТИ</span>
										<span class='copy-multitour-yellow'>ТУР</span> <br/>
										в соцсетях
									</div>
									<div class="soc f-left clearfix">
										<div class="facebook icon_soc_seti f-left"><a href=""></a></div>
										<div class="vkontakte icon_soc_seti f-left"><a href=""></a></div>
																			</div> <!-- .soc -->
								</td>
							</tr>
							<tr>
								<td colspan='4' class='namesity' style='font-weight:bold;'>Наши офисы в России:</td>
							</tr>
							<tr>
		                        <td colspan="3" style="width:75%;">
									<div class="sity-blk">
										<p class='namesity'>Москва </p>
										<div>
											для туристов: (495) 411-90-57, <br/>
											для агентств: (495) 956-61-10
										</div>
									</div>
										
			                        <div class="sity-blk">
										<p class='namesity'>Краснодар: </p>
										<div>тел.: (861) 255-25-86</div>	
			                        </div>

			                        <div class="sity-blk">
										<p class='namesity'>Экстренная связь: </p>
										<div>для туристов: (915) 083-59-13</div>	
										<div>для агентств: (495) 221-22-58</div>	
			                        </div>
			                        <div class="sity-blk">
										<p class='namesity'>Нижний Новгород: </p>
										<div>тел. (831) 282-02-87, (831) 282-02-57</div>
									</div>
		                        </td>
	                        </tr>
							<tr>
								<td colspan="3" style="vertical-align: bottom;">
									<div class="copy">
										<div class="f-left">&copy; 2000-2014. <span class='copy-multitour-blue'>МУЛЬТИ</span><span class='copy-multitour-yellow'>ТУР</span> - отдых и лечение в санаториях и пансионатах</div>
									</div>
								</td>
                                <td>&nbsp;</td>
							</tr>
						</table>
						<div class="clear"></div>

						<div class="footer-link hidden-xs">
							<div class="block1-link">
								<div class='block1'>Информация</div>		
								<div class="link-item">
									<a href="">Каталог туров</a>
									<a href="">Подбор туров</a>
								</div>
								
								<div class="link-item">
									<a href="">Лечение</a>
									<a href="">Авиабилеты</a>
								</div>
								<div class="link-item">
									<a href="">Ж/д билеты</a>
									<a href="">Страхование</a>
								</div>
								<div class="link-item">
									<a href="">Визы</a>
								</div>
							</div> <!-- /.block1-link -->
						</div> <!-- /.footer-link -->

						<div class="footer-link hidden-xs">
							<div class="block2-link">
								<div class='block2'>Страны</div>
								<div class="link-item">
									<a href="">Россия</a>
									<a href="">Украина</a>
								</div>
								<div class="link-item">
									<a href="">Беларусь</a>
									<a href="">Абхазия</a>
								</div>
								<div class="link-item">
									<a href="">Латвия</a>
									<a href="">Эстония</a>
								</div>
								<div class="link-item">
									<a href="">Литва</a>
									<a href="">Грузия</a>
								</div>
								<div class="link-item">
									<a href="">Армения</a>
									<a href="">Узбекистан</a>
								</div>
															</div> <!-- /.block2-link -->
						</div> <!-- /.footer-link -->

						<div class="clear"></div>
										</div>
				</div>

			</div>
		</div>

	</div> <!-- .row -->
</div> <!-- .conteiner -->

	</div> <!-- /.spring_bot -->
</div> <!-- /.spring_top -->

</body>
</html>