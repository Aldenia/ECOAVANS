@extends('layouts.app')
@section('content')
    <!-- Vendor CSS Files -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="css/style.css" rel="stylesheet">

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>



<?php $page='voluntary';?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Voluntariado</div>
                <a href="{{ route('voluntary.create')}}" class="btn btn-primary col-md-4">Nuevo Voluntario</a>
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
                                <th width="280px">Acción</th>
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

                                <td>
                                  <a href="{{ route('voluntary.show', $voluntary->id)}}" 
                                  class="btn btn-info btn-sm">Detalle</a>
                                </td>

                                <td> 
                                  <a href="{{route('voluntary.edit')}}"
                                  class="btn btn-warning btn-sm">Editar</a>
                                </td>
                                
                                <td>&nbsp;</td>
                               
                            </tr>
                        @endforeach

                    </table>

                </div>
                
            </div>
        </div>
    </div>
</div>
<script>
  $('#laravel_crud').DataTable();
  function addPost() {
    $('#post-modal').modal('show');
  }
  function editPost(event) {
    var id  = $(event).data("id");
    let _url = `/posts/${id}`;
    $('#titleError').text('');
    $('#descriptionError').text('');
    
    $.ajax({
      url: _url,
      type: "GET",
      success: function(response) {
          if(response) {
            $("#post_id").val(response.id);
            $("#title").val(response.title);
            $("#description").val(response.description);
            $('#post-modal').modal('show');
          }
      }
    });
  }
  function createPost() {
    var title = $('#title').val();
    var description = $('#description').val();
    var id = $('#post_id').val();

    let _url     = `/posts`;
    let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: _url,
        type: "POST",
        data: {
          id: id,
          title: title,
          description: description,
          _token: _token
        },
        success: function(response) {
            if(response.code == 200) {
              if(id != ""){
                $("#row_"+id+" td:nth-child(2)").html(response.data.title);
                $("#row_"+id+" td:nth-child(3)").html(response.data.description);
              } else {
                $('table tbody').prepend('<tr id="row_'+response.data.id+'"><td>'+response.data.id+'</td><td>'+response.data.title+'</td><td>'+response.data.description+'</td><td><a href="javascript:void(0)" data-id="'+response.data.id+'" onclick="editPost(event.target)" class="btn btn-info">Edit</a></td><td><a href="javascript:void(0)" data-id="'+response.data.id+'" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td></tr>');
              }
              $('#title').val('');
              $('#description').val('');

              $('#post-modal').modal('hide');
            }
        },
        error: function(response) {
          $('#titleError').text(response.responseJSON.errors.title);
          $('#descriptionError').text(response.responseJSON.errors.description);
        }
      });
    }

  function delete(event) {
    var id  = $(event).data("id");
    let _url = `/voluntary/${id}`;
    let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: _url,
        type: 'DELETE',
        data: {
          _token: _token
        },
        success: function(response) {
          $("#row_"+id).remove();
        }
      });
    }
}
</script>
<script>
  $('#laravel_crud').DataTable();
  function addPost() {
    $('#post-modal').modal('show');
  }

  function editPost(event) {
    var id  = $(event).data("id");
    let _url = `/posts/${id}`;
    $('#titleError').text('');
    $('#descriptionError').text('');
    
    $.ajax({
      url: _url,
      type: "GET",
      success: function(response) {
          if(response) {
            $("#post_id").val(response.id);
            $("#title").val(response.title);
            $("#description").val(response.description);
            $('#post-modal').modal('show');
          }
      }
    });
  }

  function createPost() {
    var title = $('#title').val();
    var description = $('#description').val();
    var id = $('#post_id').val();

    let _url     = `/posts`;
    let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: _url,
        type: "POST",
        data: {
          id: id,
          title: title,
          description: description,
          _token: _token
        },
        success: function(response) {
            if(response.code == 200) {
              if(id != ""){
                $("#row_"+id+" td:nth-child(2)").html(response.data.title);
                $("#row_"+id+" td:nth-child(3)").html(response.data.description);
              } else {
                $('table tbody').prepend('<tr id="row_'+response.data.id+'"><td>'+response.data.id+'</td><td>'+response.data.title+'</td><td>'+response.data.description+'</td><td><a href="javascript:void(0)" data-id="'+response.data.id+'" onclick="editPost(event.target)" class="btn btn-info">Edit</a></td><td><a href="javascript:void(0)" data-id="'+response.data.id+'" class="btn btn-danger" onclick="deletePost(event.target)">Delete</a></td></tr>');
              }
              $('#title').val('');
              $('#description').val('');

              $('#post-modal').modal('hide');
            }
        },
        error: function(response) {
          $('#titleError').text(response.responseJSON.errors.title);
          $('#descriptionError').text(response.responseJSON.errors.description);
        }
      });
  }

  function deletePost(event) {
    var id  = $(event).data("id");
    let _url = `/Voluntary/${id}`;
    let _token   = $('meta[name="csrf-token"]').attr('content');

      $.ajax({
        url: _url,
        type: 'DELETE',
        data: {
          _token: _token
        },
        success: function(response) {
          $("#row_"+id).remove();
        }
      });
  }

</script>

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