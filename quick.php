<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cquick.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>dashbord</title>
</head>
<body>
  <?php include 'nav.php';?>
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img\OIP.jpg" alt="Los Angeles" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="img\download.jpg" alt="Chicago" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
      <img src="img\download (1).jpg" alt="New York" class="d-block" style="width:100%">
    </div>
  </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
<section class="my-5">
    <div class="py-3">
        <h2 class="text-center"> About us</h2>
</div>
<div class="container">
<div class="row">
  <div class="col-lg-6 col-md-6 col-12">
    <img src="img\OIP (1).jpg" alt="" class="image-fluide aboutimg">
  </div>
  <div class="col-lg-6 col-md-6 col-12">
    <h2 class="display-4">Leonardo da Vinci
    </h2>
    <p class="py-2">Leonardo first gained attention for his work on the Baptism of Christ, painted in conjunction with Verrocchio.One is small, 59 centimetres (23 in) long and 14 cm (5.5 in) high. It is a "predella" to go at the base of a larger composition, a painting by Lorenzo di Credi from which it has become separated. The other is a much larger work, 217 cm (85 in) long.[108] </p>
    <a href="about.php" class='btn btn-success'> see more</a>
  </div>
</div>
</div>
</section>

<section class="my-5">
    <div class="py-3">
        <h2 class="text-center">Our Services</h2>
</div>
<div class="container-fluid">
   <div class="row">
       <div class="col-lg-4 col-md-2 col-12">
         <div class="card">
           <img class="card-img-top" src="img\download (3).jpg" alt="Card image">
            <div class="card-img-overlay">
              <h4 class="card-title">Lion</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        </div>


       <div class="col-lg-4 col-md-2 col-12">
         <div class="card">
           <img class="card-img-top" src="img\download (3).jpg" alt="Card image">
            <div class="card-img-overlay">
              <h4 class="card-title">Lion</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
        
      </div>
     
       <div class="col-lg-4 col-md-2 col-12">
         <div class="card">
           <img class="card-img-top" src="img\download (3).jpg" alt="Card image">
            <div class="card-img-overlay">
              <h4 class="card-title">Lion</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
</div>
        
      </div>
</div>
 
</section>

<section class="my-5">
    <div class="py-3">
        <h2 class="text-center"> Our Galary</h2>
      </div>
  <div class="container-fluid">
   <div class="row">
       <div class="col-lg-4 col-md-2 col-12">
       <img src="img\download.jpg" alt="" class="image-fluide pb-5">
       </div>
       <div class="col-lg-4 col-md-2 col-12">
       <img src="img\download.jpg" alt="" class="image-fluide pb-5">
       </div>
       <div class="col-lg-4 col-md-2 col-12">
       <img src="img\download.jpg" alt="" class="image-fluide pb-5">
       </div>
       <div class="col-lg-4 col-md-2 col-12">
       <img src="img\download.jpg" alt="" class="image-fluide pb-5">
       </div>
       <div class="col-lg-4 col-md-2 col-12">
       <img src="img\download.jpg" alt="" class="image-fluide pb-5">
       </div>
       <div class="col-lg-4 col-md-2 col-12">
       <img src="img\download.jpg" alt="" class="image-fluide pb-5">
       </div><div class="col-lg-4 col-md-2 col-12">
       <img src='img\download.jpg' alt="" class="image-fluide pb-5">
       </div>
       <div class="col-lg-4 col-md-2 col-12">
       <img src="img\download.jpg" alt="" class="image-fluide pb-5">
       </div>
       <div class="col-lg-4 col-md-2 col-12">
       <img src="img\download.jpg" alt="" class="image-fluide pb-5">
       </div>
    </div>
</div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">@loopwithus</p>

</footer>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>