<?php require_once('header.php');?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="thumbnail">
                <a href="img/caritas_index.jpg" target="_blank">
                    <img src="img/caritas_index.jpg" alt="Lights" style="width:100%">
                </a>
            </div>
        </div>
    </div>
    <div class="text-center">
        <h3>Caritas San Antonio de Padua</h3>
    </div>
    <!-- Carrousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/la.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>LA is always so much fun!</p>
        </div>
      </div>

      <div class="item">
        <img src="img/chicago.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/ny.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
</div>

<?php require_once('footer.php');?>