<?php include '../../config.php'; ?>

<?php
if (!isset($_GET['id'])) {
    header("Location: read-anuncio.php");
    exit;
}

$id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sql = "UPDATE anuncios SET
        titulo_anuncio = ?, descricao_anuncio = ?, data_publicacao = ?, 
        marca_veiculo = ?, modelo_veiculo = ?, ano_veiculo = ?, 
        cor_veiculo = ?, placa_veiculo = ?, nome_proprietario = ?, telefone_proprietario = ?
        WHERE id = ?";

    $stmt = $pdo->prepare($sql);
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
        $_POST['telefone_proprietario'],
        $id
    ]);

    header("Location: read-anuncio.php");
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM anuncios WHERE id = ?");
$stmt->execute([$id]);
$anuncio = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<form method="POST">
    <label>Título do Anúncio: <input type="text" name="titulo_anuncio" value="<?= $anuncio['titulo_anuncio'] ?>"></label><br>
    <label>Descrição: <textarea name="descricao_anuncio"><?= $anuncio['descricao_anuncio'] ?></textarea></label><br>
    <label>Data de Publicação: <input type="date" name="data_publicacao" value="<?= $anuncio['data_publicacao'] ?>"></label><br>
    <label>Marca do Veículo: <input type="text" name="marca_veiculo" value="<?= $anuncio['marca_veiculo'] ?>"></label><br>
    <label>Modelo do Veículo: <input type="text" name="modelo_veiculo" value="<?= $anuncio['modelo_veiculo'] ?>"></label><br>
    <label>Ano: <input type="number" name="ano_veiculo" value="<?= $anuncio['ano_veiculo'] ?>"></label><br>
    <label>Cor: <input type="text" name="cor_veiculo" value="<?= $anuncio['cor_veiculo'] ?>"></label><br>
    <label>Placa: <input type="text" name="placa_veiculo" value="<?= $anuncio['placa_veiculo'] ?>"></label><br>
    <label>Nome do Proprietário: <input type="text" name="nome_proprietario" value="<?= $anuncio['nome_proprietario'] ?>"></label><br>
    <label>Telefone: <input type="text" name="telefone_proprietario" value="<?= $anuncio['telefone_proprietario'] ?>"></label><br>
    <button type="submit">Atualizar</button>
</form>