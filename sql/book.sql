create table book (
			id int(10) unsigned not null auto_increment,
           title varchar(200) not null,
           author varchar (32) not null,
           pub_date date,
           num_pages int(10),
           content text,
           primary key (id)
   );
