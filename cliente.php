<!----------------------PÁGINA COM PROBLEMAS PARA FAZER ALTERAÇÃO NA TABELA ------------------>

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

    <h1> Qual campo você deseja alterar? </h1>

  
    <form method="GET" action="#">

        <select name="alter" id="altera" value="alter">
        <option value="nome">Nome</option>
        <option value="cpf">CPF</option>
        <option value="data">Data Nascimento</option>
        <option value="email">email</option>
        <option value="cep">CEP</option>
        <option value="logradouro">Logradouro</option>
        <option value="numero">Numero</option>
        <option value="complemento">Complemento</option>
        <option value="bairro">Bairro</option>
        <option value="estado">Estado</option>
        <option value="cidade">Cidade</option>
        </select>
        
        <br><br>
        <input type="submit" value="Alterar" class="ml-2 mb-2 btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-primary mb-2 "><br>
        
    </form>
 <?php

        include "connect.php";
        $variavel_alterada = @($_GET['alter']);
        $id = $_POST['id_usuario'];
       
        echo $variavel_alterada;
        echo $id;
        //variavel_alterada == campo que o usuario quer editar
        //variavel_troca == modificacao que ele quer fazer


      /* if($variavel_alterada != ""){
        echo "<script>var x = prompt('O que deseja inserir no lugar?')</script>";
       $variavel_troca =  "<script>document.write(x)</script>";
        
    }*/

 //   $query = mysqli_query($link, "UPDATE usuario SET $variavel_alterada = '$variavel_troca'  WHERE id = $id;");

   /* echo "CAMPO ALTERADO COM SUCESSO";
      $sql = mysqli_query($link, "SELECT * FROM usuario WHERE id = '$id' ");
                //varredura banco
           

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

                 echo "Nome: $nome , Id: $id, CPF: $cpf, Data Nasc.: $data, Email: $email,Telefone: $telefone, CEP:$cep, Logradouro: $logradouro, Numero: $numero, Complemento: $complemento, Bairro: $bairro, Estado: $estados, Cidade: $cidades <br>  ";

    }*/
                            
                           
           
           
    ?>

   


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