<?php
// подключаем доступ к базе данных
include "configs/db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>name</title>
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
	<?php
		include "allstyles.php";
	?>
</head>

<body>

	<!-- модуль верхней и левой боковой частей <div class="head"> -->
	<?php
		include "head.php";
	?>

	<!-- модуль модального окна Оплата/Доставка -->
	<?php
		include "modal.php";
	?>
	<div class="slider">
	    <div class="slider__wrapper">
	      <div class="slider__item">
	        <div style="height: 450px; background: white;"><img src="images/kartinka5.jpg"></div>
	      </div>
	      <div class="slider__item">
	        <div style="height: 450px; background: white;"><img src="images/kartinka3.jpg"></div>
	      </div>
	      <div class="slider__item">
	        <div style="height: 450px; background: white;"><img src="images/kartinka4.jpg"></div>
	      </div>
	     
	    </div>
	    <a class="slider__control slider__control_left" href="#" role="button"></a>
	    <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
    </div>
	<div id="catagory">
		<div class="product">
			<ul>
				<li><h2><a href="man.php?vid=1">Мужчинам</a></h2></li>
				<li><img src="images/man.png" class="img_cat"></li>				
			</ul>
		</div>

		<div class="product">
			<ul>
				<li><h2><a href="man.php?vid=2">Женщинам</a></h2></li>
				<li><img src="images/woman.png" class="img_cat"></li>				
			</ul>
		</div>

		<div class="product">
			<ul>
				<li><h2><a href="man.php?vid=3">Детям</a></h2></li>
				<li><img src="images/child.png" class="img_cat"></li>				
			</ul>
		</div>
	</div>
	<?php 
      include "footer.php";
	?>
	<script type="text/javascript" src="script.js"></script>
</body>
</html>