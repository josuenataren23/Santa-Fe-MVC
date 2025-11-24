<?php
//Datos de conexion a la base de datos
    $host = ".\SQLEXPRESS";
    $user = "webmaster";
    $pass = "JosueDS3@Unach2025*";
    $db = "SistemaReserva";

//Conexion a sql server con PDO
    try {
        $conn = new PDO("sqlsrv:Server=$host;Database=$db", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // if($conn){
        //     echo "Conectado a la base de datos";
        // }
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

?>