create table CLIENT
(	Num_Client integer primary key AUTO_INCREMENT,
	Nom_Client varchar(20) not null,
	Prénom_Client varchar(50) not null,
	Civilité_Client varchar(8) not null check (Civilité_Client in ('Mlle', 'Madame', 'Monsieur')),
	Date_Naissance date not null,
	Société_Client varchar(30),
	Adresse_Client varchar(100) not null,
	Adresse_Complément varchar(50),
	Code_Postal integer not null not null,
	Ville_Client varchar(30) not null,
	Pays_Client varchar(20) not null,
	Mail_Client varchar(50) not null,
	Tel_Client integer not null
);

create table VOYAGE_CIRCUIT(
	Code_Voyage_Circuit integer primary key AUTO_INCREMENT,
	Nom_Voyage_Circuit varchar(20),
	Durée_Voyage_Circuit varchar(20),
	Prix_Indicatif_Circuit integer check (Prix_Indicatif > 0),
	Ville_Départ varchar(20),
	Ville_Arrivée varchar(20)
);

create table REGION
(	Num_Région integer primary key AUTO_INCREMENT,
	Nom_Région varchar(20) not null
);

create table VILLE
(	Num_Ville integer primary key AUTO_INCREMENT,
	Nom_Ville varchar(20) not null,
    Num_Région integer,
    foreign key (Num_Région) references REGION(Num_Région)
);

create table VOYAGE_DESTINATION(
	Code_Voyage_Destination integer primary key AUTO_INCREMENT,
	Num_Ville integer,
	Prix_Indicatif_Destination integer not null check (Prix_Indicatif > 0),
    foreign key (Num_Ville) references VILLE(Num_Ville)
);
	
create table RESERVATION_CIRCUIT
(	Num_Réservation_Circuit integer primary key AUTO_INCREMENT,
	Date_Départ_Circuit date not null,
    Num_Client integer,
    Code_Voyage_Circuit integer,
	Nb_Places_Réservées_Circuit integer not null check (Nb_Places_Réservées >= 1),
    foreign key (Num_Client) references CLIENT(Num_Client),
    foreign key (Code_Voyage_Circuit) references VOYAGE_CIRCUIT(Code_Voyage_Circuit)
);

create table RESERVATION_DESTINATION
(	Num_Réservation_Destination integer primary key AUTO_INCREMENT,
	Date_Départ_Destination date not null,
    Num_Client integer,
    Code_Voyage_Destination integer,
	Nb_Places_Réservées_Destination integer not null check (Nb_Places_Réservées >= 1),
    foreign key (Num_Client) references CLIENT(Num_Client),
    foreign key (Code_Voyage_Destination) references VOYAGE_DESTINATION(Code_Voyage_Destination)
);
	
create table PAIEMENT_CIRCUIT
(	
	Num_Paiement_Circuit integer primary key AUTO_INCREMENT,
	Montant_Paiement_Circuit integer  not null check (Montant_Paiement > '0'),
	Date_Paiement_Circuit date not null,
    Code_Voyage_Circuit integer,
    Num_Client integer,
    foreign key (Code_Voyage_Circuit) references VOYAGE_CIRCUIT(Code_Voyage_Circuit),
    foreign key (Num_Client) references CLIENT(Num_Client)
);

create table PAIEMENT_DESTINATION
(	
	Num_Paiement_Destination integer primary key AUTO_INCREMENT,
	Montant_Paiement_Destination integer  not null check (Montant_Paiement > '0'),
	Date_Paiement_Destination date,
    Code_Voyage_Destination integer,
    Num_Client integer,
    foreign key (Code_Voyage_Destination) references VOYAGE_DESTINATION(Code_Voyage_Destination),
    foreign key (Num_Client) references CLIENT(Num_Client)
);
	
create table MONUMENT
(	Nom_Monument varchar(50) primary key,
	Prix_Entrée_Monument smallint default '0',
    Num_Ville integer,
    foreign key (Num_Ville) references VILLE(Num_Ville)
);
	
create table VOYAGE_ETAPE
(	Rang smallint not null,
	Ville_Etape varchar(20) not null,
	Num_Hotel integer not null,
	Type_Transport varchar(20),
	Nombre_Jours smallint not null,
    Code_Voyage_Circuit integer,
	primary key (Code_Voyage_Circuit, Rang),
    foreign key (Code_Voyage_Circuit) references VOYAGE_CIRCUIT(Code_Voyage_Circuit),
	foreign key (Num_Hotel) references HOTEl(Num_Hotel)
);
	
create table HOTEL
(	Num_Hotel integer primary key AUTO_INCREMENT,
	Num_Ville integer, 
	Nom_Hotel varchar(50) not null,
	Adresse_Hotel varchar(60) not null,
    foreign key (Num_Ville) references VILLE(Num_Ville)
);


drop table travel_australia.reservation_circuit;
drop table travel_australia.reservation_destination;
drop table travel_australia.paiement_circuit;
drop table travel_australia.paiement_destination;
drop table travel_australia.voyage_etape;
drop table travel_australia.client;
drop table travel_australia.voyage_circuit;
drop table travel_australia.voyage_destination;
drop table travel_australia.hotel;
drop table travel_australia.ville;
drop table travel_australia.region;	