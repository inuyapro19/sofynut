<!--Main Slider-->
    <section class="main-slider" id="scroll-section-one" data-start-height="700" data-slide-overlay="yes">
    	
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                	@foreach($slider as $sli )
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{asset('upload/slider/'.$sli->imagen)}}"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="{{asset('upload/slider/'.$sli->imagen)}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="-140"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><img src="{{asset('front/images/main-slider/leaf-icon.png')}}" alt=""></figure></div>                  
                  
                    
                    
                    </li>
                    @endforeach
               
                    
                </ul>
                
            	<div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
    