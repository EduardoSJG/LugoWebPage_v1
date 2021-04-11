@extends('template.master')
@section('contenido_central')

<!--======= HOME MAIN SLIDER =========-->
<section class="home-slider"> 
    <!-- Slider Loader -->
    <div id="loader" class="hom-slie">
        <div class="tp-loader spinner0"> <span class="dot1"></span> <span class="dot2"></span> <span class="bounce1"></span> <span class="bounce2"></span> <span class="bounce3"></span> </div>
    </div>
    
    <!-- Slider Start -->
    <div class="tp-banner-container">
      <div class="tp-banner">
        <ul>
          <!-- SLIDE  -->
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="{!! asset('images/slides/slide-1C.jpg') !!}"  alt="slider"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            <!-- LAYERS --> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sfb font-bold tp-resizeme" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="-40" 
                data-speed="500" 
                data-start="1000" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.0" 
                data-endelementdelay="0" 
                data-endspeed="300"
                style="z-index: 5; color:#fff; font-size:45px; max-width: auto; max-height: auto; white-space: nowrap;">TRUE TOUR</div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfb font-bold tp-resizeme" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="30" 
                data-speed="500" 
                data-start="1500" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.0" 
                data-endelementdelay="0.0" 
                data-endspeed="300" 
                style="z-index: 6; color:#fff; font-size:45px; max-width: auto; max-height: auto; white-space: nowrap;">21 de Febrero</div>
            
            <!-- LAYER NR. 3 -->
            <div class="tp-caption font-lora letter-space-4 sfb tp-resizeme" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="90" 
                data-speed="500" 
                data-start="1900" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 7; font-size:14px; color:#fff; max-width: auto; max-height: auto; white-space: nowrap;">Lola Club | Allison | Cluster Trees | Y más... </div>
            
            <!-- LAYER NR. 4 -->
            <div class="tp-caption font-lora letter-space-4 sfb tp-resizeme" 
                data-x="center" data-hoffset="0" 
                data-y="center" data-voffset="180" 
                data-speed="500" 
                data-start="2400" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 7;"><a href="#." class="btn margin-right-20">LEER MÁS</a> <a href="#." class="btn btn-dark margin-left-20">COMPRAR AHORA</a> </div>
          </li>
          <!-- SLIDE  -->
          <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" > 
            <!-- MAIN IMAGE --> 
            <img src="{!! asset('images/slides/slide-2A.jpg') !!}"  alt="slider"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
            <!-- LAYERS {!! asset('') !!}--> 
            
            <!-- LAYER NR. 1 -->
            <div class="tp-caption sfb font-bold tp-resizeme" 
                data-x="left" data-hoffset="100" 
                data-y="center" data-voffset="-40" 
                data-speed="500" 
                data-start="1000" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.0" 
                data-endelementdelay="0" 
                data-endspeed="300"
                style="z-index: 5; color:#fff; font-size:40px; max-width: auto; max-height: auto; white-space: nowrap;">NUEVO DISCO</div>
            
            <!-- LAYER NR. 2 -->
            <div class="tp-caption sfb font-bold tp-resizeme" 
                data-x="left" data-hoffset="100" 
                data-y="center" data-voffset="30" 
                data-speed="500" 
                data-start="1500" 
                data-easing="Power3.easeInOut" 
                data-splitin="chars" 
                data-splitout="none" 
                data-elementdelay="0.0" 
                data-endelementdelay="0.0" 
                data-endspeed="300" 
                style="z-index: 6; color:#fff; font-size:40px; max-width: auto; max-height: auto; white-space: nowrap;">Verano del 2021</div>
            <div class="tp-caption font-lora letter-space-4 sfb tp-resizeme" 
                data-x="left" data-hoffset="100" 
                data-y="center" data-voffset="130" 
                data-speed="500" 
                data-start="1900" 
                data-easing="Power3.easeInOut" 
                data-splitin="none" 
                data-splitout="none" 
                data-elementdelay="0.1" 
                data-endelementdelay="0.1" 
                data-endspeed="300" 
                style="z-index: 7;"><a href="#." class="btn margin-right-20">LEER MÁS</a> <a href="#." class="btn btn-dark margin-left-20">PREVENTA</a> </div>
          </li>          
        </ul>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content">
    <div class="container">
      <section class="about light-gray-bg">
        <ul class="row">
          <li class="col-md-6 no-padding"> <img class="img-responsive" src="{!! asset('images/about-img.jpg') !!}" alt=""> </li>
          <li class="col-md-6 no-padding">
            <div class="padding-50 padding-top-100 relative text-left"> <img src="{!! asset('images/icon-1.png') !!}" alt="" >
              <h3>LUGO Mx</h3>
              <p class="font-lora font-italic padding-left-30 margin-top-30">
                LUGO es un grupo de Rock/Pop juvenil que nace con la idea de
                seguir un sueño.
                Llegar a cuanta gente sea posible con nuestra música, con la
                experiencia de vivir un espectáculo de calidad profesional.</p>
            </div>
          </li>
        </ul>
        <ul class="row no-margin">
          <li class="col-md-6 no-padding">
            <div class="brand padding-50 padding-bottom-20">
              <h6 class="font-montserrat font-normal text-uppercase font-12px">IDEOLOGÍA</h6>
              <p class="font-lora font-14px font-italic margin-top-20">
                “La música es sinónimo de libertad, de tocar lo que quieras y como quieras, 
                siempre que sea bueno y tenga pasión, que la música sea el alimento del amor”
                .- Kurt Cobain</p>
            </div>
          </li>
          <li class="col-md-6 no-padding">
            <div class="services" style="background:url(images/bg/bg-1.jpg) no-repeat; background-size:cover;">
              <ul class="row no-margin">
                <li class="col-sm-4">
                  <div class="position-center-center">
                    <div class="icon"><i class="fa fa-spotify" aria-hidden="true"></i>
                      <h6>Dos Lunas</h6>
                    </div>
                  </div>
                </li>
                <li class="col-sm-4">
                  <div class="position-center-center">
                    <div class="icon"><i class="fa fa-spotify" aria-hidden="true"></i>
                      <h6>Disco 2</h6>
                    </div>
                  </div>
                </li>
                <li class="col-sm-4">
                  <div class="position-center-center">
                    <div class="icon"><i class="fa fa-spotify" aria-hidden="true"></i>
                      <h6>Disco 3</h6>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </section>
    </div>
    
    <!-- Latest Work -->
    <div class="tittle blue-bg height-200">
      <div class="container">
        <div class="row">
          <div class="col-md-6 pull-right padding-left-50">
            <h4>Galería</h4>
            <ul class="portfolio-filter margin-top-20">
              <li class="filter" data-filter="all">Todo</li>
              <li class="filter" data-filter=".brand">Mike</li>
              <li class="filter" data-filter=".design">George</li>
              <li class="filter" data-filter=".photo">Eddy</li>
              <li class="filter" data-filter=".visual">Tony</li>
              <li class="filter" data-filter=".visual">Leo</li>
              <li class="filter" data-filter=".visual">Nacho</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
    <!-- PORTFOLIO -->
    <div class="container">
      <div class="portfolio"> 
        
        <!-- PORTFOLIO ITEMS -->
        <div id="Container" class="with-space">
          <div class="row no-margin"> 
            
            <!-- ITEM -->
            <article class="portfolio-item mix col-md-6 no-padding brand design up-tittle">
              <div class="portfolio-image"> <a href="#."> <img class="img-responsive" src="{!! asset('images/portfolio/img-1.jpg') !!}" alt=""> </a>
                <div class="portfolio-overlay"> <a href="#." class="go-on"><i class="fa fa-long-arrow-right"></i></a>
                  <div class="position-center-center">
                    <h6><a href="#.">Mike</a></h6>
                    <span><a href="#." class="font-lora font-italic">Redes Sociales</a></span> </div>
                </div>
              </div>
            </article>
            
            <!-- ITEM -->
            <article class="portfolio-item mix col-md-3 brand visual">
              <div class="portfolio-image"> <a href="#."> <img class="img-responsive" src="{!! asset('images/portfolio/img-2.jpg') !!}" alt=""> </a>
                <div class="portfolio-overlay"> <a href="#." class="go-on"><i class="fa fa-long-arrow-right"></i></a>
                  <div class="position-center-center">
                    <h6><a href="#.">George</a></h6>
                    <span><a href="#." class="font-lora font-italic">Redes Sociales</a></span> </div>
                </div>
              </div>
            </article>
            
            <!-- ITEM -->
            <article class="portfolio-item mix col-md-3  photo visual">
              <div class="portfolio-image"> <a href="#."> <img class="img-responsive" src="{!! asset('images/portfolio/img-3.jpg') !!}" alt=""> </a>
                <div class="portfolio-overlay"> <a href="#." class="go-on"><i class="fa fa-long-arrow-right"></i></a>
                  <div class="position-center-center">
                    <h6><a href="#.">Eddy</a></h6>
                    <span><a href="#." class="font-lora font-italic">Redes Sociales</a></span> </div>
                </div>
              </div>
            </article>
            
            <!-- ITEM -->
            <article class="portfolio-item mix col-md-3 brand design photo">
              <div class="portfolio-image"> <a href="#."> <img class="img-responsive" src="{!! asset('images/portfolio/img-4.jpg') !!}" alt=""> </a>
                <div class="portfolio-overlay"> <a href="#." class="go-on"><i class="fa fa-long-arrow-right"></i></a>
                  <div class="position-center-center">
                    <h6><a href="#.">Tony</a></h6>
                    <span><a href="#." class="font-lora font-italic">Redes Sociales</a></span> </div>
                </div>
              </div>
            </article>
            
            <!-- VIEW ALL -->
            <article class="portfolio-item mix col-md-3">
              <div class="portfolio-image"> 
                
                <a href="#."> 
                  <img class="img-responsive" src="{!! asset('images/portfolio/view-all.jpg') !!}" alt=""> 
                </a>
              
                <div class="position-center-center">
                  <h6 class="no-margin font-normal"><a href="#." class="no-margin font-normal">VER MÁS</a></h6>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Testimonial -->
    <section class="testimonial">
      <div class="container"> 
        
        <!-- Test Slider -->
        <div class="testi">
          <div class="texti-slide"> 
            
            <!-- Slider 1 -->
            <div class="media padding-10 padding-right-100"> 
              <!-- Avatar -->
              <div class="media-left"> <a class="avatar" href="#"> <img class="media-object" src="{!! asset('images/avatar.jpg') !!}" alt=""> </a> </div>
              <!-- Content -->
              <div class="media-body relative padding-left-10"> <i class="fa fa-quote-left quote"></i>
                <h5>Mauricio Rodríguez</h5>
                <span>Productor & Coach</span>
                <p class="font-italic font-lora"> “El artista no es nada sin el don pero el
                   don no es nada sin el trabajo”.</p>
              </div>
            </div>
            
            <!-- Slider 2 -->
            <div class="media padding-10 padding-right-100"> 
              <!-- Avatar -->
              <div class="media-left"> <a class="avatar" href="#"> <img class="media-object" src="{!! asset('images/avatar.jpg') !!}" alt=""> </a> </div>
              <!-- Content -->
              <div class="media-body relative padding-left-10"> <i class="fa fa-quote-left quote"></i>
                <h5>Mike Soto</h5>
                <span>Lider & Productor</span>
                <p class="font-italic font-lora"> “Lo más importante que busco en un músico es que sepa escuchar”.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Latest NEWS -->
    <section class="news"> 
      <!-- TITTLE -->
      <div class="tittle blue-bg  height-200">
        <div class="container">
          <div class="row">
            <div class="col-md-6 padding-right-50">
              <h4 class="margin-bottom-15">Últimas Noticias</h4>
              <p class="font-italic font-lora">Eventos y lanzamientos confirmados así como noticias relacionadas.</p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- News Section -->
      <div class="container">
        <div class="row">
          <div class="col-md-6"> 
            
            <!-- News -->
            <div class="media news-post"> 
              <!-- Avatar -->
              <div class="media-left"> <a class="avatar" href="#"> <img class="media-object" src="{!! asset('images/blog/img-1.jpg') !!}" alt=""> </a> </div>
              <!-- Content -->
              <div class="media-body relative padding-left-10"> <a href="#." class="news-tittle">LUGO TRUE TOUR</a>
                <p class="font-italic font-lora">La primera presentación desde la cuarentena</p>
                <a href="#." class="read-more">Leer más...</a> </div>
            </div>
            <!-- News -->
            <div class="media news-post"> 
              <!-- Avatar -->
              <div class="media-left"> <a class="avatar" href="#"> <img class="media-object" src="{!! asset('images/blog/img-2.jpg') !!}" alt=""> </a> </div>
              <!-- Content -->
              <div class="media-body relative padding-left-10"> <a href="#." class="news-tittle">Nuevo disco en 2021</a>
                <p class="font-italic font-lora">Más canciones con un estilo muy funk para bailar</p>
                <a href="#." class="read-more">Leer más...</a> </div>
            </div>
            <!-- News -->
            <div class="media news-post"> 
              <!-- Avatar -->
              <div class="media-left"> <a class="avatar" href="#"> <img class="media-object" src="{!! asset('images/blog/img-3.jpg') !!}" alt=""> </a> </div>
              <!-- Content -->
              <div class="media-body relative padding-left-10"> <a href="#." class="news-tittle">Confort Bar</a>
                <p class="font-italic font-lora">Un bar muy recurrido por el grupo en el centro de Metepec</p>
                <a href="#." class="read-more">Leer más...</a> </div>
            </div>
          </div>
          
          <!-- Right Sec -->
          <div class="col-md-6"> 
            
            <!-- Large Post -->images/blog/
            <div class="relative big-post up-tittle"> <img class="img-responsive" src="{!! asset('images/blog/img-4.jpg') !!}" alt="" >
              <div class="position-center-center text-center col-md-12 padding-50"> <img src="{!! asset('images/video-icon.png') !!}" alt="" > <a href="#." class="news-tittle">En estudio</a>
                <p class="font-lora font-italic">Grabaciones  |  Imagenes  |  Entrevistas</p>
                <a href="#." class="btn margin-top-20">LEER MÁS</a> </div>
            </div>
            
            <!-- CLients -->
            <div class="sec-clients light-gray-bg height-200"> 
              
              <!-- Clients images -->
              <div class="clients text-center position-center-center col-md-12 no-padding">
                <ul class="row">
                  <li class="col-sm-4"> <img src="{!! asset('images/client-1.png') !!}" alt="" > </li>
                  <li class="col-sm-4"> <img src="{!! asset('images/client-2.png') !!}" alt="" > </li>
                  <li class="col-sm-4"> <img src="{!! asset('images/client-3.png') !!}" alt="" > </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<!-- End Content --> 

@endsection()