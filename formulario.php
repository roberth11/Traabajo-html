<?php 
function op ($variable){

  if (isset($variable) && $variable!="") {
    if (ctype_alpha($variable)) {
      return $variable;
    }
  }
}
function opNum ($variable){

  if (isset($variable) && $variable!="") {
    if (is_numeric($variable)) {
      if (strlen($variable)==10) {
        return $variable;
      }
    }
  }
}
function correo($variable){

  if (isset($variable) && $variable!="") {
    if (filter_var($variable, FILTER_VALIDATE_EMAIL)) {
        return $variable;
    }
  }
}
$cuerpodespues=trim($_POST["cuerpo"]," ");
$nombre=op($_POST["nombre"]);
$apellido=op($_POST["apellido"]);
$telefono=opNum($_POST["telefono"]);
$correo=correo($_POST["correo"]);
$ciudad=op($_POST["ciudad"]);
$asunto=op($_POST["asunto"]);
$cuerpo=op($cuerpodespues);
echo $cuerpodespues;
session_start();
$_SESSION['nombre']=$nombre;
$_SESSION['apellido']=$apellido;
$_SESSION['telefono']=$telefono;
$_SESSION['correo']=$correo;
$_SESSION['ciudad']=$ciudad;
$_SESSION['asunto']=$asunto;
$_SESSION['cuerpo']=$cuerpo;




if (!isset($nombre)) {
  $msjerror="&nombre=errr";
}
if (!isset($apellido)) {
  $msjerror.="&apellido=errr";
}
if (!isset($telefono)) {
  $msjerror.="&telefono=errr";
}
if (!isset($correo)) {
  $msjerror.="&correo=errr";
}
if (!isset($ciudad)) {
  $msjerror.="&ciudad=errr";
}
if (!isset($asunto)) {
  $msjerror.="&asunto=error";
}
if (!isset($cuerpo)) {
  $msjerror.="&cuerpo=error";
}
if (isset($msjerror)) {
  header('location:twocolumn2.php?'.$msjerror);
}
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
              <li class="active"><a href="twocolumn2.html">FORMULARIO</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div id="page">
        <div class="container"> <img class="imagen" src="images/naodoc.png"

            alt="">
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
                          <input class="<?php if(isset($_GET['nombre'])) echo 'error'; ?>" name="nombre" value="<?php if(isset($_SESSION['nombre'])) echo $_SESSION['nombre'] ; ?>" placeholder="" type="text" readonly="readonly"> 
                    </div>
                    <div class="divfor">
                          <label>APELLIDOS</label> 
                          <input class="<?php if(isset($_GET['apellido'])) echo 'error'; ?>" name="apellido" value="<?php if(isset($_SESSION['apellido'])) echo $_SESSION['apellido'] ; ?>" placeholder="" type="text" readonly="readonly"> </div>
                    <div class="divfor"> 
                          <label>TELEFONO</label>
                          <input class="<?php if(isset($_GET['telefono'])) echo 'error'; ?>" name="telefono" value="<?php if(isset($_SESSION['telefono'])) echo $_SESSION['telefono'] ; ?>" placeholder="" type="number" readonly="readonly"> 
                    </div>
                    <div class="divfor">
                          <label>CORREO</label> 
                          <input class="<?php if(isset($_GET['correo'])) echo 'error'; ?>" name="correo" value="<?php if(isset($_SESSION['correo'])) echo $_SESSION['correo'] ; ?>" placeholder="" type="email" readonly="readonly"> 
                    </div>
                    <div class="divfor"> 
                         <label>CIUDAD</label> 
                         <input class="<?php if(isset($_GET['ciudad'])) echo 'error'; ?>"  name="ciudad" value="<?php if(isset($_SESSION['ciudad'])) echo $_SESSION['ciudad'] ; ?>" placeholder="" type="text" readonly="readonly"> 
                    </div>
                      <div class="divfor"> 
                          <label>ASUNTO</label> 
					                 <input class="<?php if(isset($_GET['asunto'])) echo 'error'; ?>" name="asunto" value="<?php if(isset($_SESSION['asunto'])) echo $_SESSION['asunto'] ; ?>" placeholder="" type="text" readonly="readonly"> 
                      </div>
					           <div class="divfor"> 
                          <label>CUERPO</label> 
                           <textarea readonly="readonly" class="<?php if(isset($_GET['cuerpo'])) echo 'error'; ?>"  name="cuerpo" ><?php if(isset($_SESSION['cuerpo'])) echo $_SESSION['cuerpo'] ; ?></textarea>
                      </div>
                  </form>
                </div>
              </section>
            </div>
            <div class="3u">
              <section id="sidebard2"><br>
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
              <section id="box1">
                <ul class="style3">
                  <li><br>
                  </li>
                </ul>
              </section>
            </div>
            <div class="6u">
              <section id="box2">
                <header>
                  <h2>Donec dictum metus</h2>
                </header>
                <div> <a href="#" class="image full"><img src="images/pics02.jpg"

                      alt=""></a> </div>
                <p>Nulla enim eros, porttitor eu, tempus id, varius non, nibh.
                  Duis enim nulla, luctus eu, dapibus lacinia, venenatis id,
                  quam. Vestibulum imperdiet, magna nec eleifend rutrum, nunc
                  lectus vestibulum velit, euismod lacinia quam nisl id lorem.
                  Quisque erat. Vestibulum pellentesque, justo mollis pretium
                  suscipit, justo nulla blandit libero, in blandit augue justo
                  quis nisl.</p>
              </section>
            </div>
          </div>
        </div>
      </div>
      <br>
      <div id="copyright">
        <div class="container"> Design: <a href="http://templated.co">TEMPLATED</a>
          Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
        </div>
      </div>
    </div>
  </body>
</html>
