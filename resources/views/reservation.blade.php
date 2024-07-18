<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <title>City Tours reservar...</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-woox-travel.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->
</head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
              <img src="assets/images/logo.png" alt="">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
              <li><a href="home_1.php">INICIO</a></li>
              <li><a href="about.php">Acerca de</a></li>
              <li><a href="deals.php">Ofertas</a></li>
              <li><a href="reservation.php" class="active">reserva tu viaje</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="second-page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Reserve aquí la oferta de su preferencia</h4>
          <h2>Haz tu reserva</h2>
          <p>Toda aventura comienza aqui...</p>
          <div class="main-button"><a href="about.php">Descubrir mas</a></div>
        </div>
      </div>
    </div>
  </div>

  <div class="more-info reservation-info">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-phone"></i>
            <h4>Hacer una llamada telefónica</h4>
            <a href="#">+123 456 789 (0)</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-envelope"></i>
            <h4>Contáctenos por correo electrónico</h4>
            <a href="#">City_Tours@gmail.com</a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="info-item">
            <i class="fa fa-map-marker"></i>
            <h4>Visita Nuestras Oficinas</h4>
            <a href="#">Calle Los Pinos 123, Distrito de Miraflores, Lima, Perú.</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="reservation-form">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
              @if(Session::has('success'))
                      <div class="alert alert-success" role="alert">
                          {{ Session::get('success') }}
                      </div>
              @endif
              <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198.6822518904219!2d-80.6371836157318!3d-5.194487716357202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105e1c2b34dcf91%3A0xf49e99dd3b93e9b5!2sPiura%2C%20Per%C3%BA!5e0!3m2!1sen!2sus!4v1642993823073!5m2!1sen!2sus" width="100%" height="450px" frameborder="0" style="border:0; border-top-left-radius: 23px; border-top-right-radius: 23px;" allowfullscreen=""></iframe>
          </div>
        </div>
        <div class="col-lg-12">
          <form id="reservation-form" method="POST" action="{{ route('reservation.store') }}">
            @csrf
            <div class="row">
              <div class="col-lg-12">
                <h4>Haz tu <em>reservacion</em> a través de este <em>Formulario</em></h4>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="Name" class="form-label">Nombre</label>
                  <input type="text" name="name" class="Name" placeholder="Ex. Ronald Yamir" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="Number" class="form-label"> Numero de telefono</label>
                  <input type="text" name="number" class="Number" placeholder="Ex. +xxx xxx xxx" autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="chooseGuests" class="form-label">Numero de invitados</label>
                  <select name="guests" class="form-select" aria-label="Default select example" id="chooseGuests">
                    <option selected>ex. 3 o 4 o 5</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4+">4+</option>
                  </select>
                </fieldset>
              </div>
              <div class="col-lg-6">
                <fieldset>
                  <label for="Number" class="form-label">Fecha</label>
                  <input type="date" name="date" class="date" required>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <label for="chooseDestination" class="form-label">Elige tu destino</label>
                  <select name="destination" class="form-select" aria-label="Default select example" id="chooseCategory">
                    <option selected>ex. Cusco</option>
                    <option value="lima">Lima</option>
                    <option value="Machu picchu">Machu Picchu</option>
                    <option value="Ica">Ica</option>
                    <option value="Arequipa">Arequipa</option>
                  </select>
                </fieldset>
              </div>
              <div class="col-lg-12">
                <fieldset>
                  <button type="submit" class="main-button">Haz tu reserva ahora</button>
                </fieldset>
                @if(Session::has('success'))
                      <div class="alert alert-success" role="alert">
                          {{ Session::get('success') }}
                      </div>
              @endif
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2024 <a href="#">City Tours</a> Compañía. Reservados todos los derechos.</p>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/wow.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  <script>
    $(".option").click(function() {
      $(".option").removeClass("active");
      $(this).addClass("active");
    });
  </script>
  <script>
      // Desaparecer la notificación después de 4 segundos
      setTimeout(function() {
          $('.alert').fadeOut('fast');
      }, 4000);
  </script>
</body>

</html>
