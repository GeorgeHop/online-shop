<?php 
	include "configs\db.php";

	if (isset($_POST["email"]) && isset($_POST["password"]) && $_POST["email"] !="" && $_POST["password"] !="") { 

//выбрать пользователя из таблицы user
	$sql = "SELECT * FROM user WHERE user_email LIKE '" .$_POST["email"]."' AND user_password LIKE '" .$_POST["password"]. "' ";
	$result = mysqli_query($connect, $sql);
	$colUsers = mysqli_num_rows($result);
	
	if ($colUsers == 1) {
		
		$inUser = mysqli_fetch_assoc($result);
		//создание куки для хранение данных пользователя
		setcookie("user_id", $inUser["user_id"], time() + 60*60);

		header("Location: /");	

	} else {
		?>
		<div id="openModal" class="modal">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h3 class="modal-title">Ошибка авторизации</h3>
		        <a href="#close" title="Close" class="close">×</a>
		      </div>
		      <div class="modal-body">    
		        <p>Извините логин или пароль введены не правильно!</p>
		      </div>
		    </div>
		  </div>
		</div>
       <?php
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>name</title>
	<?php
		include "allstyles.php";
	?>

</head>

<body>
	<!-- модуль верхней и левой боковой частей <div class="head">   $_SERVER['DOCUMENT_ROOT']-->
	<?php
		include "head.php";
	?>
	<!-- конец модуля верхней и левой боковой частей -->

	<form action="login.php" method="POST">
	  <div class="register">
		    <h1>
		        Авторизация
			</h1>

			<p class="input">
		        Введите Email:<br/>
		        <input class="text" type="email" name="email" placeholder="Введите email..">
			</p>
		    
		    <p class="input">
		    	Введите пароль:<br/>
		    	<input class="text" type="password" name="password" placeholder="Введите пароль..">
		    </p>

		    	<button class="button" id="startBtn" type="submit">АВТОРИЗАЦИЯ</button>
			
		    	<button class="button" id="startBtn" type="submit"><a href="register.php" style="text-decoration: none; color: white;">РЕГИСТРАЦИЯ</a></button>	  	
		  </div>
	</form>
  <script type="text/javascript" src="script.js"></script>
</body>
</html>