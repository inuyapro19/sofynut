@extends('front.layout')
@section('titulo','Contacto')
@section('content')

   <section class="page-title" style="background-image:url({{asset('front/img/banner_uvas.jpg')}});">
        <div class="auto-container">
            <h1>Productos </h1>
        </div>
    </section>
 <!--Sidebar Page-->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Content Side-->      
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    
                    <!--Blog Classic-->
                    <section class="blog-classic-view post-details">
                       
                        <!--News Style One-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="blog-single.html"><img src="{{asset('upload/producto/'.$pro->imagen)}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <h3><a href="">{{$pro->nombre}}</a></h3>
                                    <div class="post-content">
                                    	<div class="text">
                                            {!! $pro->descripcion !!}
                                        </div>
                                        
                               
                                        
                                       
                                        
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                        
                       
                        
                    
                    </section>
                
                </div><!--End Content Side-->   
                
                <!--Sidebar-->      
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar">                       
                   
                        
                        <!-- Popular Categories -->
                        <div class="widget popular-categories sidebar-widget">
                            <div class="sidebar-title"><h3>Productos</h3></div>
                            
                            <ul class="list">
                                @foreach($producto as $prod)
                                <li><a href="{{route('producto_single',$prod->slug)}}">{{$prod->nombre}}</a></li>
                                @endforeach
                            </ul>
                            
                        </div>                     
                                          
                        
                        
                      
                    </aside>
                </div><!--End Sidebar-->      
                
            </div>
        </div>
    </div>


@stop