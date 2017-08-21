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
            $assunto = $_POST['assunto'];
             $email = $_POST['email'];
              $mensagem = $_POST['mensagem'];

	
            $sql = "INSERT INTO comentario(nome,email,assunto,mensagem) "
            . "VALUES ('$nome','$email','$assunto','$mensagem') " ;
            if ($conecta->multi_query($sql) === TRUE) {
            echo"<script>alert('comentario enviado com sucesso!')</script>";
            echo"<script>loginsucessfully()</script>";
            } else {
            echo "Erro: " . $sql . "<br>" . $conecta->error."<br>";
            echo"<script>loginfailed()</script>";
             }
            $conecta->close();

?>
       </body>
    
</html