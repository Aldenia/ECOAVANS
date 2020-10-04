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
<?php $page='donation';?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Donaciones</div>

                <div class="card-body">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr> 
                                <th width="20px">ID</th> 
                                <th >Nombre del donador</th> 
                                <th >Tipo de donacion</th> 
                                <th >Id ingresos</th>
                                <th colspan="3">&nbsp;</th> 
                            </tr>
                        </thead>
                    
             @foreach ($donationN as $donation)
            <tr>
                <td>{{$donation->id}}</td>
                <td>{{$donation->donorName}}</td>
                <td>{{$donation->donationType}}</td>
                <td>{{$donation->incomes_id}}</td>

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