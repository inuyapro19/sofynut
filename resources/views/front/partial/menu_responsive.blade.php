 <!-- Hidden Navigation Bar -->
    <section class="hidden-bar right-align">
        
        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
        
            <!-- .logo -->
            <div class="logo text-center">
                <a href="index.html"><img src="images/logo-4.png" alt=""></a>			
            </div><!-- /.logo -->
            
            <!-- .Side-menu -->
            <div class="side-menu">
            <!-- .navigation -->
                <ul class="navigation">
                     <li><a href="{{route('inicio')}}">Inicio</a></li>
                    <li><a href="{{route('nosostros')}}">Quiénes Somos</a></li>                 
                      <li class="dropdown"><a href="#">Productos</a>
                                            <ul>
                                                @foreach($menu as $resp)
                                                <li><a href="{{route('producto_single',$resp->slug)}}">{{$resp->nombre}}</a></li>
                                                @endforeach                                           
                                            </ul>
                                        </li>
                                       
                    <li><a href="{{route('form_contacto')}}">Contacto</a></li>
                      
                </ul>
            </div><!-- /.Side-menu -->
        
          
        
        </div><!-- / Hidden Bar Wrapper -->
    </section>
    <!-- / Hidden Bar -->