create database DBAPPDIRECTORIOTELEFONICO;
use DBAPPDIRECTORIOTELEFONICO;

create table TUsuario
(
	idUsuario int auto_increment,
    nombre varchar(30) not null,
    apellido varchar(40) not null,
    nombreUsuario varchar(30) not null,
    contrasenia varchar(700) not null,
    created_at datetime not null,
    updated_at datetime not null,
    primary key(idUsuario)
);

create table TDirectorio
(
	idDirectorio int auto_increment,
    idUsuario int not null,
    nombreCompleto varchar(70) not null,
    direccion varchar(700) not null,
    telefono varchar(20) not null,
    fechaNacimiento date not null,
	created_at datetime not null,
    updated_at datetime not null,
    foreign key(idUsuario) references TUsuario(idUsuario)
    on delete cascade on update cascade,
    primary key(idDirectorio)    
);