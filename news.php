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

<h1>Новости</h1>

<div class="news">
	<a href="">
		<div><img src="/img/mews_temp_img/1.jpg"></div>
		<span>21 апреля 2017</span>
		<p>Приглашаем Вас посетить наш стенд на выставке</p>
	</a>
	<a href="">
		<div><img src="/img/mews_temp_img/2.jpg"></div>
		<span>21 апреля 2017</span>
		<p>Наша компания стала эксклюзивным представителем фирмы KMT (Германия)</p>
	</a>
	<a href="">
		<div><img src="/img/mews_temp_img/3.jpg"></div>
		<span>Power Test Inc.</span>
		<p>Выставка "Дороги. Мосты. Тоннели 2012" !</p>
	</a>
	<a href="">
		<div><img src="/img/mews_temp_img/3.jpg"></div>
		<span>21 апреля 2017</span>
		<p>Приглашаем Вас посетить наш стенд на выставке</p>
	</a>
	<a href="">
		<div><img src="/img/mews_temp_img/5.jpg"></div>
		<span>21 апреля 2017</span>
		<p>Наша компания стала эксклюзивным представителем фирмы KMT (Германия)</p>
	</a>
	<a href="">
		<div><img src="/img/mews_temp_img/4.jpg"></div>
		<span>Power Test Inc.</span>
		<p>Выставка "Дороги. Мосты. Тоннели 2012" !</p>
	</a>
	<a href="">
		<div><img src="/img/mews_temp_img/2.jpg"></div>
		<span>21 апреля 2017</span>
		<p>Приглашаем Вас посетить наш стенд на выставке</p>
	</a>
	<a href="">
		<div><img src="/img/mews_temp_img/6.jpg"></div>
		<span>Power Test Inc.</span>
		<p>Выставка "Дороги. Мосты. Тоннели 2012" !</p>
	</a>
</div>

<!-- для неактивной стрели влево или вправо добавлять класс arr_passive к li и заменять href ссылки на javascript::void(0) -->
<ul class="pager">
   <li class="arr_passive"><a href="javascript::void(0)"><img src="/img/pagination_arrow.svg"></a></li> <!-- Пред -->
   <li class="num active">1</li>
   <li class="num"><a href="#">2</a></li>
   <li class="num"><a href="#">3</a></li>
   <li class="num"><a href="#">4</a></li>
   <li class="points"><span></span></li> <!-- точки -->
   <li class="num"><a href="#">7</a></li>
   <li class="arr"><a href="#"><img src="/img/pagination_arrow.svg"></a></li> <!-- След -->
</ul>


<?include_once("template/footer.php");?>
</body>
</html>