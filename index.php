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

	<!-- Слайдер. Можно использовать произваольно еколличество картинок -->
	<div class="slider_castom">
		<div class="left"><img src="img/slider_arrow.svg"></div> <!-- кнопка влево --> 
		<div class="right"><img src="img/slider_arrow.svg"></div> <!-- кнопка вправо -->
		<div class="slider_vewport">
			<div class="images_container">
				<!--img class="slider_img" src="img/slide.jpg"-->
				<img class="slider_img" src="img/tempimg/slide1.jpg">
				<img class="slider_img" src="img/tempimg/slide2.jpg">
				<img class="slider_img" src="img/tempimg/slide3.jpg">
				<img class="slider_img" src="img/tempimg/slide4.jpg">
				<img class="slider_img" src="img/tempimg/slide5.jpg">
			</div>
		</div>
	</div>
	
	
<h1>Продукция</h1>
<table class="product">
	<tr>
		<td>
			<a href="javascript::void(0)" class="active">
				<h2>Тензорезисторы</h2>
				<p>Электрическое усиление принимаемого сигнала с датчиков обеспечивают тензометры, и компания TML предлагает широкий выбор таких измерительных устройств и приборов.</p>
			</a>
		</td>
		<td>
			<a href="javascript::void(0)">
				<h2>Датчики</h2>
				<p>Весь диапазон высокоточных и надежных датчиков, которые находят широкое применение на предприятиях разных отраслей промышленности.</p>
			</a>
		</td>
		<td>
			<a href="javascript::void(0)">
				<h2>Измерительная электроника</h2>
				<p>С помощью тензорезисторов определяют степень деформации материалов и элементов конструкций в машиностроении, судостроении, авиационной промышленности, строительстве зданий и сооружений.</p>
			</a>
		</td>
	</tr>
	<tr>
		<td>
			<a href="javascript::void(0)">
				<h2>Калибраторы</h2>
				<p>Электрическое усиление принимаемого сигнала с датчиков обеспечивают тензометры, и компания TML предлагает широкий выбор таких измерительных устройств и приборов.</p>
			</a>
		</td>
		<td>
			<a href="javascript::void(0)">
				<h2>Программное обеспечение</h2>
				<p>Весь диапазон высокоточных и надежных датчиков, которые находят широкое применение на предприятиях разных отраслей промышленности.</p>
			</a>
		</td>
		<td>
			<a href="javascript::void(0)">
				<h2>Спец. оборудование</h2>
				<p>С помощью тензорезисторов определяют степень деформации материалов и элементов конструкций в машиностроении, судостроении, авиационной промышленности, строительстве зданий и сооружений.</p>
			</a>
		</td>
	</tr>
</table>

<div class="h1">Новости</div>
<div class="index_news">
	<a href="javascript::void(0)">
		<span>21 апреля 2017</span>
		Приглашаем Вас посетить наш стенд на выставке 
	</a>
	<a href="javascript::void(0)">
		<span>21 апреля 2017</span>
		Наша компания стала эксклюзивным представителем фирмы KMT (Германия) 
	
	</a>
	<a href="javascript::void(0)" class="active"> <!-- чтобы выделить какую-либо новость ставим ссылке класс active -->
		<span>21 апреля 2017</span>
		Наша компания стала эксклюзивным представителем фирмы KMT (Германия) 
		
	</a>
	<a href="javascript::void(0)">
		<span>21 апреля 2017</span>
		Приглашаем Вас посетить наш стенд на выставке 
		
	</a>
	<a href="javascript::void(0)">
		<span>21 апреля 2017</span>
		Выставка "Дороги. Мосты. Тоннели 2012" ! 
	</a>
	<a href="javascript::void(0)">
		<span>21 апреля 2017</span>
		Наша компания стала эксклюзивным представителем фирмы KMT (Германия) 
	</a>
</div>


<?include_once("template/footer.php");?>
</body>
</html>