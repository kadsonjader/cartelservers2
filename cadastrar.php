<?php 
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
   $host="mysql.hostinger.com.br";
   $user="u734506267_ctel";
    $pass="cartel";
      $banco="u734506267_ctel";
        $conecta=new mysqli($host,$user,$pass,$banco);
           
           ?>

        <html>
    <head>
        <title>Autenticando</title>
        <script type="text/javascript">
            function loginsucessfully(){
                setTimeout("window.location = 'index.php'",0000);
            }
            function loginfailed(){
                setTimeout("window.location = 'register.php'", 0000);
            }
            </script>
    </head>
      <body>       
               
               
<?php
           $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
             $email = $_POST['email'];
              $senha = $_POST['senha'];

	
            $sql = "INSERT INTO clientes(nome,endereco,email,senha) "
            . "VALUES ('$nome','$endereco','$email','$senha') " ;
            if ($conecta->multi_query($sql) === TRUE) {
            echo"<script>alert('novos registros cadastrados com sucesso!')</script>";
            echo"<script>loginsucessfully()</script>";
            } else {
            echo "Erro: " . $sql . "<br>" . $conecta->error."<br>";
            echo"<script>loginfailed()</script>";
             }
            $conecta->close();

?>
       </body>
    
</html>