<?php
    // Configuração de conexão com o banco de dados
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'registrodeprodutos');

    // Conexão com o banco de dados com os dados referenciados anteriormente
    $conn = new MySQLi(HOST,USER,PASS,BASE);
?>