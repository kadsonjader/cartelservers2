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
               <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
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
					<a href="index.php"><img src="images/logo.png" alt=""></a>	
				</div>
		  <div class=" h_menu4">
                      <center><ul class="memenu skyblue">
					  <li class="active grid"><a class="color8" href="http://cartelservers.hol.es/">Home</a></li>	
				           <li><a class="color1" href="products.php">Serviços</a></li>
                                             <li class="grid"><a class="color2" href="TS.php">TeamSpeak</a>
                                               <li><a class="color4" href="hospedagem.php">Hospedagem</a></li>				
                                                 <li><a class="color6" href="contact.php">Contato</a></li>
                      </center> 
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
						<h3 class="cate">Categories</h3>
					</div>
		 <ul class="menu">
		<li class="item1"><a href="TS.php">TeamSpeak</a>
			<ul class="cute">
                            <li class="subitem1"><a href="TSiniciante.php">10 Slots</a></li>
                            <li class="subitem2"><a href="TSintermediario.php">30 Slots</a></li>
                            <li class="subitem3"><a href="TSpremium.php">40 Slots</a></li>
			</ul>
		</li>
		<li class="item2"><a href="hospedagem.php">Hospedagem</a>
			<ul class="cute">
				<li class="subitem1"><a href="HOSiniciante.php">Iniciante</a></li>
				<li class="subitem2"><a href="HOSintermediario.php">Intermediario</a></li>
				<li class="subitem3"><a href="HOSpremium.php">Premium</a></li>
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
						<a href="index.php" class="shop-now">Compre Agora</a>
<div class="clearfix"> </div>
	</div>
				</div>	 
						<div class="sellers">
							<div class="of-left-in">
								<h3 class="tag">Tags</h3>
							</div>
								<div class="tags">
									<ul>
										<li><a href="products.php">Jogos</a></li>
										<li><a href="TS.php">TS</a></li>
										<li><a href="hospedagem.php">Site</a></li>
										<li><a href="single.php">CSGO</a></li>
                                                                                <li><a href="BF.php">BF</a></li>
										
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
									<a href="BF.php"><img class="img-responsive " src="images/Bf_imagem_menor.png" alt=""></a>
									
								</div>
							<div class=" fashion-grid1">
								<h6 class="best2"><a href="BF.php" >Battlefield 4</a></h6>
								
								<span class=" price-in1">R$ 145,00/mês</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
							<div class="product-go">
						<div class=" fashion-grid">
									<a href="minecraft.php"><img class="img-responsive " src="images/minecraft_logo_menor.png" alt=""></a>
									
								</div>
							<div class="fashion-grid1">
								<h6 class="best2"><a href="minecraft.php" >Minecraft</a></h6>
								
								<span class=" price-in1">R$ 25,00/mês</span>
							</div>
								
							<div class="clearfix"> </div>
							</div>
					
				</div>
<div class=" per1">
				
			</div>
				</div>
				<div class="col-md-9 product1">
				<div class=" bottom-product">
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
                                                    <a href="single.php"><img class="img-responsive" src="images/cs_logo_menor.png" alt="">
							<div class="pro-grid">
										<span class="buy-in">Compre Agora</span>
							</div>
						</a>	
						</div>
						<p class="tun">Melhor servidor de CSGO do Brasil</p>
						<a href="#" class="item_add"><p class="number item_price"><i> </i>R$30.00</p></a>						
					</div>
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="BF.php"><img class="img-responsive" src="images/bf_logo_menor.png" alt="">
							<div class="pro-grid">
										<span class="buy-in">Compre Agora</span>
							</div>
						</a>	
						</div>
						<p class="tun">Server Brasileiro de Battlefield 4</p>
<a href="#" class="item_add"><p class="number item_price"><i> </i>R$145.00</p></a>					</div>
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="minecraft.php"><img class="img-responsive" src="images/minecraft_logo_menor.png" alt="">
							<div class="pro-grid">
										<span class="buy-in">Compre Agora</span>
							</div>
						</a>	
						</div>
						<p class="tun">Qualidade em seu servidor de Minecraft</p>
<a href="#" class="item_add"><p class="number item_price"><i> </i>R$25.00</p></a>					</div>
					<div class="clearfix"> </div>
				</div>
					<div class=" bottom-product">
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<div class="product-at ">
							<a href="left4dead.php"><img class="img-responsive" src="images/Left4Dead.png" alt="">
							<div class="pro-grid">
										<span class="buy-in">Compre Agora</span>
							</div>
						</a>	
						</div>
						<p class="tun">Otimo preço para servidor de Left 4 Dead</p>
<a href="#" class="item_add"><p class="number item_price"><i> </i>R$70.00</p></a>					</div>
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						
											
</div>
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						
											</div>
					<div class="clearfix"> </div>
				</div>
					<div class=" bottom-product">
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						
											

					</div>
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						<
										
</div>
					<div class="col-md-4 bottom-cd simpleCart_shelfItem">
						
											
</div>
					<div class="clearfix"> </div>
				</div>
				
				</div>
		<div class="clearfix"> </div>
		
		</div>
		
		</div>
			
				<!---->

<!--//content-->
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
				
					<p>
</p>
					<p>Rede Sociais</p>
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
</p>
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
			