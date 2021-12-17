/*Juan Diego Carretero Granado*/

-- drop database registro_minijuegos; -- Borra la base de datos

create database registro_minijuegos; -- Crea la base de datos

-- use registro_minijuegos; -- Utiliza la base de datos


-- Crea la tabla Usuarios

create table Usuarios(
    idUsuario smallint unsigned AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(40) not null,
    correo varchar(80) not null,
    passwd varchar(40) not null
);

-- Crea la tabla Minijuegos

create table Minijuegos(
    idMinijuego smallint unsigned AUTO_INCREMENT PRIMARY KEY,
    nombre varchar(40) not null,
    url_minijuego varchar(65535) not null 
);

-- Crea la tabla Preferencias

create table Preferencias(
    idUsuario smallint unsigned,
    idMinijuego smallint unsigned,
    PRIMARY KEY(idUsuario, idMinijuego),
    FOREIGN KEY (idUsuario) REFERENCES Usuarios(idUsuario),
    FOREIGN KEY (idMinijuego) REFERENCES Minijuegos(idMinijuego)
);