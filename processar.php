<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Poluição Zero - Resultado</title>
</head>
<body>
    <?php
    include_once("conexao.php");
    $nota = $_GET['nota'];
    $stmt="insert into tbavaliacoes values (null,$nota);";
    mysqli_query($conn,$stmt);
    mysqli_close($conn);

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $nota = $_GET["nota"];
        
        switch ($nota) {
            case "3":
                $mensagem = "Muito obrigado! Sua avaliação foi 'Muito Bom'.";
                break;
            case "2":
                $mensagem = "Obrigado! Sua avaliação foi 'Bom'.";
                break;
            case "1":
                $mensagem = "Agradecemos por sua avaliação 'Médio'.";
                break;
            default:
                $mensagem = "Opção inválida.";
        }
        
        echo "<p>$mensagem</p>";
    }
    ?>
</body>
</html>