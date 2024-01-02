create table if not exists visiteur
(
    id_visiteur int not null auto_increment,
    nom varchar(50) not null,
    post_nom varchar(50) not null,
    prenom varchar(50) not null,
    mail varchar(100) not null,
    adresse varchar(100) not null,
    num_tel int not null,
    pass varchar(100) not null,
    date_enregistrement date not null,
    primary key(id_visiteur,nom,mail,num_tel)
);

create table if not exists appartements
(
    id_location int not null auto_increment,
    num_prop_appart int not null,
    dimension varchar(50) not null,
    nb_des_pieces int not null,
    pays varchar(100) not null,
    province varchar(100) not null,
    ville varchar(100) not null,
    commune varchar(100) not null,
    quartier varchar(100) not null,
    avenue varchar(100) not null,
    num int not null,
    photo varchar(500) not null,
    securite int not null,
    electricity varchar(50) not null,
    eau varchar(50) not null,
    proximite varchar(255) not null,
    prix int not null,
    date_enregistrement date not null,
    primary key (id_location,num_prop_appart),
    foreign key (num_prop_appart) references visiteur(id_visiteur)
);

create table if not exists parcelle
(
    id_parcelle int not null auto_increment,
    num_prop_parcelle int not null,
    dimension varchar(50) not null,
    pays varchar(100) not null,
    province varchar(100) not null,
    ville varchar(100) not null,
    commune varchar(100) not null,
    quartier varchar(100) not null,
    avenue varchar(100) not null,
    num int not null,
    photo varchar(500) not null,
    securite int not null,
    electricity varchar(50) not null,
    eau varchar(50) not null,
    proximite varchar(255) not null,
    prix int not null,
    date_enregistrement date not null,
    primary key (id_parcelle,num_prop_parcelle),
    foreign key (num_prop_parcelle) references visiteur(id_visiteur)
);

create table if not exists proprietaire_appartement
(
    id_proprietaire int not null auto_increment,
    nom varchar(50) not null,
    mail varchar(100) not null,
    num_tel int not null,
    num_appart int not null,
    primary key (id_proprietaire),
    foreign key (nom) references visiteur(nom),
    foreign key (mail) references visiteur(mail),
    foreign key (num_tel) references visiteur(num_tel),
    foreign key (num_appart) references appartement(id_location)
);

create table if not exists proprietaire_parcelle
(
    id_proprietaire int not null auto_increment,
    nom varchar(50) not null,
    mail varchar(100) not null,
    num_tel int not null,
    num_parcelle int not null,
    primary key (id_proprietaire),
    foreign key (nom) references visiteur(nom),
    foreign key (mail) references visiteur(mail),
    foreign key (num_tel) references visiteur(num_tel),
    foreign key (num_parcelle) references parcelle(id_parcelle)
);

create table if not exists locataire
(
    id_locataire int not null auto_increment,
    nom varchar(50) not null,
    mail varchar(100) not null,
    num_tel int not null,
    num_appart int not null,
    primary key (id_locataire),
    foreign key (nom) references visiteur(nom),
    foreign key (mail) references visiteur(mail),
    foreign key (num_tel) references visiteur(num_tel),
    foreign key (num_appart) references appartement(id_location)
);
create table if not exists postule_parcelle
(
    id int not null auto_increment,
    client int not null,
    parcelle int not null,
    montant int not null,
    carte varchar(100) not null,
    date_enregistrement date not null,
    primary key (id,client,parcelle),
    foreign key (client) references visiteur(id_visiteur),
    foreign key (parcelle) references parcelle(id_parcelle)
);

create table if not exists postule_appartement
(
    id int not null auto_increment,
    client int not null,
    appartement int not null,
    montant int not null,
    dates date not null,
    garenti varchar(100) not null,
    carte varchar(100) not null,
    date_enregistrement date not null,
    primary key (id,client,appartement),
    foreign key (client) references visiteur(id_visiteur),
    foreign key (appartement) references appartement(id_location)
);

create table if not exists acheteur
(
    id_acheteur int not null auto_increment,
    nom varchar(50) not null,
    mail varchar(100) not null,
    num_tel int not null,
    num_parcelle int not null,
    primary key (id_acheteur),
    foreign key (nom) references visiteur(nom),
    foreign key (mail) references visiteur(mail),
    foreign key (num_tel) references visiteur(num_tel),
    foreign key (num_parcelle) references parcelle(id_parcelle)
);

create table if not exists contrat
(
    id_contrat int not null auto_increment,
    etat varchar(50) not null,
    date_creation datetime not null,
    date_debut datetime not null,
    date_fin datetime not null,
    num_locataire int not null,
    num_location int not null,
    primary key (id_contrat),
    foreign key (num_location) references appartement(id_location),
    foreign key (num_locataire) references locataire(id_locataire)
);

