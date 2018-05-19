$(document).ready(function(){   
	
	// аккардеон в левом сайдабере
	$('#nav_list a').on("click", function(e) {
		e.stopPropagation();
		e.preventDefault();
		if($(this).next('.submenu').length > 0){ // если есть дочки, то мы в верхнем меню, значит проверяем открыто ли меню или нет
			
			if($(this).next('.submenu').css('display') == 'none'){
				$('.submenu').not($(this).parents('.submenu')).slideUp(300);
				$('.cross-sidebar').not($(this).children('.cross-sidebar')).css({transform:'rotate(-315deg)'});
				$(this).next('.submenu').slideDown(300);
				$(this).children('.cross-sidebar').css({transform:'rotate(0deg)'});
			} else window.location.href = $(this).attr('href');
		} else window.location.href = $(this).attr('href'); // если дочек нет, то сразу переходим по ссылке
	});

	$('.cross-sidebar').on('click',function(e){
		if($(this).parent('a').next('.submenu').css('display') == 'block'){
			e.stopPropagation();
			e.preventDefault();

			$(this).parent('a').next('.submenu').slideUp(300);
			$(this).css({transform:'rotate(-315deg)'});
		}
	});
	
	


	//Эффект расохдящегося круга
	$('.ripple').click(function(e){
		var ink, d, x, y;

		//создаём .ink элемент, если еще не создан
		if ($(this).children('.ink').length == 0){
			$(this).prepend("<span class='ink'></span>");
		}

		//сбрасываем класс отвечаюищй за анимацию
		ink = $(this).children('.ink');
		ink.removeClass('animate'); 
		
		//рассчитываем размеры .ink элемента
		if(!ink.height() && !ink.width()) {
			d = Math.max($(this).outerWidth(), $(this).outerHeight());
			ink.css({height: d, width: d});
		}

		//получим начальные координаты, т.к. центр .ink нужно поместить в точку клика
		x = e.pageX - $(this).offset().left - ink.width()/2;
		y = e.pageY - $(this).offset().top - ink.height()/2;
		//установим координаты и запустим анимацию
		ink.css({top: y+'px', left: x+'px'}).addClass('animate');
	});



	
	/* Слайдер */
	$(function () {
		const speed = 500;

		var pictW,imgW,n,pict,img,currentM,end=true,btns,btnActive=0;
		pict = $('#slider .pict'); // колекция блоков с картинками
		img = $('#slider .images'); // коллекция картинок
		pictW = 1200; // ширина блока с картинкой parseInt(pict.width())
		n = pict.length; // колличество блоков с картинками
		imgW=(n+1)*pictW; // ширина обёртки блоков с картинками (ширина двигаемого блока/тела с картинками)
		img.width(imgW); // стрвим ширину блока обёртки  ширину картинки умноженную на кол-со картинок +1
		$('#slider .pict:last').prependTo('.images'); // после инициализации сразу ставим последню картинку в начало
		currentM = -pictW; // текущее положение (marginLeft) минус ширина одной картинки
		btns = $('#slider ul li'); // коллекция кнопок - li элементов 
		btns.eq( btnActive ).attr('class','active');
		img.css('marginLeft',currentM); // ставим текущее положение блока обёртки в минус ширина одной картинки

		function left_btn_click(){
			if(end) {
				end=false;
				currentM = currentM + pictW;
				img.animate({
					marginLeft: currentM
				}, speed,  function () {
					end = true;
					$('.pict:last').prependTo('.images');
					currentM = currentM - pictW;
					img.css('marginLeft',currentM);
				});
				// переключаем цвет кнопок
				if(btnActive > 0)--btnActive;
				else btnActive = 4;
				//btns.eq( btnActive ).attr('class','active');
				$('#slider ul li').not(btns.eq( btnActive ).attr('class','active')).removeClass();
			}
		}
		
		function right_btn_click(){
			if(end) {
				end=false;
				currentM = currentM - pictW;
				img.animate({
					marginLeft: currentM
				}, speed,  function () {
					end = true;
					$('#slider .pict:first').appendTo('.images');
					currentM = currentM + pictW;
					img.css('marginLeft',currentM);
				});
				// переключаем цвет кнопок
				if(btnActive < 4)++btnActive;
				else btnActive = 0;
				//btns.eq( btnActive ).attr('class','active');
				$('#slider ul li').not(btns.eq( btnActive ).attr('class','active')).removeClass();
			}
		}

		$('#slider .left').click(function(e){left_btn_click();});
		$('#slider .right').click(function(e){right_btn_click();});
		
		// обрабатываем клики по кнопкам
		$('#slider ul li').click(function(e){
			var length,steps;
			steps = btnActive - $(this).index();
			
			if(steps == -1 || steps == 4) right_btn_click();
			else if(steps == 1 || steps == -4) left_btn_click();
			else{
				if(steps == -2) length = -3600;
				else if(steps == -3) length = -4800;
				else if(steps == 2) {length = -4800; steps=3;}
				else if(steps == 3) {length = -3600; steps=2;}
				
				if(end){
					end=false;
					img.animate({
						marginLeft: length
					}, speed,  function () {
						end = true;
						for(var i = 0; i < Math.abs(steps); i++){ // перестановки картинок
							length = length + pictW;
							$('#slider .pict:first').appendTo('.images');
							img.css('marginLeft', length);
						}
					});
					btnActive = $(this).index(); // красим кликнутую кнопку
					$('#slider ul li').not(btns.eq( btnActive ).attr('class','active')).removeClass();
				}
			}
		});
	});


	/* Переключение между описанием и документацией на странице продукта */
	$('.toggle').on('click', 'a', function(e){
		e.stopPropagation();
		e.preventDefault();
		switch($(this).index()){
			case 0:
				$("#prod_descript").fadeIn(0);
				$("#prod_docs").fadeOut(0);
				$(this).attr('class','active');
				$(this).next().removeClass('active');
				break;
			case 1:
				$("#prod_docs").fadeIn(0);
				$("#prod_descript").fadeOut(0);
				$(this).attr('class','active');
				$(this).prev().removeClass('active');
				break;
		}
	});
	
	
	
	
	/* Выбираем значения фильтрации */
	$('.select').on('click', function(e){
		$('.select').not( $(this) ).removeClass('open');
		$('.select').children('div').slideUp(20);
		if($(this).children('div').css('display') == 'none'){
			$(this).addClass('open');
			$(this).children('div').slideDown(100);
		}
		else{
			$(this).removeClass('open');
			$(this).children('div').slideUp(20);
			$(this).children('font').text( $(this).children('div').children('label').children('input[type="radio"]:checked').val() );
		}
	});
	

	
	
	/* Галерея */
	$(function() {
		const speed = 400;
		var img,position = 0,images_box,current,imgW,end=true,indent,indentPrew,startPosPrew=0, finishPosPrew, body_prewie, imgPrevW, prewie, colvo;
		img = $('.body_galary .images a img'); // коллекция картинок
		images_box = $('.body_galary .images'); // блок с картинками
		
		
		$('.image_galary').append('<div class="body_prewie"></div>'); // добавим контейнер для превью картинок
		for(var i=0; i < img.length; i++){ // добавим картинки в контейнер для превьюшек
			$('.body_prewie').append('<div class="prew"><img src="'+img.eq(i).attr('src')+'"></div>');
		}
		$('.body_prewie .prew').eq(0).attr('class','prew active'); // делаем первое превью активным
		

		// клик по кнопке вправо
		$( '.right' ).on( 'click', function(e) {
			e.stopPropagation();
			e.preventDefault();
			
			if(end){
				end=false;
				current = parseInt(images_box.css('marginLeft')); // текущее значение маржин лефт блока с картинками
				imgW = parseInt(img.eq(position).css('width')); // ширина активной каритинки
				indent = current - imgW; // куда будем двигать 
				position++;
				
				if(position < img.length){
					images_box.animate({
						marginLeft: indent + 'px'
					}, speed,  function() {end = true;});
				} 
				else{
					position = 0;
					images_box.animate({
						marginLeft: '0px'
					}, speed,  function() {end = true;});
				}
				active_prev(position);
			}
		});
		
		
		// клик по кнопке влево
		$( '.left' ).on( 'click', function(e) {
			e.stopPropagation();
			e.preventDefault();
			
			if(end){
				current = parseInt(images_box.css('marginLeft')); // текущее значение маржин лефт блока с картинками
				imgW = parseInt(img.eq(position).css('width')); // ширина активной каритинки
				indent = current + imgW; // куда будем двигать 
				position--;
				end=false;
				
				if(position == -1){
					indent = parseInt(img.last().css('width')) - parseInt(images_box.css('width'));
					position = img.length -1;
					images_box.animate({
						marginLeft: indent + 'px'
					}, speed,  function() {end = true;});
				} 
				else{
					images_box.animate({
						marginLeft: indent + 'px'
					}, speed,  function() {end = true;});
				}
				active_prev(position);
			}
		});
		
		// функция для подсвечивания превьюшки картинки и смещения контейнера с превью
		function active_prev(pos){
			$('.body_prewie .prew').removeClass('active');
			$('.body_prewie .prew').eq(pos).attr('class','prew active');
			
			prewie = $('.body_prewie .prew img'); // коллекция картинок превьюшек
			body_prewie = parseInt($('.image_galary').css('width')); // ширина блока с превьюшками
			imgPrevW = parseInt(prewie.css('width')); // ширина картинки превьюшки
			colvo = Math.floor(body_prewie / imgPrevW); // количество картинок влезающий в видимую область блока
			finishPosPrew = (startPosPrew + colvo) - 1;
			if (position >= finishPosPrew && position != (prewie.length -1)){
				if((startPosPrew + colvo) < prewie.length){
					++startPosPrew;
					indentPrew = parseInt($('.body_prewie').css('marginLeft')) - imgPrevW;
					$('.body_prewie').animate({
						marginLeft: indentPrew + 'px'
					}, speed);
				}
			}
			if((position - startPosPrew) == 1 || (position - startPosPrew) == 0){
				if(parseInt($('.body_prewie').css('marginLeft')) != 0){
					--startPosPrew;
					indentPrew = parseInt($('.body_prewie').css('marginLeft')) + imgPrevW;
					$('.body_prewie').animate({
						marginLeft: indentPrew + 'px'
					}, speed);
				}
			}
			if(position == 0){ // если последний слайд, двигаем в начало
				startPosPrew = 0;
				$('.body_prewie').animate({
					marginLeft: '0px'
				}, speed);
			}
			if(position == (prewie.length -1)){ // если последний слайд, двигаем в начало
				startPosPrew = (prewie.length - colvo);
				var stepsW = (prewie.length - colvo) * imgPrevW;
				$('.body_prewie').animate({
					marginLeft: '-' + stepsW + 'px'
				}, speed);
			}
		}
		
		// обрабатываем клик по превьюшке
		$( '.body_prewie .prew' ).on( 'click', function(e) {
			e.stopPropagation();
			e.preventDefault();
			
			if(end){
				end=false;
				indent = 0;
				position = $(this).index();
				if(position != 0){
					for(var p = 0; p < position; p++){
						indent = indent - parseInt(img.eq(p).css('width'));
					}
				}
				images_box.animate({
					marginLeft: indent + 'px'
				}, speed,  function() {end = true;});
				active_prev(position);
			}
		});
		
		// клик по кнопке открывать
		$( '.open' ).on( 'click', function(e) {
			e.stopPropagation();
			e.preventDefault();
			img.eq(position).trigger('click'); 
		});
		
	});
	
	
	
	
	
	
	
});