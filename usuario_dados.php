
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
            <h4>Tela de Usuario </h4>
                   
          </div>
      </nav>
    </header><!--Fim cabeçalho -->

    <div id="box_form">
      <br><br>
        <h3 class="titulos ml-2"> Dados do usuario - <?php echo $_POST['usuario']; ?></h3>
    </div>


    <?php

           include "connect.php";
           $id = $_POST['usuario'];
           if($id != ""){


            //varredura banco
            //OBJETIVO: APRESENTAR OS DADOS DO USUARIO SELECIONADO ANTERIORMENTE

            $sql = mysqli_query($link, "SELECT * FROM usuario WHERE id = '$id' ");
                
           

            while($line = mysqli_fetch_array($sql)){
                $id = $line['id'];
                $nome = $line['nome'];
                $cpf = $line['cpf'];
                $data = $line['data'];
                $email = $line['email'];
                $telefone = $line['telefone'];
                $cep = $line['cep'];
                $logradouro = $line['logradouro'];
                $numero = $line['numero'];
                $complemento = $line['complemento'];
                $bairro = $line['bairro'];
                $estados = $line['estado'];
                $cidades = $line['cidade'];

                 echo "Nome: $nome , CPF: $cpf, Data Nasc.: $data, Email: $email,Telefone: $telefone, CEP:$cep, Logradouro: $logradouro, Numero: $numero, Complemento: $complemento, Bairro: $bairro, Estado: $estados, Cidade: $cidades <br>  ";

    }
}

    ?>
     <form action= "usuario.php" method="POST" enctype="multipart/form-data" >

        <br>
  
        <input type="submit" value="Voltar" class="ml-2 mb-2 btn btn-primary">


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