use NOTICIERO_WEB;

CREATE TABLE IF NOT EXISTS COMENTARIOS(
ID_COMENTARIO INT NOT NULL AUTO_INCREMENT PRIMARY KEY comment "Llave primaria e identificador del comentario",
Comentario varchar(250) not null comment "Contenido del comentario",
fecha_creacion datetime not null comment "Dia de creacion del comentario" ,
lastupdate datetime comment "Ultima actualizacion del comentario",
lastupdate_by int comment "ID del ultimo usuario  que modifico el comentario | generalmente el creador del mismo",
FOREIGN KEY(lastupdate_by) REFERENCES USUARIO(ID_user),
active boolean not null comment "Estado activo del comentario"
);


CREATE TABLE IF NOT EXISTS COMENTARIOS_NOTICIA(
ID_COMENTARIO INT NOT NULL comment "ID Del comentario",
ID_NOTICIA INT NOT NULL comment "ID de la noticia donde se hizo el comentario",
PRIMARY KEY(ID_COMENTARIO,ID_NOTICIA),
fecha_creacion datetime not null comment "Dia de creacion del comentario",
lastupdate datetime comment "Dia de la ultima actualizacion del comentario",
lastupdate_by int COMMENT "USUARIO QUE DIO DE ALTA EL REGISTRO" ,
FOREIGN KEY(lastupdate_by) REFERENCES USUARIO(ID_user),
active boolean not null comment "Estado activo del comentario",
PARENT_ID INT COMMENT "comentario padre si es que lo hay  DE LA TABLA COMENTARIOS",
INDEX(PARENT_ID),
FOREIGN KEY(ID_COMENTARIO) REFERENCES COMENTARIOS(ID_COMENTARIO),
FOREIGN KEY(ID_NOTICIA) REFERENCES NOTICIAS(ID_Noticia)
);