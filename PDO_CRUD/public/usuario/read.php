<?php 
    include'../../config/connection.php';

    $stmt = $pdo->query('SELECT * FROM usuario');
    $usuarios = $stmt->fetchAll();
    
    // echo "<pre>";
    // echo var_dump($usuarios);    
?>
    <?php foreach ($usuarios as $indice => $user) { ?>
       <h1><?php echo $user['username']; ?></h1> 
    <?php } ?>
    