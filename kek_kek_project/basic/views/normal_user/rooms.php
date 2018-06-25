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
              <a href="index.php" class="list-group-item">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Огляд
              </a>
              <a href="rooms.php" class="list-group-item main-color-bg"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
              </span> Замовлення <span id="ticket-count" class="badge">12</span></a>
              <a href="settings.php" class="list-group-item"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </span> Налаштування </a>
              <a href="" class="list-group-item"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
              </span> Вийти </a>
            </div>

            <div class="well">
              <h4>Створити нове замовлення</h4>
              <!--Insert ticket creation stuff here-->
            </div>
          </div>
          <div class="col-md-9">
            <div id="ticket-list">

              <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                  <h3 class="panel-title"><i class="fa fa-arrows" aria-hidden="true"></i>Ticket TIME</h3>
                </div>
                <div class="panel-body">
                  <h5>Ticket PLACE</h5>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

<footer id="footer">
      <p>SuperTeam 2018</p>
    </footer>
    

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

  </body>
</html>
