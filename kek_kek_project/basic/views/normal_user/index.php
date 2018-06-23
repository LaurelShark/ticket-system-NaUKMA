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
    
	<script src="js/login_check.js"></script>
    
	<head>
		<title>
			Sign In
		</title>
	</head>

	<body>
        
        <div class="head_bar">
			<!-- Bar. It contatins 6 buttons -->
            <div class="head_text">Сервіс займання кабінетів НаУКМА</div>
		</div>
        
		<div class="page_container centered">
			<div class="block_container centered" style="width: 50%;">
                <form>
                    <br>
                    Логін:<input type="text" id="login" style="float:right;"></input>
                    <br>
                    <br>
                    Пароль:<input type="password" id="pass" style="float:right;"></input>
                    <br>
                    <br>
                    <error_message id="error_msg"></error_message>
                    <br>
                    <div class="btn btn-primary centered" style="text-align: middle;" onclick="check_login()"> Ввійти </div>
                    <br>
                    <h5>Проблеми з аутентифікацією? <a style="font-size: 14px;" href="login_problems.html">Зверніться сюди.</a></h4>
                </form>
            </div>
		</div>
	</body>
</html>