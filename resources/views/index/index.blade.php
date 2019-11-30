<!doctype html>
<html lang="es">

<head>
<link rel="stylesheet" href="estilos/estilos.css">

<meta charset="utf-8">
<title>Constructora La Inquebrantable</title>
<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/estilos_index/owl/owl.carousel.min.css">
  
<link rel="stylesheet" href="css/estilos_index/owl/owl.theme.default.min.css">
<link rel="stylesheet" href="/estilos/estilosssss.css">
</head>

<body>
  <header>
  <div class="menu">
    <div class="contenido">
      <p class="logo">Constructora La Inquebrantable</p>
      <nav>
        <ul>
          <li><a href="{{ route('login') }}">Login</a></li>
          <li><a href="{{ route('register') }}">Registro usuarios</a></li>    
          <li><a href="{{route('reg')}}">Registro obras</a></li>
          <li><a href="{{route('histo')}}">Historial</a></li>
          <li><a href="{{route('deta')}}">Detalles</a></li>
          <li><a href="{{route('rep')}}">Reportes</a></li>
          <li><a href="{{route('prod')}}">Productos</a></li>
        </ul>
      </nav>
    </div>
  </div>
   <div class ="Contenedor" id="contenedor-titulo-flex">
    <div class="Contenedor-titulo">
    <h1>Constructora la Inquebrantable</h1>
    <h2>Edificacion & Rehabilitacion</h2>
    <a class="boton1" href="">Ver nuestros trabajos</a>
    </div>


   </div>


  </header>

<main>
<section id="sobre-mi">
  <div class="contenedor">
    <h3>Sobre Nosotros</h3>
    <div class="contenedor-sobremi">
      <div class="computadoras">
<img src="imagenes/const.png" alt="">

      </div>

        <div class="texto">
<p>Somos una empresa de consultoría en el área de la ingeniería, desarrollando anteproyectos, proyectos ejecutivos, proyectos arquitectónicos, y proyectos industriales, satisfaciendo siempre con las necesidades de nuestros clientes, mediante la construcción y montaje de obras en tiempo y forma, desarrollando proyectos dirigidos a los sectores: Comercial, industrial, residencial y hospitalario.</p>


        <a href="">Ver nuestros Trabajos</a>
        </div>



    </div>
  </div>
</section>
<section id="servicios">
  <div class="contenedor">
    <h3>¿Por que Elegirnos?</h3>
    <div class="contenedor-servicios">
      <div class="Servicio violeta">
        <h4>ANÁLISIS Y PLANEACIÓN</h4>
        <p>Nuestro equipo de trabajo, Arquitectos e Ingenieros visitan el lugar donde se pretende desarrollar el proyecto.</p>
        <img class="icono"src="imagenes/monitor.png" alt="">
        <img class="ondas" src="imagenes/waves.png" alt="">
      </div>
      <div class="Servicio celeste">
        <h4>PERSONAL CALIFICADO</h4>
        <p>Contamos con una plantilla de más de 10 ingenieros y 10 arquitectos siempre innovando y haciendo realidad tu proyecto.</p>
        <img class="icono" src="imagenes/celular.png" alt="">
        <img class="ondas" src="imagenes/waves.png" alt="">
      </div>
      <div class="Servicio violeta">
        <h4>ESPECIALISTAS EN COSTOS</h4>
        <p>Contamos con un aréa específica para que tus proyectos tengan un costo accesible para tus necesidades</p>
        <img class="icono" src="imagenes/estadistica.png" alt="">
        <img class="ondas" src="imagenes/waves.png" alt="">
      </div>
      <div class="Servicio celeste">
        <h4>PROYECTOS E INGENIERIA A DETALLE</h4>
        <p>Nuestros ingenieros reunen todos lo necesario para la construcción y montaje de la obra en tiempo y forma.</p>
        <img class="icono" src="imagenes/mante.png" alt="">
        <img class="ondas" src="imagenes/waves.png" alt="">
      </div>
      <div class="Servicio violeta">
        <h4>CALIDAD</h4>
        <p>Somos una empresa de consultoría que brinda servicios de alta calidad, eficiencia y rentabilidad, con personal altamente capacitado para superar las expectativas de nuestros clientes.</p>
        <img class="icono" src="imagenes/mega.png" alt="">
        <img class="ondas" src="imagenes/waves.png" alt="">
      </div>
    </div>
  </div>
</section>
<section id="mis-trabajos">
  <div class="contenedor">
    <div class="owl-carousel owl-theme">
    <div class="item"><h4>1</h4></div>
    <div class="item"><h4>2</h4></div>
    <div class="item"><h4>3</h4></div>
    <div class="item"><h4>4</h4></div>
    <div class="item"><h4>5</h4></div>
    <div class="item"><h4>6</h4></div>
    <div class="item"><h4>7</h4></div>
    <div class="item"><h4>8</h4></div>
    <div class="item"><h4>9</h4></div>
    <div class="item"><h4>10</h4></div>
    <div class="item"><h4>11</h4></div>
    <div class="item"><h4>12</h4></div>
</div>
  </div>
</section>




</main>


<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

<script src="css/estilos_index/owl/owl.carousel.min.js"></script>
<script type="text/javascript">
$('.owl-carousel').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  dots:false,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:3
      },
      1000:{
          items:5
      }
  }
})
</script>

</body>

</html>
