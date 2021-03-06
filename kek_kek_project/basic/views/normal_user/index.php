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
    <script src="js/page_transfer.js"></script>
  </head>
  <body>

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
          <li class="active">Навіть не знаю шо тут написати.</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.php" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Огляд
              </a>
              <a href="rooms.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
              </span> Замовлення <span id="ticket-count" class="badge">12</span></a>
              <a href="settings.php" class="list-group-item"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </span> Налаштування </a>
              <a href="" class="list-group-item"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
              </span> Вийти </a>
            </div>

            <div class="well">
              <h4>Створити нове замовлення:</h4>
              <!--Insert ticket creation stuff here-->

              <h5>Оберіть дату та час:</h5>
              <input id="selected_datetime" type="datetime-local"></input>
              <div class="btn btn-default" onclick="goToPage('room-list.php');">Далі</div>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title"><i class="fa fa-arrows" aria-hidden="true"></i>Користувач</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h1>
                    <h4>My Ava</h4>
                  </div>
                </div>
                <div class="col-md-5">
                  <h3>ПІБ користувача</h3>
                  <h4>Додаткова інформація</h4>
                </div>
              </div>
              </div>

              <!-- Latest Users -->
              <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23b7aaaa&amp;src=ekp2jn033r3nhlisflhlrqn1ck%40group.calendar.google.com&amp;color=%23B1365F&amp;ctz=Europe%2FHelsinki" 
              style="border-width:0" width="845" height="600" frameborder="0" scrolling="no"></iframe>

          </div>
        </div>
      </div>
    </section>

<footer id="footer">
      <p>SuperTeam 2018</p>
    </footer>

  </body>
</html>
