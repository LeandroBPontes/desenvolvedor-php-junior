 <?php

    include "connect.php";
    
    $escolha = $_POST['escolha'];
            
        if($escolha == "excluir"){
    
            /*$sql = mysqli_query($link, "DELETE FROM usuario WHERE id = $id ");
            //$stmt = mysqli_prepare($link, $sql);
            //mysqli_stmt_execute($stmt);
             echo "USUARIO EXCLUIDO COM SUCESSO";*/

            header('Location:exclui_cliente.php');

        }
 ?>

    <?php if($escolha == 'editar')
    {
        header('Location:cliente.php');

//echo "Entre com o ID do USUARIO que deseja editar";
    }?>
            

