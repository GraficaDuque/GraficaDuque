CREATE DATABASE graficaduque;

USE graficaduque;

CREATE TABLE contatos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  telefone VARCHAR(20),
  mensagem TEXT,
  tipo VARCHAR(50),
  data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
