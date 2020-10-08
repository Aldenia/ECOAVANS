<div class="form-group">
    {!! Form::label('id', 'ID')!!}
    {!! Form::text('id', null, ['class' => 'form-control']) !!}
   </div>
   <div class="form-group">
    {!! Form::label('donorName', 'donorName')!!}
    {!! Form::text('donorName', null, ['class' => 'form-control']) !!}
   </div>
   <div class="form-group">
    {!! Form::label('donationType', 'donationType')!!}
    {!! Form::text('donationType', null, ['class' => 'form-control']) !!}
   </div>

   <div class="form-group">
    {!! Form::label('incomes_id', 'incomes_id')!!}
    {!! Form::text('incomes_id', null, ['class' => 'form-control']) !!}
   </div>

   <div class="form-group">
    {!! Form::submit('ENVIAR', ['class'=>'btn btn-primary'])!!}
   </div>