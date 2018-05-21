create table users(
	id int PRIMARY KEY AUTO_INCREMENT,
	username varchar(30) not null,
	password varchar(128) not null,
	first_name varchar(50),
	last_name varchar(50),
	date_created datetime default now(),
	date_updated timestamp default now()
);
create table lib_facility(
	id int primary key auto_increment,
	hfname varchar(255),
	prov_code char(4),
	muncity_code char(6)
);
create table employee(
	id int primary key auto_increment,
	name varchar(255),
	role varchar(30),
	date_added datetime default now()
);
create table lib_province(
	id char(4),
	prov_name varchar(255)
);
create table lib_muncity(
	id char(6),
	muncity_name varchar(255)
);
create table issue_category(
	id int primary key auto_increment,
	cat_name varchar(50),
	date_added datetime default now()
);
create table server_version(
	id int primary key auto_increment,
	version varchar(50),
	date_added datetime default now()
);
create table issue(
	id int primary key auto_increment,
	user int,
	caller varchar(255),
	hf int,
	issue_cat int,
	server_version int,
	main_issue varchar(255),
	note varchar(65536),
	date_created datetime default now(),
	date_updated datetime default now()
);
