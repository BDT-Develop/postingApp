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

CREATE TABLE posts
(
idPost int auto_increment,
idUsuario int,
mensaje text,
estadoPost varchar(1),
primary key(idPost),
foreign key(idUsuario) references usuarios(idUsuario)
);

CREATE TABLE respuestas
(
idRespuesta int auto_increment,
idPost int,
idUsuario int,
mensaje text,
primary key(idRespuesta),
foreign key(idUsuario) references usuarios(idUsuario),
foreign key(idPost) references posts(idPost)
);
