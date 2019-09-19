
USE dbphp7;

CREATE TABLE tb_usuarios (
idusuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
deslogin VARCHAR(64) NOT NULL,
dessenha VARCHAR(256) NOT NULL,
dtcadastro TIMESTAMP NOT NULL DEFAUT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuarios (deslogin, dessenha) VALUES('root', 'gln0621');

SELECT * FROM tb_usuarios;