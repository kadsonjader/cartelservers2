<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
   $host="mysql.hostinger.com.br";
   $user="u734506267_ctel";
    $pass="cartel";
      $banco="u734506267_ctel";
        $conexao=new mysqli($host,$user,$pass,$banco);
    session_start();
	if(!isset($_SESSION["nome"]))
		{
			include("menu.php");
			
		} else {
			include("menulog.php");
		}
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
        <title>Cartel Servers</title>
          <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
           <link rel="shortcut icon" href="images/logo.png"/>
           
             <script src="js/jquery.min.js"></script>
               
             
              <!--thema-->
             <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
               
             <!--//thema-->
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                      <meta name="keywords"  />
                      <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
             
                      <!--fontes-->
             <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
               <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
               <!--//fontes-->
             <!-- menu -->
             <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
               <script type="text/javascript" src="js/memenu.js"></script>
                  <script>$(document).ready(function(){$(".memenu").memenu();});</script>
                    <script src="js/simpleCart.min.js"> </script>
             </head>
<body>


		<div class="container">
			<div class="head-top">
				<div class="logo">
					<a href="http://cartelservers.hol.es/"><img src="images/logo.png" alt=""></a>	
				</div>
		  <div class=" h_menu4">
				<ul class="memenu skyblue">
				    <li class="active grid"><a class="color8" href="http://cartelservers.hol.es/">Home</a></li>	
				      <li><a class="color1" href="products.php">Serviços</a>
				      	<li class="grid"><a class="color2" href="TS.php">TeamSpeak</a>
					  <li><a class="color4" href="hospedagem.php">Hospedagem</a></li>				
				             <li><a class="color6" href="contact.php">Contato</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	

	<div class="banner">
		<div class="container">
			  <script src="js/responsiveslides.min.js"></script>
  <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
			<div  id="top" class="callbacks_container">
			<ul class="rslides" id="slider">
			    <li>
					
						<div class="banner-text">
							<h3>Servidores para jogos</h3>
						<p>Possuímos os melhores servidores de qualidade e de otima Frequencia para o seu jogo</p>
						<a href="products.php">Veja Mais</a>
						</div>
				
				</li>
				<li>
					
						<div class="banner-text">
							<h3>Hospedagem</h3>
						<p>Tem um site ? Quer hospedar ? Hospede seu site aqui com otimas condições e preço que lhe satisfaça</p>
                                                <a href="hospedagem.php">Veja Mais</a>

						</div>
					
				</li>
				<li>
						<div class="banner-text">
							<h3>TeamSpeak</h3>
                                                        <p>Possuímos os melhores servidores de TeamSpeak sem lag e com otima segurança </p>
                                                                                                <a href="TS.php">Veja Mais</a>
						</div>
					
				</li>
			</ul>
		</div>

	</div>
	</div>

<!--content-->
<div class="content">
	<div class="container">
	<div class="content-top">
		<h1>PRODUTOS</h1>
		<div class="grid-in">
			</div>
			<div class="col-md-4 grid-top">
                            <a href="hospedagem.php.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/hospedagem.png" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>hospedagem</span>	
									</h3>
								</div>
				</a>
			</div>
			<div class="col-md-4 grid-top">
				<a href="single.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/csgo.png" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>CSGO</span>	
									</h3>
								</div>
				</a>
			</div>
					<div class="clearfix"> </div>
		</div>
		<div class="grid-in">
                                        
			<div class="col-md-4 grid-top">
				<a href="minecraft.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/Minecraft.png" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>Minecraft</span>	
									</h3>
								</div>
                                    <div class="clearfix"> </div>
				</a>
			</div>
			<div class="col-md-4 grid-top">
                            <a href="TS.php" class="b-link-stripe b-animate-go  thickbox"><img class="img-responsive" src="images/TS.png" alt="">
					<div class="b-wrapper">
									<h3 class="b-animate b-from-left    b-delay03 ">
										<span>TeamSpeak</span>	
									</h3>
								</div>
				</a>
			</div>
					
		</div>
	</div>
	<!----->
	
	<div class="content-top-bottom">
		
		<div class="clearfix"> </div>
	</div>
	</div>
	<!---->
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MAIS INFORMAÇÔES</h4>
				<ul class="nav-bottom">
						<li><a href="contact.php">FAQ</a></li>
						<li><a href="contact.php">Contato</a></li>
							
					</ul>	
				</div>
				<div class="col-md-4 amet-sed ">
				<h4>CONTATO</h4>
				
					
					
					<p>Rede Sociais:</p>
					<ul class="social">
                                                <li><a href="https://www.facebook.com/kadsonj"><i class="facebook"> </i></a></li>						
						<li><a href="https://twitter.com/kadsonjader"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="https://plus.google.com/u/0/104985197703365629694"><i class="gmail"> </i></a></li>
						
					</ul>
				</div>
				<div class="col-md-4 amet-sed">
					<h4>Newsletter</h4>
					<p>Assine para novas atualizações e promoções</p>
					<form>
						<input type="text" placeholder="exemplo@email.com" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="Sign up">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
                    <p>© 2016 Cartel Servers All Rights Reserved | Development by Kadson Jader</p>
		</div>
		</div>
</body>
</html>
			