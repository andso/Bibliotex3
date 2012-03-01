create table usuarios (
	id int(10) unsigned not null auto_increment,
	username varchar(20) not null,
	password varchar (32) not null,
	email varchar (64),
	type varchar(16) not null,
	primary key (id)
);
