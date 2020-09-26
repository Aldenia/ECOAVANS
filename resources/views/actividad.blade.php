@extends('layouts.app')
  @section('content')

    <?php $page='actividad';?>
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Actividades</h2>
          <h3>Consulte nuestras <span>actividades</span></h3>
          <h4>Te invitamos a conocernos por medio de las actividades que se realizan en el Ecomuseo de las minas de Abangares.</h4>
        </div>
        
        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              
                  <h3><a href="">Auditorio para eventos</a></h4>
                  <p></p>
                  <img src="img/eventos.jpg" class="rounded float-right img-fluid" alt="...">

              </div>
            </div>
         
         

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">

                <div class="icon"><i class="bx bx-file"></i></div>
                <h4><a href="">Museo con exhibición permanente</a></h4>
                <p></p>
                <img src="img/auditorio.jpg" class="rounded float-right img-fluid" alt="...">
                
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">

                <div class="icon"><i class="bx bx-tachometer"></i></div>
                <h4><a href="">Galería piezas históricas</a></h4>
                <p></p>
                <img src="img/piezas.jpeg" class="rounded float-right img-fluid" alt="...">

              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box">

              
                <div class="icon"><i class="bx bx-world"></i></div>
                <h4><a href="">Tours y visitas guiadas</a></h4>
                <p></p>
                <img src="img/tour.jpg" class="rounded float-left img-fluid" alt="...">
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box">

                
                <div class="icon"><i class="bx bx-slideshow"></i></div>
                <h4><a href="">Senderismo y Hiking</a></h4>
                <p></p>
                <img src="img/senderismo.jpg" class="rounded float-center img-fluid" alt="...">

              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box">

                
                <div class="icon"><i class="bx bx-arch"></i></div>
                <h4><a href="">Avistamiento de aves</a></h4>
                <p></p>
                <img src="img/avistamiento.jpg" class="rounded float-right img-fluid" alt="...">

              </div>
            </div>

          </div>


           
          {{-- <div class="btn-group"> --}}
                  <td> <a <?php if($page =='welcome'){echo 'active';} ?>"> <a href="{{route('welcome')}}" class="btn btn-primary" >Reserve aquí</a></td>
          {{-- </div> --}}
         
        </div>
     
  @endsection