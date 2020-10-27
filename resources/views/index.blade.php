<!DOCTYPE html>
<html lang="en">

  <head>
    <title>FotoFlorez</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Muli:400,700|Hepta+Slab:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/capture/fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/capture/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/capture/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/capture/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/capture/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/capture/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/capture/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/capture/css/aos.css') }}">
    <link href="{{ asset('css/assets/img/img.png') }}" rel="shortcut icon"/>
    <link rel="stylesheet" href="{{ asset('css/capture/css/style.css') }}">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-3 ">
              <div class="site-logo">
                <img src="{{ asset('css/capture/images/logo.png') }}" width="300" alt="Image">
              </div>
            </div>

            <div class="col-9  text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>

              

              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="{{ asset('index.html') }}" class="nav-link">Inicio</a></li>
                  <li><a href="{{ asset('css/capture/blog.html') }}" class="nav-link">Servicios</a></li>
                  <li><a href="{{ asset('css/capture/photography.html') }}" class="nav-link">Catálogo</a></li>
                  <li><a href="{{ asset('css/capture/about.html') }}" class="nav-link">Sobre mí</a></li>
                <li><a href="{{ route('login') }}" class="nav-link">Inicio de Sesión</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>

    <div class="ftco-blocks-cover-1">
      <div class="site-section-cover overlay" style="background-image: url('css/capture/images/m.jpg')">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-7">
              <p>¡Hola! Soy Fabian Orlando Florez</p>
              <h1 class="mb-3 text-primary">Fotógrafo de Bodas  &amp; Eventos</h1>
              <p>
                Bienvenidos a Foto Florez espacio de realidad, calidad e innovación
                a través de nuestros retratos.</p>
              <p><a href="#" class="btn btn-primary">Contáctanos</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="site-section bg-white">
      <div class="container">
        <div class="row mb-5 ">
          <div class="col-md-7 text-center mx-auto">
            <span class="subtitle-39293">Nuestros</span>
            <h2 class="serif">Eventos</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="{{ asset('css/capture/images/7.jpg') }}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="capture/single.html">Nuestras Bodas</a></h2>
                <p>David y Mónica es un clara muestra de nuestro trabajo, dedicación y orgullo en un lindo matrimonio.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="capture/single.html">
                <img src="{{ asset('css/capture/images/u.jpg') }}" alt="Image" 
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                  <h2><a href="capture/single.html">Nuestros XV Años</a></h2>
                <p>Lorena conmemora un día muy especial donde pasa de ser niña a mujer, nosotros brindando nuestro profesionalismo haciendo parte de su gran día.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="capture/single.html">
                <img src="{{ asset('css/capture/images/8.jpg') }}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="{{ asset('css/capture/single.html') }}">Nuestras Bodas</a></h2>
                <p>Daniel y Angie es un clara muestra de nuestro trabajo, dedicación y orgullo en un lindo matrimonio.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">

        <div class="row mb-5 ">
          <div class="col-md-7 text-center mx-auto">
            <span class="subtitle-39293">FOTO FLOREZ</span>
            <h2 class="serif">Un poco de nuestro trabajo</h2>
          </div>
        </div>
       
        <div id="posts" class="row no-gutter">
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('css/capture/images/3.jpg') }}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset('css/capture/images/3.jpg') }}">
            </a>
          </div>
          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('css/capture/images/c.jpg') }}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset('css/capture/images/c.jpg') }}">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('css/capture/images/d.jpg') }}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset('css/capture/images/d.jpg') }}">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('css/capture/images/5.jpg') }}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset('css/capture/images/5.jpg') }}">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('css/capture/images/f.jpg') }}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset('css/capture/images/f.jpg') }}">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('css/capture/images/l.jpg') }}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset('css/capture/images/l.jpg') }}">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('css/capture/images/j.jpg') }}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset('css/capture/images/j.jpg') }}">
            </a>
          </div>

          <div class="item web col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('css/capture/images/m.jpg') }}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset('css/capture/images/m.jpg') }}">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('css/capture/images/p.jpg') }}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset('css/capture/images/p.jpg') }}">
            </a>
          </div>

          <div class="item brand col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('css/capture/images/r.jpg') }}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset('css/capture/images/t.jpg') }}">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('css/capture/images/t.jpg') }}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset('css/capture/images/t.jpg') }}">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('css/capture/images/z.jpg') }}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset('css/capture/images/z.jpg') }}">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('css/capture/images/x.jpg') }}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset('css/capture/images/x.jpg') }}">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('css/capture/images/g.jpg') }}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset('css/capture/images/g.jpg') }}">
            </a>
          </div>

          <div class="item design col-6 col-sm-6 col-md-6 col-lg-4 col-xl-4 mb-4">
            <a href="{{ asset('css/capture/images/7.jpg') }}" class="item-wrap" data-fancybox="gal">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="{{ asset('css/capture/images/7.jpg') }}">
            </a>
          </div>


        </div>
      </div>
    </div> <!-- END .site-section -->
    

   <div class="site-section bg-black about-me">
     <div class="container">
       <div class="row align-items-center">
         <div class="col-md-6 mb-5 mb-md-0">
           <img src="{{ asset('css/capture/images/6.jpg') }}" alt="Image" class="img-fluid">
         </div>
         <div class="col-md-5 ml-auto">
           <h3 class="text-white mb-5">Sobre Mí</h3>
           <blockquote class="quote-29281">
            <p>La idea de capturar imágenes, preservarlas y transmitírlas a través de un lente ha hecho exitosa a la empresa Foto Florez!
            </p>
           </blockquote>
           <p>Emprendiendo esta gran aventura desde el año 2015 por su fundador, fotógrafo profesional y diseñador gráfico Fabián Orlando Florez, dándole luz a este gran proyecto que surgió por el amor a la vocación continuando con los mismos propósitos desde su surgimiento: transmitír felicidad, brindar calidad y generar un Baúl lleno de recuerdos a quienes depositan toda su confianza en el y en su equipo profesional.</p>
           <p>En la actitualidad Foto Florez es una de las empresas más reconocidas en el ámbito fotografico por su desempeño, responsabilidad, compromiso y calidad a lo largo de cada servicio.</p>
           

           <div class="social_29128 white mt-5">
            <a href="#"><span class="icon-facebook"></span></a>  
            <a href="#"><span class="icon-instagram"></span></a>  
            <a href="#"><span class="icon-twitter"></span></a>  
           </div>
         </div>
       </div>
     </div>
   </div>
  

    <div class="site-section">
      <div class="container">
        <div class="row mb-5 ">
          <div class="col-md-7 text-center mx-auto">
            <span class="subtitle-39293">FOTO FLOREZ</span>
            <h2 class="serif">Un poco de nuestro trabajo</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-8">

            <a href="{{ asset('css/capture/images/VIDEOMA.mp4') }}" data-fancybox  class="btn-video_38929">
              <span><span class="icon-play"></span></span>
             
              <video src="{{ asset('css/capture/images/VIDEOMA.mp4') }}" width="700" height="380"></video>
              
            </a>
            
          </div>
        </div>
      </div>
    </div>

   

    <footer class="site-footer">
      <div class="container">
          <div class="col-md-12">
            <div class="border-top pt-5">
                <center><p>
                    FotoFlorez&copy;<script>document.write(new Date().getFullYear());</script>
                    </p></center>
            </div>
          </div>

        </div>
      
    </footer>

    </div>
    "{{ asset('css/capture/images/VIDEOMA.mp4') }}"
    <script src="{{ asset('css/capture/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('css/capture/js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('css/capture/js/popper.min.js') }}"></script>
    <script src="{{ asset('css/capture/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('css/capture/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('css/capture/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('css/capture/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('css/capture/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('css/capture/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('css/capture/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('css/capture/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('css/capture/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('css/capture/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('css/capture/js/aos.js') }}"></script>
    <script src="{{ asset('css/capture/js/main.js') }}"></script>

  </body>

</html>

