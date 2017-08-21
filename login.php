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
					<a href="index.php"><img src="images/logo.png" alt=""></a>	
				</div>
		  <div class=" h_menu4">
					<ul class="memenu skyblue">
					    <li class="active grid"><a class="color8" href="http://cartelservers.hol.es/">Home</a></li>	
				           <li><a class="color1" href="products.php">Serviços</a></li>
                                             <li class="grid"><a class="color2" href="TS.php">TeamSpeak</a>
                                               <li><a class="color4" href="hospedagem.php">Hospedagem</a></li>				
                                                 <li><a class="color6" href="contact.php">Contato</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>

	</div>

	
<!--content-->
<div class="container">
		<div class="account">
		<h1>LOGIN</h1>
		<div class="account-pass">
		<div class="col-md-8 account-top">
                    <form action="login.php" method="POST">
				
			<div> 	
				<span>nome</span>
				<input type="text" name="nome"> 
			</div>
			<div> 
				<span >Senha</span>
				<input type="password" name="senha">
			</div>				
				<input type="submit" value="Login"> 
                                <?php
                                
                         if ($_POST) {
                 
                
                include("./classes/DAO/Conexao.class.php");
                include("./classes/DAO/UsuarioDAO.class.php");




                $usuario = new UsuarioDAO();

                $nome = addslashes($_POST['nome']);
                $senha = addslashes($_POST['senha']);


                $user = $usuario->login($senha, $nome);

                if ($user == TRUE) {
                    session_start();
                    $_SESSION['nome'] = $nome;
                    $_SESSION['senha'] = $senha;
                    header("location: index.php");
                    
                    exit;
                } else {

                    header("location: login.php?erro=senha");
                }
            }
          
?>

           <?php
            if ($_GET) {
                if (isset($_GET['erro'])) {
                    echo " 
    
                       <div class='row'>
                      </div>
                <div class='row'>
                    

                    <div class='col-md-4'>      
                    
                    </div>
                    
                    
                    <div class='col-md-4'>      
                        <div class='alert alert-danger'>
                            Usuário ou senha inválidos!
                        </div>   
                    </div>
                      
                      <div class='col-md-4'>      
                    
                    </div>
                        

                    </div>";
                }
            } 
 
            ?>
			</form>
		</div>
		<div class="col-md-4 left-account ">
			<a href="resgister.php"><img class="img-responsive " src="images/server.jpg" alt=""></a>
			<div class="five">
			<h2>cadastre-se</h2><span>Aqui</span>
			</div>
			<a href="register.php" class="create">Cria sua conta se você nao possui conta</a>
<div class="clearfix"> </div>
		</div>
	<div class="clearfix"> </div>
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
		<p >© 2016 Cartel Servers All Rights Reserved | Development by Kadson Jader</p>
		</div>
		</div>
</body>
</html>
			