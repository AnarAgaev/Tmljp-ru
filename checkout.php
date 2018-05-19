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

<form action="" class="feedback checkout_page" method="post" enctype="multipart/form-data">
	<h2>Оформление</h2>
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
<h1>Мой заказ</h1>

<ul class="checkout">
	<li>
		<div><img src="/img/checkout_temp_img/1.jpg"></div>
		<div><span>Тензодатчики сжатия CLJ-NA</span><font>Телеметрические системы</font></div>
		<div><span class=""></span><div class="">1 шт</div><span class=""></span></div>
		<div><span class=""></span></div>
	</li>
	<li>
		<div><img src="/img/checkout_temp_img/2.jpg"></div>
		<div><span>Индуктивный динамометр EC250</span><font>Телеметрические системы</font></div>
		<div><span class=""></span><div class="">2 шт</div><span class=""></span></div>
		<div><span class=""></span></div>
	</li>
	<li>
		<div><img src="/img/checkout_temp_img/3.jpg"></div>
		<div><span>Тензодатчики сжатия CLJ-NB</span><font>Телеметрические системы</font></div>
		<div><span class=""></span><div class="">1 шт</div><span class=""></span></div>
		<div><span class=""></span></div>
	</li>
	<li>
		<div></div>
		<div><span>Тензодатчики сжатия CLU-NA/CLU-NA-D</span><font>Телеметрические системы</font></div>
		<div><span class=""></span><div class="">1 шт</div><span class=""></span></div>
		<div><span class=""></span></div>
	</li>
	<li>
		<div><img src="/img/checkout_temp_img/5.jpg"></div>
		<div><span>Индуктивный динамометр EC250</span><font>Телеметрические системы</font></div>
		<div><span class=""></span><div class="">2 шт</div><span class=""></span></div>
		<div><span class=""></span></div>
	</li>
</ul>
	


<?include_once("template/footer.php");?>
</body>
</html>