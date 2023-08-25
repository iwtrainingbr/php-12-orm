CREATE DATABASE db_concessionaria;

USE db_concessionaria;

CREATE TABLE tb_tipo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome varchar (10)
);

CREATE TABLE tb_veiculo (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tipo_id INT, 
    marca VARCHAR(50),
    modelo VARCHAR(50),
    placa VARCHAR(10) UNIQUE,
    FOREIGN KEY (tipo_id) REFERENCES tb_tipo(id)
);






INSERT INTO tb_tipo (nome) VALUES('carro'); -- 1
INSERT INTO tb_tipo (nome) VALUES('moto'); -- 2

INSERT INTO tb_veiculo (tipo_id, marca, modelo, placa)
VALUES (1, 'Chevrolet', 'Classic', 'ARI-1234');

INSERT INTO tb_veiculo (tipo_id, marca, modelo, placa)
VALUES (3, 'Mercedez', 'T-8000', 'OIU-1234');

SELECT modelo, marca, tb_tipo.nome FROM 
tb_veiculo INNER JOIN tb_tipo
ON tb_veiculo.tipo = tb_tipo.id;

