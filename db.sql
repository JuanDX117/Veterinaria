CREATE DATABASE veterinaria;

USE veterinaria;

CREATE TABLE cliente (
  id_cliente INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  telefono VARCHAR(15)
) ENGINE=InnoDB;

CREATE TABLE animal (
  id_animal INT PRIMARY KEY AUTO_INCREMENT,
  id_cliente INT,
  nombre VARCHAR(50),
  raza VARCHAR(50),
  fecha_nacimiento DATE,
  sexo VARCHAR(10),
  color VARCHAR(20),
  FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
) ENGINE=InnoDB;

CREATE TABLE medico (
  id_medico INT PRIMARY KEY AUTO_INCREMENT,
  nombre VARCHAR(50),
  apellido VARCHAR(50),
  telefono VARCHAR(15)
) ENGINE=InnoDB;

CREATE TABLE historial (
  id_historial INT PRIMARY KEY AUTO_INCREMENT,
  id_animal INT,
  fecha_consulta DATE,
  diagnostico VARCHAR(100),
  id_medico INT,
  FOREIGN KEY (id_animal) REFERENCES animal(id_animal),
  FOREIGN KEY (id_medico) REFERENCES medico(id_medico)
) ENGINE=InnoDB;
