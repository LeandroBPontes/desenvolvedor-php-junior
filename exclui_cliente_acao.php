<?php

        include "connect.php";

        
     $id = $_POST['id_usuario'];
        
      //inserindo a variavel editada no campo determinado pelo usuario
      $query = mysqli_query($link, "DELETE from usuario WHERE id = $id");
                
      echo "USUARIO EXCLUIDO COM SUCESSO";
      echo "<br />";

       header('Location:index.php');

           
    ?>
