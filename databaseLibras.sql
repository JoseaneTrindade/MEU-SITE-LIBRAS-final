create database libras;
drop table pessoa;
CREATE TABLE pessoa (
  codPessoa int(11) AUTO_INCREMENT,
  nome varchar(150) ,
  telefone varchar(20),
  usuario varchar(90),
  email varchar(50) ,
  dataNascimento date,
  sexo varchar(3),
  cidade varchar (30),
  numero varchar (12),
  senha varchar(20),
  
  PRIMARY KEY (codPessoa)
);

/*truncate table pessoa

select * from pessoa where USUARIO='JOSEANETRINDADE' AND SENHA='123' ;
insert into pessoa (nome,usuario,email,dataNascimento,sexo,cidade,telefone,senha) values ('Renata', 'rcascaes', 'renatadcascaes@gmail.com', '2023-06-15', 'M', '', '9198882222', '123456')