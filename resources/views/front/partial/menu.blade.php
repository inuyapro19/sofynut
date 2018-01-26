                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->    	
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                
                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        <li class="activate"><a href="{{route('inicio')}}">Inicio</a></li>

                                        <li><a href="{{route('nosostros')}}">Quiénes Somos</a></li>                                  
                                       
                                        <li class="dropdown"><a href="#">Productos</a>
                                            <ul>
                                                @foreach($menu as $prod_menu)
                                                <li><a href="{{route('producto_single',$prod_menu->slug)}}">{{$prod_menu->nombre}}</a></li>
                                                @endforeach                                           
                                            </ul>
                                        </li>
                                       
                                        <li><a href="{{route('form_contacto')}}">Contacto</a></li>
                                     </ul>
                                     
                                   
                                </div>
                            </nav><!-- Main Menu End-->