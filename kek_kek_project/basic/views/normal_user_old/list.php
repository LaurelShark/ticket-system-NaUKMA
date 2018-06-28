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
			Список замовлень
		</title>
	</head>

	<body>
		<div class="head_bar btn-group">
			<button type="button" class="btn btn-default bar_button col-md" onclick="goToPage('profile.php')">Профіль</button>
            <button type="button" class="btn btn-default bar_button col-md" onclick="goToPage('list.php')">Бронювання</button>
            <button type="button" class="btn btn-default bar_button col-md" onclick="goToPage('settings.php')">Налаштування</button>
            <button type="button" class="btn btn-default bar_button col-md" onclick="">Вийти</button>
		</div>
		<div class="page_container">
			<div style="padding-left: 2%; padding-right: 2%; left: 2%; right: 2%;">
				<!-- Page contents -->
				<div class="block_container" style="background-color: green; color: white; text-algin: center;">
					<button type="button" class="btn btn-success wide_button col-md" onclick="popup('date_picker')">Нове...</button>
				</div>
				<div class="block_container">
					<h1>Дата та час</h1>
					<p>Місце</p>
				</div>
			</div>
		</div>
	</body>
</html>