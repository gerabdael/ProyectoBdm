CREATE DATABASE basededatosmultimedia;
USE basededatosmultimedia;

CREATE TABLE IF NOT EXISTS usuarios(
    id_Usuario INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Usuario VARCHAR(40),
    Contrasena VARCHAR(40),
    Edad INT(10),
    Tipo_Usuario INT(1)
);

CREATE TABLE IF NOT EXISTS  noticias(
    
);