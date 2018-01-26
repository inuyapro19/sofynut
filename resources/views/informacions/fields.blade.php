<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono', 'Telefono:') !!}
    {!! Form::text('telefono', null, ['class' => 'form-control']) !!}
    <div class="help-block"><span>Ingrese numero de teléfono sin el +56</span></div>
</div>

<!-- Telefono2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono2', 'Teléfono #2:') !!}
    {!! Form::text('telefono2', null, ['class' => 'form-control']) !!}
</div>

<!-- Quienes Somos Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('quienes_somos', 'Quienes Somos:') !!}
    {!! Form::textarea('quienes_somos', null, ['class' => 'form-control','id'=>'quienes_somos']) !!}
</div>

<!-- Direcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('direcion', 'Direcion:') !!}
    {!! Form::text('direcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Facebook Field -->
<div class="form-group col-sm-6">
    {!! Form::label('facebook', 'Facebook:') !!}
    {!! Form::text('facebook', null, ['class' => 'form-control','placeholder'=>'Ingrese la Url']) !!}
</div>

<!-- Twitter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('twitter', 'Twitter:') !!}
    {!! Form::text('twitter', null, ['class' => 'form-control','placeholder'=>'Ingrese la Url']) !!}
</div>

<!-- Instagram Field -->
<div class="form-group col-sm-6">
    {!! Form::label('instagram', 'Instagram:') !!}
    {!! Form::text('instagram', null, ['class' => 'form-control','placeholder'=>'Ingrese la Url']) !!}
</div>

<!-- Mapa Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('mapa', 'Mapa:') !!}
    {!! Form::textarea('mapa', null, ['class' => 'form-control','placeholder'=>'Ingrese el iframe del mapa']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('productos.index') !!}" class="btn btn-default">Volver</a>
</div>
