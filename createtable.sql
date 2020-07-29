CREATE TABLE VLM_PERFUMES (
 id BIGINT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  edad_sugerida VARCHAR(15)  NOT NULL,
  estructura VARCHAR(12) Not Null
);
ALTER TABLE VLM_PERFUMES ADD CONSTRAINT edad_sugerida_chk CHECK( edad_sugerida = 'infante' OR edad_sugerida = 'joven' OR edad_sugerida = 'adulto' OR edad_sugerida = 'avanzada' OR edad_sugerida = 'atemporal');
ALTER TABLE VLM_PERFUMES ADD CONSTRAINT estructura_chk CHECK(estructura = 'monolitico' OR estructura = 'fases');

CREATE SEQUENCE perfumes_id_seq;

--INSERT INTO PERFUMES (id, nombre, edad_sugerida, estructura) VALUES
  --(nextval('perfumes_id_seq'), 'pupu', 'joven', 'monolitica');


CREATE TABLE VLM_PAISES (
  id BIGINT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL  
);


CREATE SEQUENCE pais_id_seq;


CREATE TABLE VLM_PROHIBIDOS (
 id BIGINT PRIMARY KEY,  --ID es igual tsca_cas
  nombre VARCHAR(100) NOT NULL
);

CREATE TABLE VLM_AROMAS (
    id BIGINT PRIMARY KEY, 
    nombre VARCHAR(100) NOT NULL
);

CREATE TABLE VLM_FAMILIAS_OLFATIVAS (
 id BIGINT,
  nombre VARCHAR(100) NOT NULL,
  descripcion VARCHAR(300),
	 PRIMARY KEY(ID)
);
ALTER TABLE VLM_FAMILIAS_OLFATIVAS ADD CONSTRAINT nombre_chk CHECK( nombre = 'verde' OR nombre = 'citrico' OR nombre = 'flores' OR nombre = 'frutas' OR nombre = 'aromaticos' OR nombre = 'helechos' OR nombre = 'chipre' OR nombre = 'maderas' OR nombre = 'orientales' OR nombre = 'otros');


 CREATE TABLE VLM_FORMULA_CRITERIO (
 id BIGINT PRIMARY KEY,
  tipo VARCHAR(15)  NOT NULL,
  nombre VARCHAR(100) NOT NULL,
  descripcion VARCHAR(50) NOT NULL
);
ALTER TABLE VLM_FORMULA_CRITERIO ADD CONSTRAINT tipo_chk CHECK( tipo = 'incial' OR tipo = 'final');

CREATE TABLE VLM_PALABRAS_CLAVES (
   id BIGINT NOT NULL,
   palabra_unica VARCHAR(20) NOT NULL,
   fk_perfume BIGINT NOT NULL,
   PRIMARY KEY (id, fk_perfume)  
);
  ALTER TABLE VLM_PALABRAS_CLAVES ADD CONSTRAINT palabras_perfume_id_fk FOREIGN KEY (fk_perfume) REFERENCES VLM_PERFUMES (id);

CREATE TABLE VLM_PERFUMISTAS (
   id BIGINT PRIMARY KEY,
   primer_n VARCHAR(20) NOT NULL,
   primer_a VARCHAR(20) NOT NULL,
   segundo_n VARCHAR(20),
   fk_pais_id BIGINT NOT NULL  
);

  ALTER TABLE VLM_PERFUMISTAS ADD CONSTRAINT fk_pais_id FOREIGN KEY (fk_pais_id) REFERENCES VLM_PAISES (id);


CREATE TABLE VLM_INTENSIDAD (
    id BIGINT NOT NULL,
    tipo VARCHAR(15) NOT NULL,
    descripcion VARCHAR(300),
    fk_perfume_id BIGINT NOT NULL,
    PRIMARY KEY (id, fk_perfume_id)
);
 ALTER TABLE VLM_INTENSIDAD ADD CONSTRAINT fk_perfume FOREIGN KEY (fk_perfume_id) REFERENCES VLM_PERFUMES (id);
 ALTER TABLE VLM_INTENSIDAD ADD CONSTRAINT tipo_chk CHECK( tipo = 'Perfume' OR tipo = 'Eau de Perfume' OR tipo = 'Eau de Toilette' OR tipo = 'Eau de Cologne' OR tipo = 'Splash');

CREATE TABLE VLM_ASOCIACIONES_NACIONALES (
   id BIGINT PRIMARY KEY,
   nombre VARCHAR(15) NOT NULL,
   region VARCHAR(15) NOT NULL,
   fk_pais BIGINT NOT NULL
);
  ALTER TABLE VLM_ASOCIACIONES_NACIONALES ADD CONSTRAINT region_fk CHECK(region = 'NA' OR region = 'LA' OR region = 'EU' OR region = 'A-OC');
  ALTER TABLE VLM_ASOCIACIONES_NACIONALES ADD CONSTRAINT asociacion_pais_id_fk FOREIGN KEY (fk_pais) REFERENCES VLM_PAISES (id);
  
CREATE TABLE VLM_PRODUCTORES (
   id BIGINT PRIMARY KEY,
   nombre VARCHAR(30) NOT NULL,
   pagina_web VARCHAR(50) NOT NULL,
   correo_electronico VARCHAR(50) NOT NULL,
   fk_asociacion_nacional BIGINT 
);
  ALTER TABLE VLM_PRODUCTORES ADD CONSTRAINT productores_asociacion_id_fk FOREIGN KEY (fk_asociacion_nacional) REFERENCES VLM_ASOCIACIONES_NACIONALES (id);


CREATE TABLE VLM_ESCALAS ( 
   fecha_i DATE NOT NULL,
   rango_i INT NOT NULL,
   rango_f INT NOT NULL,
   fecha_f DATE,
   fk_productor_id BIGINT NOT NULL,
   PRIMARY KEY (fecha_i, fk_productor_id)
);
   ALTER TABLE VLM_ESCALAS ADD CONSTRAINT fk_productor FOREIGN KEY (fk_productor_id) REFERENCES VLM_PRODUCTORES (id);

CREATE TABLE VLM_A_F (
   fk_aroma BIGINT NOT NULL,
   fk_familia_olfativa BIGINT NOT NULL,
   PRIMARY KEY (fk_aroma, fk_familia_olfativa)
);
  ALTER TABLE VLM_A_F ADD CONSTRAINT AF_aroma_id_fk FOREIGN KEY (fk_aroma) REFERENCES VLM_AROMAS (id);
  ALTER TABLE VLM_A_F ADD CONSTRAINT AF_familia_olfativa_id_fk FOREIGN KEY (fk_familia_olfativa) REFERENCES VLM_FAMILIAS_OLFATIVAS (id);

CREATE TABLE VLM_PROVEEDORES(
 id BIGINT NOT NULL,
 nombre VARCHAR(30) NOT NULL,
 pagina_web VARCHAR(100)NOT NULL,
 correo_electronico VARCHAR(50) NOT NULL,
 fk_pais_id BIGINT NOT NULL,
 fk_asociacion_nacional_id BIGINT ,
 PRIMARY KEY (id)
);
ALTER TABLE VLM_PROVEEDORES ADD CONSTRAINT fk_pais FOREIGN KEY (fk_pais_id) REFERENCES VLM_PAISES (id);
ALTER TABLE VLM_PROVEEDORES ADD CONSTRAINT fk_asociacion_nacional FOREIGN KEY (fk_asociacion_nacional_id) REFERENCES VLM_ASOCIACIONES_NACIONALES (id);


CREATE TABLE VLM_TELEFONOS (
      cod_pais INT NOT NULL,
   cod_area INT NOT NULL,
    numero BIGINT NOT NULL,
   fk_productor BIGINT,
   fk_proveedor BIGINT ,
   PRIMARY KEY (cod_pais,cod_area,numero)
);
  ALTER TABLE VLM_TELEFONOS ADD CONSTRAINT telefono_productor_id_fk FOREIGN KEY (fk_productor) REFERENCES VLM_PRODUCTORES (id);
  ALTER TABLE VLM_TELEFONOS ADD CONSTRAINT telefono_proveedor_id_fk FOREIGN KEY (fk_proveedor) REFERENCES VLM_PROVEEDORES (id);

  CREATE TABLE VLM_CRITERIOS_EVALUACIONES (
      fecha_i DATE NOT NULL,
   ponderacion INT NOT NULL,
   nombre VARCHAR(20) NOT NULL,
   tipo_formula INT NOT NULL,
   fecha_f DATE,
   fk_productor BIGINT NOT NULL,
   fk_formulas_criterios BIGINT NOT NULL,
   PRIMARY KEY (fecha_i,fk_productor,fk_formulas_criterios)
);
  ALTER TABLE VLM_CRITERIOS_EVALUACIONES ADD CONSTRAINT CE_productor_id_fk FOREIGN KEY (fk_productor) REFERENCES VLM_PRODUCTORES (id);
  ALTER TABLE VLM_CRITERIOS_EVALUACIONES ADD CONSTRAINT CE_formula_id_fk FOREIGN KEY (fk_formulas_criterios) REFERENCES VLM_FORMULA_CRITERIO (id);


CREATE TABLE VLM_OTROS_INGRE_PRODUCTOS(
  ipc BIGINT PRIMARY KEY,
  nombre VARCHAR(30) NOT NULL,
  descripcion VARCHAR(100) NOT NULL,
  fk_proveedor BIGINT NOT NULL
);
 ALTER TABLE VLM_OTROS_INGRE_PRODUCTOS ADD CONSTRAINT fk_proveedor_id FOREIGN KEY (fk_proveedor) REFERENCES VLM_PROVEEDORES(id);


CREATE TABLE VLM_MATERIA_PRIMA_ESENCIAS(
 ipc BIGINT PRIMARY KEY,
 nombre VARCHAR(50) NOT NULL,
 descripcion_visual VARCHAR(300) NOT NULL,
 tipo VARCHAR(15) NOT NULL,
 proceso VARCHAR(50) NOT NULL,
 descripcion_proceso VARCHAR(50),
 tsca_cas VARCHAR(15),
 solubilidad VARCHAR(100),
 vigencia INT,
 fk_proveedor_id BIGINT
);
ALTER TABLE VLM_MATERIA_PRIMA_ESENCIAS ADD CONSTRAINT proceso_chk CHECK(proceso = 'maceracion' OR proceso = 'expresion' OR proceso = 'destilacion' OR proceso = 'enfleurage' OR proceso = 'otros');
ALTER TABLE VLM_MATERIA_PRIMA_ESENCIAS ADD CONSTRAINT tipo_chk CHECK(tipo = 'Natural' OR tipo = 'Sintetico');
ALTER TABLE VLM_MATERIA_PRIMA_ESENCIAS ADD CONSTRAINT fk_proveedor_id FOREIGN KEY (fk_proveedor_id) REFERENCES  VLM_PROVEEDORES(id);


CREATE TABLE VLM_O_F (
   fk_ing_productos BIGINT NOT NULL,
   fk_materia_prima BIGINT NOT NULL,
   PRIMARY KEY (fk_ing_productos, fk_materia_prima)
);
  ALTER TABLE VLM_O_F ADD CONSTRAINT OF_ing_productos_id_fk FOREIGN KEY (fk_ing_productos) REFERENCES VLM_OTROS_INGRE_PRODUCTOS (ipc);
  ALTER TABLE VLM_O_F ADD CONSTRAINT OF_materia_prima_id_fk FOREIGN KEY (fk_materia_prima) REFERENCES VLM_MATERIA_PRIMA_ESENCIAS (ipc);


CREATE TABLE VLM_CONDICIONES_DE_PAGO(
   id BIGINT NOT NULL,
   tipo VARCHAR(15) NOT NULL,
   coutas INT,
   porcentage_coutas INT,
   meses INT,
   fk_proveedor BIGINT NOT NULL,
   PRIMARY KEY(id , fk_proveedor)

);
  ALTER TABLE VLM_CONDICIONES_DE_PAGO ADD CONSTRAINT fk_proveedor FOREIGN KEY (fk_proveedor) REFERENCES VLM_PROVEEDORES (id);
  ALTER TABLE VLM_CONDICIONES_DE_PAGO ADD CONSTRAINT tipo_chk CHECK(tipo = 'contado' OR tipo = 'credito');


  CREATE TABLE VLM_CONDICION_ENVIOS (
      id BIGINT NOT NULL,
   transporte VARCHAR(15) NOT NULL,
   costo INT NOT NULL,
   descripcion VARCHAR(50),
   fk_proveedor BIGINT NOT NULL,
   fk_pais BIGINT NOT NULL,
   PRIMARY KEY (id,fk_proveedor,fk_pais)
);
  ALTER TABLE VLM_CONDICION_ENVIOS ADD CONSTRAINT transporte_chk CHECK(transporte = 'terrestre' OR transporte = 'maritimo' OR transporte = 'aereo' OR transporte = 'mixto');
  ALTER TABLE VLM_CONDICION_ENVIOS ADD CONSTRAINT CE_proveedor_id_fk FOREIGN KEY (fk_proveedor) REFERENCES VLM_PROVEEDORES (id);
  ALTER TABLE VLM_CONDICION_ENVIOS ADD CONSTRAINT CE_pais_id_fk FOREIGN KEY (fk_pais) REFERENCES VLM_PAISES (id);

CREATE TABLE VLM_P_FO(
 fk_familia_olfativa BIGINT NOT NULL,
 fk_palabra_clave BIGINT NOT NULL,
 fk_palabra_clave_fk_perfume_id BIGINT NOT NULL,
 PRIMARY KEY(fk_familia_olfativa, fk_palabra_clave, fk_palabra_clave_fk_perfume_id)
);
ALTER TABLE VLM_P_FO ADD CONSTRAINT fk_familia_olfativa FOREIGN KEY (fk_familia_olfativa) REFERENCES  VLM_FAMILIAS_OLFATIVAS(id);
ALTER TABLE VLM_P_FO ADD CONSTRAINT fk_palabra_clave FOREIGN KEY (fk_palabra_clave, fk_palabra_clave_fk_perfume_id) REFERENCES  VLM_PALABRAS_CLAVES(id, fk_perfume);


CREATE TABLE VLM_FO_MP (
   familia_olfativa_id BIGINT NOT NULL,
   fk_materia_prima_esencia_ipc BIGINT NOT NULL,
   PRIMARY KEY (familia_olfativa_id , fk_materia_prima_esencia_ipc)
);
  ALTER TABLE VLM_FO_MP ADD CONSTRAINT familia_olfativa_id FOREIGN KEY (familia_olfativa_id) REFERENCES VLM_FAMILIAS_OLFATIVAS(id);
  ALTER TABLE VLM_FO_MP ADD CONSTRAINT materia_prima_ipc FOREIGN KEY (fk_materia_prima_esencia_ipc) REFERENCES VLM_MATERIA_PRIMA_ESENCIAS(ipc);


CREATE TABLE VLM_PRINCIPAL (
   fk_familia_olfativa BIGINT NOT NULL,
   fk_perfume BIGINT NOT NULL,
   PRIMARY KEY (fk_familia_olfativa, fk_perfume)
);
  ALTER TABLE VLM_PRINCIPAL ADD CONSTRAINT principal_familia_id_fk FOREIGN KEY (fk_familia_olfativa) REFERENCES VLM_FAMILIAS_OLFATIVAS (id);
  ALTER TABLE VLM_PRINCIPAL ADD CONSTRAINT principal_perfume_id_fk FOREIGN KEY (fk_perfume) REFERENCES VLM_PERFUMES (id);


CREATE TABLE VLM_NOTAS (
   id BIGINT PRIMARY KEY,
   nombre VARCHAR(15) NOT NULL,
   fk_perfume BIGINT NOT NULL,
   fk_aroma BIGINT  NOT NULL
);
  ALTER TABLE VLM_NOTAS ADD CONSTRAINT nombre_chk CHECK(nombre = 'salida' OR nombre = 'corazon' OR nombre = 'fondo' OR nombre = 'monolitico');
  ALTER TABLE VLM_NOTAS ADD CONSTRAINT notas_perfume_id_fk FOREIGN KEY (fk_perfume) REFERENCES VLM_PERFUMES (id);
  ALTER TABLE VLM_NOTAS ADD CONSTRAINT notas_aroma_id_fk FOREIGN KEY (fk_aroma) REFERENCES VLM_AROMAS (id);

  CREATE TABLE VLM_PER_P (
   fk_perfume BIGINT NOT NULL,
   fk_perfumista_id BIGINT NOT NULL,
   PRIMARY KEY (fk_perfume, fk_perfumista_id)
);
  ALTER TABLE VLM_PER_P ADD CONSTRAINT PP_perfume_id_fk FOREIGN KEY (fk_perfume) REFERENCES VLM_PERFUMES (id);
  ALTER TABLE VLM_PER_P ADD CONSTRAINT fk_perfumista_id FOREIGN KEY (fk_perfumista_id) REFERENCES VLM_PERFUMISTAS (id);

CREATE TABLE VLM_CONTRATOS(
  id BIGINT NOT NULL,
  fecha_de_emision DATE NOT NULL,
  exclusividad BOOLEAN,
  fecha_cancelada DATE,
  motivo VARCHAR(100),
  fk_proveedor BIGINT NOT NULL,
 fk_productor BIGINT NOT NULL,
 PRIMARY KEY (id)
);
ALTER TABLE VLM_CONTRATOS ADD CONSTRAINT fk_proveedor FOREIGN KEY (fk_proveedor) REFERENCES VLM_PROVEEDORES(id);
ALTER TABLE VLM_CONTRATOS ADD CONSTRAINT fk_productor FOREIGN KEY (fk_productor) REFERENCES VLM_PRODUCTORES(id);


CREATE TABLE VLM_CONT_CON_PAGO (       
   fk_contratos BIGINT NOT NULL,
   fk_condicion_pago BIGINT NOT NULL,
   fk_condicion_proveedor BIGINT NOT NULL,
   PRIMARY KEY (fk_contratos,fk_condicion_pago, fk_condicion_proveedor)
);
  ALTER TABLE VLM_CONT_CON_PAGO ADD CONSTRAINT CCP_contratos_id_fk FOREIGN KEY (fk_contratos) REFERENCES VLM_CONTRATOS (id);
  ALTER TABLE VLM_CONT_CON_PAGO ADD CONSTRAINT CCP_condicionpago_proveedor_id_fk FOREIGN KEY (fk_condicion_pago,fk_condicion_proveedor) REFERENCES VLM_CONDICIONES_DE_PAGO (id,fk_proveedor);



CREATE TABLE VLM_CONT_CON_ENVIO (               
   fk_contratos BIGINT NOT NULL,
   fk_condicion_envio BIGINT NOT NULL,
   fk_condicion_proveedor BIGINT NOT NULL,
   fk_condicion_pais BIGINT NOT NULL,
   PRIMARY KEY (fk_contratos,fk_condicion_envio, fk_condicion_proveedor,fk_condicion_pais)
);
  ALTER TABLE VLM_CONT_CON_ENVIO ADD CONSTRAINT CCE_contratos_id_fk FOREIGN KEY (fk_contratos) REFERENCES VLM_CONTRATOS (id);
  ALTER TABLE VLM_CONT_CON_ENVIO ADD CONSTRAINT CCE_condicion_envio_proveedor_pais_id_fk FOREIGN KEY (fk_condicion_envio,fk_condicion_proveedor,fk_condicion_pais) REFERENCES VLM_CONDICION_ENVIOS (id,fk_proveedor,fk_pais);

CREATE TABLE VLM_ORIGEN(
 fk_materia_prima_esencia_ipc BIGINT NOT NULL,
 fk_pais_id BIGINT NOT NULL,
 PRIMARY KEY (fk_materia_prima_esencia_ipc, fk_pais_id)
);
ALTER TABLE VLM_ORIGEN ADD CONSTRAINT maraca FOREIGN KEY (fk_materia_prima_esencia_ipc) REFERENCES VLM_MATERIA_PRIMA_ESENCIAS (ipc);
ALTER TABLE VLM_ORIGEN ADD CONSTRAINT maracas FOREIGN KEY (fk_pais_id) REFERENCES VLM_PAISES (id);


CREATE TABLE VLM_PRESENTACION(
  id BIGINT NOT NULL,
  volumen VARCHAR(100) NOT NULL,
  fk_intensidad_fk_perfume_id BIGINT NOT NULL,
  fk_intensidad_id BIGINT NOT NULL,
  PRIMARY KEY (id, fk_intensidad_fk_perfume_id, fk_intensidad_id)
);
ALTER TABLE VLM_PRESENTACION ADD CONSTRAINT intensidad_fks FOREIGN KEY (fk_intensidad_id,fk_intensidad_fk_perfume_id) REFERENCES  VLM_INTENSIDAD(id,fk_perfume_id);

CREATE TABLE VLM_HISTORICO_RESULTADOS(
  fecha DATE NOT NULL,
  resultado_f BIGINT NOT NULL,
   tipo_f VARCHAR(15) NOT NULL,
  fk_proveedor BIGINT NOT NULL,
 fk_productor BIGINT NOT NULL,
 PRIMARY KEY (fecha,fk_proveedor,fk_productor)
);
ALTER TABLE VLM_HISTORICO_RESULTADOS ADD CONSTRAINT tipo_f_chk CHECK(tipo_f = 'inicial' OR tipo_f = 'anual');
ALTER TABLE VLM_HISTORICO_RESULTADOS ADD CONSTRAINT fk_proveedor FOREIGN KEY (fk_proveedor) REFERENCES VLM_PROVEEDORES(id);
ALTER TABLE VLM_HISTORICO_RESULTADOS ADD CONSTRAINT fk_productor FOREIGN KEY (fk_productor) REFERENCES VLM_PRODUCTORES(id);


CREATE TABLE VLM_PIDE (
   fk_productor BIGINT NOT NULL,
   fk_pais BIGINT NOT NULL,
   PRIMARY KEY (fk_productor, fk_pais)
);
  ALTER TABLE VLM_PIDE ADD CONSTRAINT pide_familia_id_fk FOREIGN KEY (fk_productor) REFERENCES VLM_PRODUCTORES (id);
  ALTER TABLE VLM_PIDE ADD CONSTRAINT pide_perfume_id_fk FOREIGN KEY (fk_pais) REFERENCES VLM_PAISES (id);


CREATE TABLE VLM_MIEMBROS_IFRA(
 id BIGINT NOT NULL,
 tipo VARCHAR(30) NOT NULL,
 fecha_i DATE NOT NULL,
 fecha_f DATE,
 fk_proveedor_id BIGINT,
 fk_productor_id BIGINT,
 PRIMARY KEY(id)
);
ALTER TABLE VLM_MIEMBROS_IFRA ADD CONSTRAINT fk_proveedor_id FOREIGN KEY (fk_proveedor_id) REFERENCES VLM_PROVEEDORES(id);
ALTER TABLE VLM_MIEMBROS_IFRA ADD CONSTRAINT fk_productor_id FOREIGN KEY (fk_productor_id) REFERENCES VLM_PRODUCTORES(id);
ALTER TABLE VLM_MIEMBROS_IFRA ADD CONSTRAINT tipo CHECK(tipo = 'principal' OR tipo = 'secundario' OR tipo = 'nacional');


CREATE TABLE VLM_PRESENTACION_ING(
 id BIGINT NOT NULL,
 precio BIGINT NOT NULL,
 volumen BIGINT NOT NULL,
 fk_materia_prima_esencia_ipc BIGINT,
 fk_otros_ingre_producto_ipc BIGINT,
 PRIMARY KEY(id)
);
ALTER TABLE VLM_PRESENTACION_ING ADD CONSTRAINT fk_proveedor_id FOREIGN KEY (fk_materia_prima_esencia_ipc) REFERENCES VLM_MATERIA_PRIMA_ESENCIAS(ipc);
ALTER TABLE VLM_PRESENTACION_ING ADD CONSTRAINT fk_ing_productos FOREIGN KEY (fk_otros_ingre_producto_ipc) REFERENCES VLM_OTROS_INGRE_PRODUCTOS(ipc);


CREATE TABLE VLM_ING_CONTRATADO
(
   id BIGINT NOT NULL,
   fk_contratos BIGINT NOT NULL,
   fk_materia_prima_esencia_ipc BIGINT,
   fk_otros_ingre_producto_ipc BIGINT,
   PRIMARY KEY (id,fk_contratos)
);
  ALTER TABLE VLM_ING_CONTRATADO ADD CONSTRAINT IG_contratos_id_fk FOREIGN KEY (fk_contratos) REFERENCES VLM_CONTRATOS (id);
  ALTER TABLE VLM_ING_CONTRATADO ADD CONSTRAINT IG_materia_prima_id_fk FOREIGN KEY (fk_materia_prima_esencia_ipc) REFERENCES VLM_MATERIA_PRIMA_ESENCIAS(ipc);
  ALTER TABLE VLM_ING_CONTRATADO ADD CONSTRAINT IG_fk_ing_productos FOREIGN KEY (fk_otros_ingre_producto_ipc) REFERENCES VLM_OTROS_INGRE_PRODUCTOS(ipc);

CREATE TABLE VLM_PEDIDOS(
    id BIGINT PRIMARY KEY,
    fecha DATE NOT NULL,
    total BIGINT NOT NULL,
    estatus VARCHAR(20) NOT NULL,
    fechaconfirma DATE,
    n_factura BIGINT, -- tiene secuencia?
    fk_cont_con_pago_fk_contrato_id BIGINT NOT NULL,
    fk_cont_con_pago_fk_condicion_pago_id BIGINT NOT NULL,
    fk_cont_con_pago_fk_condicion_pago_fk_proveedor_id BIGINT NOT NULL,
    fk_cont_con_envio_fk_contrato_id BIGINT NOT NULL,
    fk_cont_con_envio_fk_condicion_envio_id BIGINT NOT NULL,
    fk_cont_con_envio_fk_condicion_envio_fk_pais_id BIGINT NOT NULL,
    fk_cont_con_envio_fk_condicion_envio_fk_proveedor_id BIGINT NOT NULL,
    fk_proveedor_id BIGINT NOT NULL,
    fk_productor_id BIGINT NOT NULL
);
    ALTER TABLE VLM_PEDIDOS ADD CONSTRAINT estatus CHECK(estatus = 'por confirmar' OR estatus = 'confirmado' OR estatus = 'cancelado por productor' OR estatus = 'cancelado por proveedor');
    ALTER TABLE VLM_PEDIDOS ADD CONSTRAINT P_CCP_fk FOREIGN KEY (fk_cont_con_pago_fk_contrato_id,fk_cont_con_pago_fk_condicion_pago_id,fk_cont_con_pago_fk_condicion_pago_fk_proveedor_id) REFERENCES VLM_CONT_CON_PAGO(fk_contratos,fk_condicion_pago, fk_condicion_proveedor);
    ALTER TABLE VLM_PEDIDOS ADD CONSTRAINT P_CCE_fk FOREIGN KEY (fk_cont_con_envio_fk_contrato_id,fk_cont_con_envio_fk_condicion_envio_id,fk_cont_con_envio_fk_condicion_envio_fk_pais_id,fk_cont_con_envio_fk_condicion_envio_fk_proveedor_id) REFERENCES VLM_CONT_CON_ENVIO(fk_contratos,fk_condicion_envio,fk_condicion_pais,fk_condicion_proveedor);
    ALTER TABLE VLM_PEDIDOS ADD CONSTRAINT P_proveedor_fk FOREIGN KEY (fk_proveedor_id) REFERENCES VLM_PROVEEDORES(id);
    ALTER TABLE VLM_PEDIDOS ADD CONSTRAINT P_fk_productor FOREIGN KEY (fk_productor_id) REFERENCES VLM_PRODUCTORES(id);


CREATE TABLE VLM_DETALLES(
 id BIGINT NOT NULL,
 cantidad INT NOT NULL,
 fk_pedido_id BIGINT NOT NULL,
 fk_presentacion_ing_id BIGINT NOT NULL,
 PRIMARY KEY(id,fk_pedido_id,fk_presentacion_ing_id)
);
ALTER TABLE VLM_DETALLES ADD CONSTRAINT fk_pedido FOREIGN KEY (fk_pedido_id) REFERENCES VLM_PEDIDOS(ID);
ALTER TABLE VLM_DETALLES ADD CONSTRAINT fk_presentacion_ing FOREIGN KEY (fk_presentacion_ing_id) REFERENCES VLM_PRESENTACION_ING(id);

CREATE TABLE VLM_RENOVACIONES(
 id BIGINT  NOT NULL,
 fecha_renovacion DATE NOT NULL,
 fk_contrato BIGINT NOT NULL,
 PRIMARY KEY(id,fk_contrato)
);
ALTER TABLE VLM_RENOVACIONES ADD CONSTRAINT fk_contrato FOREIGN KEY (fk_contrato) REFERENCES VLM_CONTRATOS(id);

CREATE TABLE VLM_PAGOS(
 id BIGINT  NOT NULL,
 monto REAL NOT NULL,
 fecha_pago DATE NOT NULL,
 fk_pedido_id BIGINT NOT NULL,
 PRIMARY KEY(id,fk_pedido_id)
);
ALTER TABLE VLM_PAGOS ADD CONSTRAINT fk_pedido FOREIGN KEY (fk_pedido_id) REFERENCES VLM_PEDIDOS(id);




