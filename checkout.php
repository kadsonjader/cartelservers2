<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
   $host="mysql.hostinger.com.br";
   $user="u734506267_ctel";
    $pass="cartel";
      $banco="u734506267_ctel";
        $conecta=new mysqli($host,$user,$pass,$banco);
session_start();
if (!isset($_SESSION["nome"])) {
    include("menu.php");
} else {
    include("menulog.php");
}
  $nome = $_SESSION['nome'];
    $precoProduto = $_POST['valor'];
      $nomeProduto = $_POST['produto'];
        $pagamento = $_POST['pagamento'];
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
        <!--thema-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!-- menu -->
        <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/memenu.js"></script>
        <script>$(document).ready(function () {
                $(".memenu").memenu();
            });</script>
        <script src="js/simpleCart.min.js"></script>
    </head>
    <body>
        <!--header-->


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


<!--content-->
<div class="container">
    <div class="register">
        <h1>Compra</h1>
        <form action="index.php" method="POST">  
            <h3>Finalizando compra</h3>

            <span>Resumo da sua compra foi:</span>
            <ul>
                <li><span>COMPRADOR:<?php echo $nome ?></span></li>
                <li><span>PRODUTO:<?php echo $nomeProduto ?></span></li>
                <li><span>PREÇO:<?php echo $precoProduto ?></span></li>
                <li><span>FORMA DE PAGAMENTO:<?php echo $pagamento?></span></li>
            </ul>
            <span>Obrigado por comprar no Cartel Servers</span><br>



            <input class="btn btn-primary" type="submit" name="finalizarc" value="finalizar compra">



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
<?php
if(!isset($pagamento)){
    echo "<script>alert('Por favor selecione a forma de pagamento, tenta realizar a compra novamente')</script>";
    echo "<script>window.location ='index.php'</script>";
}else{
    $sql = "INSERT INTO compras (nomeCliente,nomeProduto,precoProduto,FormaPagamento) VALUES ('$nome','$nomeProduto','$precoProduto','$pagamento')";
    if ($conecta->multi_query($sql) === TRUE) {
        echo"<script>alert('compra realizada com sucesso!')</script>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conecta->error . "<br>";
    }
    $conecta->close();
}
?>
