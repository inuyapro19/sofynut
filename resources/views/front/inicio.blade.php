@extends('front.layout')
@section('titulo','Inicio')
@section('content')

  
	@include('front.include.slider')

 <!--About Farm Section-->
    <section class="about-farm">
        <div class="auto-container">
            <!--Section Title-->
            <div class="sec-title-two">
                <h2>Acerca de SofyNut</h2>
            </div>
                        
            <div class="row clearfix">
                <!--Column-->
                <div class="column col-lg-5 col-md-4 col-sm-12 col-xs-12">
                    <figure class="image-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms"><img src="{{asset('front/img/uvas.jpg')}}"  alt=""></figure>
                </div>
                <!--Column-->
                <div class="column col-lg-7 col-md-8 col-sm-12 col-xs-12">
                    <div class="tabs-box tabs-style-one">
                    	<div class="row clearfix">                       	
                                                   
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                <!--Tabs Content-->
                                <div class="tabs-content">
                                    
                                
                                    
                                    <!--Tab / Active Tab-->
                                    <div class="tab active-tab" id="tab-two">
                                    	<h3>Acerca de SofyNut </h3>
                                        <div class="content">
                                        {!!$info->quienes_somos !!}
                                        </div>
                                       
                                    </div>
                                    
                                  
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

  <!--En About-->


 <!--Products Section Two-->
    <section class="products-section-two">
    	<div class="auto-container">
        	<!--Section Title-->
            <div class="sec-title-one">
                <h2>Nuestros Productos</h2>
            </div>
            
        	<div class="row clearfix">
                @foreach($pro as $prod)
            	<!--Product Tyle TWo-->
            	<div class="product-style-two col-md-6 col-sm-6 col-xs-12">
                    <div class="inner-box">
                    	<div class="clearfix">
                            <!--Image Column-->
                            <div class="image-column col-lg-5 col-md-12 col-sm-12 col-xs-12"><figure class="image"><a href="shop-single.html"><img src="{{asset('upload/producto/'.$prod->imagen)}}" alt=""></a></figure></div>
                            <!--Content Column-->
                            <div class="content-column col-lg-7 col-md-12 col-sm-12 col-xs-12">
                                <div class="inner">
                                    <h3>{{$prod->nombre}}</h3>
                                    
                                    <div class="text">{!! $prod->descripcion !!}</div>
                                    <div class="link-box"><a href="{{route('producto_single',$prod->slug)}}" class="theme-btn btn-style-four">Ver Más</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach         
                
              
                
            </div>
            
           
        </div>
    </section>

  <!--Producto Section two-->
 @include('front.partial.suscripcion')
@stop