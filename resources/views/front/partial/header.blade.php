   <header class="main-header">
    	
    	@include('front.partial.top_header')
        
        
        <!-- Main Box -->
    	<div class="main-box">
        	<div class="auto-container">
            	<div class="outer-container clearfix">
                    <!--Logo Box-->
                    <div class="logo-box">
                        <div class="logo"><a href="/"><img src="{{asset('front/img/logo.jpg')}}" width="120" alt=""></a></div>
                    </div>
                    
                    <!--Nav Outer-->
                    @include('front.partial.menu')
                        
                    </div><!--Nav Outer End-->
                    
                    
                    
                    <!-- Hidden Nav Toggler -->
                    <div class="nav-toggler">
                    <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                    </div><!-- / Hidden Nav Toggler -->
                    
            	</div>    
            </div>
        </div>
    
    </header>
@include('front.partial.menu_responsive')