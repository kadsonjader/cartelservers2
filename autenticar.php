<?php
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
                setTimeout("window.location ='teste_resgistrar_compra.php'",3000);
            }
            function loginfailed(){
                setTimeout("window.location ='login.php'",1500);
            }
            </script>
    </head>
      <body>
<?php
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
   $sql = mysql_query("SELECT * FROM clientes WHERE nome = '$nome' and senha = '$senha'");
    $row =mysql_num_rows($sql);
    if($row>0){
        session_start();
	$_SESSION['nome'] = $_POST['nome'];
        $_SESSION['senha'] = $_POST['senha'];
        echo"autenticado com sucesso! aguarde";
        echo"<script>loginsucessfully()</script>";
    }  else {
       echo"nome de usuario ou senha invalidos! tente novamente";
       echo"<script>loginfailed()</script>";
       
} 
    
?>
    </body>
    
</html>