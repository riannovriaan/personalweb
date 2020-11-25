<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hi, I'm Novrian</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/mr panjul youtube.jpg" type="image/jpg">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
          <img src="/img/mr panjul youtube.jpg" width="50" height="50" alt="My-Logo" loading="lazy">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home
                  <span class="sr-only">(current)</span>
                </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Experience</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Education</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Get In Touch</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Full Page Image Header with Vertically Centered Content -->
  <header class="masthead">
    <div class="container">
      <div class="row align-items-center row-title">
       <div class="col-sm-3 text-center">
           <img src="/img/mr panjul 1.jpg" class="img-fluid my-photo" alt="My-Photo">
        </div> 
        <div class="col-sm-9 text-center">
        <div class="my-name"> Hi, I'm <strong>Novrian</strong></div> 
        <div class="caption"> 1% Human 99% Dreamer</div>
      </div>
    </div>
</div>
  </header>
  
  <!-- Page Content -->
  <section id="portofolio" class="py-5">
    <div class="container">
    <h3 class="text-center title-section"><strong>PORTOFOLIO</strong>
    </h3>
    <p class="text-center font-weight-light mb-5"><small>SELECTED LATEST WORKS</small></p>
    </div>
  </section>

    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>