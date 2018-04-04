<<?php 
session_start();
 ?>
<!DOCTYPE html>
<!--
	Synchronous by TEMPLATED    templated.co @templatedco    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)-->
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>FORMULARIO</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"

      type="text/css">
    <!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/skel.min.js"></script>
    <script src="js/skel-panels.min.js"></script>
    <script src="js/init.js"></script> <noscript>
			<link rel="stylesheet" href="css/skel-noscript.css">
			<link rel="stylesheet" href="css/style.css">
		</noscript>
    <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
  </head>
  <body>
    <div id="wrapper">
      <!-- Header -->
      <div id="header">
        <div class="container">
          <!-- Logo -->
          <div id="logo">
            <h1><a href="#">FORMULARIO</a></h1>
          </div>
          <!-- Nav -->
          <nav id="nav">
            <ul>
              <li><a href="index.html">INICIO</a></li>
              <li><a href="threecolumn.html">INFORMACION PERSONAL</a></li>
              <li><a href="twocolumn1.html">INFORMACION PROFESIONAL</a></li>
              <li class="active"><a href="twocolumn2.php">FORMULARIO</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div id="page">
        <div class="container"> <img class="imagen" src="images/naodoc.png" alt="">
          <div class="row">
            <div class="9u skel-cell-important">
              <section id="content">
                <header>
                  <h2 class="formulario">FORMULARIO DE CONTACTO</h2>
                </header>
                <div>
                  <form action="formulario.php" method="post">
                    <div class="divfor"> 
                          <label>NOMBRES</label> 
                          <input class="<?php if(isset($_GET['nombre'])) echo 'error'; ?>" name="nombre" value="<?php if(isset($_SESSION['nombre'])) echo $_SESSION['nombre'] ; ?>" placeholder="" type="text"> 
                    </div>
                    <div class="divfor">
                          <label>APELLIDOS</label> 
                          <input class="<?php if(isset($_GET['apellido'])) echo 'error'; ?>" name="apellido" value="<?php if(isset($_SESSION['apellido'])) echo $_SESSION['apellido'] ; ?>" placeholder="" type="text"> </div>
                    <div class="divfor"> 
                          <label>TELEFONO</label>
                          <input class="<?php if(isset($_GET['telefono'])) echo 'error'; ?>" name="telefono" value="<?php if(isset($_SESSION['telefono'])) echo $_SESSION['telefono'] ; ?>" placeholder="" type="number"> 
                    </div>
                    <div class="divfor">
                          <label>CORREO</label> 
                          <input class="<?php if(isset($_GET['correo'])) echo 'error'; ?>" name="correo" value="<?php if(isset($_SESSION['correo'])) echo $_SESSION['correo'] ; ?>" placeholder="" type="email"> 
                    </div>
                    <div class="divfor"> 
                         <label>CIUDAD</label> 
                         <input class="<?php if(isset($_GET['ciudad'])) echo 'error'; ?>"  name="ciudad" value="<?php if(isset($_SESSION['ciudad'])) echo $_SESSION['ciudad'] ; ?>" placeholder="" type="text"> 
                    </div>
                      <div class="divfor"> 
                          <label>ASUNTO</label> 
					                 <input class="<?php if(isset($_GET['asunto'])) echo 'error'; ?>" name="asunto" value="<?php if(isset($_SESSION['asunto'])) echo $_SESSION['asunto'] ; ?>" placeholder="" type="text"> 
                      </div>
					           <div class="divfor"> 
                          <label>CUERPO</label> 
                           <textarea class="<?php if(isset($_GET['cuerpo'])) echo 'error'; ?>"  name="cuerpo" ><?php if(isset($_SESSION['cuerpo'])) echo $_SESSION['cuerpo'] ; ?></textarea>
					                 <input name="" value="ENVIAR" type="submit"> 
                      </div>
                  </form>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
       <div id="footer">
        <div class="container">
          <div class="row">
            <div class="3u">
              <section id="box1"><br>
                <br>
              </section>
            </div>
            <div class="6u">
              <section id="box2">
                <header>
                  <h2>MI MADRE ES BLANCA CENELIA</h2>
                  <h2></h2>
                </header>
                <div> <a href="#" class="image full"><img src="images/mama.jpg"></a>
                </div>
                <p>Gracias a mi madre e podido salir a delante ya que ella es la
                  que cada dia me ayuda la que todos los dias me da nuevas ideas
                  y que a pesar de que no soy el mejor cada dia trato de cambiar
                  por que no e sido el mejor hijo con ella pero quiero ayudarle
                  en todo lo que lla necesite en el futuro.</p>
              </section>
            </div>
      <div id="copyright">
        <div class="container"> Design: <a href="http://templated.co">TEMPLATED</a>
          Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
        </div>
      </div>
    </div>
  </body>
</html>
