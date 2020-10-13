 <?php

    include "connect.php";
    
    $escolha = $_POST['escolha'];
    $id = $_POST['usuarios'];   
            
        if($escolha == "excluir"){
    
            $sql = mysqli_query($link, "DELETE FROM usuario WHERE id = $id ");
            //$stmt = mysqli_prepare($link, $sql);
            //mysqli_stmt_execute($stmt);
             echo "USUARIO EXCLUIDO COM SUCESSO";

        }
 ?>

        <?php if($escolha == 'editar'){echo "Entre com o ID do USUARIO que deseja editar";}?>
            

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
    <!-- Meta tags Obrigatórias -->
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <script type="text/javascript" src="jquery.js"></script>

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <body>
             
        <form action= "cliente.php" method="POST" enctype="multipart/form-data" >
            <br><br>

         <select id="id_usuario" name="id_usuario" class="ml-2 mt-1"> 

            <?php
             include "connect.php";
             if($escolha == 'editar'){
    
            
            $query = mysqli_query($link, "SELECT  id FROM usuario ORDER BY id ASC");
            
            $stmt = mysqli_prepare($link, $query);
            mysqli_stmt_execute($stmt);

            $fetchAll = mysqli_fetch_all($query, MYSQLI_ASSOC);
            


            foreach($fetchAll as $usuario){

            echo '<option "value = "id_usuario"> '.$usuario['id'].'</option>';

            }    
        }
            ?>
         </select>

        <input type="submit" value="Executar" class="ml-2 mb-2 btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-primary mb-2 ">
        </form>

        </body>
    </head>
</html>
