<?php

	 include "connect.php";

	
	$email = $_POST['email']; //recupera os names de index

	$usuario_autenticado = false; //verifica autenticação
	$usuario_id = NULL;
	$usuario_perfil_id = NULL;


            //varredura banco
            //OBJETIVO: APRESENTAR OS DADOS DO USUARIO SELECIONADO ANTERIORMENTE

            $sql = mysqli_query($link, "SELECT * FROM usuario");
	
	foreach ($sql as $user) {
		//print_r($user); - utilizado para printar arrays de teste

		if($user['email'] == $_POST['email']){

				$usuario_autenticado = true;
				
		}
	}
		if($usuario_autenticado == true){
			header('Location:usuario.php');

			
	}	else echo "<pre>Perfil inexistente <a href='cadastramento.php'>Cadastre-se </a>";


	


?>