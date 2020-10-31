<?php 
include "configs\db.php";

if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["name"]) && $_POST["email"] !="" && $_POST["password"] !="") { 

//вставить в таблицу user () значения 
    $sql = "INSERT INTO user (user_password, user_email, user_name) VALUES ('" .$_POST["password"]. "', '" .$_POST["email"]. "', '" .$_POST["name"]. "')";
    
    if (mysqli_query($connect, $sql)) {
        header("Location:/");
        // echo "<h2>Пользователь добавлен</h2>"; 
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
	<title>Registration</title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
   <?php
        include "allstyles.php";
    ?>


</head>
<body>
	<!-- модуль верхней и левой боковой частей <div class="head">  -->
    <?php
        include "head.php";

    ?>
    <!-- конец модуля верхней и левой боковой частей -->

    <form action="register.php" method="POST">
          
          <div class="register">
                <h1>
                    Регистрация
                </h1>

                <p class="input">
                    Введите Email:<br/>
                    <input class="text" type="email" name="email" placeholder="Введите свой email..">
                </p>
                
                <p class="input">
                    Введите пароль:<br/>
                    <input class="text" type="password" name="password" placeholder="Введите свой пароль..">
                </p>

                <p class="input">
                    Введите имя:<br/>
                    <input class="text" type="text" name="name" placeholder="Введите свое имя..">                   
                </p>

                    <button class="button" id="startBtn" type="submit">РЕГИСТРАЦИЯ</button>
                
                    <button class="button" id="startBtn" type="submit"><a href="login.php" style="text-decoration: none; color: white;">АВТОРИЗАЦИЯ</a></button>   
          </div>
    </form>    
  <script type="text/javascript" src="script.js"></script>
</body>
</html>