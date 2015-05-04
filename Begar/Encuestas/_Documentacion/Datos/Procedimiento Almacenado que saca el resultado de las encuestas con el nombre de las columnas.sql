-- --------------------------------------------------------------------------------
-- Routine DDL
-- Note: comments before and after the routine body will not be stored by the server
-- --------------------------------------------------------------------------------
DELIMITER $$

CREATE DEFINER=`begar`@`%` PROCEDURE `enc_stp_resultados`(IN _empresa INT, IN _encuesta INT)
BEGIN
 SET SESSION group_concat_max_len = ( 7 * 1024 );
 SET @sql = NULL;

 select 
       concat('select r.id_localizacion, r.id, l.nombre as localizacion, r.token, r.fecha, r.created_at, r.updated_at, ',
                      group_concat(distinct concat('r.',c.codigo_interno, ' as ', c.codigo,' ')), 
              ' from begar.enc_respuestas r, begar.enc_localizaciones l ',
              ' where  ',
			  '       r.id_localizacion=l.id ',
              '       and l.id_empresa=',convert(_empresa,CHAR(5)),' and r.id_encuesta=',convert(_encuesta,CHAR(5)) 
             ) INTO @sql
 from enc_empresas em,
     enc_encuestas e,
     enc_encuestas_preguntas p,
     enc_encuestas_secciones s,
     enc_columnas c
 where em.id= _empresa and e.id= _encuesta
      and e.id_empresa=em.id
      and s.id_encuesta=e.id
      and p.id_seccion=s.id
      and c.id_empresa=em.id and c.id=p.id_columna
 order by s.orden, p.orden;

 PREPARE stmt  FROM @sql;
 EXECUTE stmt;
 DEALLOCATE PREPARE stmt;

END