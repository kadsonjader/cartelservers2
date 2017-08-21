<?php 
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$host="localhost";
   $user="u734506267_cserv";
    $pass="AF8Id34IScQp";
      $banco="u734506267_cli";
        $conexao=mysql_connect($host,$user,$pass);
                 mysql_select_db($banco);
	
session_start();
	if(!isset($_SESSION["nome"]))
		{
			header("Location:login.php");
			exit;

		} else {
			
		}
 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
       <title>Cartel servers</title>
         <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
           <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
             <script src="js/jquery.min.js"></script>
                <!-- Custom Theme files -->
                  <!--theme-style-->
                    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
                      <!--//theme-style-->
                        <meta name="viewport" content="width=device-width, initial-scale=1">
                          <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                            <meta name="keywords"  />
                            <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
                         <!--fonts-->
                        <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
                     <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
                  <!-- start menu -->
               <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
            <script type="text/javascript" src="js/memenu.js"></script>
         <script>$(document).ready(function(){$(".memenu").memenu();});</script>
      <script src="js/simpleCart.min.js"> </script>
</head>
<body>
<!--header-->
 <?php
          if(!isset($_SESSION))
                {
                    session_start();
                }
          ?>
<div class="header">
	<div class="header-top">
		<div class="container">
			<div class="search">
					<form>
						<input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
						<input type="submit" value="Go">
					</form>
			</div>
			<div class="header-left">		
					<ul>
						<li><a><?php echo "Olá, ".$_SESSION['nome'];?></a></li>
                                                <li><a href="logout.php">Sair</a></li>
						<li>
</li>

					</ul>
					<div class="cart box_1">
						<a href="checkout.html">
						<h3> <div class="total">
							<span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
							<img src="images/cart.png" alt=""/></h3>
						</a>
												<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

					</div>
					<div class="clearfix"> </div>
			</div>
				<div class="clearfix"> </div>
		</div>
		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
                                    <a href="index2.php"><img src="images/logo.png" alt=""></a>	
				</div>
		  <div class=" h_menu4">
					<ul class="memenu skyblue">
                                            <li class="active grid"><a class="color8" href="index2.php">Home</a></li>	
				            <li><a class="color1" href="products2.php">Serviços</a>
                                            <li class="grid"><a class="color2" href="TS2.php">TeamSpeak</a>
				                  <li><a class="color4" href="hospedagem2.php">Hospedagem</a></li>				
                                                  <li><a class="color6" href="contact2.php">Contato</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	
<!--content-->
<div class="contact">
			
			<div class="container">
				<h1>Contato</h1>
			<div class="contact-form">
				
				<div class="col-md-8 contact-grid">
					<form>	
						<input type="text" value="Nome" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Nome';}">
					
						<input type="text" value="Email" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Email';}">
						<input type="text" value="Assunto" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Assunto';}">
						
						<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Mensagem';}">Mensagem</textarea>
						<div class="send">
							<input type="submit" value="Send">
						</div>
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d37494223.23909492!2d103!3d55!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x453c569a896724fb%3A0x1409fdf86611f613!2sRussia!5e0!3m2!1sen!2sin!4v1415776049771"></iframe>
			</div>
		</div>
		
	</div>
<!--//content-->
<div class="footer">
				<div class="container">
			<div class="footer-top-at">
			
				<div class="col-md-4 amet-sed">
				<h4>MAIS INFORMAÇÔES</h4>
				<ul class="nav-bottom">
                                    <li><a href="contact2.php">FAQ</a></li>
                                    <li><a href="contact2.php">Contato</a></li>	
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
					<p>Assine para novas atualizações e promoções</p>>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
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