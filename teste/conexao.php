<<?php 

    $hostname = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "comandas";
    



    $mysql = new mysqli($hostname, $usuario, $senha, $bancodedados);
    if ($mysql->connect_errno) {
        echo "Falha ao conectar: (" . $mysql->connect_errno . ") " . $mysql->connect_errno;
    }


?>