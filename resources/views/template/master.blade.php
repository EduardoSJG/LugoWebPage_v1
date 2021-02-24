@include ('template.encabezado')
<!-- Page Wrapper -->
<div id="wrap"> 
    @include('template.menu')
    @yield('contenido_central')
</div>
@include('template.pie')