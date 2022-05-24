use noticiero_web;



#Vista Usuarios
create view View_Usuarios as SELECT  
a.nombreCompleto,a.email,a.FotoUser,a.alias,a.diaregistro,a.telefono,a.activo, b.descripcion as b,c.descripcion as c,a.creadopor, a.lastupdateby, a.lastupdatebydate
FROM USUARIO as a
INNER JOIN USER_TYPES as b ON b.ID_user_type = a.tipoU
INNER JOIN USER_STATUS as c ON c.ValueUser = a.StatusU;


select * from View_Usuarios;



#Vista UsuariosFULL
create view View_OnlyUserInfo as SELECT  
ID_user,nombreCompleto,email,FotoUser,contraseña,alias,diaregistro,telefono,activo,tipoU,StatusU,creadopor,lastupdateby,lastupdatebydate
FROM USUARIO ;

select * from View_OnlyUserInfo;



#Vista Noticia
CREATE VIEW View_Noticias as SELECT
a.titulo,a.texto,a.Firma,a.ciudad,a.suburbio,a.country,a.DiaNoticia,a.Diaeventos,a.likes,a.KeyWord,a.Image,VID.VIDEO_MEDIA,b.nombreCompleto,c.STATUSid,d.NombreCat
FROM NOTICIAS AS a
INNER JOIN USUARIO as b ON b.ID_user = a.iduser
INNER JOIN NOTICIA_MEDIA AS VID ON VID.ID_VIDEO = a.Video
INNER JOIN NOTICIAS_STATUS AS c ON c.STATUSid = a.new_status
INNER JOIN CATEGORIAS as d ON d.ID_Catego = a.categoaux;

select * from View_Noticias;



#NUEVA VIEW PARA VER EL PEDO
CREATE VIEW SimpleNewsView as SELECT
ID_Noticia,texto,titulo,descripcion,Image,new_status
FROM NOTICIAS;

select * from SimpleNewsView;




#Vista Comentarios
CREATE VIEW View_Coments as SELECT 
a.Comentario,a.fecha_creacion,a.lastupdate,b.nombreCompleto
FROM COMENTARIOS as a
INNER JOIN USUARIO AS b ON b.ID_user = a.lastupdate_by;

select * from View_Coments;



#vista comentarios de noticias
CREATE VIEW View_ComentsFromNews as SELECT 
c.titulo,a.fecha_creacion,a.lastupdate,b.nombreCompleto
FROM COMENTARIOS_NOTICIA as a
INNER JOIN USUARIO AS b ON b.ID_user = a.lastupdate_by
INNER JOIN  NOTICIAS AS c ON c.ID_Noticia = a.ID_NOTICIA;

select * from View_ComentsFromNews;



#vista likes
CREATE VIEW View_LIKES AS SELECT
a.ACTIVE,b.nombreCompleto,c.titulo
from LIKES as a
INNER JOIN USUARIO AS b ON  b.ID_user = a.ID_USER
INNER JOIN NOTICIAS AS c ON c.ID_Noticia = a.ID_NEWS;


select * from View_LIKES;



#vista UserTypes
CREATE VIEW View_UserTipes as SELECT
descripcion,creationdate,active
from USER_TYPES;

select * from View_UserTipes;



#vista UserTypes
CREATE VIEW View_UserStatus as SELECT
ValueUser,descripcion,creationdate,active
from USER_STATUS;

select * from View_UserStatus;



#vista categorias
CREATE VIEW View_CATEGORIAS2 as SELECT 
a.ID_Catego,a.NombreCat,a.descripcion,a.ordercategory,a.diacreacion,b.nombreCompleto
from CATEGORIAS as a
INNER JOIN USUARIO AS b ON b.ID_user = a.creadapor;


select * from View_CATEGORIAS2;




#gera agregue el activo en estan view para ponerlo en categorycalsses.php linea 15

Create view View_CategoriaColor2 as SELECT 
a.ID_Noticia,a.titulo,a.descripcion,a.texto,a.country,a.suburbio,a.ciudad,a.Image,a.Diaeventos,a.Firma,a.likes,b.ID_Catego,b.NombreCat,b.Color,b.ordercategory,b.Activa,b.descripcion as CatDes
FROM noticias as a 
INNER JOIN CATEGORIAS AS b ON b.ID_Catego = a.categoaux;

select * from View_CategoriaColor2;


#upsi daisy

Create view View_OnlyCatsColors as SELECT 
ID_Catego,NombreCat,Color,ordercategory,Activa,descripcion
FROM CATEGORIAS;

select * from View_OnlyCatsColors;



<<<<<<< HEAD
=======

>>>>>>> main
select * from View_CategoriaColor where Color = 'rojo';





#Views apartir de los seelects





CREATE VIEW ComentsViewParaGera AS SELECT
COM.ID_COMENTARIO AS ID, COM.Comentario AS  TextoComent , COM.active AS defaultActive , CNEWS.PARENT_ID AS PARENT,CNEWS.ID_NOTICIA as IDnoticiaWhere, CNEWS.active as SecondActiveCom
FROM COMENTARIOS AS COM
INNER JOIN COMENTARIOS_NOTICIA AS CNEWS ON COM.ID_COMENTARIO= CNEWS.ID_COMENTARIO
WHERE COM.`ACTIVE` = 1 AND CNEWS.`ACTIVE`=1
ORDER BY COM.fecha_creacion ASC;


select * from ComentsViewParaGera;




