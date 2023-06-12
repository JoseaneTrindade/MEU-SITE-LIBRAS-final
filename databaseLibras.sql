create database libras;
use libras;
CREATE TABLE pessoa (
  codPessoa int(11) AUTO_INCREMENT,
  nome varchar(150) ,
  usuario varchar(90),
  email varchar(50) ,
  dataNascimento date,
  sexo varchar(3),
  cidade varchar (30),
  numero varchar (12),
  
  PRIMARY KEY (codPessoa)
);


select * from pessoa  



create database login;
use login;

create table login (
  codLogin int(11) AUTO_INCREMENT,
  usuario varchar(90),
  senha varchar (20),
   PRIMARY KEY (codLogin)
   );
   
   select * from login


