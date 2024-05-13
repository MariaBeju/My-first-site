<?php require_once('includes/header.php'); ?>

    <div id="carouselExampleIndicators" class="carousel slide" >
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="carousel-image" style="background-image: url(https://images.pexels.com/photos/255379/pexels-photo-255379.jpeg?cs=srgb&dl=pexels-miguel-%C3%A1-padri%C3%B1%C3%A1n-255379.jpg&fm=jpg)"></div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image" style="background-image: url(https://img.freepik.com/free-vector/hand-painted-watercolor-pastel-sky-background_23-2148902771.jpg?w=2000)"></div>
        </div>
        <div class="carousel-item">
          <div class="carousel-image" style="background-image: url(https://media.istockphoto.com/id/465084126/photo/blurred-urban-building-background-scene.jpg?s=170667a&w=0&k=20&c=jfOhErNoY9832z-ZpU0fJdI3ZiRuOuRbx0Vcq7tunt8=)"></div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>


  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-6">
        <section class="main-description">
          <h1>Arta de a căuta informații!</h1>
          <p>Lorem ipsum dolor sit amet, consectur adipiscing elit. In turpis lorem, feugiat id magna vitae, mattis premtium orei. Quisque rhoncus quis tellus sit amet posuere. Aliquam convallis sed felis sit amet viverra.</p>
          <button type="button" class="btn btn-outline-primary">Înscrie-te acum</button>
          <button type="button" class="btn btn-outline-secondary">Cere detalii</button>
        </section>
      </div>
    </div>
  </div>

<section class="options">
  <div class="container text-bg-secondary py-5">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-4">
        <div class="option">
          <img src="images/cat1.jpg" alt="" />
          <h4>Performanță</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4">
        <div class="option">
          <img src="images/cat2.jpg" alt="" />
          <h4>Siguranță în ziua de mâine</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4">
        <div class="option">
          <img src="images/cat3.jpg" alt="" />
          <h4>Dublarea venitului</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<section>
<div class="container text-center">
  <div class="cols">

  <?php 
  $inc=1;
  $X='Participanti la modulul ';
  ?>

    <div class="row">
      <div class="col-6 col-md-3">
        <div class="col1">
          <?php
            $a=10500;
            $format_number_a = number_format($a, 0, ',', '.');
            echo "<h3>$format_number_a</h3>";
            echo "<p>Participanti la modulul 1</p>";
            echo ++$inc;
            echo "<br>";
            echo $X.$format_number_a;?>
        </div>
      </div>
      

      <div class="col-6 col-md-3">
        <div class="col2">
          <?php
            $b=9800;
            $format_number_b = number_format($b, 0, ',', '.');
            echo "<h3>$format_number_b</h3>";
            echo "<p>Participanti la modulul 2</p>";
            echo ++$inc;
            echo "<br>";
            echo $X.$format_number_b;?>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="col3">
          <?php
            $c=30000;
            $format_number_c = number_format($c, 0, ',', '.');
            echo "<h3>$format_number_c</h3>";
            echo "<p>Participanti la modulul 3</p>";
            echo ++$inc;
            echo "<br>";
            echo $X.$format_number_c;?>
        </div>
      </div>

      <div class="col-6 col-md-3">
        <div class="col4">
          <?php
            $total=$a+$b+$c;
            $format_number_total = number_format($total, 0, ',', '.');
            echo "<h3>$format_number_total</h4>";
            echo "<p>Participanti la toate modulele</p>";
            echo ++$inc;
            echo "<br>";
            echo $X.$format_number_total;?>
        </div>
      </div>

      <?php
      if($total>=50000){
        echo "<strong>Totalul este mai mare de 50.000</strong>";}
      else{
        echo "Totalul este mai mic de 50.000";}
      ?>

    </div>
  </div>
</div>
</section>

<?php require_once('includes/footer.php'); ?>