<?php

		//ARQUIVO PARA TRABALHAR O RECEBIMENTO DAS CIDADES NOS CAMPOS, PÓS ESCOLHA DO ESTADO
		include "connect.php";
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
		$estados = $_POST['estados'];
		$cidades = $_POST['cidades'];

		$query = mysqli_query($link,"SELECT * FROM cidades WHERE estados_id ='".$_POST['id']."'");
		$stmt = mysqli_prepare($link, $query);
         mysqli_stmt_execute($stmt);

		 $fetchAll = mysqli_fetch_all($query, MYSQLI_ASSOC);

		foreach ($fetchAll as $cidades) {
			echo '<option  name="cidades">' .$cidades['nome'].'</option>';
			
		}
	

?>