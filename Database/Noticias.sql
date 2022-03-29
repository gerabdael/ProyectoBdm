use NOTICIERO_WEB;

CREATE TABLE IF NOT exists CATEGORIAS(
ID_Catego INT NOT NULL AUTO_INCREMENT PRIMARY KEY comment "llave primaria e identificador de la categoria",
NombreCat VARCHAR(100) NOT NULL comment "Nombre de la categoria",
descripcion varchar(100) not null comment "Descripcion de la categoria",
ordercategory int not null comment "es un orden modificable para ordenar del 1 al --",
diacreacion datetime not null comment "Dia de alta del registro",
ultimaactualizacion datetime not null comment "Dia de alta de la ultima actualizacion  del registro",
creadapor int not null comment "editor que crea la categoria",
FOREIGN KEY(creadapor) REFERENCES USUARIO(ID_user),
userupdate int not null comment "editor que modifica la categoria",
FOREIGN KEY(userupdate) REFERENCES USUARIO(ID_user),
Activa bool default true not null comment "Estado activo de la categoria"
);


insert into CATEGORIAS(NombreCat,descripcion,ordercategory,diacreacion,ultimaactualizacion,creadapor,userupdate,Activa)
VALUES("Deportes","seccion deportiva",2,sysdate(),sysdate(),1,1,TRUE);
insert into CATEGORIAS(NombreCat,descripcion,ordercategory,diacreacion,ultimaactualizacion,creadapor,userupdate,Activa)
VALUES("Espectaculo","drama y farandula",2,sysdate(),sysdate(),1,1,TRUE);
insert into CATEGORIAS(NombreCat,descripcion,ordercategory,diacreacion,ultimaactualizacion,creadapor,userupdate,Activa)
VALUES("Primera Hora","Noticias mas importantes",1,sysdate(),sysdate(),1,1,TRUE);

select * from CATEGORIAS;

select * from USUARIO;
	


CREATE TABLE IF NOT EXISTS NOTICIAS_STATUS(
STATUSid VARCHAR(100)NOT NULL PRIMARY KEY comment "Llave primaria e identificador de la noticia en caracteres",
DiaCreacion Datetime not null comment "Dia de alta de creacion del estatus",
createdby int not null comment "usuario que dio de alta el registro",
active boolean default true not null comment "Estado activo del estatus de la noticia"

);

insert into NOTICIAS_STATUS VALUES("En redaccion",sysdate(),117,1);
insert into NOTICIAS_STATUS VALUES("Terminada",sysdate(),117,1);
insert into NOTICIAS_STATUS VALUES("Publicada",sysdate(),117,1);

select * from NOTICIAS_STATUS;

CREATE TABLE IF NOT EXISTS NOTICIA_MEDIA(
ID_VIDEO int not null auto_increment primary key comment "id del video de cierta nota",
VIDEO_MEDIA LONGBLOB NOT NULL comment "Contenido del video"
);

CREATE TABLE IF NOT exists NOTICIAS(
ID_Noticia INT NOT NULL AUTO_INCREMENT PRIMARY KEY comment "llave primaria e Id de la noticia",
titulo VARCHAR(100) NOT NULL comment "Titulo de la noticia",
texto VARCHAR(100) NOT NULL comment "Contenido textual de la noticia" ,
Firma Varchar(50) not null comment "firma del reportero",
ciudad VARCHAR(100) NOT NULL comment "Ciudad donde ocurrio la noticia",
suburbio VARCHAR(100) NOT NULL comment "Suburbio o Barrio donde ocurrio la noticia" ,
country VARCHAR(100) NOT NULL comment "Pais donde ocurrio la noticia",
DiaNoticia Datetime not null comment "Dia que ocurrio la noticia",
Diaeventos Datetime not null comment "Dia donde transcurrieron los hechos",
activo bool default true not null comment "si la nota sigue vigente",
likes int default 0 comment "cantidad numerica de los likes",
KeyWord varchar(300) comment "palabras clave para buscar la noticia",
Image mediumBLOB not null comment "imagen obligatoria de la noticia",

Video int comment "agregar id del video si hay video",
Foreign key(Video) references NOTICIA_MEDIA(ID_VIDEO),
iduser int not null comment "id usuario que hizo la nota",
Foreign key(iduser) references USUARIO(ID_user),
new_status varchar(100) comment "status de la noticia",
Foreign key(new_status) references NOTICIAS_STATUS(STATUSid),
categoaux int not null comment "categoria noticia",
Foreign key(categoaux) references CATEGORIAS(ID_Catego)

);





select * from NOTICIAS;

insert into NOTICIAS(titulo,texto,Firma,ciudad,suburbio,country,DiaNoticia,Diaeventos,activo,KeyWord,iduser,new_status,categoaux,Image,Video) VALUES(
"memo aponte","hace un video cringe","EyeShield News","ciudad de mexico","polanco","México",sysdate(),sysdate(),true,"ENANOS",2,"Publicada",2,"D:\0_BDM\PROYECTOfINALBDM\ProyectoBdm\Content\Pikachu.png",null);


