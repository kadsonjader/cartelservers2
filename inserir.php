<?php
//conexao ao banco
$host="localhost";
$user="root";
$pass="";
$banco="cartelservers";
$conexao=mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($banco) or die (mysql_error());

?>

<html>
    <head>
        <title>Autenticando</title>
        <script type="text/javascript">
            function loginsucessfully(){
                setTimeout("window.location = 'teste_resgistrar_compra.php'",0000);
            }
            function loginfailed(){
                setTimeout("window.location = 'teste_resgistrar_compra.php'", 2000);
            }
            </script>
    </head>
      <body>          
<?php
   
        $nome = $_SESSION['nome'];
        $preco = $_POST['preco'];
        $produto =$_POST['csgo'];
        $sql = mysql_query("INSERT INTO compras(nome_clientes,produto,preco,data) "
            . "VALUES ('$nome','$produto',$preco','NOW()') ");
        $row =mysql_num_rows($sql);
        if ($row>0) {
            echo"<script>loginsucessfully()</script>";
            } else {
            echo "Erro: " . $sql . "<br>" . $conecta->error."<br>";
            
             }
            $conecta->close();
            
?>
   </body>
    
</html>