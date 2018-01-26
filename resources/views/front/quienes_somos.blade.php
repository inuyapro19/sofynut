@extends('front.layout')
@section('titulo','QUIENES SOMOS')
@section('content')
<!--Page Title-->
    <section class="page-title" style="background-image:url({{asset('front/img/banner_uvas.jpg')}});">
        <div class="auto-container">
            <h1>Quiénes Somos</h1>
        </div>
    </section>


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
                                        	{!! $info->quienes_somos !!}
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

  <!--End About-->


@stop