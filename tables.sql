-- Criação da tabela 'usuario'
CREATE TABLE usuario (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50),
  email VARCHAR(50),
  senha VARCHAR(250)
);

-- Criação da tabela 'produto'
CREATE TABLE produto (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50),
  preco FLOAT
);

-- Criação da tabela 'transacao'
CREATE TABLE transacao (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_produto INT,
  valor FLOAT,
  data_criacao DATETIME DEFAULT NOW(),
  FOREIGN KEY (id_produto) REFERENCES produto(id)
);

-- Criação da tabela 'estoque'
CREATE TABLE estoque (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_produto INT,
  quantidade INT,
  FOREIGN KEY (id_produto) REFERENCES produto(id)
);

-- Criação da tabela 'venda'
CREATE TABLE venda (
  id INT AUTO_INCREMENT PRIMARY KEY,
  id_produto INT,
  id_usuario INT,
  id_transacao INT,
  FOREIGN KEY (id_produto) REFERENCES produto(id),
  FOREIGN KEY (id_usuario) REFERENCES usuario(id),
  FOREIGN KEY (id_transacao) REFERENCES transacao(id)
);


alter table produto add imagem varchar(250)