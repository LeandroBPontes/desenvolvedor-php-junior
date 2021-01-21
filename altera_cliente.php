 <?php

        include "connect.php";

        $variavel = $_POST['alter'];
        $id = $_POST['id_usuario'];
        $campo_alterado = $_POST['campo_alterado'];        

         
        //variavel_alterada == campo que o usuario quer editar
        //variavel_troca == modificacao que ele quer fazer


   
      //inserindo a variavel editada no campo determinado pelo usuario
      $query = mysqli_query($link, "UPDATE usuario SET $variavel = '$campo_alterado'  WHERE id = $id");

       
      echo "CAMPO ALTERADO COM SUCESSO";
      echo "<br />";

      

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
                echo "<br />";
                 echo "Nome: $nome , Id: $id, CPF: $cpf, Data Nasc.: $data, Email: $email,Telefone: $telefone, CEP:$cep, Logradouro: $logradouro, Numero: $numero, Complemento: $complemento, Bairro: $bairro, Estado: $estados, Cidade: $cidades <br>";
                 echo "<br />";

    } 
           
    ?>
