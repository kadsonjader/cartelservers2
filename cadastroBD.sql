create database cartelservers;

use cartelservers;

create table clientes (
	nome varchar(10) not null,
    email varchar(20) not null,
    endereco varchar(100),
    senha char(10),
    primary key(email)
    );
    