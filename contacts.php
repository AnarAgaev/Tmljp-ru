<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="robots" content="index, follow">
	<meta name="description" content="">
    <meta name="keywords" content="">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/reset.css" />
	<link rel="stylesheet/less" type="text/css" href="style/template_styles.less">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="/script/js/script.js" type="text/javascript"></script>

</head>
<body>
<?include_once("template/header.php");?>


<form action="" class="feedback fb_at_content" method="post" enctype="multipart/form-data">
	<h2>Обратная связь</h2>
	<p>Какая-то возможная текстовка на пару строк, доносящая опеределённую мысль о чём-то</p>
	<input type="text" id="name" name="name" placeholder="Имя" value="Константинопольский Константин">
	<input type="text" id="phone" name="phone" placeholder="Телефон" class="active"> <!-- активному или с ошибкой добавляем класс active -->
	<input type="text" id="mail" name="mail" placeholder="Электронная почта">
	<input type="text" id="company" name="company" placeholder="Компания">
	<textarea id="comment" name="comment" placeholder="Комментарий"></textarea><!-- активному или с ошибкой добавляем класс active -->
	<label class="file_upload">
		<img src="/img/cross_add_file.png">
		<span id="file_name">Прикрепить файл</span>
		<p>Вы можете прикрепить к заявке документацию, чтобы наше общение было конкретным и быстрым</p>
		<input type="file" name="file">
	</label>
	<div class="check">
		<input id="check" name="check" type="checkbox" value="check">
		<label for="check" id="mark_for_check"></label>
		<label for="check" class="test_for_check">Отправляя заявку, вы соглашаетесь на обработку персональных данных</label>
	</div>
	<button>отправить заявку</button>
</form>
<h1>Контакты</h1>
<p class="requisites">
	Телефон:<br>+7 (495) 308-90-60<br><br>
	E-mail:<br>info@magrtol.ru<br><br>
	Адрес:<br>115432, Москва, 2-ой Кожуховский пр-д, 29, к.2, стр.16
</p>
<h2>Реквизиты</h2>
<p class="requisites">
	Юр. адрес<br>115432 Москва, 2-ой Кожуховский пр-д, 29, к.2, стр.16<br><br>
	ИНН 7725849203<br>
	КПП 772501001<br>
	ОГРН 5147746374496<br>
	ОКПО 95545379<br>
	ОКАТО 45296559000<br>
	ОКТМО 45914000000<br>
	ОКОГУ 4210014<br>
	ОКФС 16 <br>
	ОКОПФ 12165<br>
	ОКВЭД 51.65<br><br>
	Расчетный счет № 4070281030000<div0095100<br><br>
	ВТБ 24 (ПАО) Адрес банка: 101000, г. Москва, Мясницкая ул., д. 35<br>
	Кор. счет 30101810100000000716<br>
	БИК 044525716
</p>
<h2>Как добраться</h2>

<div id="map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1587.1355368350894!2d37.6372508420984!3d55.766344082896154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54a66bdcbe76b%3A0x6163520f9694772e!2z0JzRj9GB0L3QuNGG0LrQsNGPINGD0LsuLCAzNSwg0JzQvtGB0LrQstCwLCAxMDEwMDA!5e0!3m2!1sru!2sru!4v1524214718104" width="900" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<p>
	На автомобиле: с внешней стороны 3-го транспортного кольца съезд на улицу Трофимова 
	(сразу после автозаводской эстакады), далее на светофоре направо на 2-й Кожуховский 
	проезд. После двух лежачих полицейских поворот налево (как раз напротив центрального 
	входа Институа экономики и права, желто-бордовое здание). Через метров 200 в конце 
	проулка поворот направо в кованные ворота и через 10 метров перед шлагбаумом "Мосэнерго" 
	поворот налево к офисному зданию. Далее подняться на третий этаж, офис 308.
</p>

<?include_once("template/footer.php");?>
</body>
</html>