CREATE DATABASE IF NOT EXISTS NOTICIERO_WEB;
use NOTICIERO_WEB;

CREATE TABLE IF NOT EXISTS USER_TYPES(
ID_user_type INT NOT NULL AUTO_INCREMENT PRIMARY KEY comment "llave primaria",
descripcion varchar(100) not null comment "describe al tipo de usuario",
creationdate datetime not null comment "fecha de alta del registro",
active boolean not null default true
);

CREATE TABLE IF NOT EXISTS USER_STATUS(
ValueUser char NOT NULL PRIMARY KEY comment "llave primaria",
descripcion varchar(100) not null comment "describe el status de usuario",
creationdate datetime not null comment "fecha de alta del registro",
active boolean not null default true
);


insert into USER_TYPES(descripcion,creationdate,active) VALUES("admin",sysdate(),true);
insert into USER_TYPES(descripcion,creationdate,active) VALUES("Reportero",sysdate(),true);
insert into USER_TYPES(descripcion,creationdate,active) VALUES("Usuario",sysdate(),true);

insert into USER_STATUS(ValueUser,descripcion,creationdate,active) VALUES("A","activo",sysdate(),true);
insert into USER_STATUS(ValueUser,descripcion,creationdate,active) VALUES("B","bloqueado",sysdate(),true);
insert into USER_STATUS(ValueUser,descripcion,creationdate,active) VALUES("I","inactivo",sysdate(),true);

select * from USER_TYPES; 
select * from USER_STATUS;

CREATE TABLE IF NOT EXISTS USUARIO(
ID_user INT NOT NULL AUTO_INCREMENT PRIMARY KEY comment "llave primaria",
nombreCompleto varchar(150) not null,
email varchar(100) not null,
contraseña varchar(100) not null,
FotoUser mediumBLOB ,
alias varchar(100) not null,
telefono int not null,
activo boolean not null,

tipoU int not null comment "tipo de usuario que es 1-editor| 2-reportero | 3-usernorm",
Foreign key(tipoU) references USER_TYPES(ID_user_type),
StatusU char not null comment "status del usuario solo puede ser A B I",
Foreign key(StatusU) references USER_STATUS(ValueUser),
creadopor int not null comment "usuario que dio de alta el registro",
lastupdateby int comment "ultimo usuario que edito el registro",
lastupdatebydate datetime comment "ultimo usuario que edito el registro"

);

insert into USUARIO(nombreCompleto,email,contraseña,FotoUser,alias,diaregistro,telefono,activo,tipoU,StatusU,
creadopor,lastupdateby,lastupdatebydate) VALUES("Victor Gomez","elguapo@gmail.com","qwerty",null,"reportergod",sysdate(),8183565958,true,1,"A",117,null,null);
insert into USUARIO(nombreCompleto,email,contraseña,FotoUser,alias,diaregistro,telefono,activo,tipoU,StatusU,
creadopor,lastupdateby,lastupdatebydate) VALUES("Gera abdael","Ojitos@gmail.com","asd",null,"eyeshield",sysdate(),8185321456,true,2,"A",117,null,null);
insert into USUARIO(nombreCompleto,email,contraseña,FotoUser,alias,diaregistro,telefono,activo,tipoU,StatusU,
creadopor,lastupdateby,lastupdatebydate) VALUES("Jordan Jones","jojo@gmail.com","xdxd",null,"jojo",sysdate(),8181292325,true,3,"I",117,null,null);

select * from USUARIO;

