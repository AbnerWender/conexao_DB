create database empresa_abnerdb;
use empresa_abnerdb;

create table funcionario(
	id int primary key auto_increment,
    nome varchar(100),
    cargo varchar(50),
    idade int,
    salario float,
    telefone varchar(25)
);
alter table funcionario auto_increment=1;

select * from funcionario;
truncate funcionario;