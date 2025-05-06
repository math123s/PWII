<?php 
    include'../../config/connection.php';

    $stmt = $pdo->query('SELECT * FROM usuario');
    $usuarios = $stmt->fetchAll();

    echo "<pre>";
    echo var_dump($usuarios);

    foreach ($usuarios as $indice => $user) {
       echo $user['username'];
    }

?>