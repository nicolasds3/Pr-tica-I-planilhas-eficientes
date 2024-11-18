<?php
include "../../banco/conexoes/conexao-banco.php";
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['form_data'] = $_POST;

    $nome_completo = $_SESSION['form-data']['nome_completo'];
    $email = $_SESSION['form-data']['email'];
    $senha = password_hash($_SESSION['form-data']['senha']);
    $telefone = $_SESSION['form-data']['email'];

    $sql = "INSERT INTO usuario (nome_completo, email, senha, telefone) VALUES ('$nome_completo', '$email', '$senha', '$telefone')";

    if ($conexao->query($sql) === TRUE) {
        echo "<div style='color: green;'>Cadastro realizado com sucesso!</div>";
        header("Localion: login.php");
        exit();
    } else {
        echo "<div style='color: red;'>Erro:" . $conexao->error . "</div>";
    }
}

$conexao->close();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faça cadastro</title>
    <link rel="stylesheet" href="../visual/style/styles.css">
    <link rel="website icon" type="png" href="../visual/imagens/simbolo-cadastro.png">
    <script defer src="../scripts/cadastro.js"></script>
</head>
<body>
    
</body>
</html>