@extends('front.layout')
@section('titulo','Contacto')
@section('content')

   <section class="page-title" style="background-image:url({{asset('front/img/banner_uvas.jpg')}});">
        <div class="auto-container">
            <h1>Contacto</h1>
        </div>
    </section>
    
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<!--Section Title-->
            <div class="sec-title-one">
                <h2>Formulario de Contacto</h2>
            </div>
            
            <div class="contact-form default-form">
                 @include('flash::message')
                {!! Form::open(['route' => 'envio_form','method'=>"post",'id'=>'contact-form']) !!}
                

                    <div class="row clearfix">
                    
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="nombre" value="" placeholder="Nombre*">
                        </div>

                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="apellido" value="" placeholder="Apellidos *">
                        </div>
                        
                        <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="email" name="email" value="" placeholder="Email *">
                        </div>
                        
                         <div class="form-group col-md-6 col-sm-6 col-xs-12">
                            <input type="text" name="telefono" value="" placeholder="Teléfono *">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <select name="persona" class="form-control" id="">
                                <option value="">------------</option>
                                <option value="cliente">Cliente</option>
                                <option value="proveedor">Proveedor</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea name="mensaje" placeholder="Mensaje"></textarea>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <div class="text-center"><button type="submit" class="theme-btn btn-style-one">Enviar</button></div>
                        </div>
                    </div>
               {!! Form::close() !!}
            </div> 
       	</div>
   	</section>


@stop