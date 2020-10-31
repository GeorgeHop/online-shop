<!-- модуль поиска <div class="d6"> -->
<div class="d6">
	<form id="poiskform" method="POST" action="/home.php" class="poisk">
		<!-- <a href="/">Главная</a> -->
		<input type="text" name="poisk" placeholder="Искать здесь...">
		<button type="submit"><img src="images/poisk.svg"></button>
	</form>
</div>

<?php
	include "poisk_spisok.php";
?>