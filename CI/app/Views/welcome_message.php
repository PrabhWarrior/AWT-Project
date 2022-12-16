<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Welcome to Webex</title>
    <style>
    .cl {
      background-color: rgb(4, 113, 156);
    }

    .cl1 {
      background-color: rgb(23, 20, 20);
    }
  </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark cl1">

<div class="container-fluid">

  <a class="navbar-brand" href=""><img src="https://cdn.pixabay.com/photo/2016/12/17/15/50/logo-1913689_960_720.png" alt="" width="30" height="24"></a>


  <div class="collapse navbar-collapse" id="navbarSupportedContent">



  </div>

</div>
</nav>

<div id="carouselExampleDark" class="carousel carousel-light slide carousel-fade" data-bs-ride="carousel">

  <div class="carousel-indicators">

    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true"

      aria-label="Slide 1"></button>

    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>

    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>

  </div>

  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
  <img src="https://cdn.pixabay.com/photo/2018/01/23/11/28/water-3101241_960_720.jpg" class="d-block w-100" alt="..." width="450" height="685" >
      <div class="carousel-caption d-none d-md-block">
        <h2>Welcome to WebEx</h2>
        <p>Exploring the technologies</p>
                    <?php echo anchor("signup","Signup", ['class'=>'btn btn-outline-success rounded-pill']);?>
                    <?php echo anchor("login","Login", ['class'=>'btn btn-outline-danger rounded-pill']);?>
                    <?php echo anchor("/home","View Site", ['class'=>'btn btn-outline-primary rounded-pill']);?>
      </div>
    </div>
</div>
