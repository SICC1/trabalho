-- Criação das tabelas --
create table usuario(
id int primary key auto_increment,
username varchar(100) unique ,
password varchar(100),
admin int default 0
);

create table profissional(
id int primary key auto_increment,
id_usuario int references usuario(id),
profissao varchar(100),
nome varchar(100),
sobrenome varchar(100),
cpf varchar(100),
celular int,
telefone int,
depto varchar(100),
data_nasc varchar(100),
email varchar(100) unique,
cargo varchar(100),
cep varchar(20),
endereco varchar(100),
sexo varchar(20),
dia_hora_cadastrado datetime
);

create table trabalho(
id int primary key auto_increment,
id_usuario int references usuario(id),
nome varchar(100),
descricao varchar(100),
data_trab datetime
);

create table comentario(
id int primary key auto_increment,
id_trabalho int references trabalho(id),
nome varchar(100),
telefone int,
email varchar(100),
descricao varchar(300),
data_inserida datetime
);

create table solicitar_trabalho(
id int primary key auto_increment,
nome varchar(30),
password varchar(100),
sobrenome varchar(30),
telefone int,
celular int,
email varchar(40),
nome_trabalho varchar(40),
tipo varchar(50),
descricao varchar(1000),
data_inserida datetime,
atendido int
);

alter table solicitar_trabalho add atendido int;

select now();
SELECT DATE_FORMAT(now(), "%W %M %e %Y");

select * from usuario where admin = 2
SELECT DATE_FORMAT("2017-06-15", "%m %d %Y");


-- selecionar a tabela --
select * from usuario;
select * from profissional;
select * from trabalho;
select * from comentario;
select * from solicitar_trabalho;
-- -- -- -- -- -- -- -- -- -- -- -- --

-- Excluir tabelas; --
drop table usuario;
drop table profissional;
drop table trabalho;
drop table comentario;
drop table solicitar_trabalho;
-- -- -- -- -- -- -- -- -- -- -- -- --

-- Inserção da tabela --
insert into usuario values (default ,'admin', '123', 2);
-- -- -- -- -- -- -- -- -- -- -- -- --

--select * from usuario where username = 'admin' and password = 123 and admin != 0;
select * from usuario;
select * from profissional;
select * from usuario, profissional where usuario.id = profissional.id_usuario;


DELETE FROM usuario, profissional USING usuario, profissional
WHERE usuario.id = 2 AND profissional.id_usuario = 2

--update usuario set admin=1 where id= 2;

--Opções de seleções--
--Opção 1-- Selecionando colunas por ver--
--select u.id, u.username from usuario as u, profissional as p where u.id = p.id_usuario...
--Opção 2-- Selecionando tudo--
--select * from usuario, profissional where usuario.id = profissional.id_usuario;---

select profissional.*, usuario.* from usuario
join profissional on usuario.id = profissional.id_usuario where usuario.username = 'iago';

select profissional.*, usuario.* from usuario join profissional on usuario.id = profissional.id_usuario where usuario.username = 'iago'
DELETE FROM usuario, profissional USING usuario, profissional WHERE usuario.id = 8 AND profissional.id_usuario = 8

select now();

select current_time();

select * from profissional where nome = 'maria1';

select * from solicitar_trabalho where atendido != 1

insert into profissional (nome, sobrenome, email, data_nasc, telefone, depto, id_usuario, celular, cargo, cpf, endereco, cep, sexo, profissao, dia_hora_cadastrado) values ('sdadas', 'dasda', 'asdas@dasd','2018-09-14',123,'sdad', 17, 231, 'asd', '231', 'asda', '312', 'Masculino', 'asdas', now());

insert into solicitar_trabalho(nome, password, sobrenome, telefone, email, celular, descricao, nome_trabalho, tipo, data_inserida) values ('iago', 123, 'ramos', 4312, 'iago-ramos1000@hotmail.com', 1242, 'dcascasc', 'nome', 'qualquer', now());