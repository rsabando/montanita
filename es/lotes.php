<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title -->
    <title>Montañita View</title>
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script> -->

    <!-- <script type="text/javascript" href="http://code.jquery.com/jquery-1.6.2.min.js">  </script> -->
    <!-- <script type="text/javascript" href="http://www.outsharked.com/scripts/jquery.imagemapster.js"> -->

    </script>
    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.png">

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

        <!-- Top Header Area Start -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">

                    <div class="col-6">
                        <div class="top-header-content">
                            <a href="#"><i class="icon_phone"></i> <span>Telefono</span></a>
                            <a href="#"><i class="icon_mail"></i> <span>Correo</span></a>
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
        <div class="social">
        <ul>
        <li ><a href="https://m.me/ron.sab.121" target="_blank" class="icon-facebook"><img alt="messenger icono" src="../icon/messenger.svg" /></a></li>
        <li class="wasap"><a href="https://api.whatsapp.com/send?phone=5930979754542&text=Hola!%20Quiero%20una%20Reserva!" target="_blank" class="icon-twitter"><img alt="wasap icono" src="../icon/wasap.svg" /></a></li>
        </ul>
        </div>
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
                                  <li><a href="./index.php">Inicio</a></li>
                                  <li><a href="./hoteles.php">Hoteles</a>
                                    <ul class="dropdown">
                                        <li><a href="./hotelbob.php">- Hotel Bob Esponja</a></li>
                                        <li><a href="./complejohotel.php">- Complejo Hotelero</a></li>
                                        <li><a href="./buseco.php">- Bus Ecológico</a></li>
                                        <li><a href="./gampling.php">- Gampling</a></li>
                                    </ul>
                                  </li>
                                  <li><a href="./apartamentos.php">Apartamentos</a></li>
                                  <li class="active"><a href="./lotes.php">Lotes</a></li>
                                  <li><a href="./eventos.php">Eventos</a></li>
                                  <li><a href="../admin/login.php">Admin</a></li>
                              </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url(../img/home3.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-end">
                <div class="col-12">
                    <div class="breadcrumb-content d-flex align-items-center justify-content-between pb-5">
                        <h2 class="room-title">Lotes</h2>
                        <!-- <h2 class="room-price">$180 <span>/ Per Night</span></h2> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Rooms Area Start -->
    <div class="roberto-rooms-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <!-- Single Room Details Area -->
                    <div class="single-room-details-area mb-50">
                        <!-- Room Thumbnail Slides -->


                        <!-- <h6 class="demo" id="demo"></h6> -->
                        <!-- <p id="parrafo"></p>

                        <br> -->
                        <div style="width:100%;">
                          <div class="cont">
                            <div id="popup">
                              <h6 id="titulo"></h6>
                              <a href="lotes.php"><img id="imgpop" alt=""></a>

                              <p id="parrafo"></p>
                            </div>
                          </div>


                          <h2 style="text-align:center;">Montañita View</h2>
                          <br>

          <img onmousemove="showCoords(event)"  id="img_ID" src="../img/lote1.jpg" usemap="#map" border="0" width="100%" alt=""/>
          </div>
          <map id="map_ID" name="map">
            <!-- lotes superior -->
          <area id="area1" onmouseenter="lote(event,'a-1')" shape="poly" coords="45,25 ,48,27 ,55,25 ,54,23.5, 50,23.5" href="javascript:;" alt="lote 1" title="A-1"/>
          <area onmouseenter="lote(event,'a-2')" shape="poly" coords="57,24 ,58,25.5 ,60,25.5 ,60,24" href="javascript:;" alt="lote 2" title="A-2"/>
          <area onmouseenter="lote(event,'a-3')" shape="poly" coords="60.2,24, 60.2,25.5 ,62,25.5 ,61.5,24" href="javascript:;" alt="lote 3" title="A-3"/>
          <area onmouseenter="lote(event,'a-4')" shape="poly" coords="61.7,24 ,62.2,25.5 ,63.5,25 ,63,23.5" href="javascript:;" alt="lote 4" title="A-4"/>
          <area onmouseenter="lote(event,'a-5')" shape="poly" coords="63.2,23.5 ,63.7,25 ,65.7,24.5 ,64.5,22.3" href="javascript:;" alt="lote 5" title="A-5"/>
          <area onmouseenter="lote(event,'a-6')" shape="poly" coords="64.5,22.3 ,65.9,24.5 ,67.5,23.9 ,65.9,21.5" href="javascript:;" alt="lote 6" title="A-6"/>
          <area onmouseenter="lote(event,'a-7')" shape="poly" coords="66.1,21.5 ,67.4,23.6 ,69.1,23 ,67.4,20.3" href="javascript:;" alt="lote 7" title="A-7"/>
          <area onmouseenter="lote(event,'a-8')" shape="poly" coords="67.4,20.3 ,69,22.9 ,70.4,21.9 ,68.5,18.9" href="javascript:;" alt="lote 8" title="A-8"/>
          <area onmouseenter="lote(event,'a-9')" shape="poly" coords="68.5,18.9 ,70.4,21.9 ,72,21 ,70.3,18.2" href="javascript:;" alt="lote 9" title="A-9"/>
          <area onmouseenter="lote(event,'a-10')" shape="poly" coords="70.3,18.2 ,72,21 ,73.5,20.5 ,71.5,17.5" href="javascript:;" alt="lote 10" title="A-10"/>
          <area onmouseenter="lote(event,'a-11')" shape="poly" coords="71.7,17.3 ,73.5,20.2 ,76,18.9" href="javascript:;" alt="lote 11" title="A-11"/>
          <area onmouseenter="lote(event,'a-12')" shape="poly" coords="72.5,16.7 ,77.4,19 ,76.3,15.2" href="javascript:;" alt="lote 12" title="A-12"/>
          <area onmouseenter="lote(event,'a-13')" shape="poly" coords="76.3,15.2 ,77.2,18.6 ,79.2,18.1 ,78.7,15" href="javascript:;" alt="lote 13" title="A-13"/>
          <area onmouseenter="lote(event,'a-14')" shape="poly" coords="78.7,14.8 ,79.2,18.1 ,80.7,17.5 ,81.2,14.5" href="javascript:;" alt="lote 14" title="A-14"/>
          <area onmouseenter="lote(event,'a-15')" shape="poly" coords="81.2,14.5 ,80.9,17.7 ,82.5,18 ,83.3,14.5" href="javascript:;" alt="lote 15" title="A-15"/>
          <area onmouseenter="lote(event,'a-16')" shape="poly" coords="83.3,14.5 ,82.5,18 ,84,18.6 ,85.3,14.5" href="javascript:;" alt="lote 16" title="A-16"/>
          <area onmouseenter="lote(event,'a-17')" shape="poly" coords="85.3,14.5 ,84,18.6 ,85.7,18.6 ,87.4,15" href="javascript:;" alt="lote 17" title="A-17"/>
          <area onmouseenter="lote(event,'a-18')" shape="poly" coords="87.4,15 ,85.7,19 ,87.5,19.5 ,89.2,16" href="javascript:;" alt="lote 18" title="A-18"/>
          <area onmouseenter="lote(event,'a-19')" shape="poly" coords="89.2,16 ,87.5,19.5 ,89,20 ,90.6,16.7" href="javascript:;" alt="lote 19" title="A-19"/>
          <area onmouseenter="lote(event,'a-20')" shape="poly" coords="90.6,16.7 ,89,20 ,90.7,20.6 ,92,16.9" href="javascript:;" alt="lote 20" title="A-20"/>
          <area onmouseenter="lote(event,'a-21')" shape="poly" coords="92,16.9 ,90.7,20.6 ,92.1,20.7 ,93.4,17.7" href="javascript:;" alt="lote 21" title="A-21"/>
          <area onmouseenter="lote(event,'a-22')" shape="poly" coords="93.4,17.7 ,92.1,20.7 ,94.6,20.7 ,95,19.5" href="javascript:;" alt="lote 22" title="A-22"/>
          <area onmouseenter="lote(event,'a-23')" shape="poly" coords="95,19.5 ,94.6,20.7 ,96,20.7 ,96.5,19.9" href="javascript:;" alt="lote 23" title="A-23"/>
          <area onmouseenter="lote(event,'a-24')" shape="poly" coords="97.2,19.7 ,98,20.7 ,98.9,24.5 ,105.6,25.6 ,105.7,23" href="javascript:;" alt="lote 24" title="A-24"/>
          <area onmouseenter="lote(event,'a-25')" shape="poly" coords="105.7,23 ,105.6,25.6 ,107.6,25.6 ,107.6,23.2" href="javascript:;" alt="lote 25" title="A-25"/>
          <area onmouseenter="lote(event,'a-26')" shape="poly" coords="107.6,23.5 ,107.6,25.6 ,110.4,25.7 ,110,23.8" href="javascript:;" alt="lote 26" title="A-26"/>
          <area onmouseenter="lote(event,'a-27')" shape="poly" coords="110,23.8 ,110.4,25.7 ,112.6,25.2 ,111.9,23.3" href="javascript:;" alt="lote 27" title="A-27"/>
          <area onmouseenter="lote(event,'a-28')" shape="poly" coords="111.9,23.3 ,112.6,25.2 ,114.7,24.6 ,113.5,22.5" href="javascript:;" alt="lote 28" title="A-28"/>
          <area onmouseenter="lote(event,'b-1')" shape="poly" coords="113.5,22.5 ,114.7,24.6 ,116.5,23 ,115.3,21.6" href="javascript:;" alt="lote 29" title="B-1"/>
          <area onmouseenter="lote(event,'b-2')" shape="poly" coords="115.3,21.6 ,116.5,23 ,117.5,21.4 ,116.6,20.4" href="javascript:;" alt="lote 30" title="B-2"/>
          <area onmouseenter="lote(event,'b-3')" shape="poly" coords="116.6,20.4 ,117.5,21.4 ,119,20.2 ,117.9,19" href="javascript:;" alt="lote 31" title="B-3"/>
          <area onmouseenter="lote(event,'b-4')" shape="poly" coords="117.9,19 ,119,20.2 ,120.2,19.8 ,119.8,18" href="javascript:;" alt="lote 32" title="B-4"/>
          <area onmouseenter="lote(event,'b-5')" shape="poly" coords="119.8,18 ,120.2,19.8 ,121.8,19.6 ,122,18" href="javascript:;" alt="lote 33" title="B-5"/>
          <area onmouseenter="lote(event,'b-6')" shape="poly" coords="122,18 ,121.8,19.1 ,123.2,19.8 ,125.3,18.7, 123,17.9" href="javascript:;" alt="lote 34" title="B-6"/>
          <area onmouseenter="lote(event,'b-7')" shape="poly" coords="125.3,18.7 ,123.2,19.8 ,123,20.6 ,125.2,20.9 ,126.3,20.6" href="javascript:;" alt="lote 35" title="B-7"/>
          <area onmouseenter="lote(event,'b-8')" shape="poly" coords="98.9,25.8 ,96,31 ,93.7,32.3 ,94.5,35.2 ,98.7,34.5 ,100.7,28.3 ,105.9,30.3 ,106,26.6" href="javascript:;" alt="lote 36" title="B-8"/>
          <!-- lotes inferior -->
          <area onmouseenter="lote(event,'b-9')" shape="poly" coords="93.7,32.3, 94.5,35.2 ,92.3,35.9, 92.4,32.5" href="javascript:;" alt="lote 37" title="B-9"/>
          <area onmouseenter="lote(event,'b-10')" shape="poly" coords="92.4,32.5 ,92.3,35.9 ,90.4,35, 90.5,32.5" href="javascript:;" alt="lote 38" title="B-10"/>
          <area onmouseenter="lote(event,'b-11')" shape="poly" coords="90.5,32.5 ,90.4,35 ,88.1,34.4, 88.1,32.1" href="javascript:;" alt="lote 39" title="B-11"/>
          <area onmouseenter="lote(event,'b-12')" shape="poly" coords="88.1,32.1 ,88.1,34.4 ,86.1,34.5, 85.8,32.1" href="javascript:;" alt="lote 40" title="B-12"/>
          <area onmouseenter="lote(event,'c-1')" shape="poly" coords="85.8,32.1 ,86,34.5 ,84,35.3 ,83.6,32.2" href="javascript:;" alt="lote 41" title="C-1"/>
          <area onmouseenter="lote(event,'c-2')" shape="poly" coords="83.6,32.2 ,84,35.3 ,82,35.3 ,81.1,33" href="javascript:;" alt="lote 42" title="C-2"/>
          <area onmouseenter="lote(event,'c-3')" shape="poly" coords="81.1,33 ,82,35.3 ,80,36 ,79.1,33.7" href="javascript:;" alt="lote 43" title="C-3"/>
          <area onmouseenter="lote(event,'c-4')" shape="poly" coords="79.1,33.7 ,80,36 ,77.5,36.3 ,76.7,34.7" href="javascript:;" alt="lote 44" title="C-4"/>
          <area onmouseenter="lote(event,'c-5')" shape="poly" coords="76.7,34.7 ,77.5,36.3 ,74.5,37.5 ,73.8,36" href="javascript:;" alt="lote 45" title="C-5"/>
          <area onmouseenter="lote(event,'c-6')" shape="poly" coords="73.8,36 ,74.5,37.5 ,72.3,38.9 ,71.3,37" href="javascript:;" alt="lote 46" title="C-6"/>
          <area onmouseenter="lote(event,'c-7')" shape="poly" coords="71.3,37 ,72.3,38.9 ,70.2,39.9 ,68.8,38" href="javascript:;" alt="lote 47" title="C-7"/>
          <area onmouseenter="lote(event,'c-8')" shape="poly" coords="66.6,38.9 ,67.8,40.4 ,64.4,40.8 ,63.9,39.8" href="javascript:;" alt="lote 48" title="C-8"/>
          <area onmouseenter="lote(event,'c-9')" shape="poly" coords="63.9,39.8 ,64.4,40.8 ,62,42.9 ,60.8,40.8" href="javascript:;" alt="lote 49" title="C-9"/>
          <area onmouseenter="lote(event,'c-10')" shape="poly" coords="60.8,40.8 ,62,42.9 ,60,44 ,58.7,41.9" href="javascript:;" alt="lote 50" title="C-10"/>
          <area onmouseenter="lote(event,'c-11')" shape="poly" coords="58.7,41.9 ,60,44 ,58.6,45.5 ,57,42.8" href="javascript:;" alt="lote 51" title="C-11"/>
          <area onmouseenter="lote(event,'c-12')" shape="poly" coords="57,42.8 ,58.6,45.5 ,56.6,46.5 ,55.4,43.8" href="javascript:;" alt="lote 52" title="C-12"/>
          <area onmouseenter="lote(event,'d-1')" shape="poly" coords="55.4,43.8 ,56.6,46.5 ,53.4,47.7" href="javascript:;" alt="lote 53" title="D-1"/>
          <area onmouseenter="lote(event,'d-2')" shape="poly" coords="48.4,43.6 ,49.7,46.1 ,52.2,48.1 ,47,47.9 ,46.5,48 ,47.5,46.7" href="javascript:;" alt="lote 54" title="D-2"/>
          <area onmouseenter="lote(event,'d-3')" shape="poly" coords="47.3,41, 48.1,41.8 ,46.8,44.4 ,46.6,45.7 ,45.7,46.8 ,43.7,40.8 ,44.5,41.4" href="javascript:;" alt="lote 55" title="D-3"/>
          <area onmouseenter="lote(event,'d-4')" shape="poly" coords="43.8,39.5, 46,38.3 ,47,40.4 ,44.8,40.7" href="javascript:;" alt="lote 56" title="D-4"/>
          <area onmouseenter="lote(event,'d-5')" shape="poly" coords="46,38.3, 43.8,39.5 ,42.7,38.2 ,44.9,37" href="javascript:;" alt="lote 57" title="D-5"/>
          <area onmouseenter="lote(event,'d-6')" shape="poly" coords="44.9,37, 42.7,38.2 ,41.5,36.8 ,44,35.4" href="javascript:;" alt="lote 58" title="D-6"/>
          <area onmouseenter="lote(event,'e-1')" shape="poly" coords="44,35.4, 41.5,36.8 ,40.3,35.5 ,43.4,34.2" href="javascript:;" alt="lote 59" title="E-1"/>
          <area onmouseenter="lote(event,'e-2')" shape="poly" coords="43.4,34.2, 40.3,35.5 ,39.8,34.6 ,41.4,33.2 ,43.4,33.8" href="javascript:;" alt="lote 60" title="E-2"/>
          <area onmouseenter="lote(event,'e-3')" shape="poly" coords="43.4,33.8, 41.4,33.2 ,42.4,30.6 ,44.2,31.7 ,43.6,32.3" href="javascript:;" alt="lote 61" title="E-3"/>
          <area onmouseenter="lote(event,'e-4')" shape="poly" coords="44.2,31.7, 42.4,30.6 ,43.2,28.4 ,45.2,29.3" href="javascript:;" alt="lote 62" title="E-4"/>
          <area onmouseenter="lote(event,'e-5')" shape="poly" coords="45.2,29.3, 43.2,28.4 ,44.3,26.1 ,46.3,27.3" href="javascript:;" alt="lote 63" title="E-5"/>
          <area onmouseenter="lote(event,'e-6')" shape="poly" coords="48.7,32.3, 46.8,34.2 ,45,32.4 ,46.1,29.7" href="javascript:;" alt="lote 64" title="E-6"/>
          <area onmouseenter="lote(event,'e-7')" shape="poly" coords="48.7,32.3 ,46.8,34.2 ,49.3,36.9 ,50.1,34.6" href="javascript:;" alt="lote 65" title="E-7"/>
          <area onmouseenter="lote(event,'e-8')" shape="poly" coords="50.2,33 ,48.3,27.4 ,50.7,27 ,51.6,31.6" href="javascript:;" alt="lote 66" title="E-8"/>
          <area onmouseenter="lote(event,'e-9')" shape="poly" coords="51.6,31.6 ,50.7,27 ,52.7,26.4 ,53.2,31" href="javascript:;" alt="lote 67" title="E-9"/>
          <area onmouseenter="lote(event,'e-10')" shape="poly" coords="55.7,22.9 ,55,21.6 ,58,20.8 ,58.7,22.9" href="javascript:;" alt="lote 68" title="E-10"/>
          <area onmouseenter="lote(event,'f-1')" shape="poly" coords="58.7,22.9 ,58,20.8 ,60.3,21.2 ,60.5,23.2" href="javascript:;" alt="lote 69" title="F-1"/>
          <area onmouseenter="lote(event,'f-2')" shape="poly" coords="60.5,23.2 ,60.3,21.2 ,61.9,21.2 ,61.8,23.2" href="javascript:;" alt="lote 70" title="F-2"/>
          <area onmouseenter="lote(event,'f-3')" shape="poly" coords="61.8,23.2 ,61.9,21.2 ,64.9,21.2 ,63.3,22.4" href="javascript:;" alt="lote 71" title="F-3"/>
          <area onmouseenter="lote(event,'f-4')" shape="poly" coords="57,30.7 ,55.6,34.3 ,58,34.5 ,58.6,33.5 ,58.5,30.8" href="javascript:;" alt="lote 72" title="F-4"/>
          <area onmouseenter="lote(event,'f-5')" shape="poly" coords="58.5,30.8 ,58.6,33.5 ,59.5,32.9 ,61.7,33 ,60,30.5" href="javascript:;" alt="lote 73" title="F-5"/>
          <area onmouseenter="lote(event,'f-6')" shape="poly" coords="62,30 ,63.7,31.9 ,66.3,30.5 ,65.5,30" href="javascript:;" alt="lote 74" title="F-6"/>
          <area onmouseenter="lote(event,'f-7')" shape="poly" coords="59,26.4 ,61.7,29.5 ,63.4,29.2 ,62.7,26.3" href="javascript:;" alt="lote 75" title="F-7"/>
          <area onmouseenter="lote(event,'g-1')" shape="poly" coords="62.7,26.4 ,63.5,29.3 ,66.4,28.8 ,65.1,25.8" href="javascript:;" alt="lote 76" title="G-1"/>
          <area onmouseenter="lote(event,'g-2')" shape="poly" coords="68.3,24.4 ,70.3,27.5 ,71.7,27 ,69.6,23.5" href="javascript:;" alt="lote 77" title="G-2"/>
          <area onmouseenter="lote(event,'g-3')" shape="poly" coords="69.6,23.5 ,71.7,27 ,73.3,26.3 ,71.1,22.5" href="javascript:;" alt="lote 78" title="G-3"/>
          <area onmouseenter="lote(event,'g-4')" shape="poly" coords="73.2,21.3 ,75.2,25.1 ,76.4,24 ,75.1,20.6" href="javascript:;" alt="lote 79" title="G-4"/>
          <area onmouseenter="lote(event,'g-5')" shape="poly" coords="77.1,19.5 ,78.3,24 ,80.2,23.5 ,80.8,19" href="javascript:;" alt="lote 80" title="G-5"/>
          <area onmouseenter="lote(event,'g-6')" shape="poly" coords="80.8,19 ,80.2,23.5 ,82.5,23 ,82.6,19.2" href="javascript:;" alt="lote 81" title="G-6"/>
          <area onmouseenter="lote(event,'g-7')" shape="poly" coords="82.6,19.2 ,82.5,23 ,84.3,22.4 ,85.7,19.7" href="javascript:;" alt="lote 82" title="G-7"/>
          <area onmouseenter="lote(event,'g-8')" shape="poly" coords="87,20 ,85.4,22.9 ,87.5,24.2 ,90.3,22.6 ,90.7,21.7 ,89.5,21.3" href="javascript:;" alt="lote 83" title="G-8"/>
          <area onmouseenter="lote(event,'g-9')" shape="poly" coords="92.2,21.7 ,97,21.7 ,98,24.5 ,91.9,24.2" href="javascript:;" alt="lote 84" title="G-9"/>
          <area onmouseenter="lote(event,'h-1')" shape="poly" coords="91.9,24.2 ,97.8,24.5 ,97.4,25.3 ,97.8,25.5  ,97.4,27 ,91.5,25.3" href="javascript:;" alt="lote 85" title="H-1"/>
          <area onmouseenter="lote(event,'h-2')" shape="poly" coords="91.5,25.3 ,97.4,27 ,95.8,29.5 ,91.1,26.5" href="javascript:;" alt="lote 86" title="H-2"/>
          <area onmouseenter="lote(event,'h-3')" shape="poly" coords="90.6,27.4 ,94.5,31.2 ,93,31.6 ,91.4,31.5 ,88.5,27.8" href="javascript:;" alt="lote 87" title="H-3"/>
          <area onmouseenter="lote(event,'h-4')" shape="poly" coords="86.4,28.3 ,88.4,31.2 ,85.5,31.2 ,84.4,28.4" href="javascript:;" alt="lote 88" title="H-4"/>
          <area onmouseenter="lote(event,'h-5')" shape="poly" coords="84.4,28.4 ,85.5,31.3 ,82.8,31.3 ,82.3,28.6" href="javascript:;" alt="lote 89" title="H-5"/>
          <area onmouseenter="lote(event,'h-6')" shape="poly" coords="82.3,28.6 ,82.8,31.4 ,80.4,32.2 ,79.3,29" href="javascript:;" alt="lote 90" title="H-6"/>
          <area onmouseenter="lote(event,'h-7')" shape="poly" coords="79.3,29 ,80.4,32.2 ,78.6,32.8 ,77,29 ,78.2,29.7 ,78.8,29.5" href="javascript:;" alt="lote 91" title="H-7"/>
          <area onmouseenter="lote(event,'h-8')" shape="poly" coords="77,29 ,78.6,32.8 ,77.2,33.5 ,75.2,29.7" href="javascript:;" alt="lote 92" title="H-8"/>
          <area onmouseenter="lote(event,'h-9')" shape="poly" coords="75.2,29.7 ,77.2,33.5 ,75.6,34.2 ,73.7,30.2" href="javascript:;" alt="lote 93" title="H-9"/>
          <area onmouseenter="lote(event,'h-10')" shape="poly" coords="73.7,30.2 ,75.6,34.2 ,74,34.9 ,72.2,30.9 ,72.9,30.4" href="javascript:;" alt="lote 94" title="H-10"/>
          <area onmouseenter="lote(event,'h-11')" shape="poly" coords="72.2,30.9 ,74,34.9 ,72.5,35.5 ,70.7,31.7" href="javascript:;" alt="lote 95" title="H-11"/>
          <area onmouseenter="lote(event,'h-12')" shape="poly" coords="70.7,31.7 ,72.5,35.5 ,70.8,36.1 ,69.2,32.6" href="javascript:;" alt="lote 96" title="H-12"/>
          <area onmouseenter="lote(event,'h-13')" shape="poly" coords="69.2,32.6 ,70.8,36.1 ,69.5,36.7 ,67.6,33.5" href="javascript:;" alt="lote 97" title="H-13"/>
          <area onmouseenter="lote(event,'h-14')" shape="poly" coords="67.6,33.5 ,69.5,36.7 ,68.2,37 ,65.9,34.3" href="javascript:;" alt="lote 98" title="H-14"/>
          <area onmouseenter="lote(event,'h-15')" shape="poly" coords="63.5,35.2 ,65.8,38 ,63.5,38.8 ,61.9,35.7" href="javascript:;" alt="lote 99" title="H-15"/>
          <area onmouseenter="lote(event,'h-16')" shape="poly" coords="61.9,35.7 ,63.5,38.8 ,61.5,39.5 ,60.2,36.3" href="javascript:;" alt="lote 100" title="H-16"/>
          <area onmouseenter="lote(event,'i-1')" shape="poly" coords="60.2,36.3 ,61.5,39.5 ,59.7,40.2 ,58.2,36.8" href="javascript:;" alt="lote 101" title="I-1"/>
          <area onmouseenter="lote(event,'i-2')" shape="poly" coords="58.2,36.8 ,59.7,40.5 ,58.3,41.2 ,56.4,37.3" href="javascript:;" alt="lote 102" title="I-2"/>
          <area onmouseenter="lote(event,'i-3')" shape="poly" coords="56.4,37.3 ,58.3,41.2 ,56.8,42 ,54.6,37.9" href="javascript:;" alt="lote 103" title="I-3"/>
          <area onmouseenter="lote(event,'i-4')" shape="poly" coords="54.6,37.9 ,56.8,42 ,55,42.9 ,53,39.5" href="javascript:;" alt="lote 103" title="I-4"/>
          <area onmouseenter="lote(event,'i-5')" shape="poly" coords="53,39.5 ,55,42.9 ,54,44 ,51.3,41.2" href="javascript:;" alt="lote 104" title="I-5"/>
          <area onmouseenter="lote(event,'i-6')" shape="poly" coords="51.3,41.2 ,54,44 ,53.7,45 ,49.6,43.7" href="javascript:;" alt="lote 104" title="I-6"/>
          <area onmouseenter="lote(event,'i-7')" shape="poly" coords="49.6,43.7 ,53.7,45 ,53.6,46 ,52.5,46.4 ,50.8,45.9 ,50,44.7" href="javascript:;" alt="lote 105" title="I-7"/>



          <!-- <area onclick="lote4(event)" shape="rect" coords="120,50,89,68" href="javascript:;" alt="lote 4" title="Lote 4" /> -->



          </map>
  <br>

                        <p>Conocida como una de las playas más hermosas y turísticas de la Costa de Ecuador, exclusivo condominio con vista frente al mar azul, sol radiante todo el año, y áreas verdes que ofrecen armonía y tranquilidad con el medio ambiente, se ofrecen 7 lotes con 108 solares que van desde 125 m² hasta 9185 m². Todos los lotes están independizados, lotizados y con partida inscrita en Registros Públicos. Gracias a su excelente ubicación con cielos despejados, sol radiante con excelentes atardeceres y playas cálidas, la zona es considerada como un paraíso recreacional, deportivo y con los mejores servicios incluidos todo el año.</p>

                          <h4>Revalorización Diaria</h4>
                        <p>Al estar ubicado en una zona consolidada y de rápido desarrollo, el valor del terreno aumenta a diario. ¡Invierte hoy y gana mañana!.</p>

                          <h4>Excelente Ubicación</h4>
                          <p>La urbanización privada está ubicada en unas de las mejores zonas turísticas de Manglaralto en la provincia de Santa Elena, a 5 minutos del centro de Montañita, donde se encuentra tiendas, restaurantes, la mejor vida nocturna, entre otros.</p>

                          <h4>Proyecto completo</h4>
                          <p>El proyecto se entrega con todo lo necesario: servicios completos, 51 883 m² de calles, 44 569 m² de áreas verdes, 13 398 m² de equipamiento urbano, cercanía a la playa y más.</p>
                    </div>

                    <div class="room-service mb-50">
                      <img src="../img/tabla1.png" alt="">
                      <br>
                      <br>
                      <img src="../img/tabla2.png" alt="">
                      <br>
                      <br>
                      <img src="../img/tabla3.png" alt="">
                      <br>
                      <br>
                      <img src="../img/tabla4.png" alt="">


                      <!-- <table style="width:50%; text-align:center;">
                      <tr>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Age</th>
                      </tr>
                      <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                      </tr>
                      <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                      </tr>
                      </table> -->

                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- Rooms Area End -->

    <!-- Partner Area End -->

    <!-- Footer Area Start -->
    <footer class="footer-area section-padding-80-0">
        <!-- Main Footer Area -->

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
                    <br>
                    <!-- <div class="booking">

                    </div> -->
                    <a target="_blank" href="https://www.grupo3i.com"><i  aria-hidden="true"><img id="igrupo" src="../img/logos/grupo3i.png" alt=""></i></a>



                      <!-- Copywrite Text -->
                      <div class="copywrite-text">

                          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Todos los Derechos Reservados grupo3i.com &copy;<script>document.write(new Date().getFullYear());</script> <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                      </div>
                  </div>
                  <div class="col-12">
                      <!-- Social Info -->

<div class="politicas">
<a  target="_blank" href="politicas.php">Políticas y Privacidad</a>

</div>
                        <div class="social-info">
                          <div class="col-12">
                            <h6>Síguenos en:</h6>
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
    <script>
    function showCoords(event) {
      var x = event.clientX;
      var y = event.clientY;
      // if (y > 450){
        document.getElementById("popup").style.display = 'none';
        // document.getElementById("popup2").style.display = 'none';
        // document.getElementById("popup3").style.display = 'none';
        // document.getElementById("popup4").style.display = 'none';
      // }

      // if (x == 927 && y 385) {
      //         var coords = "lote1"
      //     }
      // var coords = "lote1";
      // var coords = "X coords: " + x + ", Y coords: " + y;
      // document.getElementById("demo").innerHTML = coords;
    }
    </script>



    <script src="../js/lotes.js"></script>

    <!-- **** All JS Files ***** -->
    <!-- jQuery 2.2.4 -->
    <script src="../js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="../js/popper.min.js"></script>
    <!-- Bootstrap -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- All Plugins -->
    <script src="../js/roberto.bundle.js"></script>
    <!-- Active -->
    <script src="../js/default-assets/active.js"></script>

    <!-- <script src="../js/jQuery-rwdImageMaps-master/jquery.rwdImageMaps.min.js"></script> -->

    <script>
//     var basic_opts = {
//     mapKey: 'state'
// };
//
// var initial_opts = $.extend({},basic_opts,
//     {
//         staticState: true,
//         fill: false,
//         stroke: true,
//         strokeWidth: 2,
//         strokeColor: 'ff0000'
//     });
//
// $('img').mapster(initial_opts)
//     .mapster('set',true,'CA', {
//         fill: true,
//         fillColor: '00ff00'
//     })
//     .mapster('snapshot')
//     .mapster('rebind',basic_opts);


    </script>

</body>

</html>
