-- Criação das tabelas --
create table usuario(
id int primary key auto_increment,
username varchar(100) unique ,
password varchar(100),
admin int default 0
);

create table usuario1(
id int primary key auto_increment,
username varchar(100) unique ,
password varchar(100),
admin int default 0
);

create table profissional1(
id int primary key auto_increment,
id_usuario int references usuario(id),
profissao varchar(100),
nome varchar(100),
sobrenome varchar(100) null,
cpf varchar(100),
celular int null,
depto varchar(100) null,
data_nasc varchar(100) null,
email varchar(100) unique,
cargo varchar(100) null,
cep varchar(20),
endereco varchar(100) null,
sexo varchar(20),
dia_hora_cadastrado datetime
);

create table profissional(
id int primary key auto_increment,
id_usuario int references usuario(id),
profissao varchar(100),
nome varchar(100),
sobrenome varchar(100) null,
cpf varchar(100),
celular int null,
depto varchar(100) null,
data_nasc varchar(100) null,
email varchar(100) unique,
cargo varchar(100) null,
cep varchar(20),
endereco varchar(100) null,
sexo varchar(20),
dia_hora_cadastrado datetime
);

create table trabalho(
id int primary key auto_increment,
id_usuario int references usuario(id),
nome varchar(100),
descricao varchar(1000),
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
id_profissional int,
nome varchar(30),
password varchar(100),
sobrenome varchar(30),
celular int,
email varchar(40),
nome_trabalho varchar(40),
tipo varchar(50),
descricao varchar(1000),
data_inserida datetime,
atendido int
);

create table parcerias(
id int primary key auto_increment,
nome varchar(100),
imagem varchar(100),
descricao varchar(300)
);

create table arquivos(
id_arquivo int primary key auto_increment,
nome_arquivo varchar (100)
);


create table arquivo_oportunidades(
id_arquivo int,
id_oportunidades int references
);

create table oportunidades(
id int primary key auto_increment,
nome varchar(100),
arquivo varchar(100),
descricao varchar(500),
data_inserida date
);

select * from profissional; 
select * from usuario; 

SELECT arquivos.*, arquivo_oportunidades.* FROM arquivos 
INNER JOIN arquivo_oportunidades ON arquivos.id_arquivo = arquivo_oportunidades.id_arquivo 
WHERE arquivo_oportunidades.id_oportunidades = 8;

SELECT arquivos.* FROM arquivos 
INNER JOIN arquivo_oportunidades ON arquivos.id_arquivo = arquivo_oportunidades.id_arquivo 
WHERE arquivo_oportunidades.id_oportunidades = 9;

SELECT * FROM arquivo_oportunidades;


INSERT INTO usuario (id, username, password, admin) VALUES (NULL, 'admin', '123', '2');

alter table oportunidades add data_inserida date;

select * from solicitar_trabalho;

alter table parcerias add nome varchar(100);

update solicitar_trabalho set atendido= 0 where id =1;
insert into usuario values (default ,'admin', '123', 2);

alter table solicitar_trabalho add atendido int;
alter table solicitar_trabalho add id_profissional int;

-- selecionar a tabela --
select * from usuario;
select * from profissional;
select * from trabalho;
select * from comentario;
select * from solicitar_trabalho;
select * from parcerias;
-- -- -- -- -- -- -- -- -- -- -- -- --

-- Excluir tabelas; --
drop table usuario;
drop table profissional;
drop table trabalho;
drop table comentario;
drop table solicitar_trabalho;
-- -- -- -- -- -- -- -- -- -- -- -- --

-- Inserção da tabela --

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

insert into arquivo_oportunidades(id_arquivo, id_oportunidades) values (4, 8);
SELECT * FROM solicitar_trabalho WHERE solicitar_trabalho.atendido IS NULL;

select current_time();

select * from profissional where nome = 'maria1';

select * from solicitar_trabalho where atendido != 1

insert into profissional (nome, sobrenome, email, data_nasc, telefone, depto, id_usuario, celular, cargo, cpf, endereco, cep, sexo, profissao, dia_hora_cadastrado) values ('sdadas', 'dasda', 'asdas@dasd','2018-09-14',123,'sdad', 17, 231, 'asd', '231', 'asda', '312', 'Masculino', 'asdas', now());

select * from profissional;
insert into solicitar_trabalho(nome, password, sobrenome, email, celular,
         descricao, nome_trabalho, tipo, data_inserida) values ('iago', '123', 'dasdas',
'sadas', 122, '$descricao', '$nome_trabalho', 'dsadas', now());


select * from solicitar_trabalho;
update solicitar_trabalho set nome='IagoRa', sobrenome='Ramos dos Santos', celular=996929590, email='siccsistema@gmail.com', password='sicc12345', 
nome_trabalho='Não sei trocar a tomada da cozinha', tipo='Elétrico', 
descricao='Não estou conseguindo trocar a tomada da cozinha, não sei se é para usar
 chave de fenda ou philips.' where id = 1;

select * from arquivo_oportunidades;