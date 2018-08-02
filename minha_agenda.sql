CREATE DATABASE minha_agenda;

CREATE TABLE usuarios(
	id_usuario INT(11) PRIMARY KEY AUTO_INCREMENT,
	email_usuario VARCHAR(255) NOT NULL,
	senha_usuario VARCHAR(255) NOT NULL	
);

CREATE TABLE agendas(
	id_agenda INT(11) PRIMARY KEY AUTO_INCREMENT,
	usuario_id INT(11) NOT NULL,
	nome_agenda VARCHAR(255) NOT NULL,
	tipo_agenda CHAR(1) NOT NULL,
	numero_agenda VARCHAR(20) NOT NULL
);

ALTER TABLE agendas ADD FOREIGN KEY(usuario_id) 
REFERENCES usuarios(id_usuario)

