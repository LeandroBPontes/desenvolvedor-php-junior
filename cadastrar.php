<?php

//CONEXAO ESTABELECIDA
include "connect.php";

//CHAMADA DOS MÉTODOS
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data = $_POST['data'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$cep = $_POST['cep'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$estados = $_POST['estado'];
$cidades = $_POST['cidades'];



	//TRABALHANDO A INSERÇÃO COM MYSQL
	$sql = "INSERT INTO usuario (nome, cpf, data,email,telefone, cep,logradouro,numero,complemento,bairro,estado,cidade) VALUES ('$nome', '$cpf', '$data','$email','$telefone', '$cep','$logradouro', $numero ,'$complemento','$bairro','$estados','$cidades')";

	//VERIFICANDO CONEXAO
	if (mysqli_query($link, $sql)) {
      //echo "New record created successfully";
	} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($link);
	}

	//FINALIZANDO CONEXAO
	mysqli_close($link);

		echo "Deseja listar os usuarios?<br>";
		echo "<a href='usuario.php'> Listar </a>";
	
	
?>

	

