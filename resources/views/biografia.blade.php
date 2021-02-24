@extends('template.master')
@section('contenido_central')

<!--======= HOME MAIN SLIDER =========-->
 <section class="sub-bnr parallax-bg" style="background:url({!! asset('images/bg/sub-bnr2.jpg') !!}) no-repeat;">
    <div class="position-center-center col-md-12">
      <div class="container">
        <h3>Biografía</h3>
        <div class="text-center"> <img src="{!! asset('images/sub-brn-anc.png') !!}" alt="" > </div>
        <ul class="linkin">
          <li><a href="#.">Inicio</a>-</li>
          <li><a href="#.">Biografía</a></li>
        </ul>
      </div>
    </div>
  </section>
  
  <!-- Content -->
  <div id="content">
    <section class="about light-gray-bg">
      <div class="container">
        <ul class="row">
          
          <!-- Img -->
          <li class="col-md-6 no-padding"> <img class="img-responsive" src="{!! asset('images/about-img.jpg') !!}" alt=""> </li>
          <!-- Content -->
          <li class="col-md-6 no-padding">
            <div class="padding-50 padding-top-100 relative text-left"> <img src="{!! asset('images/icon-1.png') !!}" alt="">
              <h3>Profesionales con gran impulso cultural</h3>
              <p class="font-lora font-italic padding-left-30 margin-top-30">LUGO es un grupo de Rock/Pop juvenil que nace con la idea de
seguir un sueño.
Llegar a cuanta gente sea posible con nuestra música, con la
experiencia de vivir un espectáculo de calidad profesional.
Unificando conceptos muy diversos dentro del Rock/Pop LUGO
logra darle un sonido singular a lo extraordinario.</p>
            </div>
          </li>
        </ul>
      </div>
    </section>
    
    <!-- FACTS -->
    <section class="facts parallax-bg counters padding-top-50 padding-bottom-50" style="background:url({!! asset('images/bg/facts-bg.jpg') !!}) repeat">
      <div class="container">
        <ul class="row">
          
          <!-- FACTS -->
          <li class="col-md-3">
            <article>
              <h6><span class="font-lora">01</span> awards wins</h6>
              <i class="fa fa-trophy"></i> <span class="count count1"> 05</span> </article>
          </li>
          <!-- FACTS -->
          <li class="col-md-3">
            <article>
              <h6><span class="font-lora">02</span> Audiencia</h6>
              <i class="fa fa-users"></i> <span class="count count2"> 1250</span> </article>
          </li>
          <!-- FACTS -->
          <li class="col-md-3">
            <article>
              <h6><span class="font-lora">03</span> Oyentes Online</h6>
              <i class="fa fa-music"></i> <span class="count count3"> 032</span> </article>
          </li>
          <!-- FACTS -->
          <li class="col-md-3">
            <article>
              <h6><span class="font-lora">04</span> Eventos</h6>
              <i class="fa fa-calendar"></i> <span class="count count4"> 04</span> </article>
          </li>
        </ul>
      </div>
    </section>
    
    <!-- TEAM -->
    <section class="team">
      <div class="container">
        <ul class="row no-margin">
          
          <!-- TEAM TEXT -->
          <li class="col-md-6">
            <article>
              <div class="position-center-center col-md-12 padding-left-50 padding-right-50">
                <h6>‘‘ Más que una banda, creamos música y con ella creamos espíritu.’’
                </h6>
                <p class="font-italic font-lora white-text">Mike Soto - Cantante & Productor</p>
              </div>
            </article>
          </li>
          
          <!-- MEMBER -->
          <li class="col-md-3">
            <article> <img class="img-responsive" src="{!! asset('images/portfolio/img-1.jpg') !!}" alt="" >
              <div class="info-hover">
                <div class="position-center-center col-md-12">
                  <h5>Mike Soto</h5>
                  <span>Cantante</span>
                  <hr>
                  <ul class="social-icons">
                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#."><i class="fa fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </article>
          </li>
          
          <!-- MEMBER -->
          <li class="col-md-3">
            <article> <img class="img-responsive" src="{!! asset('images/blog/img-4.jpg') !!}" alt="" >
              <div class="info-hover">
                <div class="position-center-center col-md-12">
                  <h5>Mike Soto</h5>
                  <span>Productor</span>
                  <hr>
                  <ul class="social-icons">
                    <li><a href="#."><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#."><i class="fa fa-youtube"></i></a></li>
                  </ul>
                </div>
              </div>
            </article>
          </li>
        </ul>
      </div>
    </section>
    
    <!-- DISCOVER -->
    <section class="discover blue-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h5>DESCUBRE NUESTROS PROYECTOS</h5>
            <p class="font-lora font-italic">Dos Lunas, Producciónes de Impuls Hub. Conjunto de bandas Toluca </p>
          </div>
          <div class="col-md-2"> <a href="#." class="btn btn-dark margin-top-20">more details</a> </div>
        </div>
      </div>
    </section>
  </div>
<!-- End Content --> 
@endsection()