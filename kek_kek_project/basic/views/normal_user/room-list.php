<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NaUKMA Ticket System</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/project.css" rel="stylesheet">
    <script src="js/room.js"></script>
    <script src="js/igorko's_tabs.js"></script>
    <script src="js/page_transfer.js"></script>
  </head>
  <body onload="loadRooms();updateList();">

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><i class="fa fa-address-card" aria-hidden="true"></i>
            NaUKMA Ticket System
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active"><a href="rooms.php">Повернутися назад.</a></li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
          </div>
        </div>
      </div>
    </section>
    <div class="col-md-offset-1 col-md-10">
      <!-- Website Overview -->
      <div class="panel panel-default">
        <div class="panel-heading main-color-bg">
          <h3 class="panel-title"><i class="fa fa-arrows" aria-hidden="true"></i>Пошук</h3>
        </div>
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

      <div class="panel panel-default">
        <!--div class="panel-heading main-color-bg">
          <h3 class="panel-title"><i class="fa fa-arrows" aria-hidden="true"></i>Результат</h3>
        </div-->

        <div id="content_tab">
          <div id="c_group_1">
            <div class="panel-heading main-color-bg">
              <h3 class="panel-title"><i class="fa fa-arrows" aria-hidden="true"></i>Корпус 0</h3>
            </div>

            <div id="list_1">
              
            </div>
          </div>
        </div>

      </div>
    </div>


<footer id="footer">
      <p>SuperTeam 2018</p>
    </footer>

  </body>
</html>
