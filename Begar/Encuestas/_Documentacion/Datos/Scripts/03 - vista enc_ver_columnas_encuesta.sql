CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `begar`@`%` 
    SQL SECURITY DEFINER
VIEW `enc_ver_columnas_encuesta` AS
    select 
        `em`.`id` AS `id_empresa`,
        `e`.`id` AS `id_encuesta`,
        `e`.`titulo` AS `titulo_encuesta`,
        `e`.`activa` AS `activa`,
        `e`.`entregadas` AS `entregadas`,
        `s`.`orden` AS `orden_seccion`,
        `s`.`nombre` AS `nombre_seccion`,
        (`p`.`orden` * 1000) AS `orden_pregunta`,
        `p`.`titulo` AS `titulo`,
        `p`.`pregunta` AS `pregunta`,
        `p`.`ayuda` AS `ayuda`,
        `p`.`obligatoria` AS `obligatoria`,
        `p`.`estilo` AS `estilo`,
        `c`.`codigo` AS `codigo`,
        `c`.`codigo_interno` AS `codigo_interno`,
        `c`.`tipo_columna` AS `tipo_columna`,
        `c`.`descripcion` AS `descripcion`,
        'PREGUNTA' AS `tipo_pregunta`
    from
        ((((`enc_empresas` `em`
        join `enc_encuestas` `e`)
        join `enc_encuestas_preguntas` `p`)
        join `enc_encuestas_secciones` `s`)
        join `enc_columnas` `c`)
    where
        ((`e`.`id_empresa` = `em`.`id`)
            and (`s`.`id_encuesta` = `e`.`id`)
            and (`p`.`id_seccion` = `s`.`id`)
            and (`c`.`id_empresa` = `em`.`id`)
            and (`c`.`id` = `p`.`id_columna`)
            and (`p`.`id_padre` = 0)
            and (`p`.`id_tipo` <> 5)) 
    union select 
        `em`.`id` AS `id_empresa`,
        `e`.`id` AS `id_encuesta`,
        `e`.`titulo` AS `titulo`,
        `e`.`activa` AS `activa`,
        `e`.`entregadas` AS `entregadas`,
        `s`.`orden` AS `orden_seccion`,
        `s`.`nombre` AS `nombre_seccion`,
        (((select 
                `p2`.`orden`
            from
                `enc_encuestas_preguntas` `p2`
            where
                (`p2`.`id` = `p`.`id_padre`)) * 1000) + `p`.`orden`) AS `orden_pregunta`,
        `p`.`titulo` AS `titulo`,
        `p`.`pregunta` AS `pregunta`,
        `p`.`ayuda` AS `ayuda`,
        `p`.`obligatoria` AS `obligatoria`,
        `p`.`estilo` AS `estilo`,
        `c`.`codigo` AS `codigo`,
        `c`.`codigo_interno` AS `codigo_interno`,
        `c`.`tipo_columna` AS `tipo_columna`,
        `c`.`descripcion` AS `descripcion`,
        'SUBPREGUNTA' AS `tipo_pregunta`
    from
        ((((`enc_empresas` `em`
        join `enc_encuestas` `e`)
        join `enc_encuestas_preguntas` `p`)
        join `enc_encuestas_secciones` `s`)
        join `enc_columnas` `c`)
    where
        ((`e`.`id_empresa` = `em`.`id`)
            and (`s`.`id_encuesta` = `e`.`id`)
            and (`p`.`id_seccion` = `s`.`id`)
            and (`c`.`id_empresa` = `em`.`id`)
            and (`c`.`id` = `p`.`id_columna`)
            and (`p`.`id_padre` <> 0)
            and (`p`.`id_tipo` = 5))
    order by `id_empresa` , `id_encuesta` , `orden_seccion` , `orden_pregunta` , `codigo`