<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Montañita View</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.png">
    <!-- video -->

    <!-- <link href="https://vjs.zencdn.net/7.6.6/video-js.css" rel="stylesheet" /> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css" rel="stylesheet" />
    <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>



    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- /Preloader -->

    <!-- Header Area Start -->
    <header class="header-area">
        <!-- Search Form -->
        <!-- <div class="search-form d-flex align-items-center">
            <div class="container">
                <form action="index.html" method="get">
                    <input type="search" name="search-form-input" id="searchFormInput" placeholder="Type your keyword ...">
                    <button type="submit"><i class="icon_search"></i></button>
                </form>
            </div>
        </div> -->

        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_phone"></i> <span>Telefone</span></a>
                            <a href="#"><i class="icon_mail"></i> <span>correio</span></a>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="top-header-content">

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Top Header Area End -->

        <!-- Main Header Start -->
        <div class="main-header-area">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between " id="robertoNav">
                      <h1 id="logo">
                        <a href="./index.php">Montañita View</a>
                    							<!-- <img src="./img/logo.png" alt="Brandi"> -->
                    						</h1>
                        <!-- Logo -->
                        <!-- <a class="nav-brand" href="index.html"><img src="./img/core-img/logo.png" alt=""></a> -->

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">
                            <!-- Menu Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>
                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul id="nav">
                                    <li class="active"><a href="./index.php">Iniciar</a></li>
                                    <li><a href="./hoteles.php">Hotéis</a>
                                      <ul class="dropdown">
                                          <li><a href="./hotelbob.php">- Hotel Bob Espoja</a></li>
                                          <li><a href="./complejohotel.php">- Complexo Hoteleiro</a></li>
                                          <li><a href="./buseco.php">- Rodoviária Orgânica</a></li>
                                          <li><a href="./gampling.php">- Gampling</a></li>
                                      </ul>
                                    </li>
                                    <li><a href="./apartamentos.php">Apartamentos</a></li>
                                    <li><a href="./lotes.php">Lotes</a></li>
                                    <li><a href="./eventos.php">Eventos</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Welcome Area End -->

    <!-- About Us Area Start -->
    <section class="inicio">
      <div class="social">
		<ul>
			<li ><a href="https://m.me/ron.sab.121" target="_blank" class="icon-facebook"><img alt="messenger icono" src="../icon/messenger.svg" /></a></li>
      <li class="wasap"><a href="https://api.whatsapp.com/send?phone=5930979754542&text=Hola!%20Quiero%20una%20Reserva!" target="_blank" class="icon-twitter"><img alt="wasap icono" src="../icon/wasap.svg" /></a></li>
    </ul>
	</div>

  <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
      <h2 id="b-letra">Bem-vindo à vista Montañita</h2>
            <h6 id="l-reserva">Reserve Agora</h6>
            <div class="hotel-search-form-area">

              <div class="gallery js-flickity"
                data-flickity-options='{ "autoplay": true }'>
                <div class="gallery-cell"><img src="../img/banner/reserva1.png" alt></div>
                <div class="gallery-cell"><img src="../img/banner/reserva2.png" alt></div>
                <div class="gallery-cell"><img src="../img/banner/reserva3.png" alt></div>
              </div>
              <br>
                    <!-- <div class="hotel-search-form">
                        <form action="#" method="post">
                            <div class="row justify-content-center">
                              <div class="col-6 col-md-2 col-lg-3">
                                  <label for="checkIn">Entrada</label>
                                  <input type="date" class="form-control" id="checkIn" name="checkin-date">
                              </div>
                              <div class="col-6 col-md-2 col-lg-3">
                                  <label for="checkIn">Salida</label>
                                  <input type="date" class="form-control" id="checkIn" name="checkin-date">
                              </div>
                              <div class="col-4 col-md-1">
                                  <label for="room">Cuartos</label>
                                  <select name="room" id="room" class="form-control">
                                      <option value="01">01</option>
                                      <option value="02">02</option>
                                      <option value="03">03</option>
                                      <option value="04">04</option>
                                      <option value="05">05</option>
                                      <option value="06">06</option>
                                  </select>
                              </div>
                              <div class="col-4 col-md-1">
                                  <label for="adults">Adultos</label>
                                  <select name="adults" id="adults" class="form-control">
                                      <option value="01">01</option>
                                      <option value="02">02</option>
                                      <option value="03">03</option>
                                      <option value="04">04</option>
                                      <option value="05">05</option>
                                      <option value="06">06</option>
                                  </select>
                              </div>
                              <div class="col-4 col-md-2 col-lg-1">
                                  <label for="children">Niños</label>
                                  <select name="children" id="children" class="form-control">
                                      <option value="01">01</option>
                                      <option value="02">02</option>
                                      <option value="03">03</option>
                                      <option value="04">04</option>
                                      <option value="05">05</option>
                                      <option value="06">06</option>
                                  </select>
                              </div>

                                <div class="btn-reservar">
                                  <button type="submit" class="form-control btn roberto-btn w-100">Reservar</button>
                                </div>
                            </div>
                        </form>
                    </div> -->

            </div>


            <div class="bannerhotel">
                <img src="../img/home.png" alt="">
            </div>
  </div>



    </section>
    <section class="roberto-about-area">


        <div class="container">
            <div class="row align-items-center">
                <div class="col- col-lg-6">
                    <!-- Section Heading -->
                    <div class="section-heading wow fadeInUp" data-wow-delay="100ms">
                        <!-- <h6>Hotel de Noche</h6> -->
                        <h2 id="titulo-video">Bem-vindo à vista Montañita</h2>
                    </div>
                    <div class="about-us-content mb-100">
                        <h5 class="wow fadeInUp" data-wow-delay="300ms">Somos um complexo turístico único no Equador que busca criar um conceito diferente enquadrado em experiências. Oferecemos aos nossos clientes uma ampla variedade de serviços que variam de hotéis temáticos, rodoviária ecológica com vista panorâmica do mar, gampling que combinam luxo e aventura ao ar livre, até os mais modernos de um complexo hoteleiro com infraestrutura de primeira classe que Eles incluem uma piscina, bares e áreas sociais e de lazer comuns.</h5>

                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="about-us-thumbnail mb-100 wow fadeInUp" data-wow-delay="700ms">
                        <div class="row no-gutters">
                            <div class="col-12">
                                <div class="single-thumb">
                                  <video class="video"  controls autoplay loop muted playsinline>
                                    <source src="../noche.mp4" type="video/mp4">
                                    <source src="../noche.ogg" type="video/ogg">
                                  Your browser does not support the video tag.
                                  </video>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="roberto-rooms-area">
        <div class="rooms-slides owl-carousel">
          <div class="single-room-slide d-flex align-items-center">

            <div class="bannerroom" style="background-image: url(../img/suits/1.jpeg); background-size:cover; ">
              <div class="room-content">
                    <a href="bus-aventura.php"><h2 data-animation="fadeInUp" data-delay="100ms">Ônnibus Aventura</h2></a>


                <br>
                  <h3 data-animation="fadeInUp" data-delay="300ms">400$ <span>/ Dia</span></h3>
              </div>
            </div>


          </div>
          <div class="single-room-slide d-flex align-items-center">
              <div class="bannerroom" style="background-image: url(../img/suits/2.jpeg);background-size:cover;">
              <div class="room-content">
                <a href="bus-granvista.php"><h2 data-animation="fadeInUp" data-delay="100ms">Ônibus Gran Vista</h2></a>

                  <br>
                  <h3 data-animation="fadeInUp" data-delay="300ms">325$ <span>/ Dia</span></h3>
              </div>
                </div>
          </div>

          <div class="single-room-slide d-flex align-items-center">
  <div class="bannerroom" style="background-image: url(../img/suits/3.jpeg);background-size:cover;">
              <div class="room-content">
                <a href="bus-premium.php"><h2 data-animation="fadeInUp" data-delay="100ms">Ônibus Prémio</h2></a>

                  <br>
                  <h3 data-animation="fadeInUp" data-delay="300ms">400$ <span>/ Dia</span></h3>
              </div>
              </div>
          </div>

          <div class="single-room-slide d-flex align-items-center">
  <div class="bannerroom" style="background-image: url(../img/suits/4.jpeg);background-size:cover;">
              <div class="room-content">
                <a href="bus-delaselva.php"><h2 data-animation="fadeInUp" data-delay="100ms">Ônibus na Selva</h2></a>

                  <br>
                  <h3 data-animation="fadeInUp" data-delay="300ms">400$ <span>/ Dia</span></h3>
              </div>
                </div>
          </div>


        </div>
    </section>
    <!-- Our Room Area End -->


    <!-- Blog Area Start -->
    <section class="roberto-blog-area section-padding-100-0">
      <!-- Blog Area Start -->
          <div class="container">
              <div class="row justify-content-center">
                <div class="comentarios">
                <!-- Comments Area -->

                    <div class="comment_area">
                        <h2 >12 Comentario</h2>
                          <!-- <div class="comment"> -->


                          <div class="gallery2 js-flickity"
                            data-flickity-options='{ "autoPlay": true }'>
                            <div class="gallery-cell">
                                <div class="comment-content d-flex justify-content-center">
                                    <div class="comment-author">
                                        <img src="../img/bg-img/40.jpg" alt="author">
                                    </div>
                                    <div class="comment-meta">
                                        <a href="#" class="post-date">5 Ene 2020</a>
                                        <h5>Luis Gonzalo</h5>
                                        <p>Ótimo hotel com uma bela vista.</p>

                                    </div>
                                </div>

                                  </div>
                                  <div class="gallery-cell">
                                <div class="comment-content d-flex justify-content-center">
                                    <div class="comment-author">
                                        <img src="../img/bg-img/41.jpg" alt="author">
                                    </div>
                                    <div class="comment-meta">
                                        <a href="#" class="post-date">5 Ene 2020</a>
                                        <h5>Jonathan Rivera</h5>
                                        <p>Excelente café da manhã e muito variado</p>

                                    </div>
                                </div>

                                </div>


                                <div class="gallery-cell">
                                  <div class="comment-content d-flex justify-content-center">
                                      <div class="comment-author">
                                          <img src="../img/bg-img/54.jpg" alt="author">
                                      </div>
                                      <div class="comment-meta">
                                          <a href="#" class="post-date">5 Ene 2020</a>
                                          <h5>Cindy Moran</h5>
                                          <p>Obrigado por um excelente feriado</p>

                                      </div>
                                  </div>
                                </div>

                                  <div class="gallery-cell">
                                    <div class="comment-content d-flex justify-content-center">
                                        <div class="comment-author">
                                            <img src="../img/bg-img/53.jpg" alt="author">
                                        </div>
                                        <div class="comment-meta">
                                            <a href="#" class="post-date">5 Ene 2020</a>
                                            <h5>Mario Villa</h5>
                                            <p>Definitivamente vou voltar, o melhor hotel do Equador.</p>

                                        </div>
                                    </div>
                                  </div>

                                  <div class="gallery-cell">
                                    <div class="comment-content d-flex justify-content-center">
                                        <div class="comment-author">
                                            <img src="../img/bg-img/55.jpg" alt="author">
                                        </div>
                                        <div class="comment-meta">
                                            <a href="#" class="post-date">4 Ene 2020</a>
                                            <h5>Ceci Leon</h5>
                                            <p>Maravilloso Hotel y excelente servicio.</p>

                                        </div>
                                    </div>
                                  </div>

                                  <div class="gallery-cell">
                                    <div class="comment-content d-flex justify-content-center">
                                        <div class="comment-author">
                                            <img src="../img/bg-img/11.jpg" alt="author">
                                        </div>
                                        <div class="comment-meta">
                                            <a href="#" class="post-date">10 Ene 2020</a>
                                            <h5>Pedro Zambrano</h5>
                                            <p>Gracias por unas excelentes vacaciones!!.</p>

                                        </div>
                                    </div>
                                  </div>

                                  <div class="gallery-cell">
                                    <div class="comment-content d-flex justify-content-center">
                                        <div class="comment-author">
                                            <img src="../img/bg-img/10.jpg" alt="author">
                                        </div>
                                        <div class="comment-meta">
                                            <a href="#" class="post-date">4 Ene 2020</a>
                                            <h5>Leti Alvarez</h5>
                                            <p>Sin duda vovere, el mejor hotel de Ecuador!!.</p>

                                        </div>
                                    </div>
                                  </div>

                                  <div class="gallery-cell">
                                    <div class="comment-content d-flex justify-content-center">
                                        <div class="comment-author">
                                            <img src="../img/bg-img/22.jpg" alt="author">
                                        </div>
                                        <div class="comment-meta">
                                            <a href="#" class="post-date">2 Ene 2020</a>
                                            <h5>Juan Alvarado</h5>
                                            <p>Gran Hotel con una hermosa vistar!!.</p>

                                        </div>
                                    </div>
                                  </div>

                                  <div class="gallery-cell">
                                    <div class="comment-content d-flex justify-content-center">
                                        <div class="comment-author">
                                            <img src="../img/bg-img/24.jpg" alt="author">
                                        </div>
                                        <div class="comment-meta">
                                            <a href="#" class="post-date">7 Ene 2020</a>
                                            <h5>Hector Paz</h5>
                                            <p>Excelente desayuno y muy variado.</p>

                                        </div>
                                    </div>
                                  </div>

                                  <div class="gallery-cell">
                                    <div class="comment-content d-flex justify-content-center">
                                        <div class="comment-author">
                                            <img src="../img/bg-img/14.jpg" alt="author">
                                        </div>
                                        <div class="comment-meta">
                                            <a href="#" class="post-date">6 Ene 2020</a>
                                            <h5>Maria Castro</h5>
                                            <p>Excelente desayuno y muy variado.</p>

                                        </div>
                                    </div>
                                  </div>

                                  <div class="gallery-cell">
                                    <div class="comment-content d-flex justify-content-center">
                                        <div class="comment-author">
                                            <img src="../img/bg-img/21.jpg" alt="author">
                                        </div>
                                        <div class="comment-meta">
                                            <a href="#" class="post-date">11 Ene 2020</a>
                                            <h5>Luis Campos</h5>
                                            <p>Increible Hotel.</p>

                                        </div>
                                    </div>
                                  </div>

                                  <div class="gallery-cell">
                                    <div class="comment-content d-flex justify-content-center">
                                        <div class="comment-author">
                                            <img src="../img/bg-img/32.jpg" alt="author">
                                        </div>
                                        <div class="comment-meta">
                                            <a href="#" class="post-date">1 Ene 2020</a>
                                            <h5>Walter Ruiz</h5>
                                            <p>Sin duda volveré, el mejor hotel de Ecuador.</p>

                                        </div>
                                    </div>
                                  </div>
                          </div>

  <!-- </div> -->
                    </div>
                </div>

                  <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                      <div class="roberto-sidebar-area pl-md-4">
                      </div>
                  </div>
              </div>
          </div>
      <!-- Blog Area End -->
    </section>


    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">

            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="container">
            <div class="copywrite-content">
                <div class="row align-items-center">
                  <div class="col-12">
                    <!-- <div class="col-12"> -->

                      <a target="_blank" href="https://www.booking.com"><i aria-hidden="true"><img id="booking" src="../img/logos/logo-booking.png" alt=""></i></a>
                      <a target="_blank" href="https://www.despegar.com"><i aria-hidden="true"><img id="despegar" src="../img/logos/despegar.png" alt=""></i></a>
                      <a target="_blank" href="https://www.expedia.com"><i aria-hidden="true"><img id="expedia" src="../img/logos/expedia.png" alt=""></i></a>
                      <a target="_blank" href="https://es.airbnb.com/"><i aria-hidden="true"><img id="airbnb" src="../img/logos/airbnb.png" alt=""></i></a>

                    <!-- </div> -->
                      <!-- </br> -->
                      <!-- <div class="booking">

                      </div> -->
                      <a target="_blank" href="https://www.grupo3i.com"><i  aria-hidden="true"><img id="igrupo" src="../img/logos/grupo3i.png" alt=""></i></a>



                        <!-- Copywrite Text -->
                        <div class="copywrite-text">

                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Todos os direitos reservados grupo3i.com &copy;<script>document.write(new Date().getFullYear());</script> <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- Social Info -->

<div class="politicas">
  <a  target="_blank" href="politicas.php">Políticas e Privacidade</a>

</div>
                            <div class="social-info">
                              <div class="col-12">
                                <h6>Siga-nos no:</h6>
                                </div>

                                <div class="col-12 ">
                                  <a target="_blank" href="https://www.facebook.com/montanitaview.ec/?ref=br_rs"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                  <a target="_blank" href="https://www.instagram.com/montanitaview.ec/?hl=es-la"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                  <a target="_blank" href="https://www.linkedin.com/company/grupo-3i/about/?viewAsMember=true"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->
    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <!-- Random comentarios -->
    <script>
    // var ol = document.getElementById('comentarios');
    var ol = document.getElementById('comentarios');
    var li = document.getElementById('comentarios').children;
    var c;
    c = Math.random() * 12 | 1;
    // console.log(c);
    for ( i =0; i < li.length; i++) {
    if (i==c){
      ol.appendChild(ol.children[Math.random() * c | 0]);
    }
      li[i].style.display='none';
    }
    </script>
    <script src="../js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="../js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="../js/default-assets/active.js"></script>

</body>

</html>
