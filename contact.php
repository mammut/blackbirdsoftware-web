<?php 
$fullname = $_POST['Name'];
$email = $_POST['Email'];
$subject = "[Blackbird] ".$_POST['Subject'];
$details = $_POST['Message'];
$formcontent = "From: $fullname \n Message: $details";
$recipient = "oni@vtr.net";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Blackbird Software :: Contacto</title>
    
    <meta name="description" content="{{ site.description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="{{ page.url | replace:'index.html','' | prepend: site.baseurl | prepend: site.url }}">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/css/slicknav.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    
    <link rel="icon" type="image/png" href="/images/favicon.png">

  </head>
  <body>

    <div id="home">
      <div class="headerLine hidden-sm hidden-xs">
        <div id="menuF" class="default">
          <div class="container">
            <div class="row">
              <div class="logo col-md-4">
                <div>
                  <a href="{{ site.baseurl }}/"><img src="/images/logo.png" alt="Blackbird Software"></a>
                </div>
              </div>
              <div class="col-md-8">
                <div class="navmenu"style="text-align: center;">
                  <ul id="menu">
                    <li class="active" ><a href="/#home">Inicio</a></li>
                    <li><a href="/#team">Equipo</a></li>
                    <li><a href="/#project">Proyectos</a></li>
                    <li><a href="/#news">Noticias</a></li>
                    <li class="last"><a href="/#contact">Contacto</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
    	<div class="row">
    		<div class="col-md-8">
    			<h3>¡Gracias por tu mensaje!</h3>
    			<p><a href="/">Volver al sitio</a></p>
    		</div>
    	</div>
    </div>
  </body>
</html>