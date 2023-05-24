CREATE DATABASE PHP;
USE PHP;

DROP DATABASE PHP;

CREATE TABLE usuario (
codigo INT PRIMARY KEY AUTO_INCREMENT,
login VARCHAR (10),
senha VARCHAR(7)
);

INSERT INTO usuario (login, senha) VALUES 
('isabelha','1234567');

INSERT INTO usuario (login, senha) VALUES 
('isabella','123');

SELECT * FROM USUARIO;

SELECT * FROM usuario WHERE login = "isabelha";

