<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
   $host="mysql.hostinger.com.br";
   $user="u734506267_ctel";
    $pass="cartel";
      $banco="u734506267_ctel";
        $conexao=new mysqli($host,$user,$pass,$banco);
session_start();
if (!isset($_SESSION["nome"])) {
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
        <script>$(document).ready(function () {
                $(".memenu").memenu();
            });</script>
        <script src="js/simpleCart.min.js"></script>
    </head>
    <body>

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
    <div class=" container">
        <div class=" register">
            <h1>Cadastre-se</h1>
            <form action="cadastrar.php" method="POST">  
                <div class="col-md-6 register-top-grid">
                    <h3>Dados Pessoais</h3>
                    <div>
                        <span>Nome*</span>
                        <input type="text" name="nome"> 
                    </div>
                    <div>
                        <span>Endereço</span>
                        <input type="text" name="endereco"> 
                    </div>
                    <div>
                        <span>Email*</span>
                        <input type="text" name="email"> 
                    </div>
                    <a class="news-letter" href="#">
                        <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Aceito os termos</label>
                    </a>
                </div>
                <div class="col-md-6 register-bottom-grid">
                    <h3>Registrar senha</h3>
                    <div>
                        <span>Senha*</span>
                        <input type="password">
                    </div>
                    <div>
                        <span>Confirma senha*</span>
                        <input type="password" name="senha">
                    </div>
                    <input type="submit"  name="enviar" value="Enviar">

                </div>
                <div class="clearfix"> </div>
            </form>
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
                    <p>Assine para novas atualizações e promoções</p>
                    <form>
                        <input type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = '';
                                }">
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
	