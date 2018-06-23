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
    <script src="js/room.js"></script>
    <script src="js/igorko's_tabs.js"></script>
	<head>
		<title>
			News
		</title>
	</head>

	<body onload="loadRooms();">
		<div class="head_bar head_text_style btn-group" role="group">
			<!-- Bar. It contatins some buttons -->
			<button type="button" class="btn btn-default bar_button col-md" onclick="goToPage('profile.php')">Профіль</button>
            <button type="button" class="btn btn-default bar_button col-md" onclick="goToPage('list.php')">Бронювання</button>
            <button type="button" class="btn btn-default bar_button col-md" onclick="goToPage('settings.php')">Налаштування</button>
            <button type="button" class="btn btn-default bar_button col-md" onclick="">Вийти</button>
		</div>
        <!-- Here we have another bar, which contains settings for search-->
		<div class="page_container" onload="updateList();">
			<div id="corp_tab" class="tab_container">
				<button class="btn tab_button" onclick="openTab(event, 'algebra')">Корпус 1</button>
				<button class="btn tab_button" onclick="openTab(event, 'geometry')">Корпус 2</button>
				<button class="btn tab_button" onclick="openTab(event, 'physics')">Корпус 3</button>
				<button class="btn tab_button" onclick="openTab(event, 'nope')">Корпус 4</button>
				<button class="btn tab_button" onclick="openTab(event, 'nope')">Корпус 5</button>
				<button class="btn tab_button" onclick="openTab(event, 'nope')">Корпус 6</button>
				<button class="btn tab_button" onclick="openTab(event, 'nope')">КМЦ</button>
				<button class="btn tab_button" onclick="openTab(event, 'nope')">Корпус 7</button>
				<button class="btn tab_button" onclick="openTab(event, 'nope')">Корпус 8</button>
				<button class="btn tab_button" onclick="openTab(event, 'nope')">Корпус 9</button>
				<button class="btn tab_button" onclick="openTab(event, 'nope')">Корпус 10</button>
				<button class="btn tab_button" onclick="openTab(event, 'nope')">Корпус 11</button>
			</div>
            
            <div id="sub_tab" style="width: 100%; padding: 0px;">
                <div id="settings_tab" class="settings_container">
                    <container_table>
                        <p>
                        <label>Пошук:</label>
                        <input type="text" id="search_text" style="float:middle;"></input>
                        </p>
                        <p>
                        <label>Кількість місць:</label>
                        <input type="number" id="num_of_seats" style="float:middle;"></input>
                        <select id="pred">
                            <option value="more">більше</option>
                            <option value="less">менше</option>
                        </select>
                        </p>
                        <p>
                            <label></label>
                            <button type="button" class="btn btn-default col-md" onclick="updateList();">пошук</button>
                        </p>
                    </container_table>
                </div>
                <div id="content_tab">
					<!-- here goes list of valid rooms-->
					js не працює лоооооол
                </div>
            </div>
		</div>
	</body>
</html>