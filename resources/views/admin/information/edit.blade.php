<div class="panel-body">
 
    <section class="example mt-4">
 
        <form method="POST" action="{{ route('admin/information/update',$information->id) }}" role="form" enctype="multipart/form-data">
 
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
            
            @include('admin.information.frm.prt')
 
        </form>
 
    </section>
 
</div>