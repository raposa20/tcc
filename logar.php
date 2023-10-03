<?php


$email = $_POST['email'];
$senha = $_POST['senha']; 



include_once("conexao.php");


$stmt = "select * from tbusuarios where email = '$email';";


$resultado = mysqli_query($conn,$stmt);


if(mysqli_num_rows($resultado) > 0) {
    $usuario = mysqli_fetch_assoc($resultado);

        if (password_verify($senha, $usuario['senha'])==FALSE) {
            $erro = "senha incorreta";
        }
} else{
    $erro = "Usuário não encontrado";
}



if (!isset($erro)) {
    session_start();
    $_SESSION['usuario'] = $usuario['email'];
    header("location:index1.php");
}else{
    header("location:login.php?erro=".$erro);
}
?>