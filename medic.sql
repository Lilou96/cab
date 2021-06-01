drop database if exists medicc;
create database medicc; 
use medicc;


create table rdv (
	idrdv int(11) not null auto_increment,
	adressrdv varchar(50),
	nomprdv varchar(50),
	heurerdv time,
	daterdv date, 
	primary key (idrdv)
);

insert into rdv values 
	(null, "103 Grande Rue de la Croix-Rousse 69004 Lyon","Cabinet de la Croix-Rousse","11:20:00","2020-03-31"),
	(null, "92 Rue Dr Edmond Locard 69005 Lyon","Les massues","10:30:00","2020-04-05");

create table medecin (
	idmed int(11) not null auto_increment,
	nommed varchar(50),
	prenommed varchar(50),
	adressmed varchar(50),
	mailmed varchar(50),
	telmed varchar(10),
	primary key (idmed)
);

insert into medecin values 
	(null, "Ben","Oka","Rue de Lyon","b@gmail.com","0606060606"),
	(null, "Chouaki","Abdel","Rue de Lyon","c@gmail.com","0707070707");

create table medicament (
	idmedica int(11) not null auto_increment,
	nommedica varchar(32),
	prixmedica decimal(13,2),
	primary key (idmedica)
);

insert into medicament values 
	(null,"medicament 1", 30),
	(null,"medicament 2", 25);

create table soin (
	idmed int(11) not null,
	idrdv int(11) not null,
	idmedica int(11) not null,
	suivi varchar(20),
	primary key(idmed,idrdv,idmedica),
	foreign key (idmed) references medecin(idmed),
	foreign key (idrdv) references rdv(idrdv),
	foreign key (idmedica) references medicament(idmedica)
);

insert into soin values 
	(1,1,1,"6 mois"),
	(2,1,2,"4 mois");

create table patient (
	idpat int(11) not null auto_increment,
	nompat varchar(50),
	prenompat varchar(50),
	telpat varchar(10),
	adressepat varchar(50),
	datenaiss date,
	montant varchar(13),	
	idrdv int(11) not null,
	primary key(idpat),
	foreign key (idrdv) references rdv(idrdv)
);

insert into	patient values
	(null,"Thiery","Elliott","0707070707","Rue de Lyon","2020-03-31",400,1),
	(null,"Namour","Dimi","0707070707","Rue de Lyon","2019-01-05",600,2);

create table maladie (
	idmal int(11) not null auto_increment,
	nommal varchar(50),
	typemal varchar(50),
	idpat int(11) not null,
	primary key(idmal),
	foreign key (idpat) references patient(idpat)
);

insert into maladie values 
	(null, "Coronavirus","bactérie",1),
	(null, "Indigestion alimentaire","Indigestion",1);