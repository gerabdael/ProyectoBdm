
DELIMITER //
CREATE PROCEDURE sp_Usuario(
in OPC char(1),
in ID_USERAUX INT,
in NombreAux varchar(100),
in EmailAux varchar(100),
in ContraseñaAux varchar(100),
in FotoAux mediumBLOB,
in AliasAux varchar(100),
in NumeroTelAux int,
in TIPOUaux int,
in StatusUaux char(1),
in IDcreatorAux int,
in lastUpdatebyAUX int,
in lastupdateDate datetime



)Begin

#Ver usuario A

if OPC like 'a' then
SELECT nombreCompleto,email,FotoUser,alias,diaregistro,telefono,activo,USER_TYPES.descripcion,USER_STATUS.descripcion,creadopor,lastupdateby,lastupdatebydate
FROM USUARIO
INNER JOIN USER_TYPES  ON USER_TYPES.ID_user_type = USUARIO.tipoU
INNER JOIN USER_STATUS ON USER_STATUS.ValueUser = USUARIO.StatusU
WHERE ID_user = ID_USERAUX;
end if;


#insertar usuario
if OPC like 'b' then
INSERT INTO USUARIO(nombreCompleto,email,contraseña,FotoUser,alias,diaregistro,telefono,activo,tipoU,StatusU,creadopor,lastupdateby,lastupdatebydate)
 VALUES(NombreAux,EmailAux,ContraseñaAux ,FotoAux,AliasAux,sysdate(),NumeroTelAux,true,TIPOUaux,StatusUaux,IDcreatorAux,lastUpdatebyAUX,lastupdateDate);
end if;

#mod usuario
if OPC like 'c' then
UPDATE USUARIO
SET nombreCompleto = IF(nombreCompleto IS NULL OR NombreAux != '',NombreAux,nombreCompleto),
email = IF(email IS NULL OR EmailAux != '',EmailAux,email),
contraseña = IF(contraseña IS NULL OR ContraseñaAux != '',ContraseñaAux,contraseña),
FotoUser = IF(FotoUser IS NULL OR FotoAux != '',FotoAux,FotoUser),
alias = IF(alias IS NULL OR AliasAux != '',AliasAux,alias),
telefono = IF(telefono IS NULL OR NumeroTelAux != '',NumeroTelAux,telefono),
tipoU = IF(tipoU IS NULL OR TIPOUaux != '',TIPOUaux,tipoU),
StatusU = IF(StatusU IS NULL OR StatusUaux != '',StatusUaux,StatusU),
lastupdateby = IF(lastupdateby IS NULL OR lastUpdatebyAUX != '',lastUpdatebyAUX,lastupdateby),
lastupdatebydate = IF(lastupdatebydate IS NULL OR lastupdateDate != '',lastupdateDate,lastupdatebydate)
where ID_USER = ID_USERAUX;
end if;

#elim usuario
if OPC like 'c' then
UPDATE USUARIO
SET activo = false
where ID_USER = ID_USERAUX;
end if;

#reactivar usuario
if OPC like 'd' then
UPDATE USUARIO
SET activo = true
where ID_USER = ID_USERAUX;
end if;

END //
DELIMITER ;

call sp_Usuario(5);