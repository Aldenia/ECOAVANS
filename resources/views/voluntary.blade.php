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
<?php $page='voluntary';?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Voluntariado</div>

                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="20px">ID</th>
                                <th >Nombre</th>
                                <th >Apellido</th>
                                <th >Edad</th>
                                <th >Teléfono</th>
                                <th >Dirección</th>
                                <th >Email</th>
                                <th >Cantidad</th>
                                <th >Descripción</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                    
                        @foreach($voluntaryN as $voluntary)
                            <tr class = "text-center">
                                <td>{{ $voluntary->id }}</td>
                                <td>{{ $voluntary->Nombre }}</td>
                                <td>{{ $voluntary-> Apellido_1 }}&nbsp;{{ $voluntary-> Apellido_2 }}</td>
                                <td>{{ $voluntary->Edad }}</td>
                                <td>{{ $voluntary->Telefono }}</td>
                                <td>{{ $voluntary->Direccion }}</td>
                                <td>{{ $voluntary->Email }}</td>
                                <td>{{ $voluntary->Cantidad }}</td>
                                <td>{{ $voluntary->Descripcion }}</td>
                            </tr>
                        @endforeach

                    </table>

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