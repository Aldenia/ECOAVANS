@extends('layouts.app')
@section('title','Create Voluntary')
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

<!--< ?php $page = 'createVol'; ?>-->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="container" data-aos="fade-up">

              <div class="row mt-5">
                <div class="col-sm-8 offset-sm-2">
                  <form action="{{route('voluntary.store')}}" method = "post">
                    @csrf
                    <div class="form-group">
                      <label for="Nombre">Nombre:</label>
                      <input type="text" name = "Nombre" id = "Nombre" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="Apellido_1">Apellido 1:</label>
                      <input type="text" name = "Apellido_1" id = "Apellido_1" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="Apellido_2">Apellido 2:</label>
                      <input type="text" name = "Apellido_2" id = "Apellido_2" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="Edad">Edad:</label>
                      <input type="text" name = "Edad" id = "Edad" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="Telefono">Telefono:</label>
                      <input type="text" name = "Telefono" id = "Telefono" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="Direccion">Dirección:</label>
                      <input type="text" name = "Direccion" id = "Direccion" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="Email">Email:</label>
                      <input type="text" name = "Email" id = "Email" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="Cantidad">Cantidad:</label>
                      <input type="text" name = "Cantidad" id = "Cantidad" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label for="Descripcion">Descripción:</label>
                      <input type="text" name = "Descripcion" id = "Descripcion" class="form-control" required>
                    </div>


                    <button type = "submit" class = "btn btn-success">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

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