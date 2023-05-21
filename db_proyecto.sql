USE db_sonidodirecto_proyecto;

CREATE TABLE usuarios (
	id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(40) NOT NULL,
    primer_apellido VARCHAR(40) NOT NULL,
    username VARCHAR(20) UNIQUE NOT NULL,
    password VARCHAR(15) NOT NULL
);


INSERT INTO usuarios (nombre, primer_apellido, username, password)
VALUES ('John', 'Doe', 'johndoe', 'secretpassword');

SELECT * FROM usuarios;
