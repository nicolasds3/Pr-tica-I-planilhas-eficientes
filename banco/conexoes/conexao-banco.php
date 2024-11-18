<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$bd_name = "pratica_um_planilhas_eficientes";

$conexao = new mysqli($server_name, $user_name, $password, $bd_name);

if ($conexao->connect_error) {
    die("Conexão falhou: " . $conexao->connect_error);
}
?>