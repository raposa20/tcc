<?php
//Conexão com o BD
include_once("conexao.php");

//Lendo os dados do formulario
$endereco = $_GET['endereco'];
$material = $_GET['material'];
$data = $_GET['data'];

//Instrução SQ
$stmt = "insert into tbagendamento values(null,'$endereco','$material','$data');";

//Executando a instrução SQL
mysqli_query($conn,$stmt);

//Fechando o BD
mysqli_close($conn);

//grava o agendamento no BD
header("location:avaliacao.php");
?>