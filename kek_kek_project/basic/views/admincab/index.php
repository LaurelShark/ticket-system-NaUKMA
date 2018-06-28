<?php
/**
 *
 */
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student's personal cabinet</title>
    <!-- Bootstrap core CSS -->

  </head>
  <body>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><i class="fa fa-address-card" aria-hidden="true"></i>
             Admin's cabinet <small>Rule the world!</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
               <li><a href="<?= \yii\helpers\Url::to(['metodist/index']) ?>" type="button" data-toggle="modal">Metodist</a></li>
                <li><a href="<?= \yii\helpers\Url::to(['student/index']) ?>" type="button" data-toggle="modal">Student</a></li>
                <li><a href="<?= \yii\helpers\Url::to(['teacher/index']) ?>" type="button" data-toggle="modal">Teacher</a></li> 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Today's motivational quote: Sum is the sum of small efforts, repeated day in and day out.</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          
          <div class="col-md-12">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title"><i class="fa fa-arrows" aria-hidden="true"></i>Possibilities</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <!--<h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </h2>-->

                    <h4>Metodists</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <!--<h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?= \app\models\Users::find()->count() ?></h2>-->
                    <h4>Teachers</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                  <!--  <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> </h2>-->
                    <h4>Students</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></h2>
                    <h4>Curriculum</h4>
                  </div>
                </div>
              </div>
              </div>

              <!-- Latest Users -->
              <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23b7aaaa&amp;src=ekp2jn033r3nhlisflhlrqn1ck%40group.calendar.google.com&amp;color=%23B1365F&amp;ctz=Europe%2FHelsinki" style="border-width:0;margin: auto;display: inherit;" width="845" height="600" frameborder="0" scrolling="no"></iframe>

          </div>
        </div>
      </div>
    </section>

<footer id="main-footer">
    <div class="container">
      <div id="footer-logo">
        Especially for Stemukr01, 

        <span> Kyiv 2017</span>
      </div>
      <div id="footer-copy">~©~</div>
    </div>
  </footer>
    

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Add User</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" placeholder="Name">
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

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

  



</body>
</html>
