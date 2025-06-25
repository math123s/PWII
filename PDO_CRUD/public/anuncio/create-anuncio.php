<?php
include '../../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare("INSERT INTO anuncios 
        (titulo_anuncio, descricao_anuncio, data_publicacao, marca_veiculo, modelo_veiculo, ano_veiculo, cor_veiculo, placa_veiculo, nome_proprietario, telefone_proprietario)
        VALUES (, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->execute([
        $_POST['titulo_anuncio'],
        $_POST['descricao_anuncio'],
        $_POST['data_publicacao'],
        $_POST['marca_veiculo'],
        $_POST['modelo_veiculo'],
        $_POST['ano_veiculo'],
        $_POST['cor_veiculo'],
        $_POST['placa_veiculo'],
        $_POST['nome_proprietario'],
        $_POST['telefone_proprietario']
    ]);

    header("Location: read-anuncio.php");
    exit;
}
?>

<h2>Cadastrar Anúncio</h2>
<form method="POST">
    <label for="titulo_anuncio">Título do anúncio:</label>
    <input type="text" name="titulo_anuncio" id="titulo_anuncio" required><br><br>

    <label for="descricao_anuncio">Descrição do anúncio:</label>
    <textarea name="descricao_anuncio" id="descricao_anuncio" required></textarea><br><br>

    <label for="data_publicacao">Data de publicação:</label>
    <input type="date" name="data_publicacao" id="data_publicacao" required><br><br>

    <label for="marca_veiculo">Marca do veículo:</label>
    <input type="text" name="marca_veiculo" id="marca_veiculo" required><br><br>

    <label for="modelo_veiculo">Modelo do veículo:</label>
    <input type="text" name="modelo_veiculo" id="modelo_veiculo" required><br><br>

    <label for="ano_veiculo">Ano do veículo:</label>
    <input type="number" name="ano_veiculo" id="ano_veiculo" required><br><br>

    <label for="cor_veiculo">Cor do veículo:</label>
    <input type="text" name="cor_veiculo" id="cor_veiculo" required><br><br>

    <label for="placa_veiculo">Placa do veículo:</label>
    <input type="text" name="placa_veiculo" id="placa_veiculo" required><br><br>

    <label for="nome_proprietario">Nome do proprietário:</label>
    <input type="text" name="nome_proprietario" id="nome_proprietario" required><br><br>

    <label for="telefone_proprietario">Telefone do proprietário:</label>
    <input type="text" name="telefone_proprietario" id="telefone_proprietario" required><br><br>

    <button type="submit">Cadastrar</button>
</form>
