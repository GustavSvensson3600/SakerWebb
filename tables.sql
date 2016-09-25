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

create table Items (
itemName varchar(100) not null,
itemNumber int auto_increment not null,
description varchar(1000),
price int not null,
primary key (itemNumber)
);


/* Create a couple of inputs just to see if it works?
Migh be hard if we're storing hashes. */

insert into Items values ('Kayne Wests Självgodhet', 'description', 100);
insert into Items values ('Miley Cyrus Värdighet', 'description', 100);
insert into Items values ('Sherlock Holmes People skills', 'description', 100);
insert into Items values ('En naturvetare med social kompetens', 'description', 100);
insert into Items values ('En pluggande ekonom', 'description', 100);
insert into Items values ('Trumps ryggrad', 'description', 100);
insert into Items values ('En genuskapvetares framtid', 'description', 100);
insert into Items values ('Hillarys hälsa', 'description', 100);
insert into Items values ('George W Bushs IQ', 'description', 100);
insert into Items values ('Donald Trumps löfte', 'description (gratis och finns i mängder, ej garanterad leverans)', 0);
insert into Items values ('En genusvetenskapares drömvärld', 'description', 100);
insert into Items values ('Dystopi fast med safe spaces.', 'description', 100);
