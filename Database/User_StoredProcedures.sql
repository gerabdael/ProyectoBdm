use noticiero_web;


DELIMITER //
CREATE PROCEDURE sp_VerInfoUsuario(
in ID_USERAUX INT

)Begin

SELECT nombreCompleto,email,FotoUser,alias,diaregistro,telefono,activo,USER_TYPES.descripcion,USER_STATUS.descripcion,creadopor,lastupdateby,lastupdatebydate
FROM USUARIO
INNER JOIN USER_TYPES  ON USER_TYPES.ID_user_type = USUARIO.tipoU
INNER JOIN USER_STATUS ON USER_STATUS.ValueUser = USUARIO.StatusU
WHERE ID_user = ID_USERAUX;

END //
DELIMITER ;

call sp_VerInfoUsuario(4);

