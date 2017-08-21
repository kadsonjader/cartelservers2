<?php
include ("conectar.php");

   $sql = "INSERT INTO compras (nomeCliente,nomeProduto,precoProduto) VALUES ('$nome','$precoProduto','$nomeProduto')";   
     if ($conecta->multi_query($sql) === TRUE) {
       echo"<script>alert('compra realizada com sucesso!')</script>";
         } else {
           echo "Erro: " . $sql . "<br>" . $conecta->error . "<br>";
           } 
           $conecta->close();
      

?>
