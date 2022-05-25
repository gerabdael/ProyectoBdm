use NOTICIERO_WEB;

CREATE TABLE IF NOT EXISTS LIKES(
ID_LIKE INT NOT NULL AUTO_INCREMENT PRIMARY KEY comment "Llave primaria e identificador ddel like",
ID_USER INT NOT NULL COMMENT "USUARIO QUE DIO EL LIKE",
FOREIGN KEY(ID_USER) REFERENCES USUARIO(ID_user),
ID_NEWS INT NOT NULL COMMENT "POST AL QUE SE LE DIO LIKE",
FOREIGN KEY(ID_NEWS) REFERENCES NOTICIAS(ID_Noticia),
ACTIVE BOOLEAN NOT NULL COMMENT "Estado activo del like"
);

select * from likes;

DELIMITER //
CREATE PROCEDURE sp_LikesCosas(
in OPC char(1),
in ID_USERAUX INT,
in ID_NOTICIAAUX INT

)Begin



#añadir like
if OPC like 'a' then

insert into LIKES(ID_USER,ID_NEWS,ACTIVE) VALUES (ID_USERAUX,ID_NOTICIAAUX,TRUE);

UPDATE NOTICIAS as t, 
(
    SELECT SumarLikes(Likes) as NuevoLike 
    FROM NOTICIAS 
    WHERE ID_Noticia = ID_NOTICIAAUX AND activo =  true
) as temp
SET likes = temp.NuevoLike where ID_Noticia = ID_NOTICIAAUX;


end if;


#quitar like
if OPC like 'b' then

UPDATE LIKES 
set ACTIVE = false 
WHERE ID_USER = ID_USERAUX;

UPDATE NOTICIAS as t, 
(
    SELECT RestarLikes(Likes) as NuevoLike 
    FROM NOTICIAS 
    where ID_Noticia = ID_NOTICIAAUX AND activo =  true
    )as temp

SET likes = temp.NuevoLike where ID_Noticia = ID_NOTICIAAUX;


end if;


END //
DELIMITER ;
DELIMITER $$
Create Function RestarLikes(ContLikes int)
returns int
DETERMINISTIC
begin
declare IntingLikesAUX INT;

SET IntingLikesAUX = ContLikes-1;

RETURN (IntingLikesAUX);



RETURN (IntingLikesAUX);

END $$
DELIMITER ;