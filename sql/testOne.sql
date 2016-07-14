DROP DATABASE IF EXISTS testOne;

CREATE DATABASE testOne;

USE testOne;

CREATE TABLE usuarios
(
idUsuario int auto_increment,
nombre varchar(30),
apellido varchar(30),
username varchar(30),
correoElectronico varchar(30),
contrasenia varchar(15),
primary key(idUsuario)
);

SELECT * 
FROM usuarios;

