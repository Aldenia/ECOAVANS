  @extends('layouts.app')
  @section('content')
  
    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="vendor/venobox/venobox.css" rel="stylesheet">
    <link href="vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">
    
  <?php $page = 'nosotros'; ?>
  <br><br><br>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="container" data-aos="fade-up">
                <!-- ======= About Section ======= -->
                <section id="about" class="about section-bg">
                    <div class="container" data-aos="fade-up">

                      <div class="section-title">
                        <h2>Sobre Nosotros</h2>
                        <h3>Descubre más <span>sobre nosotros</span></h3>
                        <!--<p>DISPONIBLE PARA AGREGAR INFORMACION1</p>-->
                      </div>

                      <div class="row">
                        <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
                          <img src="img/EcoAbangares.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                          <!-- <h3>DISPONIBLE PARA INFORMACION SUBTITULO2.</h3>
                          <p class="font-italic">
                            DSIPONIBLE PARA INFORMACION(TEXTO) 3
                          </p>-->
                          <ul>
                            <li>
                              <i class="bx bx-store-alt"></i>
                            <div>
                                <h5>Misión</h5>
                                <p>
                                Somos un espacio de protección y resguardo del patrimonio histórico-cultural minero
                              de Costa Rica donde se fortalece la economía e identidad del cantón de Abangares.
                                </p>
                            </div>
                            <i class="bx bx-images"></i>
                              <div>
                                <h5>Visión</h5>
                                <p>Ser el motor socioeconómico y cultural del cantón de Abangares, una organización
                                  autosustentable que promueve el turismo histórico-cultural de Guanacaste a nivel nacional e
                                  internacional, por medio de la excelencia y la mejora continua.</p>
                              </div>
                            </li>
                            <li>
                            </li>
                          </ul>            
                        </div>
                      </div>
                      <div>
                      <br>
                        <h5>Valores</h5>
                            <p>Ética: Es una virtud que conlleva a la responsabilidad, la honestidad, el compromiso, a ser
                                buenos ciudadanos y de evitar afectar de manera negativa a quienes están alrededor, en
                                especial si se trata de obtener un beneficio en particular.</p>
                            <p>Entrega: Consiste en hacer que los clientes salgan satisfechos, es asegurarse que cada cliente 
                                que pagó por el servicio turístico quede satisfecho por la prestación brindada.</p>
                            <p>Esfuerzo: Este es el valor de luchar por las cosas que se quieren en la organización, es una
                                cualidad muy positiva que deben de tener todos los funcionarios.</p>
                            <p>Honestidad: Es una cualidad de los seres humanos, es aquella que procura siempre anteponer
                                la verdad en sus pensamientos, expresiones y acciones.</p>
                        </div>
                        <hr>

                    </div>
              
                </section>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br><br>

<!-- Vendor JS Files -->
<script src="vendor/jquery/jquery.min.js" asp-append-version="true"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js" asp-append-version="true"></script>
  <script src="vendor/jquery.easing/jquery.easing.min.js" asp-append-version="true"></script>
  <script src="vendor/php-email-form/validate.js" asp-append-version="true"></script>
  <script src="vendor/waypoints/jquery.waypoints.min.js" asp-append-version="true"></script>
  <script src="vendor/counterup/counterup.min.js" asp-append-version="true"></script>
  <script src="vendor/owl.carousel/owl.carousel.min.js" asp-append-version="true"></script>
  <script src="vendor/isotope-layout/isotope.pkgd.min.js" asp-append-version="true"></script>
  <script src="vendor/venobox/venobox.min.js" asp-append-version="true"></script>
  <script src="vendor/aos/aos.js" asp-append-version="true"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
@endsection