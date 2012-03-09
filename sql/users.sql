create table usuarios (
	id int(10) unsigned not null auto_increment,
	username varchar(20) not null,
	password varchar (32) not null,
	email varchar (64),
	type varchar(16) not null,
	primary key (id)
);
INSERT INTO Usuarios VALUES (1, 'admin','21232f297a57a5a743894a0e4a801fc3','root', 'admin@bibliotex.com')
