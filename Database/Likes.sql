use NOTICIERO_WEB;

CREATE TABLE IF NOT EXISTS LIKES(
ID_LIKE INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
ID_USER INT NOT NULL COMMENT "USUARIO QUE DIO EL LIKE",
FOREIGN KEY(ID_USER) REFERENCES USUARIO(ID_user),
ID_NEWS INT NOT NULL COMMENT "POST AL QUE SE LE DIO LIKE",
FOREIGN KEY(ID_NEWS) REFERENCES NOTICIAS(ID_Noticia),
ACTIVE BOOLEAN NOT NULL COMMENT "CHECAR SI EL LIKE ESTA O NO"
);

select * from likes;