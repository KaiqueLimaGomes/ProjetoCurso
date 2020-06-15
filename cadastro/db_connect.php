<?php
    $servername = "sql209.ezyro.com";
    $username = "ezyro_25940155";
    $password = "kwho5qdpakw7";
    $db_name = "ezyro_25940155_garagem";

    $connect = new mysqli_connect($servername, $username, $password, $db_name);

    if($connect->connect_error()){
        die("<p style='color:red;'>Conexão falhou: " . $conecta->connect_error . "</p><br>");
    }

?>