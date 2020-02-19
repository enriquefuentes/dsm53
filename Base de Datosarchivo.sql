create database onexplaybase;

use onexplaybase;

create table usuarios (
    id int (11) primary key AUTO_INCREMENT,
    nombre varchar (50),
    ap varchar (50),
    am varchar (50),
    email varchar (50) UNIQUE KEY,
    password varchar (50),
    estado varchar (30)
);

Create table ventas (
    idv int (11) primary key auto_increment,
    numt int (19) not null,
    cvv int (3) not null,
    domi varchar (200) not null,
    juego varchar (200) not null,
    pago float (20) not null,
    email varchar (50) not null
);

create table admins (
    id int (11) primary key AUTO_INCREMENT,
    nombre varchar (50),
    ap varchar (50),
    am varchar (50),
    email varchar (50) UNIQUE KEY,
    password varchar (50),
    estado varchar (30)
);


CREATE TABLE juegos (
  id int(11) NOT NULL AUTO_INCREMENT,
  nombre varchar(200) DEFAULT NULL,
  genero varchar(50) DEFAULT NULL,
  clasificacion varchar(5) DEFAULT NULL,
  desarrollador varchar(50) DEFAULT NULL,
  PRIMARY KEY (id),
  KEY info_juegos (nombre,genero)
);

INSERT INTO admins values (1,'Benjamin','Olvera','Rosales','benjamin@onexgplay.com','123','Activo');
INSERT INTO admins values (2,'Vanessa Guadalupe','Fernández','Rendón','vanessa@onexgplay.com','123','Activo');
INSERT INTO admins values (3,'Dulce María','Antonio','Hernández','dulce@onexgplay.com','123','Activo');

INSERT INTO usuarios values (1,'Benjamin','Olvera','Rosales','min_olvera.12@outlook.com','123','Activo');

INSERT INTO juegos VALUES("1","Gears_of_war_4","Guerra","M","Microsoft_Studios"),
("2","Resident_evil_2","Survival_Horror","M","Capcom"),
("3","The_division_2","Accion","T","Ubisoft"),
("4","Resident_evil_7","Survival_Horror","M","Capcom"),
("5","Assassins_creed_origins","Accion","T","Ubisoft"),
("6","Red_dead_redemption_2","Accion","M","Rockstar"),
("7","The_evil_within_2","Survival_Horror","M","Gamesworks"),
("8","Mortal_kombat_11","Lucha","M","Nendertal_Games"),
("9","GTAV","Accion","M","Rockstar");