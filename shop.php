f <html>

	<head>
	
		<title>Forine магазин</title>
		<link rel="stylesheet" href="css/fonts.css" type="text/css"/>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		
		<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>
		<!--<script src="js/pace.js"></script>-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="//vk.com/js/api/openapi.js?105"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
		<script type="text/javascript" src="js/nprogress.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

				
		<script type='text/javascript'>
		//Смена текста в адресной строке
		function ChangeUrl(page, url) {
			if (typeof (history.pushState) != "undefined") {
				var obj = { Page: page, Url: url };
				history.pushState(obj, obj.Page, obj.Url);
			} else {
				alert("Browser does not support HTML5.");
			}
		}
		</script>		
				
		<script> 
		//Подгрузка контента
		//
		//block - id блока в который будет подгружаться контент
		//
		//link - адрес до подгружаемоего файла
		//
		//url - Текст в адресной строке после домена
			function showContent(block, link, url) {
				NProgress.start();
				$(block).fadeIn('slow');
				$(block).removeClass('FadeIn');
				$(block).load(link);
				ChangeUrl(block, '#'+url)
				NProgress.done();
			}
		</script>
		
		<script type='text/javascript'>
		//Прелоадер страницы
		$(window).on('load', function () {
			$('#main').load('shop/main.php  > *');
			var $preloader = $('#page-preloader'),
				$spinner   = $preloader.find('.spinner');
			$spinner.fadeOut();
			$preloader.delay(350).fadeOut('slow');
			$('body').css({'overflow':'visible'});
			$('#top').addClass('animated FadeIn');
			$('#main').addClass('animated fadeIn');
			
		});
		</script>
		
		<script>
			$(document).ready(function(){
				//Скрыть PopUp при загрузке страницы    
				PopUpHide('#popup1');
				PopUpHide('#popup2');
				PopUpHide('#popup3');
				PopUpHide('#popup4');
				PopUpHide('#popup5');
				PopUpHide('#popup6');
				PopUpHide('#popup7');
			});
			//Функция отображения PopUp
			function PopUpShow(popup){
				$(popup).show();
			}
			//Функция скрытия PopUp
			function PopUpHide(popup){
				$(popup).hide();
			}
		</script>

	</head>
	
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="centered">
		<!--Прелоадер-->	
		<div id="page-preloader" class="centered">
			<div class="inline"  style="overflow:hidden;width:50%; height:385px;">
				<img class="inline logo" src="/images/logo.png"/>
			</div>
			<span class="spinner"></span>
		</div>
		<!--Основное меню магазина-->
		<div class="inline" id="shop" style="width:1200px;">
			<div id="top" class="animated">
				<div class="cover left">
					<div class="logo left">
						<a href="/forine"><img class="" src="/images/logo.png"/></a>
					</div>
				</div>
				<div class="menu centered left">
					<div class="menu_wrap inline normal">
						<div class="left_menu">
							<div class="note menu_note" onClick="showContent('#main','shop/main.php','main'); selector('left', '-823px')">
								<span>ГЛАВНАЯ</span>
							</div>
							<div class="note1 menu_note" onClick="showContent('#main','shop/priviligies.php','games'); selector('left', '-679px')">
								<span>ПРИВИЛЕГИИ</span>
							</div>
							<div class="note1 menu_note" onClick="showContent('#main','shop/luckychests.php','games'); selector('left', '-490px')">
								<span>СУНДУКИ УДАЧИ</span>
							</div>
							<div class="note1 menu_note" onClick="showContent('#main','shop/boosters.php','games'); selector('left', '-333px')">
								<span>БУСТЕРЫ</span>
							</div>
							<div class="note1 menu_note" onClick="showContent('#main','shop/z-arena.php','games'); selector('left', '-215px')">
								<span>Z-АРЕНА</span>
							</div>
							<div class="note1 menu_note" onClick="showContent('#main','shop/treasure.php','games'); selector('left', '-78px')">
								<span>СОКРОВИЩА</span>
							</div>
						</div>
						<div class="right_menu">
							<div class="note1 menu_note" onClick="showContent('#main','shop/help.php','help'); selector('right', '-86px')">
								<span>ПОМОЩЬ</span>
							</div>					
						</div>
						<div id="selector" class="left">
							<img src="/images/selector.png"/>
						</div>
					</div>
				</div>
			</div>
			
			<div id="main" class="centered animated">
				
			
			</div>
			<!--Футер-->
			<div id="footer">
						
				<div class="footer_name">
				</div>
				<br>
				<div class="footer_info">
					<span class="info1">© 2016 Все права защищены</span>
				</div>

			</div>
		</div>
		<!--Pop-up окна-->	
		<div class="popup" id="popup1">
			<div class="popup-content">
				<div class="priv_body left">
					<div class="priv_node">
						<img width="50px" height="50px" src="/images/vip.png" class="left"/>
						<div class="name left">VIP</div>
						<div class="price left">50 рублей</div>
						<form class="left">
							<input class="left" type="text" placeholder="Введите ваш ник" autofocus/>
							<div class="buy_button left">
								<div class="buy_img left">
									<img src="/images/shop_icon.png"/>
								</div>
								<div class="left text">Купить</div>
							</div>
							<input class="left" type="submit" value="Поиск"/>
						</form>
					</div>
					<div class="right close" onclick="PopUpHide('#popup1')">✖</div>
				</div>
				<div class="info_text left;">
					Покупка привелегии VIP на сервере Forine.org.
					<br>
					Привилегия приобретается навсегда.
					<br><br>
					Чтобы посмотреть что входит в привилегию VIP, кликните по меню ниже.
				</div>
				<div class="left">
					<div id="game_select" class="left">
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/vip/','')">Лобби</div>
						<div class="priv_info " id="priv_info1" onload="showContent('#priv_load','shop/priviligies/vip/skywars.php','');" onclick="showContent('#priv_load','shop/priviligies/vip/skywars.php','')">Skywars</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/vip/','')">Bedwars</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/vip/','')">Герои</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/vip/','')">Z-Арена</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/vip/','')">Buildgames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/vip/','')">Partygames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/vip/','')">Tntgames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/vip/','')">Luckyblocks</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/vip/','')">Splatoon</div>
					</div>
				</div>
				<div class="left priv_info_game centered" id="priv_load">

				</div>
			</div>
		</div>
		<div class="popup" id="popup2">
			<div class="popup-content">
				<div class="priv_body left">
					<div class="priv_node">
						<img width="50px" height="50px" src="/images/premium.png" class="left"/>
						<div class="name left">ПРЕМИУМ</div>
						<div class="price left">110 рублей</div>
						<form class="left">
							<input class="left" type="text" placeholder="Введите ваш ник" autofocus/>
							<div class="buy_button left">
								<div class="buy_img left">
									<img src="/images/shop_icon.png"/>
								</div>
								<div class="left text">Купить</div>
							</div>
							<input class="left" type="submit" value="Поиск"/>
						</form>
					</div>
					<div class="right close" onclick="PopUpHide('#popup2')">✖</div>
				</div>
				<div class="info_text left;">
					Покупка привелегии Премиум на сервере Forine.org.
					<br>
					Привилегия приобретается навсегда.
					<br><br>
					Чтобы посмотреть, что входит в привилегию Премиум, кликните по меню ниже.
				</div>
				<div class="left">
					<div id="game_select" class="left">
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Лобби</div>
						<div class="priv_info " id="priv_info1" onload="showContent('#priv_load','shop/priviligies/vip/skywars.php','');" onclick="showContent('#priv_load','shop/priviligies/vip/skywars.php','')">Skywars</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Bedwars</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Герои</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Z-Арена</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Buildgames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Partygames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Tntgames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Luckyblocks</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Splatoon</div>
					</div>
				</div>
				<div class="left priv_info_game centered" id="priv_load">

				</div>
			</div>
		</div>
		<div class="popup" id="popup3">
			<div class="popup-content">
				<div class="priv_body left">
					<div class="priv_node">
						<img width="50px" height="50px" src="/images/lord.png" class="left"/>
						<div class="name left">ЛОРД</div>
						<div class="price left">250 рублей</div>
						<form class="left">
							<input class="left" type="text" placeholder="Введите ваш ник" autofocus/>
							<div class="buy_button left">
								<div class="buy_img left">
									<img src="/images/shop_icon.png"/>
								</div>
								<div class="left text">Купить</div>
							</div>
							<input class="left" type="submit" value="Поиск"/>
						</form>
					</div>
					<div class="right close" onclick="PopUpHide('#popup3')">✖</div>
				</div>
				<div class="info_text left;">
					Покупка привелегии Лорд на сервере Forine.org.
					<br>
					Привилегия приобретается навсегда.
					<br><br>
					Чтобы посмотреть, что входит в привилегию Лорд, кликните по меню ниже.
				</div>
				<div class="left">
					<div id="game_select" class="left">
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Лобби</div>
						<div class="priv_info " id="priv_info1" onload="showContent('#priv_load','shop/priviligies/vip/skywars.php','')" onclick="showContent('#priv_load','shop/priviligies/vip/skywars.php','')">Skywars</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Bedwars</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Герои</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Z-Арена</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Buildgames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Partygames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Tntgames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Luckyblocks</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Splatoon</div>
					</div>
				</div>
				<div class="left priv_info_game centered" id="priv_load">

				</div>
			</div>
		</div>
		<div class="popup" id="popup4">
			<div class="popup-content">
				<div class="priv_body left">
					<div class="priv_node">
						<img width="50px" height="50px" src="/images/sponsor.png" class="left"/>
						<div class="name left">СПОНСОР</div>
						<div class="price left">550 рублей</div>
						<form class="left">
							<input class="left" type="text" placeholder="Введите ваш ник" autofocus/>
							<div class="buy_button left">
								<div class="buy_img left">
									<img src="/images/shop_icon.png"/>
								</div>
								<div class="left text">Купить</div>
							</div>
							<input class="left" type="submit" value="Поиск"/>
						</form>
					</div>
					<div class="right close" onclick="PopUpHide('#popup4')">✖</div>
				</div>
				<div class="info_text left;">
					Покупка привелегии Спонсор на сервере Forine.org.
					<br>
					Привилегия приобретается навсегда.
					<br><br>
					Чтобы посмотреть, что входит в привилегию Спонсор, кликните по меню ниже.
				</div>
				<div class="left">
					<div id="game_select" class="left">
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Лобби</div>
						<div class="priv_info " id="priv_info1" onload="showContent('#priv_load','shop/priviligies/vip/skywars.php','');" onclick="showContent('#priv_load','shop/priviligies/vip/skywars.php','')">Skywars</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Bedwars</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Герои</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Z-Арена</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Buildgames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Partygames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Tntgames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Luckyblocks</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Splatoon</div>
					</div>
				</div>
				<div class="left priv_info_game centered" id="priv_load">

				</div>
			</div>
		</div>
		<div class="popup" id="popup5">
			<div class="popup-content">
				<div class="priv_body left">
					<div class="priv_node">
						<img width="50px" height="50px" src="/images/legend.png" class="left"/>
						<div class="name left">ЛЕГЕНДА</div>
						<div class="price left">1200 рублей</div>
						<form class="left">
							<input class="left" type="text" placeholder="Введите ваш ник" autofocus/>
							<div class="buy_button left">
								<div class="buy_img left">
									<img src="/images/shop_icon.png"/>
								</div>
								<div class="left text">Купить</div>
							</div>
							<input class="left" type="submit" value="Поиск"/>
						</form>
					</div>
					<div class="right close" onclick="PopUpHide('#popup5')">✖</div>
				</div>
				<div class="info_text left;">
					Покупка привелегии Легенда на сервере Forine.org.
					<br>
					Привилегия приобретается навсегда.
					<br><br>
					Чтобы посмотреть, что входит в привилегию Легенда, кликните по меню ниже.
				</div>
				<div class="left">
					<div id="game_select" class="left">
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Лобби</div>
						<div class="priv_info " id="priv_info1" onload="showContent('#priv_load','shop/priviligies/vip/skywars.php','');" onclick="showContent('#priv_load','shop/priviligies/vip/skywars.php','')">Skywars</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Bedwars</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Герои</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Z-Арена</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Buildgames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Partygames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Tntgames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Luckyblocks</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Splatoon</div>
					</div>
				</div>
				<div class="left priv_info_game centered" id="priv_load">

				</div>
			</div>
		</div>
		<div class="popup" id="popup6">
			<div class="popup-content">
				<div class="priv_body left">
					<div class="priv_node">
						<img width="50px" height="50px" src="/images/titan.png" class="left"/>
						<div class="name left">ТИТАН</div>
						<div class="price left">2500 рублей</div>
						<form class="left">
							<input class="left" type="text" placeholder="Введите ваш ник" autofocus/>
							<div class="buy_button left">
								<div class="buy_img left">
									<img src="/images/shop_icon.png"/>
								</div>
								<div class="left text">Купить</div>
							</div>
							<input class="left" type="submit" value="Поиск"/>
						</form>
					</div>
					<div class="right close" onclick="PopUpHide('#popup6')">✖</div>
				</div>
				<div class="info_text left;">
					Покупка привелегии Титан на сервере Forine.org.
					<br>
					Привилегия приобретается навсегда.
					<br><br>
					Чтобы посмотреть, что входит в привилегию Титан, кликните по меню ниже.
				</div>
				<div class="left">
					<div id="game_select" class="left">
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Лобби</div>
						<div class="priv_info " id="priv_info1" onload="showContent('#priv_load','shop/priviligies/vip/skywars.php','');" onclick="showContent('#priv_load','shop/priviligies/vip/skywars.php','')">Skywars</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Bedwars</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Герои</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Z-Арена</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Buildgames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Partygames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Tntgames</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Luckyblocks</div>
						<div class="priv_info" onclick="showContent('#priv_load','shop/priviligies/','')">Splatoon</div>
					</div>
				</div>
				<div class="left priv_info_game centered" id="priv_load">

				</div>
			</div>
		</div>
		<div class="popup" id="popup7">
			<div class="popup-content">
				<div class="priv_body left">
					<div class="priv_node">
						<img width="50px" height="50px" src="/images/chest.png" class="left"/>
						<div class="name left">5xСундук удачи</div>
						<div class="price left">200 рублей</div>
						<form class="left">
							<input class="left" type="text" placeholder="Введите ваш ник" autofocus/>
							<div class="buy_button left">
								<div class="buy_img left">
									<img src="/images/shop_icon.png"/>
								</div>
								<div class="left text">Купить</div>
							</div>
							<input class="left" type="submit" value="Поиск"/>
						</form>
					</div>
					<div class="right close" onclick="PopUpHide('#popup7')">✖</div>
				</div>
				<div class="info_text left;">
					Покупка пяти Сундуков удачи на сервере Forine.org
					<br>
					После покупки вы получите 5 сундуков удачи, которые вы сможете в любой момент открыть в любом доступном хабе или лобби сервера.
					<br><br>
					В каждом сундуке находится один из следующих предметов: гаджет, банер, питомец, дух, шапка, музыка, эффект, часть костюма, морф или цветной префикс.
				</div>
				</div>
			</div>
		</div>
	</body>
	
	<script type="text/javascript">
		VK.Widgets.Group("vk_groups", {mode: 0, width: "310", height: "400", color1: 'FFFFFF', color2: 'ffa531', color3: 'fb8c00'}, 20003922);
	</script>
	
	<!--Created by Ерько Егор-->
	
</html>