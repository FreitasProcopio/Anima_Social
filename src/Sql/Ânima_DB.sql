CREATE DATABASE AnimaDB;

USE AnimaDB;

CREATE TABLE cadastro (

 id int not null auto_increment ,
 name_cadastro varchar (50) not null,
 nascimento_cadastro varchar (20) not null,
 email_cadastro varchar (50) not null,
 senha_cadastro varchar (50) not null,
 primary key (id)
 
);

CREATE TABLE login (

	id int not null auto_increment,
    name_login varchar (50) not null,
    senha_login varchar (50) not null,
    primary key (id)
    
);


/*
ALTER TABLE cadastro DROP COLUMN confirmar_senha;
ALTER TABLE cadastro ADD confirmar_senha varchar (50) not null;
SELECT COUNT(*) FROM cadastro WHERE email_cadastro = "teste@gmail.com";
SELECT * FROM login;
SELECT * FROM cadastro;
*/