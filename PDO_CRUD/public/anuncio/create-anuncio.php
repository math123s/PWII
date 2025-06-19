<?php
   include'../../Incluides/header.php'; 
   include'../../Incluides/body.php'; 
   include'../../config/connection.php'; 


?>

<form action="create.php" method="POST">
   <label for="titulo_anuncio">Titulo anuncio</label>
   <input type="text" name="titulo_anuncio" id="titulo_anuncio">
   <br><br>
   <label for="descrição_anuncio">Descrição do anuncio</label>
   <input type="password" name="descrição_anuncio" id="descrição_anuncio">
   <br><br> 
   <label for="data_publicação">Data de publicação</label>
   <input type="date" name="data_publicação" id="data_publicação">
   <br><br> 
   <label for="marca_veiculo">marca do veiculo</label>
   <input type="text" name="marca_veiculo" id="marca_veiculo">
   <br><br> 
   <label for="modelo-veiculo">modelo do veiculo</label>
   <input type="text" name="modelo-veiculo" id="modelo-veiculo">
   <br><br> 
   <label for="cor_veiculo">cor do veiculo</label>
   <input type="text" name="cor_veiculo" id="cor_veiculo">
   <br><br> 
   <label for="placa_veiculo">placa veiculo</label>
   <input type="text" name="placa_veiculo" id="placa_veiculo">
   <br><br> 
   <label for="placa_veiculo">placa veiculo</label>
   <input type="text" name="placa_veiculo" id="placa_veiculo">
   <br><br> 
   <button type="submit">Cadastrar</button>
</form>

<?php

$username = isset($_POST['titulo_anuncio']) ? $_POST['titulo_anuncio'] : exit() ;
$password = isset($_POST['descrição_anuncio']) ? $_POST['descrição_anuncio'] : exit() ;

// statement
$stmt = $pdo->prepare('INSERT INTO usuario (username, password) VALUES (:username, :password)');
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();

header("Location: read-anuncio.php")
?>

<?php  include '../../incluides/footer.php?>
