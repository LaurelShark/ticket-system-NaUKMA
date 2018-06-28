<?php
/**
 *
 */
?>

<html>
	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Project CSS -->
	<link href="css/project.css" rel="stylesheet">
	<!-- Jquery and bootstrap scripts -->
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/page_transfer.js"></script>
    
	<head>
		<title>
			News
		</title>
	</head>

	<body>
		<div class="head_bar head_text_style btn-group" role="group">
			<!-- Bar. It contatins some buttons -->
			<button type="button" class="btn btn-default bar_button col-md" onclick="goToPage('profile.php')">Профіль</button>
            <button type="button" class="btn btn-default bar_button col-md" onclick="goToPage('list.php')">Бронювання</button>
            <button type="button" class="btn btn-default bar_button col-md" onclick="goToPage('settings.php')">Налаштування</button>
            <button type="button" class="btn btn-default bar_button col-md" onclick="">Вийти</button>
		</div>
        
		<div class="page_container centered">
			<div class="block_container centered" style="width: 80%;">
                <form>
                    <br>
                    Логін:<input type="text" id="login" style="float:right;"></input>
                    <br>
                    <br>
                    Ел.Пошта:<input type="text" id="pass" style="float:right;"></input>
                    <br>
                    <br>
                    Пароль:<input type="password" id="pass" style="float:right;"></input>
                    <br>
                    <br>
                    Повторити Пароль:<input type="password" id="pass" style="float:right;"></input>
                    <br>
                    <br>
                    <error_message id="error_msg"></error_message>
                    <br>
                    <div class="btn btn-primary centered" style="text-align: middle;" onclick="check_login()"> Оновити </div>
                    <br>
                </form>
            </div>
		</div>
	</body>
</html>