		//Селектор слайдера "миниигры"
		$(function() {
			$('body').on('click','.gs_link',function() {
			$('.gs_link').removeClass('active');
			$(this).addClass('active');
			});
		});
		//Селектор слайдера "возможности"
		$(function() {
			$('body').on('click','.flink',function() {
			$('.flink').removeClass('active');
			$(this).addClass('active');
			});
		});
		//Селектор "привилегии"
		$(function() {
			$('body').on('click','.priv_info',function() {
			$('.priv_info').removeClass('active');
			$(this).addClass('active');
			});
		});
		//Селектор "статистика"
		$(function() {
			$('body').on('click','.stat_node',function() {
			$('.stat_node').removeClass('active');
			$(this).addClass('active');
			});
		});
		

		//Кривой скрипт "слайдера"
		//
		//mode - режим работы слайдера (2 вида на выбор, можешь сам добавлять)
		//		1)top_down - колонки катаются вверх вниз рассинхронно
		//		2)left_right - колонки катаются влево вправо рассинхронно
		//
		//size_f - размер одного слайда первой колонки
		//
		//size_s - размер одного слайда второй колонки
		//
		//slide - номер слайда (нумерация от нуля!)
		//
		//slide_num - общее количество слайдов
		//
		//first - название первой колонки 
		//
		//second название второй колонки
		
		function slide(mode, size_f, size_s, slide, slide_num, first, second) 
		{
			var fc = - (size_f*slide)
			var sc = - (size_s*(slide_num-slide-1))
			if (mode=="top_down") {
				document.getElementById(first).style.marginTop=fc +('px');
				document.getElementById(second).style.marginTop=sc +('px');
			}
			if (mode=="left_right") {
				document.getElementById(first).style.marginLeft=fc +('px');
				document.getElementById(second).style.marginLeft=sc +('px');
			}
		}
		
		//Кривой скрипт "селектора" (реализовать отсчёт по родительским элементам не получилось, ввиду специфики самого меню, попробуй сам :) )
		//
		//side - сторона, на которой находится селектор
		//
		//margin - отступ в пикселях самого селектора
		
		function selector(side, margin, a) {

			if (side == 'left') {
				document.getElementById("selector").style.marginRight="none";
				document.getElementById("selector").style.marginLeft=margin;
				document.getElementById("selector").style.float=side;
			}
			if (side == 'right') {
				document.getElementById("selector").style.marginRight=margin;
				document.getElementById("selector").style.marginLeft="none";
				document.getElementById("selector").style.float=side;
			}
		}
		