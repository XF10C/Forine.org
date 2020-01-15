 <html>

	<head>
	
		<title>Forine</title>
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
			$('#main').load('main.php  > *');
			var $preloader = $('#page-preloader'),
				$spinner   = $preloader.find('.spinner');
			$spinner.fadeOut();
			$preloader.delay(350).fadeOut('slow');
			$('body').css({'overflow':'visible'});
			$('#top').addClass('animated FadeIn');
			$('#main').addClass('animated fadeIn');
			
		});
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
		<!--Основное тело сайта-->
		<div class="inline" style="width:1200px;">
			<!--Шапка сайта-->
			<div id="top" class="centered animated">
				<div class="cover inline">
					<!--Кнопка магазина-->
					<a href="shop.php">
						<div class="shop_button" onClick="">
							<img class="" src="/images/shop_icon.png"/>
							<span>МАГАЗИН</span>
						</div>
					</a>
					<!--Логотип-->
					<div class="logo inline">
						<img class="" src="/images/logo.png"/>
					</div>
				</div>
				<!--Основное меню-->
				<div class="menu centered">
					<div class="menu_wrap inline normal">
						<!--Левое меню-->
						<div class="left_menu">
							<div class="note menu_note" onClick="showContent('#main','main.php','main'); selector('left', '-317px')">
								<span>ГЛАВНАЯ</span>
							</div>
							<div class="note1 menu_note" onClick="showContent('#main','games.php','games'); selector('left', '-183px')">
								<span>МИНИИГРЫ</span>
							</div>
							<div class="note1 menu_note" onClick="showContent('#main','players.php','players'); selector('left', '-53px')">
								<span>ИГРОКИ</span>
							</div>
						</div>
						<!--Правое меню-->
						<div class="right_menu">
							<div class="note menu_note" onClick="showContent('#main','stats.php','stats'); selector('right', '-102px')">
								<span>СТАТИСТИКА</span>
							</div>
							<div class="note1 menu_note" onClick="showContent('#main','help.php','help'); selector('right', '-248px')">
								<span>ПОМОЩЬ</span>
							</div>
							<div class="note1 menu_note" onClick="showContent('#main','faq.php','faq'); selector('right', '-346px')">
								<span>FAQ</span>
							</div>						
						</div>
						<!--Селектор меню-->
						<div id="selector" class="left">
							<img src="/images/selector.png"/>
						</div>
					</div>
				</div>
			</div>
			<!--Основной контейнер подгрузки контента-->
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
	</body>
	<!--Скрипт вк групп-->
	<script type="text/javascript">
		VK.Widgets.Group("vk_groups", {mode: 0, width: "310", height: "400", color1: 'FFFFFF', color2: 'ffa531', color3: 'fb8c00'}, 20003922);
	</script>
	
	<!--Created by Ерько Егор-->
	
</html>