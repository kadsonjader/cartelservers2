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
        <!--  menu -->
        <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
        <script type="text/javascript" src="js/memenu.js"></script>
        <script>$(document).ready(function () {
                $(".memenu").memenu();
            });</script>


        <script src="js/main.js"></script>
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
                        <li><a class="color1" href="products.php">Serviços</a>
                        <li class="grid"><a class="color2" href="TS.php">TeamSpeak</a></li>
                        <li><a class="color4" href="hospedagem.php">Hospedagem</a></li>				
                        <li><a class="color6" href="contact.php">Contato</a></li>
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
                    $(function () {
                        var menu_ul = $('.menu > li > ul'),
                                menu_a = $('.menu > li > a');
                        menu_ul.hide();
                        menu_a.click(function (e) {
                            e.preventDefault();
                            if (!$(this).hasClass('active')) {
                                menu_a.removeClass('active');
                                menu_ul.filter(':visible').slideUp('normal');
                                $(this).addClass('active').next().stop(true, true).slideDown('normal');
                            } else {
                                $(this).removeClass('active');
                                $(this).next().stop(true, true).slideUp('normal');
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
                            <li><a href="CSGO.php">CSGO</a></li>
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
                            <a href=""><img class="img-responsive " src="images/Bf_imagem_menor.png" alt=""></a>

                        </div>
                        <div class=" fashion-grid1">
                            <h6 class="best2"><a href="BF.php">Battlefield 4</a></h6>

                            <span class=" price-in1">R$ 145,00/mês</span>
                        </div>

                        <div class="clearfix"> </div>
                    </div>
                    <div class="product-go">
                        <div class=" fashion-grid">
                            <a href="#"><img class="img-responsive " src="images/minecraft_logo_menor.png" alt=""></a>

                        </div>
                        <div class="fashion-grid1">
                            <h6 class="best2"><a href="minecraft.php" ></a>Minecraft</h6>

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
                    $(window).load(function () {
                        $('.flexslider').flexslider({
                            animation: "slide",
                            controlNav: "thumbnails"
                        });
                    });
                    </script>
                </div>	
                <div class="col-md-7 single-top-in simpleCart_shelfItem">
                    <div class="single-para ">
                        <h4>TeamSpeak Intermediario</h4>
                        <div class="clearfix"> </div>
                    </div>
                    <br>
                    <h2 class="item_price">R$ 10,00/mês</h2>
                    <br>
                    <br>
                    <p>O servidor possui: 20 slots,trafego Ilimitado, Painel de Controle, Firewall fisico</p>
                    <div class="available">
                        <ul>
                            <li>Color
                                <select>
                                    <option>20 Slots</option>

                                </select></li>
                            <div class="clearfix"> </div>
                        </ul>
                    </div>
                    <ul class="tag-men">
                        <li><span>SERV</span>
                            <span class="women1">: Teamspeak</span></li>
                        <li><span>Slots</span>
                            <span class="women1">: 20 SLOTS</span></li>
                    </ul>
                    <form action="checkout.php" method="POST">
                        <input type="hidden" name="produto" value="Teamspeak intermediario">
                        <input type="hidden" name="valor" value="10,00">
                    <?php if(isset($_SESSION['nome'])){?>
                        <span>forma de pagamento:</span><br>
                        Cartão de Credito:<input type="radio" name="pagamento" value="cartao de credito"><br>
                        Boleto:<input type="radio" name="pagamento" value="Boleto Bancario"><br>
                        <input type="submit" class="btn btn-primary" name="comprar" value="comprar"/>
                        <?php } else { ?>
                          <a href="login.php" class="add-cart item_add">logar para comprar</a>
                        <?php } ?>

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
                            <p >O servidor possui: 20 slots,trafego Ilimitado, Painel de Controle, Firewall fisico</p>

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

                                            <li><a href="contact.php">FAQ</a></li>
                                            <li><a href="contact.php">Contato</a></li>

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
                                <p >© 2016 Cartel Servers All Rights Reserved | Development by Kadson Jader</p>
                            </div>
                        </div>
                        </body>
                        </html>