/* Reset settings, to drop all tables before
creating new ones. */

/* drop table if exists tableName;*/
drop table if exist Users;
drop table if exist Items;

/* Create the tables we need with the right format*/
create table Users (
userName varchar(100) not null,
passWord varchar(100) not null,
salt varchar(20) not null,
adress varchar(100) not null,
status int default 0,
primary key (userName)
);

create table Item (
itemName varchar(100) not null,
itemNumber int auto_increment not null,
description varchar(1000),
price int not null,
primary key (itemNumber)
);


/* Create a couple of inputs just to see if it works?
Migh be hard if we're storing hashes. */
