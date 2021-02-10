<!DOCTYPE html>
<html lang="en" id="home">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Hi, I'm Novrian</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="/img/mr panjul youtube.jpg" type="image/jpg">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  </head>
  <body>
  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light shadow fixed-top navbar-edit rounded-bottom">
      <div class="container">
        <a class="navbar-brand" href="/">
            <img class="rounded-circle" src="/img/mr panjul youtube.jpg" width="50" height="50" alt="My-Logo" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link page-scroll text-white" href="#home">Home
                    <span class="sr-only">(current)</span>
                  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll text-white" href="#portofolio">Portofolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll text-white" href="#experience">Experience</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll text-white" href="#education">Education</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll text-white" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link page-scroll text-white" href="#contact">Get In Touch</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    
    <!-- Full Page Image Header with Vertically Centered Content -->
    <header class="masthead">
      <div class="container">
        <div class="row align-items-center row-title">
          <div class="col-sm-3 text-center" data-aos="fade-right" data-aos-duration="1500">
            <img src="/img/mr panjul 1.jpg" class="img-fluid my-photo rounded-circle" alt="My-Photo">
          </div> 
          <div class="col-sm-9 text-center" data-aos="fade-up" data-aos-duration="1500">
            <div class="my-name"> Hi, I'm <strong>Novrian</strong></div> 
            <div class="caption"> 1% Human 99% Dreamer</div>
          </div>
        </div>
      </div>
    </header>
    
    <!-- Page Content -->
    <section id="portofolio" class="py-5">
      <div class="container">
      <h3 class="text-center title-section" data-aos="fade-up" data-aos-duration="1000"><strong>PORTOFOLIO</strong>
      </h3>
      <p class="text-center font-weight-light mb-5" data-aos="fade-up" data-aos-duration="1500"><small>SELECTED LATEST WORKS</small></p>
    <div class="container">
      <div class="row grid-row">
        <div class="column">
          <img data-aos="fade-right" data-aos-duration="1500" src="https://images.unsplash.com/photo-1581287053822-fd7bf4f4bfec?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&h=300&fit=crop" alt="">
          <img data-aos="fade-right" data-aos-duration="1500" src="https://images.unsplash.com/photo-1602576666092-bf6447a729fc?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&h=500&fit=crop" alt="">
        </div>
        <div class="column">
          <img data-aos="fade-left" data-aos-duration="1500" src="https://images.unsplash.com/photo-1585844621420-c0c2f393ab71?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&h=500&fit=crop" alt="">
          <img data-aos="fade-left" data-aos-duration="1500" src="https://images.unsplash.com/photo-1535223289827-42f1e9919769?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=400&h=400&fit=crop" alt="">
        </div>
      </div>
    </div>
    </div>
    </section>

    <section id="experience" class="py-5 bg-dark text-white">
      <div class="container">
        <h2 class="font-weight-light" data-aos="fade-right" data-aos-duration="1500">
          EXPERIENCE
        </h2>
        <hr class="mb-5" data-aos="fade-left" data-aos-duration="1500" style="border-top: 1px solid #FFFFFF">
        @foreach ($experiences as $experience)
      <div class="row mb-5" data-aos="fade-up" data-aos-duration="1500">
        <div class="col-lg-8">
          <h4 class="mb-0">{{ $experience->title}}</h4>
          <p class="lead">{{ $experience->loc}}</p>
          <p>{{ $experience->description}}</p>
        </div>
        <div class="col-lg-4 text-lg-right">
        {{ $experience->since}}
        </div>
      </div>
      @endforeach
      </div>
    </section>
        
    <section id="education" class="py-5">
      <div class="container">
        <h2 class="font-weight-light" data-aos="fade-right" data-aos-duration="1500">
          EDUCATION
        </h2>
        <hr class="mb-4" data-aos="fade-left" data-aos-duration="1500">
        @foreach ($educations as $education)
            <div class="row mb-5" data-aos="fade-up" data-aos-duration="1500">
          <div class="col-lg-8">
            <h4 class="mb-0">{{ $education->loc }}</h4>
              <p class="lead">{{ $education->description }}</p>
          </div>
          <div class="col-lg-4 text-lg-right">{{ $education->since }}</div>
        </div>
        @endforeach
      </div>
    </section>
  
    <section id="about" class="py-5">
    <div class="container">
      <h3 class="text-center about-me mb-5" data-aos="fade-up" data-aos-duration="1500"><strong>ABOUT ME</strong></h3>
  
      @foreach ($abouts as $about)
            <div class="row">
          <div class="col-lg-6 px-5">
            <blockquote class="blockquote">
              <p>
                <i class="fa fa-quote-left fa-2x" data-aos="fade-left" data-aos-duration="1500">
                  
                </i>
              </p>
              <p class="mb-0" data-aos="fade-up" data-aos-duration="1500">
                <i>
                  {{ $about->quote1 }}
                </i>
              </p>
              <footer class="blockquote-footer" data-aos="fade-left" data-aos-duration="1500">{{ $about->quote1a }}</footer>
            </blockquote>
          </div>
          <div class="col-lg-6 px-5">
            <h6 data-aos="fade-up" data-aos-duration="1500">
              {{ $about->quote2 }}
            </h6> 
            <p data-aos="fade-up" data-aos-duration="1500">
             {{ $about->quote2a }}
            </p>
            <p data-aos="fade-up" data-aos-duration="1500">
              {{ $about->quote2b }}
            </p>
            <br><a class="btn btn-outline-dark btn-myresume" data-aos="fade-up" data-aos-duration="1500" href="/img/CV.pdf" 
            target="_blank" role="button">
          <i class="fas fa-arrow-alt-circle-down" aria-hidden="true"></i>
          MY RESUME
          </a>
          </div>
        </div>
      @endforeach
    </div>
  
    </section>
    
    <section id="contact" class="py-5">
      <div class="container">
        <h3 class="text-center about-me mb-5" data-aos="fade-up" data-aos-duration="1500"> <strong>GET IN TOUCH</strong></h3>
        <div class="row">
          {{-- <div class="col-lg-3 text-center">
            <a href="https://www.google.com/maps/place/6%C2%B021'57.6%22S+106%C2%B050'14.8%22E/@-6.365989,106.8352473,17z/data=!3m1!4b1!4m9!1m2!10m1!1e2!3m5!1s0x2e69ec139177af6f:0x0!7e2!8m2!3d-6.365989!4d106.837436?authuser=1&hl=id" 
            target="_blank"> <i class="far fa-map fa-contact-custom fa-4x mb-2"></i></a>
              <p><strong>Go to my Address? Click the icon.</strong></p>
              <p>Jl. Kedoya Raya No.53 Rt 04/ Rw 02, Pondok Cina, Beji, Depok</p>
          </div> --}}

          <div class="col-lg-4 text-center" data-aos="fade-up" data-aos-duration="1500">
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=novrianrian19@gmail.com" target="_blank"> <i class="far fa-envelope-open fa-contact-custom fa-4x mb-2"></i></a>
            <p><strong>Email Me!</strong></p>
            <p>Just click the icon or send your message to novrianrian19@gmail.com</p>
          </div>

          {{-- <div class="col-lg-3 text-center">
            <a href="https://api.whatsapp.com/send?phone=6281212941016&text=Hi, Angga" target="_blank"><i class="far fa-comments fa-contact-custom fa-4x mb-2"></i></a>
            <p><strong>Let's Talk</strong></p>
            <p>Just click the icon or Call my phone number 0812 1294 1016</p>
          </div> --}}

          <div class="col-lg-4 text-center" data-aos="fade-up" data-aos-duration="1500">
            <a href="https://www.instagram.com/riannovriaan/" target="_blank"><i class="fab fa-instagram fa-contact-custom fa-4x mb-2"></i></a>
            <p><strong>Followe Me!</strong></p>
            <p>Just click the icon or Find @riannovriaan</p>
          </div>

          <div class="col-lg-4 text-center" data-aos="fade-up" data-aos-duration="1500">
            <i class="far fa-clock fa-contact-custom fa-4x mb-2"></i>
            <p><strong>Working Hours!</strong></p>
            <p>Mon to Sat – 9.00 to 18.00</p>
          </div>
        </div>
      </div>
    </section>

    <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
      <div class="container text-center">
    <small>Copyright &copy; Novrian H</small>
      </div>
    </footer>

        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}" ></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
          AOS.init();
        </script>

</body>
</html>