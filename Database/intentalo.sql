#funciones

DELIMITER $$
Create Function ActDesUsuario (iduser int)
returns boolean
DETERMINISTIC
begin
declare ActiveAux BOOLEAN;

SET ActiveAux = (SELECT activo from USUARIO WHERE ID_user = iduser);

IF ActiveAux = FALSE
THEN
UPDATE USUARIO
SET activo = TRUE
WHERE ID_USER = iduser;

ELSEIF

ActiveAux = TRUE
THEN
UPDATE USUARIO
SET activo = FALSE
WHERE ID_USER = iduser;


END IF;


RETURN (ActiveAux);

END $$
DELIMITER ;



select  ActDesUsuario(5);

call sp_Usuario('a',5,null,null,null,null,null,null,null,null,null,null,null);
