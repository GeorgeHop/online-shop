<?php
// подключаем доступ к базе данных
include "configs/db.php";
?>

<div id="products_basket" style="position: relative;
    top: 75px;">
	<?php
	
//получение списка всех товаров
	$sql = "SELECT * FROM catalog";

	// mysqli_query = выполнить sql запрос
	// Два параметра: 1 - подключение к базе данных, 2 - sql скрипт который мы ввели выше
	$catresult = mysqli_query($connect, $sql);

	//mysqli_num_rows = получить количество результатов - количество строк
	$col_catalog = mysqli_num_rows($catresult);
		$i = 0;
		// пока $i меньше чем количество товаров в массиве выполняется действие
		while ($i < $col_catalog) {

			// 	mysqli_fetch_assoc = преобразуем полученные данные из базы данных в понятный массив
			$catalog = mysqli_fetch_assoc($catresult); 
				
					//получение списка всех товаров в корзине
			if ( isset($_COOKIE["user_id"]) == 0 ) {

				$sql = "SELECT * FROM basket WHERE catalog_id=" . $catalog["catalog_id"] . " AND user_id=77777";
			} else {
				$sql = "SELECT * FROM basket WHERE catalog_id=" . $catalog["catalog_id"] . " AND user_id=" . $_COOKIE["user_id"];
			}
				
			
			// mysqli_query = выполнить sql запрос
			// Два параметра: 1 - подключение к базе данных, 2 - sql скрипт который мы ввели выше
			$basresult = mysqli_query($connect, $sql);

			//mysqli_num_rows = получить количество результатов - количество строк
			$col_basket = mysqli_num_rows($basresult);
				$s = 0;
				// пока $i меньше чем количество товаров в массиве выполняется действие
				while ($s < $col_basket) {

				// 	mysqli_fetch_assoc = преобразуем полученные данные из базы данных в понятный массив
				$basket = mysqli_fetch_assoc($basresult); 
					if ($basket["catalog_id"] == $catalog["catalog_id"]) {

					?>
					<ul>
						<div class="basket">
							<li>
								<img src='<?php echo $catalog["catalog_photo"]; ?>' class="basket">
							</li>

							<li>
								<p class="tovar"><?php echo $catalog["catalog_specification"]; ?></p>
							</li>

							<li>
								<p class="price"><?php echo $catalog["catalog_price"]; ?></p>
							</li>
							
							<li>
								<form method="POST" action="http://chat.local/delbasket.php">

									<input type="hidden" name="catalog_id" value='<?php echo $catalog["catalog_id"]; ?>'>	
								
									<button class="basket">
										<img src="images/basket.png"><a class="pay">Удалить</a>
									</button>
								</form>
							</li>

						</div>
					</ul>
					<hr>

					<?php

					}
					// увеличиваем счетчик
					$s = $s + 1;
				}

			$i = $i + 1;
		}
?>