<?php error_reporting(0); ?>
<?php
  $title = "DevEnterMatch";
  include 'layout/header.php';

  $msg = NULL;
  $msg = $_GET['msg'];

  if ($msg != NULL) {
      ?>
        <div class="alert alert-success fade in alert-dismissible"><center><?php echo $msg; ?></center></div>
    <?php
  }
?>

    <div class="container-fluid">
      <div id="myCarousel" class="carousel slide" data-rate="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
              <img src="pictures/team.jpg" style="width:100%;">
            </div>

            <div class="item">
              <img src="pictures/frustrated_coder.jpg" style="width:100%;">
            </div>
            
            <div class="item">
              <img src="pictures/idea_person.jpg" style="width:100%;">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="carousel-caption">
      <h1 class="text-center" style="color: white;">Welcome to DevEnterMatch</h1>
      <p class="text-center">Where entrepreneurs meet Developers</p>
    </div>

    <div class="margin"></div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="well">
            <h3 class="text-center">Entrepneur </h3>
            <div class="container-fluid line-break">
            </div>
            <p>This is THis is Yippy yay, yippy yay, hit me on my cellu' phone
              Yippy yay, yippy yay, I'll be right back with the dope
              Yippy yay, yippy yay, I know you niggas need some more
            Take that shit from me some more, I just need to be alone</p>
            <center><a href="login.php"><button type="button" class="btn btn-info">Login</button></a></center>
          </div>
        </div>
        <div class="col-md-4">
          <div class="well" >
            <h3 class="text-center">Developers</h3>
            <div class="container-fluid line-break">
            </div>
            <p>THis is Developers THis is Yippy yay, yippy yay, hit me on my cellu' phone
              Yippy yay, yippy yay, I'll be right back with the dope
              Yippy yay, yippy yay, I know you niggas need some more
            Take that shit from me some more, I just need to be alone</p>
            <center><a href="login.php"><button type="button" class="btn btn-info">Login</button></a></center>
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="well">
            <h3 class="text-center">Sponsor </h3>
            <div class="container-fluid line-break">
            </div>
            <p>THis is Yippy yay, yippy yay, hit me on my cellu' phone
              Yippy yay, yippy yay, I'll be right back with the dope
              Yippy yay, yippy yay, I know you niggas need some more
            Take that shit from me some more, I just need to be alone</p>
            <center><a href="login.php"><button type="button" class="btn btn-info">Login</button></a></center>
          </div>
        </div>
      </div>
    </div>
    <?php
  include 'layout/footer.php';
?>