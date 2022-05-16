use noticiero_web;



#Vista Usuarios
create view View_Usuarios as SELECT  
a.nombreCompleto,a.email,a.FotoUser,a.alias,a.diaregistro,a.telefono,a.activo, b.descripcion as b,c.descripcion as c,a.creadopor, a.lastupdateby, a.lastupdatebydate
FROM USUARIO as a
INNER JOIN USER_TYPES as b ON b.ID_user_type = a.tipoU
INNER JOIN USER_STATUS as c ON c.ValueUser = a.StatusU;


select * from View_Usuarios;



#Vista Noticia
CREATE VIEW View_Noticias as SELECT
a.titulo,a.texto,a.Firma,a.ciudad,a.suburbio,a.country,a.DiaNoticia,a.Diaeventos,a.likes,a.KeyWord,a.Image,VID.VIDEO_MEDIA,b.nombreCompleto,c.STATUSid,d.NombreCat
FROM NOTICIAS AS a
INNER JOIN USUARIO as b ON b.ID_user = a.iduser
INNER JOIN NOTICIA_MEDIA AS VID ON VID.ID_VIDEO = a.Video
INNER JOIN NOTICIAS_STATUS AS c ON c.STATUSid = a.new_status
INNER JOIN CATEGORIAS as d ON d.ID_Catego = a.categoaux;

select * from View_Noticias;



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
CREATE VIEW View_CATEGORIAS as SELECT 
a.NombreCat,a.descripcion,a.ordercategory,a.diacreacion,b.nombreCompleto
from CATEGORIAS as a
INNER JOIN USUARIO AS b ON b.ID_user = a.creadapor;


select * from View_CATEGORIAS;