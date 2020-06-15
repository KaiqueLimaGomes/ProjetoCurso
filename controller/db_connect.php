<?php
//Faz conexão com o banco de dados
$nome_servidor = "localhost";
$nome_usuario = "root";
$senha = "";
$base = "projeto_garagem";
$conecta = new mysqli($nome_servidor, $nome_usuario, $senha, $base);
if ($conecta->connect_error) {
    die("<p style='color:red;'>Conexão falhou: " . $conecta->connect_error . "</p><br>");
    }
echo "<p style='color:green;'>Conexão realizada com sucesso </p><br>";
?>
