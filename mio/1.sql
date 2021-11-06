CREATE DATABASE empresa;

CREATE TABLE cliente (
    dni CHAR(9) PRIMARY KEY,
    nombre VARCHAR(200) NOT NULL,
    apellido1 VARCHAR(200) NOT NULL,
    apellido2 VARCHAR(200),
    fechaNac DATE NOT NULL,
    tlf VARCHAR(200) NOT NULL
);

CREATE TABLE producto (
    id INT UNSIGNED PRIMARY KEY,
    nombre VARCHAR(200) NOT NULL
);

CREATE TABLE proveedor (
    nif CHAR(9) PRIMARY KEY,
    nombre VARCHAR(200) NOT NULL,
    direccion VARCHAR(200) NOT NULL
);