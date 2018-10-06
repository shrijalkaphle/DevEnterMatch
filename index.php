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
            <h3 class="text-center">Entrepreneur</h3>
            <div class="container-fluid line-break">
            </div>
            <p>A person who sets up a business or businesses, taking on financial risks in the hope of profit. Entrepreneur can be a help line to many creative minds in the field of technology. The person who leads the team and prepares to create a fame in a global market is the Entrepreneur.</p>
            <?php if (!$_SESSION['name']): ?>
              <center><a href="login.php"><button type="button" class="btn btn-info">Login</button></a></center>
            <?php endif ?>
          </div>
        </div>
        <div class="col-md-4">
          <div class="well" >
            <h3 class="text-center">Developers</h3>
            <div class="container-fluid line-break">
            </div>
            <p>A developer is an individual that builds and create software and applications. The genius mind that does the writing or framing an application. Developers are the genius brain that makes the program flexible with their technical and technological idea.</p>
            <?php if (!$_SESSION['name']): ?>
              <center><a href="login.php"><button type="button" class="btn btn-info">Login</button></a></center>
            <?php endif ?>
          </div>
        </div>
        <div class="col-md-4">
          <div class="well">
            <h3 class="text-center">Sponsor </h3>
            <div class="container-fluid line-break">
            </div>
            <p>A person or organization that pays for or contributes to the costs involved in staging a sporting or artistic event in return for advertising. Sponsor helps in providing fund for the entrepreneurs and developers to carry out the activity of organization.</p>
            <?php if (!$_SESSION['name']): ?>
              <center><a href="login.php"><button type="button" class="btn btn-info">Login</button></a></center>
            <?php endif ?>
          </div>
        </div>
      </div>
    </div>
    <?php
  include 'layout/footer.php';
?>