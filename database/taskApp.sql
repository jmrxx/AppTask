-- Crear base datos para alamcenar tareas, app con php y mysql
-- Es una aplicacion de tareas

-- Borramos la base de datos si existe 
drop database if exists taskApp;

-- Creamos la base de datos
create database taskApp character set utf8mb4 collate utf8mb4_spanish_ci;


-- Usamos la base de datos
use taskApp;

create table autor(
id 				int 			primary key auto_increment,
title 			varchar(250) 	not null,
descripcion		text			not null,
fecha_creacion	timestamp			not null default current_timestamp()




);