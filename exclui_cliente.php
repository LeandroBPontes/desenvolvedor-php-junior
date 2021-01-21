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

    <title></title>
    

  </head>
  <body>

    <header><!--inicio cabeçalho -->
      <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-transparente ">
        <div class="container">
            <h4>Tela de edição de cadastro </h4>
                   
          </div>
      </nav>
    </header><!--Fim cabeçalho -->

    <div id="box_form">
        <h1 class="titulos ml-2"> Alteração</h1>
    </div>

    <h1> Entre com o id do usuario que deseja excluir. </h1>

    <form method="POST" action="exclui_cliente_acao.php">
    
            <select id="id_usuario" name="id_usuario" class="ml-2 mt-1"> 

            <?php
             include "connect.php";
            
            $query = mysqli_query($link, "SELECT id FROM usuario ORDER BY id ASC");
            
            $stmt = mysqli_prepare($link, $query);
            mysqli_stmt_execute($stmt);

            $fetchAll = mysqli_fetch_all($query, MYSQLI_ASSOC);
        

            foreach($fetchAll as $usuario){

            echo '<option "value = "id_usuario"> '.$usuario['id'].'</option>';

              
                 }
            ?>
         </select>

        <br><br>
        <input type="submit" value="Excluir" class="ml-2 mb-2 btn btn-primary" >
        <input type="reset" value="Limpar" class="btn btn-primary mb-2 "><br>
        
    </form>

    



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
     
   

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>