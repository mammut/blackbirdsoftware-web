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
	{% include head.html %}
  <body>
  	<!--home start-->
  	<div id="home">
  	  <div class="headerLine hidden-sm hidden-xs">
  	  	<div id="menuF" class="default">
  	  		<div class="container">
  	  			<div class="row">
  	  				<div class="logo col-md-4">
  	  					<div>
  	  						<a href="{{ site.baseurl }}/"><img src="{{ site.url }}/images/logo.png" alt="Blackbird Software"></a>
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