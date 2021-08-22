<!-- VeriTabanı -->
<?php

    // Veri Tabanı İşlemleri

    $servername = "sql_db2";
    $username = "root";
    $password = "CokGizliParola";
    $dbname = "letmehack_db";

    // Veri tabanı bağlantısı
    $conn = new mysqli($servername, $username, $password,$dbname);

    // Veri tabanı bağlantı kontrolü
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

?>