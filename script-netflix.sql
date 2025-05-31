
CREATE TABLE categoriapelicula (
                id_categoria_peli INT NOT NULL,
                nombre VARCHAR(200) NOT NULL,
                PRIMARY KEY (id_categoria_peli)
);


CREATE TABLE detallepelicula (
                id_detalle INT NOT NULL,
                duracion NUMERIC NOT NULL,
                descripcion VARCHAR(500) NOT NULL,
                ao_lanzamiento DATE NOT NULL,
                id_categoria_peli INT NOT NULL,
                PRIMARY KEY (id_detalle)
);


CREATE TABLE enc_pelicula (
                id_pelicula INT NOT NULL,
                id_detalle INT NOT NULL,
                nom_pelicula VARCHAR(150) NOT NULL,
                PRIMARY KEY (id_pelicula, id_detalle)
);


ALTER TABLE detallepelicula ADD CONSTRAINT categoria-pelicula_detalle-pelicula_fk
FOREIGN KEY (id_categoria_peli)
REFERENCES categoriapelicula (id_categoria_peli)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE enc_pelicula ADD CONSTRAINT detalle-pelicula_enc_pelicula_fk
FOREIGN KEY (id_detalle)
REFERENCES detallepelicula (id_detalle)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
