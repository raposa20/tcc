<?php

//Parametros de conexão
$servidor = "localhost";
$u = "root";
$s = "";
$bd = "bdcoleta";

//Conexao com o BD
$conn = mysqli_connect($servidor, $u, $s, $bd);

if (!$conn){
	die("Falha na conexão com o BD. ". mysqli_connect_error($conn));
}

?>