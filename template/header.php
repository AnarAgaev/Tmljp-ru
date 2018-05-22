<?
	/*-------------------------
		- получаем урл для отключения вывода левого сайдбара и хлебных крошек на некоторые старницах
		- для отклчения проверяем адрес страницы
		- удалить при переносе макета в битрикс
		- для определения страницы и проверки использовать стандартые константы битрикс
	-------------------------*/
	include_once("script/php/get__url.php");
?>

<!-- Сетка !!! не перносить в Битрикс -->
<div id="grid__1240_16column_colWidth47and5_margLR15">
	<area><area><area><area><area><area><area><area>
	<area><area><area><area><area><area><area><area>
</div>



<!-- полупрозрачная подложка под модальные окна -->
<div class="modal_background"></div>

<!-- модальное окно colback -->
<form action="" class="feedback colback_modal hide" method="post" enctype="multipart/form-data">
	<div class="modal_close"></div>
	<h2>Обратная связь</h2>
	<p>Какая-то возможная текстовка на пару строк, доносящая опеределённую мысль о чём-то</p>
	<input type="text" name="name_colback" placeholder="Имя">
	<input type="text" name="phone_colback" placeholder="Телефон" class="active"> <!-- активному или с ошибкой добавляем класс active -->
	<input type="text" name="mail_colback" placeholder="Электронная почта">
	<input type="text" name="company_colback" placeholder="Компания">
	<textarea name="comment_colback" placeholder="Комментарий"></textarea><!-- активному или с ошибкой добавляем класс active -->
	<div class="check">
		<input id="check_colback" name="check_colback" type="checkbox" value="check">
		<label for="check_colback" class="mark_for_check"></label>
		<label for="check_colback" class="test_for_check">Отправляя заявку, вы соглашаетесь на обработку персональных данных</label>
	</div>
	<button>отправить заявку</button>
</form>


<!-- модальное окно feedback -->
<form action="" class="feedback feedback_modal hide" method="post" enctype="multipart/form-data">
	<div class="modal_close"></div>
	<h2>Обратная связь</h2>
	<p>Какая-то возможная текстовка на пару строк, доносящая опеределённую мысль о чём-то</p>
	<input type="text" name="name_feedback" placeholder="Имя">
	<input type="text" name="phone_feedback" placeholder="Телефон" class="active"> <!-- активному или с ошибкой добавляем класс active -->
	<input type="text" name="mail_feedback" placeholder="Электронная почта">
	<input type="text" name="company_feedback" placeholder="Компания">
	<textarea name="comment_feedback" placeholder="Комментарий"></textarea><!-- активному или с ошибкой добавляем класс active -->
	<label class="file_upload">
		<img src="/img/cross_add_file.png">
		<span class="file_name">Прикрепить файл</span>
		<p>Вы можете прикрепить к заявке документацию, чтобы наше общение было конкретным и быстрым</p>
		<input type="file" name="file_feedback">
	</label>
	<div class="check">
		<input id="check_feedback" name="check_feedback" type="checkbox" value="check">
		<label for="check_feedback" class="mark_for_check"></label>
		<label for="check_feedback" class="test_for_check">Отправляя заявку, вы соглашаетесь на обработку персональных данных</label>
	</div>
	<button>отправить заявку</button>
</form>



<div class="fix__buttons">
	<a href="javascript:void(0)" id="go_to_top"><img src="/img/to-top.svg"></a>
	<a href="javascript:void(0)" id="colback_modal_btn"><img src="/img/callback_btn.svg"></a>
	<a href="javascript:void(0)" id="feedback_modal_btn"><img src="/img/mail-float.svg"></a>
</div>


<header>
	<div class="wrap">
		<a href="/" class="logo">
			<img src="/img/tml_logo.png">
			<span>Японские Измерительные Технологии</span>
			<font>Официальный дилер компании TML</font>
		</a>
		<div>
			<a href="/checkout.php"><span><img src="/img/order.svg"></span>Мой заказ – 7</a>
			<a href="javascript::void(0)" id="colback_modal_btn_head"><span><img src="/img/callback.svg"></span>Обратный звонок</a>
		</div>
		<div>
			<a class="In-English" href="javascript::void(0)">In English</a>
			<span>8 (495) 308-90-60</span>
			<a class="mailto" href="mailto:info@tmljp.ru">info@tmljp.ru</a>
		</div>
	</div>
	
 	<nav>
		<ul> 
			<!-- 
				!!! 
				Активной ссылке добавлять клас active_nav_ancor, 
				Активному треугольнику под соответствующим пунктом добавляем идентификатор active_nav_trig
			-->
			<li><area class="triangle-down" id="active_nav_trig"><a class="active_nav_ancor" href="javascript::void(0)">Продукция</a>
			<li><area class="triangle-down"><a href="javascript::void(0)">Области использования</a>
			<li><area class="triangle-down"><a href="javascript::void(0)">Решения</a>
			<li><area class="triangle-down"><a href="/documents.php">Документы</a>
			<li><area class="triangle-down"><a href="javascript::void(0)">О нас</a>
			<li><area class="triangle-down"><a href="/contacts.php">Контакты</a>
			<li>
				<form action="" method="post" enctype="multipart/form-data">
					<button class="Combined-Shape"></button>
					<input type="text" name="search__string" id="search__string" placeholder="Поиск по товарам">
					<div></div>
				</form>
			</li>
		</ul>
	</nav>
</header>

	<!-- Контент страницы. Закрываем в футере -->
	<div class="wrap content_box">
	
		<!-- добавить проверку т.к. левый сайдбар и крошки показываются не навсех страница -->
		<?if($PAGE__URL != 'agaev.info/' and $PAGE__URL != 'agaev.info/checkout.php'):?> 
	
	
			<aside>
				<ul id="nav_list">
					<li>
						<a class="ripple" href="">продукция</a>
						<ul class="submenu active_ul">  <!-- для раскрытого по умолчанию меню - добавить класс active_ul -->
							<li>
								<a class="ripple" href="">Испытательные стенды<img src="/img/cross-sidebar.svg" class="cross-sidebar active_cross-sidebar"></a> <!-- для раскрытого по умолчанию меню - добавить к картинке класс active_cross-sidebar -->
								<ul class="submenu active_ul"> <!-- для раскрытого по умолчанию меню - добавить класс active_ul -->
									<li><a class="ripple" href="">Трансмиссии и гидравлика</a></li>
									<li><a class="ripple" href="">Гистерезисные тормоза</a></li>
									<li><a class="ripple" href="">Моторы и двигатели</a></li>
								</ul>
							</li>        
							<li>
								<a class="ripple" href="">Телеметрия<img src="/img/cross-sidebar.svg" class="cross-sidebar"></a>
								<ul class="submenu">
									<li><a class="ripple" href="">Cтационарная</a></li>
									<li><a class="ripple" href="">Для валов</a></li>
									<li><a class="ripple" href="">Для колес и роторов</a></li>
									<li><a class="ripple" href="">Для термопар</a></li>
									<li><a class="ripple" href="">Одноканальная</a></li>
								</ul>
							</li>        
							<li>
								<a class="ripple" href="">Датчики<img src="/img/cross-sidebar.svg" class="cross-sidebar"></a>
								<ul class="submenu">
									<li><a class="ripple" href="">Крутящий момент</a></li>
									<li><a class="ripple" href="">Перемещение</a></li>
									<li class="active"><a class="ripple" href="">Усилие и вес</a></li>
								</ul>
							</li>        
							<li>
								<a class="ripple" href="">Электроника и ПО<img src="/img/cross-sidebar.svg" class="cross-sidebar"></a>
								<ul class="submenu">
									<li><a class="ripple" href="">Вспомогательная электроника</a></li>
									<li><a class="ripple" href="">Контроллеры</a></li>
									<li><a class="ripple" href="">Программное обеспечение</a></li>
								</ul>
							</li>
						</ul>
					</li>        
					<li>
						<a class="ripple" href="">отрасли</a>
						<ul class="submenu">
							<li><a class="ripple" href="">Авиация</a></li>
							<li><a class="ripple" href="">Автомобилестроение</a></li>
							<li><a class="ripple" href="">Добывающая промышленность</a></li>
							<li><a class="ripple" href="">Железнодорожная область</a></li>
						</ul>
					</li>        
					<li>
						<a class="ripple" href="">решения</a>
						<ul class="submenu">
							<li><a class="ripple" href="">Измерение крутящего момента</a></li>
							<li><a class="ripple" href="">Многоканальный сбор данных</a></li>
							<li><a class="ripple" href="">Нагружающие устройства</a></li>
							<li><a class="ripple" href="">Проектирование стендов под ключ</a></li>
						</ul>
					</li>        
					<li>
						<a class="ripple" href="">услуги</a>
						<ul class="submenu">
							<li><a class="ripple" href="">Пусконаладка и монтаж</a></li>
							<li><a class="ripple" href="">Метрология</a></li>
							<li><a class="ripple" href="">Обучение работе на оборудовании</a></li>
							<li><a class="ripple" href="">Разработка индивидуальных решений</a></li>
						</ul>
					</li>        
				</ul>
				<div>
					<h2>Контакты</h2>
					<span>Телефон</span>
					<div>+7 (495) 308-90-60</div>
					<span>Почта</span>
					<div><a class="mailto" href="mailto:info@tmljp.ru">info@tmljp.ru</a></div>
					<span>Адрес</span>
					<div>г. Москва, 2-й Кожуховский пр-д, д. 29, к. 2, стр. 16</div>
				</div>
			</aside>
			
			<!-- Хлебные крошки -->
			<div class="bread__crumbs">
				<a href="">Главная</a>
				<a href="">Продукция</a>
				<a href="">Датчики</a>
				<a href="">Датчики силы</a>
				<a href="">Тензодатчики сжатия CLL-NA/CLH-NA</a>
			</div>
		
		
		<?endif;?>
		
		
		<!-- Для страниц где НЕ ПОКАЗЫВАЕТСЯ!!! левый сайдбар с аккордеоном к main добавлять класс full__screen -->
		<main <?if($PAGE__URL == 'agaev.info/' or $PAGE__URL == 'agaev.info/checkout.php') echo 'class="full__screen"';?>>