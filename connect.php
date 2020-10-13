<?php
//arquivo de conexao com o banco
//mysqli_connect

$host = "localhost";
$user = "root";
$pass = "";
$db = "bd_usuario";


$link = mysqli_connect("$host","$user","$pass","$db");
//$link_exec('SET CHARACTER SET utf8');


           setlocale(LC_ALL, 'pt_BR.utf-8');

/*if(mysqli_connect_errno()){
printf("connect failed: %s\n", mysqli_connect_error());
exit();
}*/




?>