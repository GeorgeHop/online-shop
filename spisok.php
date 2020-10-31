<?php
// подключаем доступ к базе данных
include "configs/db.php";
?>

<div id="products">
	<?php
	if(isset($_POST["poisk"])) {
	
		include "poisk_spisok.php";
	
	} else if(isset($_GET["pr"])) {

		include "get_spisok.php";

	} else if(($_GET["vid"]) == 1) {

	//получение списка всех товаров
	$sql = "SELECT * FROM `catalog` WHERE `product_id` = 6 OR `product_id` = 7 OR `product_id` = 8";

	// mysqli_query = выполнить sql запрос
	// Два параметра: 1 - подключение к базе данных, 2 - sql скрипт который мы ввели выше
	$result = mysqli_query($connect, $sql);

	//mysqli_num_rows = получить количество результатов - количество строк
	$col_catalog = mysqli_num_rows($result);
		$i = 0;
			// пока $i меньше чем количество товаров в массиве выполняется действие
			while ($i < $col_catalog) {

				// 	mysqli_fetch_assoc = преобразуем полученные данные из базы данных в понятный массив
				$catalog = mysqli_fetch_assoc($result); 
					?>
						<ul>
						<div class="type_products">
						<li>
							<img src='<?php echo $catalog["catalog_photo"]; ?>' class="pay">
						</li>
						<li>
							<p class="tovar"><?php echo $catalog["catalog_specification"]; ?></p>
						</li>
						<li>
							<p class="price"><?php echo $catalog["catalog_price"]; ?></p>
						</li>
						<li>

							<form method="POST" action="http://chat.local/addbasket.php">

							<input type="hidden" name="catalog_id" value='<?php echo $catalog["catalog_id"]; ?>'>	
						
							<button class="pay">
								<img src="images/basket.png"><a class="pay">Купить</a>
							</button>

						</form>
						</li>
						</div>
						</ul>
					<?php
				// увеличиваем счетчик
				$i = $i + 1;
			}
		} else if(($_GET["vid"]) == 2) {

	//получение списка всех товаров
	$sql = "SELECT * FROM `catalog` WHERE `product_id` = 9 OR `product_id` = 10 OR `product_id` = 11";

	// mysqli_query = выполнить sql запрос
	// Два параметра: 1 - подключение к базе данных, 2 - sql скрипт который мы ввели выше
	$result = mysqli_query($connect, $sql);

	//mysqli_num_rows = получить количество результатов - количество строк
	$col_catalog = mysqli_num_rows($result);
		$i = 0;
			// пока $i меньше чем количество товаров в массиве выполняется действие
			while ($i < $col_catalog) {

				// 	mysqli_fetch_assoc = преобразуем полученные данные из базы данных в понятный массив
				$catalog = mysqli_fetch_assoc($result); 
					?>
						<ul>
						<div class="type_products">
						<li>
							<img src='<?php echo $catalog["catalog_photo"]; ?>' class="pay">
						</li>
						<li>
							<p class="tovar"><?php echo $catalog["catalog_specification"]; ?></p>
						</li>
						<li>
							<p class="price"><?php echo $catalog["catalog_price"]; ?></p>
						</li>
						<li>

							<form method="POST" action="http://chat.local/addbasket.php">

							<input type="hidden" name="catalog_id" value='<?php echo $catalog["catalog_id"]; ?>'>	
						
							<button class="pay">
								<img src="images/basket.png"><a class="pay">Купить</a>
							</button>

						</form>
						</li>
						</div>
						</ul>
					<?php
				// увеличиваем счетчик
				$i = $i + 1;
			}
		} else if(($_GET["vid"]) == 3) {

	//получение списка всех товаров
	$sql = "SELECT * FROM `catalog` WHERE `product_id` = 12 OR `product_id` = 13 OR `product_id` = 14";

	// mysqli_query = выполнить sql запрос
	// Два параметра: 1 - подключение к базе данных, 2 - sql скрипт который мы ввели выше
	$result = mysqli_query($connect, $sql);

	//mysqli_num_rows = получить количество результатов - количество строк
	$col_catalog = mysqli_num_rows($result);
		$i = 0;
			// пока $i меньше чем количество товаров в массиве выполняется действие
			while ($i < $col_catalog) {

				// 	mysqli_fetch_assoc = преобразуем полученные данные из базы данных в понятный массив
				$catalog = mysqli_fetch_assoc($result); 
					?>
						<ul>
						<div class="type_products">
						<li>
							<img src='<?php echo $catalog["catalog_photo"]; ?>' class="pay">
						</li>
						<li>
							<p class="tovar"><?php echo $catalog["catalog_specification"]; ?></p>
						</li>
						<li>
							<p class="price"><?php echo $catalog["catalog_price"]; ?></p>
						</li>
						<li>

							<form method="POST" action="http://chat.local/addbasket.php">

							<input type="hidden" name="catalog_id" value='<?php echo $catalog["catalog_id"]; ?>'>	
						
							<button class="pay">
								<img src="images/basket.png"><a class="pay">Купить</a>
							</button>

						</form>
						</li>
						</div>
						</ul>
					<?php
				// увеличиваем счетчик
				$i = $i + 1;
			}
		}



		?>
</div>