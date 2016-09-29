/* Reset settings, to drop all tables before
creating new ones. */

/* drop table if exists tableName;*/
drop table if exists Users;
drop table if exists Items;

/* Create the tables we need with the right format*/
create table Users (
userName varchar(100) not null,
passWord varchar(256) not null,
address varchar(100) not null,
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

insert into Items (itemName, description, price) values ('Kayne Wests Självgodhet', 'Har du någonsin känt att du hade viljat älska dig själv mer än någoting annat? Då är detta en produkt för dig!', 1337);
insert into Items (itemName, description, price) values ('Miley Cyrus Värdighet', 'Den må vara liten eller knappt existerande, men det går ryckten om att den en gång i tiden betyde något.', 80085);
insert into Items (itemName, description, price) values ('Sherlock Holmes People skills', 'Utmärkt för den som vill komplettera den där detektiv imagen.', 199);
insert into Items (itemName, description, price) values ('En naturvetare med social kompetens', 'Varför prata och glädjas med andra när man kan har minst lika kul för sig själv? Eller?', 5);
insert into Items (itemName, description, price) values ('En pluggande ekonom', 'Den mest sällsynta ekonomen av dem alla. Kommer endast ett få antal per nytt antag.', 875999);
insert into Items (itemName, description, price) values ('Trumps ryggrad', 'Minimal, får plats i en fika, lätt att ta med och väger lite. Gjord av 50% besvikelse och 50% lögner.', 1);
insert into Items (itemName, description, price) values ('En genuskapvetares framtid', 'Den må inte leda till något stort, eller något alls för den delen. Men det är en framtid och jag fick faktiskt plugga det jag verkligen tycker är viktigt!', 5);
insert into Items (itemName, description, price) values ('Hillarys hälsa', 'Beskrivning saknas, ingen vet riktigt nu för tiden.', 1000);
insert into Items (itemName, description, price) values ('George W Bushs IQ', 'IQ-score 91 där 100 är avarage. Inget att hänga i julgrannen men det går att göra om du vill.', 50);
insert into Items (itemName, description, price) values ('Donald Trumps löfte', 'FYND! Hela lagret måste tömmas! Finns i mängder! Varken vi eller Dolad själv kan garanterad leverans.)', 0);
insert into Items (itemName, description, price) values ('En genusvetenskapares drömvärld', 'För abstrakt för att kunna beskrivas. Men det är mycket rosa i den och Gudrun Schyman sägs spela en stor del i det hela.', 1234);
insert into Items (itemName, description, price) values ('Dystopi fast med safe spaces.', 'Man skulle kunna tro att detta inte finns! Men jodå, forskare från Nordöstra Syd Sahara har kommit fram med en lösning just för det här!', 19000);

/* Insert some users */
insert into Users (userName, passWord, address) values ('Sarah', '$2y$10$Jr1kd5a2Yo69V4RznPCimeY4SK/RPokNNDro5CeNPfgvNB1ZG2k.m', '95 Summit Street');
insert into Users (userName, passWord, address) values ('Penny', '$2y$10$6gVeFMlaBzOkjr2w6oDOMO/llv1EzuTceTvtx9unsjq4TrsyQUcDi', '9828 Walnut Street');
insert into Users (userName, passWord, address) values ('Michael', '$2y$10$FulbTBgH.VPbPsA4BPJkl..WKaONnqSmDbfqrRh80WNlmfRnQwP9G', '37 SW. Chapel Circle');
insert into Users (userName, passWord, address) values ('Jennifer', '$2y$10$KQB5S6tvHRMpWyoQbZV/cOoJPhJpVdPYNzwHn/4PsMybaUsaswVjy', '7440 Young Lane');
insert into Users (userName, passWord, address) values ('Algot', '$2y$10$VztHaXfus03ofJsQSyeq8.b5/D6nOwJGnSQHEoFhJvp1ebSEURRMi', '29 Ivy Avenue');
