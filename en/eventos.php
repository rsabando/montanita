<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>Montañita View</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/core-img/favicon.png">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- Stylesheet -->
    <link rel="stylesheet" href="../style.css">

    <link rel="stylesheet" href="../css/calendario.css">
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
                                  <li><a href="./lotes.php">Lotes</a></li>
                                  <li class="active"><a href="./fiestas.php">Events</a></li>
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
                        <h2 class="room-title">Fiestas</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div  class="roberto-rooms-area section-padding-100-0">
        <div class="container">
          <h2 style="text-align:center;">Fiestas en Montañita View</h2>

            <div class="row">


                    <div id="popupfiesta">
                      <img src="../img/face-banner.jpg" alt="">
                        <p id="parrafo"></p>
                    </div>

                    <div id="popupfiesta2">
                      <img src="../img/face-banner.jpg" alt="">
                      <h2 id="titulo2"></h2>
                        <p id="parrafo2"></p>
                    </div>
                    <div id="popupfiesta3">
                      <img src="../img/face-banner.jpg" alt="">

                      <h2 id="titulo3"></h2>
                        <p id="parrafo3"></p>
                    </div>

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
                                          <div onmousemove="detectmove(event)" class="container-cal">
                                                                          <div class="calendar">
                                                                          <div class="front">
                                                                          <div class="current-date">
                                                                          <!-- <h1>Friday 15th</h1> -->
                                                                          <h1>Enero 2020</h1>
                                                                          </div>

                                                                          <div class="current-month">
                                                                          <ul class="week-days">
                                                                          <li>Lun</li>
                                                                          <li>Mar</li>
                                                                          <li>Mie</li>
                                                                          <li>Jue</li>
                                                                          <li>Vie</li>
                                                                          <li>Sab</li>
                                                                          <li>Dom</li>
                                                                          </ul>

                                                                          <div class="weeks">
                                                                          <div class="first">
                                                                          <span class="last-month">28</span>
                                                                          <span class="last-month">29</span>
                                                                          <span class="last-month">30</span>
                                                                          <span class="last-month">31</span>
                                                                          <span>01</span>
                                                                          <span>02</span>
                                                                          <span>03</span>
                                                                          </div>

                                                                          <div class="second">
                                                                          <span>04</span>
                                                                          <span>05</span>
                                                                          <span>06</span>
                                                                          <!-- <span class="event">06</span> -->
                                                                          <span>07</span>
                                                                          <span>08</span>
                                                                          <span>09</span>
                                                                          <span>10</span>
                                                                          </div>

                                                                          <div class="third">
                                                                          <span>11</span>
                                                                          <span>12</span>
                                                                          <span>13</span>
                                                                          <span>14</span>
                                                                          <span>15</span>
                                                                          <!-- <span class="active">15</span> -->
                                                                          <span>16</span>
                                                                          <span>17</span>
                                                                          </div>

                                                                          <div class="fourth">
                                                                          <span>18</span>
                                                                          <span>19</span>
                                                                          <span>20</span>
                                                                          <span>21</span>
                                                                          <span>22</span>
                                                                          <span>23</span>
                                                                          <span>24</span>
                                                                          </div>

                                                                          <div class="fifth">
                                                                          <span>25</span>
                                                                          <span>26</span>
                                                                          <span>27</span>
                                                                          <span>28</span>
                                                                          <span>29</span>
                                                                          <span>30</span>
                                                                          <span>31</span>
                                                                          </div>
                                                                          </div>
                                                                          </div>
                                                                          </div>

                                                                          <div class="back">
                                                                          <input placeholder="What's the event?">
                                                                          <div class="info">
                                                                          <div class="date">
                                                                          <p class="info-date">
                                                                          Date: <span>Jan 15th, 2016</span>
                                                                          </p>
                                                                          <p class="info-time">
                                                                          Time: <span>6:35 PM</span>
                                                                          </p>
                                                                          </div>
                                                                          <div class="address">
                                                                          <p>
                                                                          Address: <span>129 W 81st St, New York, NY</span>
                                                                          </p>
                                                                          </div>
                                                                          <div class="observations">
                                                                          <p>
                                                                          Observations: <span>Be there 15 minutes earlier</span>
                                                                          </p>
                                                                          </div>
                                                                          </div>

                                                                          <div class="actions">
                                                                          <!-- <button class="save">
                                                                          Save <i class="ion-checkmark"></i>
                                                                          </button> -->
                                                                          <button class="dismiss">
                                                                          Regresar <i class="ion-android-close"></i>
                                                                          </button>
                                                                          </div>
                                                                          </div>

                                                                          </div>
                                        </div>

                                              </div>
                                              <div class="gallery-cell">
                                                <div onmousemove="detectmove(event)" class="container-cal">
                                                                                <div class="calendar">
                                                                                <div class="front">
                                                                                <div class="current-date">
                                                                                <!-- <h1>Friday 15th</h1> -->
                                                                                <h1>Febrero 2020</h1>
                                                                                </div>

                                                                                <div class="current-month">
                                                                                <ul class="week-days">
                                                                                <li>Lun</li>
                                                                                <li>Mar</li>
                                                                                <li>Mie</li>
                                                                                <li>Jue</li>
                                                                                <li>Vie</li>
                                                                                <li>Sab</li>
                                                                                <li>Dom</li>
                                                                                </ul>

                                                                                <div class="weeks">
                                                                                <div class="first">
                                                                                <span class="last-month">28</span>
                                                                                <span class="last-month">29</span>
                                                                                <span class="last-month">30</span>
                                                                                <span class="last-month">31</span>
                                                                                <span>01</span>
                                                                                <span>02</span>
                                                                                <span>03</span>
                                                                                </div>

                                                                                <div class="second">
                                                                                <span>04</span>
                                                                                <span>05</span>
                                                                                <span>06</span>
                                                                                <!-- <span class="event">06</span> -->
                                                                                <span>07</span>
                                                                                <span>08</span>
                                                                                <span>09</span>
                                                                                <span>10</span>
                                                                                </div>

                                                                                <div class="third">
                                                                                <span>11</span>
                                                                                <span>12</span>
                                                                                <span>13</span>
                                                                                <span>14</span>
                                                                                <span>15</span>
                                                                                <!-- <span class="active">15</span> -->
                                                                                <span>16</span>
                                                                                <span>17</span>
                                                                                </div>

                                                                                <div class="fourth">
                                                                                <span>18</span>
                                                                                <span>19</span>
                                                                                <span>20</span>
                                                                                <span>21</span>
                                                                                <span>22</span>
                                                                                <span>23</span>
                                                                                <span>24</span>
                                                                                </div>

                                                                                <div class="fifth">
                                                                                <span>25</span>
                                                                                <span>26</span>
                                                                                <span>27</span>
                                                                                <span>28</span>
                                                                                <span>29</span>
                                                                                <span class="last-month">01</span>
                                                                                <span class="last-month">02</span>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>

                                                                                <div class="back">
                                                                                <input placeholder="What's the event?">
                                                                                <div class="info">
                                                                                <div class="date">
                                                                                <p class="info-date">
                                                                                Date: <span>Jan 15th, 2016</span>
                                                                                </p>
                                                                                <p class="info-time">
                                                                                Time: <span>6:35 PM</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="address">
                                                                                <p>
                                                                                Address: <span>129 W 81st St, New York, NY</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="observations">
                                                                                <p>
                                                                                Observations: <span>Be there 15 minutes earlier</span>
                                                                                </p>
                                                                                </div>
                                                                                </div>

                                                                                <div class="actions">
                                                                                <!-- <button class="save">
                                                                                Save <i class="ion-checkmark"></i>
                                                                                </button> -->
                                                                                <button class="dismiss">
                                                                                Regresar <i class="ion-android-close"></i>
                                                                                </button>
                                                                                </div>
                                                                                </div>

                                                                                </div>
                                              </div>

                                            </div>


                                            <div class="gallery-cell">
                                              <div onmousemove="detectmove(event)" class="container-cal">
                                                                              <div class="calendar">
                                                                              <div class="front">
                                                                              <div class="current-date">
                                                                              <!-- <h1>Friday 15th</h1> -->
                                                                              <h1>Marzo 2020</h1>
                                                                              </div>

                                                                              <div class="current-month">
                                                                              <ul class="week-days">
                                                                              <li>Lun</li>
                                                                              <li>Mar</li>
                                                                              <li>Mie</li>
                                                                              <li>Jue</li>
                                                                              <li>Vie</li>
                                                                              <li>Sab</li>
                                                                              <li>Dom</li>
                                                                              </ul>

                                                                              <div class="weeks">
                                                                              <div class="first">
                                                                              <span class="last-month">28</span>
                                                                              <span class="last-month">29</span>
                                                                              <span class="last-month">30</span>
                                                                              <span class="last-month">31</span>
                                                                              <span>01</span>
                                                                              <span>02</span>
                                                                              <span>03</span>
                                                                              </div>

                                                                              <div class="second">
                                                                              <span>04</span>
                                                                              <span>05</span>
                                                                              <span>06</span>
                                                                              <!-- <span class="event">06</span> -->
                                                                              <span>07</span>
                                                                              <span>08</span>
                                                                              <span>09</span>
                                                                              <span>10</span>
                                                                              </div>

                                                                              <div class="third">
                                                                              <span>11</span>
                                                                              <span>12</span>
                                                                              <span>13</span>
                                                                              <span>14</span>
                                                                              <span>15</span>
                                                                              <!-- <span class="active">15</span> -->
                                                                              <span>16</span>
                                                                              <span>17</span>
                                                                              </div>

                                                                              <div class="fourth">
                                                                              <span>18</span>
                                                                              <span>19</span>
                                                                              <span>20</span>
                                                                              <span>21</span>
                                                                              <span>22</span>
                                                                              <span>23</span>
                                                                              <span>24</span>
                                                                              </div>

                                                                              <div class="fifth">
                                                                              <span>25</span>
                                                                              <span>26</span>
                                                                              <span>27</span>
                                                                              <span>28</span>
                                                                              <span>29</span>
                                                                              <span>30</span>
                                                                              <span>31</span>
                                                                              </div>
                                                                              </div>
                                                                              </div>
                                                                              </div>

                                                                              <div class="back">
                                                                              <input placeholder="What's the event?">
                                                                              <div class="info">
                                                                              <div class="date">
                                                                              <p class="info-date">
                                                                              Date: <span>Jan 15th, 2016</span>
                                                                              </p>
                                                                              <p class="info-time">
                                                                              Time: <span>6:35 PM</span>
                                                                              </p>
                                                                              </div>
                                                                              <div class="address">
                                                                              <p>
                                                                              Address: <span>129 W 81st St, New York, NY</span>
                                                                              </p>
                                                                              </div>
                                                                              <div class="observations">
                                                                              <p>
                                                                              Observations: <span>Be there 15 minutes earlier</span>
                                                                              </p>
                                                                              </div>
                                                                              </div>

                                                                              <div class="actions">
                                                                              <!-- <button class="save">
                                                                              Save <i class="ion-checkmark"></i>
                                                                              </button> -->
                                                                              <button class="dismiss">
                                                                              Regresar <i class="ion-android-close"></i>
                                                                              </button>
                                                                              </div>
                                                                              </div>

                                                                              </div>
                                            </div>
                                            </div>

                                              <div class="gallery-cell">
                                                <div onmousemove="detectmove(event)" class="container-cal">
                                                                                <div class="calendar">
                                                                                <div class="front">
                                                                                <div class="current-date">
                                                                                <!-- <h1>Friday 15th</h1> -->
                                                                                <h1>Abril 2020</h1>
                                                                                </div>

                                                                                <div class="current-month">
                                                                                <ul class="week-days">
                                                                                <li>Lun</li>
                                                                                <li>Mar</li>
                                                                                <li>Mie</li>
                                                                                <li>Jue</li>
                                                                                <li>Vie</li>
                                                                                <li>Sab</li>
                                                                                <li>Dom</li>
                                                                                </ul>

                                                                                <div class="weeks">
                                                                                <div class="first">
                                                                                <span class="last-month">28</span>
                                                                                <span class="last-month">29</span>
                                                                                <span class="last-month">30</span>
                                                                                <span class="last-month">31</span>
                                                                                <span>01</span>
                                                                                <span>02</span>
                                                                                <span>03</span>
                                                                                </div>

                                                                                <div class="second">
                                                                                <span>04</span>
                                                                                <span>05</span>
                                                                                <span>06</span>
                                                                                <!-- <span class="event">06</span> -->
                                                                                <span>07</span>
                                                                                <span>08</span>
                                                                                <span>09</span>
                                                                                <span>10</span>
                                                                                </div>

                                                                                <div class="third">
                                                                                <span>11</span>
                                                                                <span>12</span>
                                                                                <span>13</span>
                                                                                <span>14</span>
                                                                                <span>15</span>
                                                                                <!-- <span class="active">15</span> -->
                                                                                <span>16</span>
                                                                                <span>17</span>
                                                                                </div>

                                                                                <div class="fourth">
                                                                                <span>18</span>
                                                                                <span>19</span>
                                                                                <span class="event" onclick="fiesta2(event)">20</span>
                                                                                <span>21</span>
                                                                                <span>22</span>
                                                                                <span>23</span>
                                                                                <span>24</span>
                                                                                </div>

                                                                                <div class="fifth">
                                                                                <span>25</span>
                                                                                <span>26</span>
                                                                                <span>27</span>
                                                                                <span>28</span>
                                                                                <span>29</span>
                                                                                <span>30</span>
                                                                                <span class="last-month">01</span>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>

                                                                                <div class="back">
                                                                                <input placeholder="What's the event?">
                                                                                <div class="info">
                                                                                <div class="date">
                                                                                <p class="info-date">
                                                                                Date: <span>Jan 15th, 2016</span>
                                                                                </p>
                                                                                <p class="info-time">
                                                                                Time: <span>6:35 PM</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="address">
                                                                                <p>
                                                                                Address: <span>129 W 81st St, New York, NY</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="observations">
                                                                                <p>
                                                                                Observations: <span>Be there 15 minutes earlier</span>
                                                                                </p>
                                                                                </div>
                                                                                </div>

                                                                                <div class="actions">
                                                                                <!-- <button class="save">
                                                                                Save <i class="ion-checkmark"></i>
                                                                                </button> -->
                                                                                <button class="dismiss">
                                                                                Regresar <i class="ion-android-close"></i>
                                                                                </button>
                                                                                </div>
                                                                                </div>

                                                                                </div>
                                              </div>
                                              </div>

                                              <div class="gallery-cell">
                                                <div onmousemove="detectmove(event)" class="container-cal">
                                                                                <div class="calendar">
                                                                                <div class="front">
                                                                                <div class="current-date">
                                                                                <!-- <h1>Friday 15th</h1> -->
                                                                                <h1>Mayo 2020</h1>
                                                                                </div>

                                                                                <div class="current-month">
                                                                                <ul class="week-days">
                                                                                <li>Lun</li>
                                                                                <li>Mar</li>
                                                                                <li>Mie</li>
                                                                                <li>Jue</li>
                                                                                <li>Vie</li>
                                                                                <li>Sab</li>
                                                                                <li>Dom</li>
                                                                                </ul>

                                                                                <div class="weeks">
                                                                                <div class="first">
                                                                                <span class="last-month">28</span>
                                                                                <span class="last-month">29</span>
                                                                                <span class="last-month">30</span>
                                                                                <span class="last-month">31</span>
                                                                                <span>01</span>
                                                                                <span>02</span>
                                                                                <span>03</span>
                                                                                </div>

                                                                                <div class="second">
                                                                                <span>04</span>
                                                                                <span>05</span>
                                                                                <span>06</span>
                                                                                <!-- <span class="event">06</span> -->
                                                                                <span>07</span>
                                                                                <span>08</span>
                                                                                <span>09</span>
                                                                                <span>10</span>
                                                                                </div>

                                                                                <div class="third">
                                                                                <span>11</span>
                                                                                <span>12</span>
                                                                                <span>13</span>
                                                                                <span>14</span>
                                                                                <span>15</span>
                                                                                <!-- <span class="active">15</span> -->
                                                                                <span>16</span>
                                                                                <span>17</span>
                                                                                </div>

                                                                                <div class="fourth">
                                                                                <span>18</span>
                                                                                <span>19</span>
                                                                                <span>20</span>
                                                                                <span>21</span>
                                                                                <span>22</span>
                                                                                <span>23</span>
                                                                                <span>24</span>
                                                                                </div>

                                                                                <div class="fifth">
                                                                                <span>25</span>
                                                                                <span>26</span>
                                                                                <span>27</span>
                                                                                <span>28</span>
                                                                                <span>29</span>
                                                                                <span class="last-month">01</span>
                                                                                <span class="last-month">02</span>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>

                                                                                <div class="back">
                                                                                <input placeholder="What's the event?">
                                                                                <div class="info">
                                                                                <div class="date">
                                                                                <p class="info-date">
                                                                                Date: <span>Jan 15th, 2016</span>
                                                                                </p>
                                                                                <p class="info-time">
                                                                                Time: <span>6:35 PM</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="address">
                                                                                <p>
                                                                                Address: <span>129 W 81st St, New York, NY</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="observations">
                                                                                <p>
                                                                                Observations: <span>Be there 15 minutes earlier</span>
                                                                                </p>
                                                                                </div>
                                                                                </div>

                                                                                <div class="actions">
                                                                                <!-- <button class="save">
                                                                                Save <i class="ion-checkmark"></i>
                                                                                </button> -->
                                                                                <button class="dismiss">
                                                                                Regresar <i class="ion-android-close"></i>
                                                                                </button>
                                                                                </div>
                                                                                </div>

                                                                                </div>
                                              </div>
                                              </div>

                                              <div class="gallery-cell">
                                                <div onmousemove="detectmove(event)" class="container-cal">
                                                                                <div class="calendar">
                                                                                <div class="front">
                                                                                <div class="current-date">
                                                                                <!-- <h1>Friday 15th</h1> -->
                                                                                <h1>Junio 2020</h1>
                                                                                </div>

                                                                                <div class="current-month">
                                                                                <ul class="week-days">
                                                                                <li>Lun</li>
                                                                                <li>Mar</li>
                                                                                <li>Mie</li>
                                                                                <li>Jue</li>
                                                                                <li>Vie</li>
                                                                                <li>Sab</li>
                                                                                <li>Dom</li>
                                                                                </ul>

                                                                                <div class="weeks">
                                                                                <div class="first">
                                                                                <span class="last-month">28</span>
                                                                                <span class="last-month">29</span>
                                                                                <span class="last-month">30</span>
                                                                                <span class="last-month">31</span>
                                                                                <span>01</span>
                                                                                <span>02</span>
                                                                                <span>03</span>
                                                                                </div>

                                                                                <div class="second">
                                                                                <span>04</span>
                                                                                <span>05</span>
                                                                                <span>06</span>
                                                                                <!-- <span class="event">06</span> -->
                                                                                <span>07</span>
                                                                                <span>08</span>
                                                                                <span>09</span>
                                                                                <span>10</span>
                                                                                </div>

                                                                                <div class="third">
                                                                                <span>11</span>
                                                                                <span>12</span>
                                                                                <span>13</span>
                                                                                <span>14</span>
                                                                                <span>15</span>
                                                                                <!-- <span class="active">15</span> -->
                                                                                <span>16</span>
                                                                                <span>17</span>
                                                                                </div>

                                                                                <div class="fourth">
                                                                                <span>18</span>
                                                                                <span>19</span>
                                                                                <span>20</span>
                                                                                <span>21</span>
                                                                                <span>22</span>
                                                                                <span>23</span>
                                                                                <span>24</span>
                                                                                </div>

                                                                                <div class="fifth">
                                                                                <span>25</span>
                                                                                <span>26</span>
                                                                                <span>27</span>
                                                                                <span>28</span>
                                                                                <span>29</span>
                                                                                <span>30</span>
                                                                                <span>31</span>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>

                                                                                <div class="back">
                                                                                <input placeholder="What's the event?">
                                                                                <div class="info">
                                                                                <div class="date">
                                                                                <p class="info-date">
                                                                                Date: <span>Jan 15th, 2016</span>
                                                                                </p>
                                                                                <p class="info-time">
                                                                                Time: <span>6:35 PM</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="address">
                                                                                <p>
                                                                                Address: <span>129 W 81st St, New York, NY</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="observations">
                                                                                <p>
                                                                                Observations: <span>Be there 15 minutes earlier</span>
                                                                                </p>
                                                                                </div>
                                                                                </div>

                                                                                <div class="actions">
                                                                                <!-- <button class="save">
                                                                                Save <i class="ion-checkmark"></i>
                                                                                </button> -->
                                                                                <button class="dismiss">
                                                                                Regresar <i class="ion-android-close"></i>
                                                                                </button>
                                                                                </div>
                                                                                </div>

                                                                                </div>
                                              </div>
                                              </div>

                                              <div class="gallery-cell">
                                                <div onmousemove="detectmove(event)" class="container-cal">
                                                                                <div class="calendar">
                                                                                <div class="front">
                                                                                <div class="current-date">
                                                                                <!-- <h1>Friday 15th</h1> -->
                                                                                <h1>Julio 2020</h1>
                                                                                </div>

                                                                                <div class="current-month">
                                                                                <ul class="week-days">
                                                                                <li>Lun</li>
                                                                                <li>Mar</li>
                                                                                <li>Mie</li>
                                                                                <li>Jue</li>
                                                                                <li>Vie</li>
                                                                                <li>Sab</li>
                                                                                <li>Dom</li>
                                                                                </ul>

                                                                                <div class="weeks">
                                                                                <div class="first">
                                                                                <span class="last-month">28</span>
                                                                                <span class="last-month">29</span>
                                                                                <span class="last-month">30</span>
                                                                                <span class="last-month">31</span>
                                                                                <span>01</span>
                                                                                <span>02</span>
                                                                                <span>03</span>
                                                                                </div>

                                                                                <div class="second">
                                                                                <span>04</span>
                                                                                <span>05</span>
                                                                                <span>06</span>
                                                                                <!-- <span class="event">06</span> -->
                                                                                <span>07</span>
                                                                                <span>08</span>
                                                                                <span>09</span>
                                                                                <span>10</span>
                                                                                </div>

                                                                                <div class="third">
                                                                                <span>11</span>
                                                                                <span>12</span>
                                                                                <span>13</span>
                                                                                <span>14</span>
                                                                                <span>15</span>
                                                                                <!-- <span class="active">15</span> -->
                                                                                <span>16</span>
                                                                                <span>17</span>
                                                                                </div>

                                                                                <div class="fourth">
                                                                                <span>18</span>
                                                                                <span>19</span>
                                                                                <span>20</span>
                                                                                <span>21</span>
                                                                                <span>22</span>
                                                                                <span>23</span>
                                                                                <span>24</span>
                                                                                </div>

                                                                                <div class="fifth">
                                                                                <span>25</span>
                                                                                <span>26</span>
                                                                                <span>27</span>
                                                                                <span>28</span>
                                                                                <span>29</span>
                                                                                <span>30</span>
                                                                                <span>31</span>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>

                                                                                <div class="back">
                                                                                <input placeholder="What's the event?">
                                                                                <div class="info">
                                                                                <div class="date">
                                                                                <p class="info-date">
                                                                                Date: <span>Jan 15th, 2016</span>
                                                                                </p>
                                                                                <p class="info-time">
                                                                                Time: <span>6:35 PM</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="address">
                                                                                <p>
                                                                                Address: <span>129 W 81st St, New York, NY</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="observations">
                                                                                <p>
                                                                                Observations: <span>Be there 15 minutes earlier</span>
                                                                                </p>
                                                                                </div>
                                                                                </div>

                                                                                <div class="actions">
                                                                                <!-- <button class="save">
                                                                                Save <i class="ion-checkmark"></i>
                                                                                </button> -->
                                                                                <button class="dismiss">
                                                                                Regresar <i class="ion-android-close"></i>
                                                                                </button>
                                                                                </div>
                                                                                </div>

                                                                                </div>
                                              </div>
                                              </div>

                                              <div class="gallery-cell">
                                                <div onmousemove="detectmove(event)" class="container-cal">
                                                                                <div class="calendar">
                                                                                <div class="front">
                                                                                <div class="current-date">
                                                                                <!-- <h1>Friday 15th</h1> -->
                                                                                <h1>Agosto 2020</h1>
                                                                                </div>

                                                                                <div class="current-month">
                                                                                <ul class="week-days">
                                                                                <li>Lun</li>
                                                                                <li>Mar</li>
                                                                                <li>Mie</li>
                                                                                <li>Jue</li>
                                                                                <li>Vie</li>
                                                                                <li>Sab</li>
                                                                                <li>Dom</li>
                                                                                </ul>

                                                                                <div class="weeks">
                                                                                <div class="first">
                                                                                <span class="last-month">28</span>
                                                                                <span class="last-month">29</span>
                                                                                <span class="last-month">30</span>
                                                                                <span class="last-month">31</span>
                                                                                <span>01</span>
                                                                                <span>02</span>
                                                                                <span>03</span>
                                                                                </div>

                                                                                <div class="second">
                                                                                <span>04</span>
                                                                                <span>05</span>
                                                                                <span>06</span>
                                                                                <!-- <span class="event">06</span> -->
                                                                                <span>07</span>
                                                                                <span>08</span>
                                                                                <span>09</span>
                                                                                <span>10</span>
                                                                                </div>

                                                                                <div class="third">
                                                                                <span>11</span>
                                                                                <span>12</span>
                                                                                <span>13</span>
                                                                                <span>14</span>
                                                                                <span>15</span>
                                                                                <!-- <span class="active">15</span> -->
                                                                                <span>16</span>
                                                                                <span>17</span>
                                                                                </div>

                                                                                <div class="fourth">
                                                                                <span>18</span>
                                                                                <span>19</span>
                                                                                <span>20</span>
                                                                                <span>21</span>
                                                                                <span>22</span>
                                                                                <span>23</span>
                                                                                <span>24</span>
                                                                                </div>

                                                                                <div class="fifth">
                                                                                <span>25</span>
                                                                                <span>26</span>
                                                                                <span>27</span>
                                                                                <span>28</span>
                                                                                <span>29</span>
                                                                                <span>30</span>
                                                                                <span>31</span>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>

                                                                                <div class="back">
                                                                                <input placeholder="What's the event?">
                                                                                <div class="info">
                                                                                <div class="date">
                                                                                <p class="info-date">
                                                                                Date: <span>Jan 15th, 2016</span>
                                                                                </p>
                                                                                <p class="info-time">
                                                                                Time: <span>6:35 PM</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="address">
                                                                                <p>
                                                                                Address: <span>129 W 81st St, New York, NY</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="observations">
                                                                                <p>
                                                                                Observations: <span>Be there 15 minutes earlier</span>
                                                                                </p>
                                                                                </div>
                                                                                </div>

                                                                                <div class="actions">
                                                                                <!-- <button class="save">
                                                                                Save <i class="ion-checkmark"></i>
                                                                                </button> -->
                                                                                <button class="dismiss">
                                                                                Regresar <i class="ion-android-close"></i>
                                                                                </button>
                                                                                </div>
                                                                                </div>

                                                                                </div>
                                              </div>
                                              </div>

                                              <div class="gallery-cell">
                                                <div onmousemove="detectmove(event)" class="container-cal">
                                                                                <div class="calendar">
                                                                                <div class="front">
                                                                                <div class="current-date">
                                                                                <!-- <h1>Friday 15th</h1> -->
                                                                                <h1>Septiembre 2020</h1>
                                                                                </div>

                                                                                <div class="current-month">
                                                                                <ul class="week-days">
                                                                                <li>Lun</li>
                                                                                <li>Mar</li>
                                                                                <li>Mie</li>
                                                                                <li>Jue</li>
                                                                                <li>Vie</li>
                                                                                <li>Sab</li>
                                                                                <li>Dom</li>
                                                                                </ul>

                                                                                <div class="weeks">
                                                                                <div class="first">
                                                                                <span class="last-month">28</span>
                                                                                <span class="last-month">29</span>
                                                                                <span class="last-month">30</span>
                                                                                <span class="last-month">31</span>
                                                                                <span>01</span>
                                                                                <span>02</span>
                                                                                <span>03</span>
                                                                                </div>

                                                                                <div class="second">
                                                                                <span>04</span>
                                                                                <span>05</span>
                                                                                <span>06</span>
                                                                                <!-- <span class="event">06</span> -->
                                                                                <span>07</span>
                                                                                <span>08</span>
                                                                                <span>09</span>
                                                                                <span>10</span>
                                                                                </div>

                                                                                <div class="third">
                                                                                <span>11</span>
                                                                                <span>12</span>
                                                                                <span>13</span>
                                                                                <span>14</span>
                                                                                <span>15</span>
                                                                                <!-- <span class="active">15</span> -->
                                                                                <span>16</span>
                                                                                <span>17</span>
                                                                                </div>

                                                                                <div class="fourth">
                                                                                <span>18</span>
                                                                                <span>19</span>
                                                                                <span>20</span>
                                                                                <span>21</span>
                                                                                <span>22</span>
                                                                                <span>23</span>
                                                                                <span>24</span>
                                                                                </div>

                                                                                <div class="fifth">
                                                                                <span>25</span>
                                                                                <span>26</span>
                                                                                <span>27</span>
                                                                                <span>28</span>
                                                                                <span>29</span>
                                                                                <span>30</span>
                                                                                <span>31</span>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>

                                                                                <div class="back">
                                                                                <input placeholder="What's the event?">
                                                                                <div class="info">
                                                                                <div class="date">
                                                                                <p class="info-date">
                                                                                Date: <span>Jan 15th, 2016</span>
                                                                                </p>
                                                                                <p class="info-time">
                                                                                Time: <span>6:35 PM</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="address">
                                                                                <p>
                                                                                Address: <span>129 W 81st St, New York, NY</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="observations">
                                                                                <p>
                                                                                Observations: <span>Be there 15 minutes earlier</span>
                                                                                </p>
                                                                                </div>
                                                                                </div>

                                                                                <div class="actions">
                                                                                <!-- <button class="save">
                                                                                Save <i class="ion-checkmark"></i>
                                                                                </button> -->
                                                                                <button class="dismiss">
                                                                                Regresar <i class="ion-android-close"></i>
                                                                                </button>
                                                                                </div>
                                                                                </div>

                                                                                </div>
                                              </div>
                                              </div>

                                              <div class="gallery-cell">
                                                <div onmousemove="detectmove(event)" class="container-cal">
                                                                                <div class="calendar">
                                                                                <div class="front">
                                                                                <div class="current-date">
                                                                                <!-- <h1>Friday 15th</h1> -->
                                                                                <h1>Octubre 2020</h1>
                                                                                </div>

                                                                                <div class="current-month">
                                                                                <ul class="week-days">
                                                                                <li>Lun</li>
                                                                                <li>Mar</li>
                                                                                <li>Mie</li>
                                                                                <li>Jue</li>
                                                                                <li>Vie</li>
                                                                                <li>Sab</li>
                                                                                <li>Dom</li>
                                                                                </ul>

                                                                                <div class="weeks">
                                                                                <div class="first">
                                                                                <span class="last-month">28</span>
                                                                                <span class="last-month">29</span>
                                                                                <span class="last-month">30</span>
                                                                                <span class="last-month">31</span>
                                                                                <span>01</span>
                                                                                <span>02</span>
                                                                                <span>03</span>
                                                                                </div>

                                                                                <div class="second">
                                                                                <span>04</span>
                                                                                <span>05</span>
                                                                                <span>06</span>
                                                                                <!-- <span class="event">06</span> -->
                                                                                <span>07</span>
                                                                                <span>08</span>
                                                                                <span>09</span>
                                                                                <span>10</span>
                                                                                </div>

                                                                                <div class="third">
                                                                                <span>11</span>
                                                                                <span>12</span>
                                                                                <span>13</span>
                                                                                <span>14</span>
                                                                                <span>15</span>
                                                                                <!-- <span class="active">15</span> -->
                                                                                <span>16</span>
                                                                                <span>17</span>
                                                                                </div>

                                                                                <div class="fourth">
                                                                                <span>18</span>
                                                                                <span>19</span>
                                                                                <span>20</span>
                                                                                <span>21</span>
                                                                                <span>22</span>
                                                                                <span>23</span>
                                                                                <span>24</span>
                                                                                </div>

                                                                                <div class="fifth">
                                                                                <span>25</span>
                                                                                <span>26</span>
                                                                                <span>27</span>
                                                                                <span>28</span>
                                                                                <span>29</span>
                                                                                <span>30</span>
                                                                                <span>31</span>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>

                                                                                <div class="back">
                                                                                <input placeholder="What's the event?">
                                                                                <div class="info">
                                                                                <div class="date">
                                                                                <p class="info-date">
                                                                                Date: <span>Jan 15th, 2016</span>
                                                                                </p>
                                                                                <p class="info-time">
                                                                                Time: <span>6:35 PM</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="address">
                                                                                <p>
                                                                                Address: <span>129 W 81st St, New York, NY</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="observations">
                                                                                <p>
                                                                                Observations: <span>Be there 15 minutes earlier</span>
                                                                                </p>
                                                                                </div>
                                                                                </div>

                                                                                <div class="actions">
                                                                                <!-- <button class="save">
                                                                                Save <i class="ion-checkmark"></i>
                                                                                </button> -->
                                                                                <button class="dismiss">
                                                                                Regresar <i class="ion-android-close"></i>
                                                                                </button>
                                                                                </div>
                                                                                </div>

                                                                                </div>
                                              </div>
                                              </div>

                                              <div class="gallery-cell">
                                                <div onmousemove="detectmove(event)" class="container-cal">
                                                                                <div class="calendar">
                                                                                <div class="front">
                                                                                <div class="current-date">
                                                                                <!-- <h1>Friday 15th</h1> -->
                                                                                <h1>Noviembre 2020</h1>
                                                                                </div>

                                                                                <div class="current-month">
                                                                                <ul class="week-days">
                                                                                <li>Lun</li>
                                                                                <li>Mar</li>
                                                                                <li>Mie</li>
                                                                                <li>Jue</li>
                                                                                <li>Vie</li>
                                                                                <li>Sab</li>
                                                                                <li>Dom</li>
                                                                                </ul>

                                                                                <div class="weeks">
                                                                                <div class="first">
                                                                                <span class="last-month">28</span>
                                                                                <span class="last-month">29</span>
                                                                                <span class="last-month">30</span>
                                                                                <span class="last-month">31</span>
                                                                                <span>01</span>
                                                                                <span>02</span>
                                                                                <span>03</span>
                                                                                </div>

                                                                                <div class="second">
                                                                                <span>04</span>
                                                                                <span>05</span>
                                                                                <span>06</span>
                                                                                <!-- <span class="event">06</span> -->
                                                                                <span>07</span>
                                                                                <span>08</span>
                                                                                <span>09</span>
                                                                                <span>10</span>
                                                                                </div>

                                                                                <div class="third">
                                                                                <span>11</span>
                                                                                <span>12</span>
                                                                                <span>13</span>
                                                                                <span>14</span>
                                                                                <span>15</span>
                                                                                <!-- <span class="active">15</span> -->
                                                                                <span>16</span>
                                                                                <span>17</span>
                                                                                </div>

                                                                                <div class="fourth">
                                                                                <span>18</span>
                                                                                <span>19</span>
                                                                                <span>20</span>
                                                                                <span>21</span>
                                                                                <span>22</span>
                                                                                <span>23</span>
                                                                                <span>24</span>
                                                                                </div>

                                                                                <div class="fifth">
                                                                                <span>25</span>
                                                                                <span>26</span>
                                                                                <span>27</span>
                                                                                <span>28</span>
                                                                                <span>29</span>
                                                                                <span>30</span>
                                                                                <span>31</span>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>

                                                                                <div class="back">
                                                                                <input placeholder="What's the event?">
                                                                                <div class="info">
                                                                                <div class="date">
                                                                                <p class="info-date">
                                                                                Date: <span>Jan 15th, 2016</span>
                                                                                </p>
                                                                                <p class="info-time">
                                                                                Time: <span>6:35 PM</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="address">
                                                                                <p>
                                                                                Address: <span>129 W 81st St, New York, NY</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="observations">
                                                                                <p>
                                                                                Observations: <span>Be there 15 minutes earlier</span>
                                                                                </p>
                                                                                </div>
                                                                                </div>

                                                                                <div class="actions">
                                                                                <!-- <button class="save">
                                                                                Save <i class="ion-checkmark"></i>
                                                                                </button> -->
                                                                                <button class="dismiss">
                                                                                Regresar <i class="ion-android-close"></i>
                                                                                </button>
                                                                                </div>
                                                                                </div>

                                                                                </div>
                                              </div>
                                              </div>

                                              <div class="gallery-cell">
                                                <div onmousemove="detectmove(event)" class="container-cal">
                                                                                <div class="calendar">
                                                                                <div class="front">
                                                                                <div class="current-date">
                                                                                <!-- <h1>Friday 15th</h1> -->
                                                                                <h1>Diciembre 2020</h1>
                                                                                </div>

                                                                                <div class="current-month">
                                                                                <ul class="week-days">
                                                                                <li>Lun</li>
                                                                                <li>Mar</li>
                                                                                <li>Mie</li>
                                                                                <li>Jue</li>
                                                                                <li>Vie</li>
                                                                                <li>Sab</li>
                                                                                <li>Dom</li>
                                                                                </ul>

                                                                                <div class="weeks">
                                                                                <div class="first">
                                                                                <span class="last-month">28</span>
                                                                                <span class="last-month">29</span>
                                                                                <span class="last-month">30</span>
                                                                                <span class="last-month">31</span>
                                                                                <span>01</span>
                                                                                <span>02</span>
                                                                                <span>03</span>
                                                                                </div>

                                                                                <div class="second">
                                                                                <span>04</span>
                                                                                <span>05</span>
                                                                                <span>06</span>
                                                                                <!-- <span class="event">06</span> -->
                                                                                <span>07</span>
                                                                                <span>08</span>
                                                                                <span>09</span>
                                                                                <span>10</span>
                                                                                </div>

                                                                                <div class="third">
                                                                                <span>11</span>
                                                                                <span>12</span>
                                                                                <span>13</span>
                                                                                <span>14</span>
                                                                                <span>15</span>
                                                                                <!-- <span class="active">15</span> -->
                                                                                <span>16</span>
                                                                                <span>17</span>
                                                                                </div>

                                                                                <div class="fourth">
                                                                                <span>18</span>
                                                                                <span>19</span>
                                                                                <span>20</span>
                                                                                <span>21</span>
                                                                                <span>22</span>
                                                                                <span>23</span>
                                                                                <span>24</span>
                                                                                </div>

                                                                                <div class="fifth">
                                                                                <span>25</span>
                                                                                <span>26</span>
                                                                                <span>27</span>
                                                                                <span>28</span>
                                                                                <span>29</span>
                                                                                <span>30</span>
                                                                                <span>31</span>
                                                                                </div>
                                                                                </div>
                                                                                </div>
                                                                                </div>

                                                                                <div class="back">
                                                                                <input placeholder="What's the event?">
                                                                                <div class="info">
                                                                                <div class="date">
                                                                                <p class="info-date">
                                                                                Date: <span>Jan 15th, 2016</span>
                                                                                </p>
                                                                                <p class="info-time">
                                                                                Time: <span>6:35 PM</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="address">
                                                                                <p>
                                                                                Address: <span>129 W 81st St, New York, NY</span>
                                                                                </p>
                                                                                </div>
                                                                                <div class="observations">
                                                                                <p>
                                                                                Observations: <span>Be there 15 minutes earlier</span>
                                                                                </p>
                                                                                </div>
                                                                                </div>

                                                                                <div class="actions">
                                                                                <!-- <button class="save">
                                                                                Save <i class="ion-checkmark"></i>
                                                                                </button> -->
                                                                                <button class="dismiss">
                                                                                Regresar <i class="ion-android-close"></i>
                                                                                </button>
                                                                                </div>
                                                                                </div>

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







            </div>
        </div>
    </div>
    <footer class="footer-area section-padding-80-0">
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
    function fiesta1(event) {
      document.getElementById("popupfiesta").style.display = 'block';
      document.getElementById("popupfiesta").style.animation = "fadein 0.5s alternate 1";
          // document.getElementById("titulo").innerHTML = "Fiesta 1";
          document.getElementById("parrafo").innerHTML = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.";
    }

    function fiesta2(event) {
      document.getElementById("popupfiesta2").style.display = 'block';
      document.getElementById("popupfiesta2").style.animation = "fadein 0.5s alternate 1";
          // document.getElementById("titulo2").innerHTML = "Fiesta 2";
          document.getElementById("parrafo2").innerHTML = "Lorem Ipsum and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.";
    }

    function fiesta3(event) {
      document.getElementById("popupfiesta3").style.display = 'block';
      document.getElementById("popupfiesta3").style.animation = "fadein 0.5s alternate 1";
      // document.getElementById("titulo3").innerHTML = "Fiesta 3";
      document.getElementById("parrafo3").innerHTML = "Lorem Ipsum and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.";
    }

    function fiesta4(event){
      document.getElementById("popupfiesta4").style.display = 'block';
      document.getElementById("popupfiesta4").style.animation ="fadein 0.5 alternate 1";
      // document.getElementById("titulo4").innerHTML = "Fiesta 4";
      document.getElementById("parrafo4").innerHTML = "Lorem Ipsum and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s a galley of type.";
    }

    function fiesta5(event){
      document.getElementById("popupfiesta5").style.display = 'block';
      document.getElementById("popupfiesta5").style.animation ="fadein 0.5 alternate 1";
      // document.getElementById("titulo5").innerHTML = "Fiesta 5";
      document.getElementById("parrafo5").innerHTML = "Lorem Ipsum and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s a galley of type.";
    }



    </script>
<script>
function detectmove(event) {
  // var x = event.clientX;
  // var y = event.clientY;
    document.getElementById("popupfiesta").style.display = 'none';
    document.getElementById("popupfiesta2").style.display = 'none';
    document.getElementById("popupfiesta3").style.display = 'none';


}
</script>

</body>

</html>
