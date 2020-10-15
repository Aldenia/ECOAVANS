<div class="form-group">
 {!! Form::label('id', 'ID')!!}
 {!! Form::text('id', null, ['class' => 'form-control']) !!}
</div>


        <div class="form-group">
             {!! Form::label('identification', 'identification')!!}
             {!! Form::text('identification', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
             {!! Form::label('name', 'name')!!}
             {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
             {!! Form::label('lastname', 'lastname')!!}
             {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
             {!! Form::label('reservationDate', 'reservationDate')!!}
             {!! Form::text('reservationDate', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
             {!! Form::label('reservationHour', 'reservationHour')!!}
             {!! Form::text('reservationHour', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
             {!! Form::label('adultQuantity', 'adultQuantity')!!}
             {!! Form::text('adultQuantity', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
             {!! Form::label('childrenQuantity', 'childrenQuantity')!!}
             {!! Form::text('childrenQuantity', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
             {!! Form::label('tourType', 'tourType')!!}
             {!! Form::text('tourType', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
             {!! Form::label('tourPrice', 'tourPrice')!!}
             {!! Form::text('tourPrice', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
             {!! Form::label('email', 'email')!!}
             {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
             {!! Form::label('phone', 'phone')!!}
             {!! Form::text('phone', null, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
             {!! Form::submit('ENVIAR', ['class'=>'btn btn-primary'])!!}
        </div>