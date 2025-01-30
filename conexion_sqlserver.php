
<?php

require_once("env.php");

    // Configurar datos de Acceso a la DB
    $dbuser = $DB_User;
    $dbpass = $DB_Password;
    $dbserver = $DB_Server;
    $dbname = $DB_Name;

    $dsn = "sqlsrv:Server=$dbserver;Database=$dbname;TrustServerCertificate=true";

    try {
        // Crear conexion a SQL Server
        $conn = new PDO($dsn, $dbuser, $dbpass);

        // Comprobar conexión
        if( $conn ) {
            echo "Conexión exitosa!";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }


?>