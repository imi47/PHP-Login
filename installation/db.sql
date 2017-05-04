create database login;
create table login.users (
	id int(4) unsigned auto_increment primary key,
	username varchar(20)  not null,
	email varchar(40) not null,
	password varchar(64) not null
);