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
 

<script src="js/main.js"></script>
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
						<a href="checkout.php">
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
                                          <li class="grid"><a class="color2" href="TS2.php">TeamSpeak</a></li>
                                          <li><a class="color4" href="hospedagem2.php">Hospedagem</a></li>				
                                          <li><a class="color6" href="contact2.php">Contato</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	
<!--content-->
<!---->
		<div class="product">
			<div class="container">
				<div class="col-md-3 product-price">
					  
				<div class=" rsidebar span_1_of_left">
					<div class="of-left">
						<h3 class="cate">Categorias</h3>
					</div>
		 <ul class="menu">
                     <li class="item1"><a href="TS2.php">TeamSpeak</a>
			<ul class="cute">
                            <li class="subitem1"><a href="TSiniciante2.php">10 Slots</a></li>
                            <li class="subitem2"><a href="TSintermediario2.php">30 Slots</a></li>
                            <li class="subitem3"><a href="TSpremium2.php">40 Slots</a></li>
			</ul>
		</li>
                <li class="item2"><a href="hospedagem2.php">Hospedagem</a>
			<ul class="cute">
                            <li class="subitem1"><a href="HOSiniciante2.php">Iniciante</a></li>
                            <li class="subitem2"><a href="HOSintermediario2.php">Intermediario</a></li>
                            <li class="subitem3"><a href="HOSpremium2.php">Premium</a></li>
			</ul>
		</li>
		
	</ul>
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
<!---->
	<div class="product-middle">
		
					<div class="fit-top">
						<h6 class="shop-top">Cartel Servers</h6>
                                                <a href="index2.php" class="shop-now">Compre Agora</a>
<div class="clearfix"> </div>
	</div>
				</div>	 
						<div class="sellers">
							<div class="of-left-in">
								<h3 class="tag">Tags</h3>
							</div>
								<div class="tags">
									<ul>
                                                                            <li><a href="products2.php">Jogos</a></li>
                                                                            <li><a href="TS2.php">TS</a></li>
										<li><a href="hospedagem2.php">Site</a></li>
                                                                                <li><a href="single2.php.php">CSGO</a></li>
                                                                                <li><a href="BF2.php">BF</a></li>
										<div class="clearfix"> </div>
									</ul>
								
								</div>
								
		</div>
				<!---->
				<div class="product-bottom">
					<div class="of-left-in">
								<h3 class="best">Outros Preços</h3>
							</div>
					<div class="product-go">
						<div class=" fashion-grid">
									<a href=""><img class="img-responsive " src="images/Bf_imagem_menor.png" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="BF2.php">Battlefield 4</a></h6>
								
								<span class=" price-in1">R$ 145,00/mês</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="#"><img class="img-responsive " src="images/minecraft_logo_menor.png" alt=""></a>
									
								</div>
							<div class="fashion-grid1">
								<h6 class="best2"><a href="minecraft2.php" ></a>Minecraft</h6>
								
								<span class=" price-in1">R$ 25,00/mês</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
					
				</div>
<div class=" per1">
				
			</div>
				</div>
				<div class="col-md-9 product-price1">
				<div class="col-md-5 single-top">	
			<div class="flexslider">
  <ul class="slides">
    <li data-thumb="images/TS.png">
      <img src="images/TS.png" />
    </li>
  </ul>
</div>
<!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
					</div>	
					<div class="col-md-7 single-top-in simpleCart_shelfItem">
						<div class="single-para ">
						<h4>TeamSpeak Premium</h4>
							<div class="clearfix"> </div>
							</div>
                                            <br>
							<h2 class="item_price">R$ 15,00/mês</h2>
                                                        <br>
                                                        <br>
							<p>O servidor possui: 30 slots,trafego Ilimitado, Painel de Controle, Firewall fisico</p>
							<div class="available">
								<ul>
									<li>Color
										<select>
										<option>30 Slots</option>
										
									</select></li>
								<div class="clearfix"> </div>
							</ul>
						</div>
							<ul class="tag-men">
								<li><span>SERV</span>
								<span class="women1">: Teamspeak</span></li>
								<li><span>Slots</span>
								<span class="women1">: 30 SLOTS</span></li>
							</ul>
								<a href="#" class="add-cart item_add">Adcionar carrinho</a>
							
						</div>
					</div>
				<div class="clearfix"> </div>
			<!---->
					<div class="cd-tabs">
			<nav>
				<ul class="cd-tabs-navigation">
					<li><a data-content="fashion"  href="#0">Descrição</a></li>
					
					
				</ul> 
			</nav>
	<ul class="cd-tabs-content">
		<li data-content="fashion" >
		<div class="facts">
									  <p >O servidor possui: 30 slots,trafego Ilimitado, Painel de Controle, Firewall fisico</p>
										         
							        </div>

</li>
<li data-content="cinema" >

</li>
<li data-content="television" class="selected">
			</div>

<div class="clearfix"></div> 
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
						<li><a href="https://www.facebook.com/kadsonj"><i></i></a></li>						
						<li><a href="https://twitter.com/kadsonjader"><i class="twitter"> </i></a></li>
						<li><a href="#"><i class="rss"> </i></a></li>
						<li><a href="https://plus.google.com/u/0/104985197703365629694"><i class="gmail"> </i></a></li>
						
					</ul>
				</div>
				<div class="col-md-4 amet-sed">
					<h4>Newsletter</h4>
					<p>Assine para novas atualizações
e promoções</p>
					<form>
						<input type="text" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}">
						<input type="submit" value="Sign up">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-class">
		<p >© 2016 Cartel Servers All Rights Reserved | Development by Kadson Jader</p>
		</div>
		</div>
</body>
</html>

