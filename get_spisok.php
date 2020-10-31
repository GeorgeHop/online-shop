<div id="products">
	<?php 
	// подключаем доступ к базе данных
	include "configs/db.php";

	if(isset($_GET["pr"])) {

		// Запрос
		$sql = "SELECT * FROM `catalog` WHERE `product_id`= ". $_GET["pr"];
		
		// mysqli_query = выполнить sql запрос
		// Два параметра: 1 - подключение к базе данных, 2 - sql скрипт который мы ввели выше
		$result = mysqli_query($connect, $sql);
		//mysqli_num_rows = получить количество результатов - количество строк
		$col_catalog = mysqli_num_rows($result);
		
		// $i - счетчик для перебора количества пользователей в массиве
		$i = 0;
		// пока $i меньше чем количество пользователей в массиве выполняется действие
		while ($i < $col_catalog) {
		
		// 	mysqli_fetch_assoc = преобразуем полученные данные из базы данных в понятный массив
		$catalog = mysqli_fetch_assoc($result); 
		// поверка на совпадение
		//if($_COOKIE["polzovatel_id"] == $catalog["catalog_name"]) {
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
		?>

	<?php
	}
	?>

</div>