-- Copiar las 3 encuestas a partir de la plantilla
insert into begar.enc_encuestas_preguntas
(id_padre, id_seccion, id_tipo, id_columna, orden, titulo, pregunta, ayuda, obligatoria, created_at, updated_at)

(
select 0 as id_padre, cp.id as id_seccion,
       pp.id_tipo, pp.id_columna,
       cpl.orden,
       pp.titulo, pp.pregunta, pp.ayuda, pp.obligatoria,
       now() as created_at,
	   now() as updated_at 

from begar.enc_categorias_preguntas cp,
     begar.enc_categorias_plantillas cpl,
     begar.enc_plantillas_preguntas pp
where cp.id_empresa=1 
      and cpl.id_categoria=cp.id and cpl.id_plantilla=pp.id
      and pp.id_empresa=cp.id_empresa
order by cp.id, cpl.orden
);

-- Copiar las respuestas posibles a partir de la plantilla
insert into begar.enc_respuestas_posibles
(id_pregunta, etiqueta, valor, created_at, updated_at)
(
select epp.id as id_pregunta,
       prp.etiqueta, prp.valor,
       now() as created_at,
	   now() as updated_at 
from begar.enc_encuestas_preguntas epp,
     begar.enc_plantillas_preguntas ppp,
     begar.enc_plant_respuestas_posibles prp
where prp.id_plantilla=ppp.id
      and epp.id_columna=ppp.id_columna and epp.id_tipo=ppp.id_tipo and epp.titulo=ppp.titulo and epp.pregunta=ppp.pregunta
      and epp.ayuda=ppp.ayuda and epp.obligatoria=ppp.obligatoria 
);

commit;