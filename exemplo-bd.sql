/*
PHP
BD MySQL
*/


--- -------------------------
Create database dbphp; 

use dbphp; 

show tables; 

-- --------------------------
/*
Tabelas para guardar usuarios
codigo		cd cd_usuario 
nome		nm nm_usuario 
login		nm nm_login
email		nm nm_email
senha		ds ds_senha
*/

create table tb_usuario(
	cd_usuario int not null,  
	nm_usuario varchar(100) not null, 
	nm_login varchar(50) not null, 
	nm_email varchar(50) not null, 
	ds_senha varchar(50) not null, 
constraint pk_usuario primary key (cd_usuario) 
);

show tables; 

desc tb_usuario; 
-- --------------------------

insert into tb_usuario (cd_usuario, nm_usuario, nm_login, nm_email, ds_senha)
values (1, 'nm_usuario ZERO UM', 'nm_login ZERO UM', 'nm_email ZERO UM', 'ds_senha ZERO UM');

insert into tb_usuario (cd_usuario, nm_usuario, nm_login, nm_email, ds_senha)
values (2, 'Joaquim', 'joca', 'email@joca.com', 'P@s5W0r(|');

insert into tb_usuario (cd_usuario, nm_usuario, nm_login, nm_email, ds_senha)
values (3, 'Ruthinha é boaaa', 'etecdrc', 'email@etecdrc.com.br', 'senha');

-- --------------------------
select * 
	from tb_usuario; -- N U N C A Utilizar * 

select 
	cd_usuario, nm_usuario, 
	nm_login, nm_email 
from tb_usuario;


select 
	cd_usuario, nm_usuario, 
	nm_login, nm_email 
from tb_usuario
where 
-- 	nm_login = 'Parametro que eu mandar'  AND 
	ds_senha = '123mudar';

-- --------------------------
/*  
update tb_usuario
set ds_senha = '123mudar'
where cd_usuario = 1 
*/ 
-- --------------------------
/*
delete from tb_usuario
where cd_usuario = 1 
*/
