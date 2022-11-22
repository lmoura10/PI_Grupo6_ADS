CREATE DATABASE pi;

USE pi;

CREATE TABLE usuario(
id INT NOT NULL AUTO_INCREMENT,
nome varchar(45) NOT NULL, 
senha varchar(45) NOT NULL, 
email varchar(110) NOT NULL,
telefone varchar(15) NOT NULL,
sexo varchar(10) NOT NULL,
data_nasc date NOT NULL,
cidade varchar(45) NOT NULL,
estado varchar(45) NOT NULL,
endereco varchar(45) NOT NULL,
PRIMARY KEY(id));