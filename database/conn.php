<?php 
$hostname = "localhost";
$database = "todo_list";
$username = "postgres";
$password = 'W$L7.K1ng#01';

try {
    $pdo = new PDO("pgsql:host=$hostname;dbname=$database",$username, $password);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}


?>