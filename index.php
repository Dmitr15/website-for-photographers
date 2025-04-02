<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">

  <title>Photo Gellery</title>
  <link rel="stylesheet" href="css/styles.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">My Gallery</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Nature</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Architecture</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Travel</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>


  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/dino-reichmuth-A5rCN8626Ck-unsplash.jpg" class="d-block w-100" alt="Travel img">
        <div class="carousel-caption d-none d-md-block">
          <h3>Travel</h3>

        </div>
      </div>
      <div class="carousel-item">
        <img src="img/lance-anderson-QdAAasrZhdk-unsplash.jpg" class="d-block w-100" alt="Architecture img">
        <div class="carousel-caption d-none d-md-block">
          <h3>Architecture</h3>

        </div>
      </div>
      <div class="carousel-item">
        <img src="img/adam-kool-ndN00KmbJ1c-unsplash.jpg" class="d-block w-100" alt="Nature img">
        <div class="carousel-caption d-none d-md-block">
          <h3>Nature</h3>

        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <section class="my-4">
    <div class='py-4'>
      <h2 class="text-center">Nature</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/dawid-zawila--G3rw6Y02D0-unsplash.jpg" class="img-fluid pd-3" alt="nature">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/hendrik-cornelissen--qrcOR33ErA-unsplash.jpg" class="img-fluid pd-3" alt="nature">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/wil-stewart-pHANr-CpbYM-unsplash.jpg" class="img-fluid pd-3" alt="nature">
        </div>
      </div>
    </div>
  </section>

  <section class="my-4">
    <div class='py-4'>
      <h2 class="text-center">Architecture</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/anatolii-nesterov-XtdG5ZJpyoc-unsplash.jpg" class="img-fluid pd-3" alt="nature">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/ali-zeynalli-lfnwueL8rfw-unsplash.jpg" class="img-fluid pd-3" alt="nature">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/borys-jarzcuk-UqTkotpdE6k-unsplash.jpg" class="img-fluid pd-3" alt="nature">
        </div>
      </div>
    </div>
  </section>

  <section class="my-4">
    <div class='py-4'>
      <h2 class="text-center">Travel</h2>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/luca-bravo-O453M2Liufs-unsplash.jpg" class="img-fluid pd-3" alt="travel">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/eva-darron-oCdVtGFeDC0-unsplash.jpg" class="img-fluid pd-3" alt="travel">
        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <img src="img/drif-riadh-YpkuRn54y4w-unsplash.jpg" class="img-fluid pd-3" alt="travel">
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="my-4">
      <div class="py-4">
        <h2 class="text-center">Contact Us</h2>
      </div>

      <div class="w-50 m-auto">
        <form action="" method="post">

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email">
          </div>

          <div class="form-group">
            <label for="number">Number</label>
            <input type="text" name="number" class="form-control" id="number">
          </div>
          <button type="submit" class="btn btn-success">Submit</button>
        </form>
      </div>
    </div>
  </section>

  <section>
    <div class="my-4">
      <div class="py-4">
      <h2 class="text-center">About</h2>
      </div>
      <div class="container">
        <h3 class="text-center">Dan</h3>
        <p class="text-center">
          <b>
            I am a passionate photographer interested in working in Architecture, Nature and Travel.<br>
            I am fuul time freelancer.
          </b>
        </p>
      </div>
    </div>
  </section>


  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>