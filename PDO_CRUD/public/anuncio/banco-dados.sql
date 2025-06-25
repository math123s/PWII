CREATE TABLE anuncios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo_anuncio VARCHAR(255),
    descricao_anuncio TEXT,
    data_publicacao DATE,
    marca_veiculo VARCHAR(100),
    modelo_veiculo VARCHAR(100),
    ano_veiculo INT,
    cor_veiculo VARCHAR(50),
    placa_veiculo VARCHAR(20),
    nome_proprietario VARCHAR(100),
    telefone_proprietario VARCHAR(20)
);
