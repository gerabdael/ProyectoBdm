DELIMITER &&
Create Function ActDesNoticia(idnoticia int)
returns boolean
DETERMINISTIC
begin
declare ActiveAux BOOLEAN;

SET ActiveAux = (SELECT activo from NOTICIAS WHERE ID_Noticia = idnoticia);

IF ActiveAux = FALSE
THEN
UPDATE NOTICIAS
SET activo = TRUE
WHERE ID_Noticia = idnoticia;

ELSEIF

ActiveAux = TRUE
THEN
UPDATE NOTICIAS
SET activo = FALSE
WHERE ID_Noticia = idnoticia;


END IF;


RETURN (ActiveAux);

END &&
DELIMITER ;
