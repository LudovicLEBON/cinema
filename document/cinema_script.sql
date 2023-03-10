-- création script base de donnée cinema

create database if not exists cinema default character set utf8 collate utf8_general_ci;
use cinema; 

set foreign_key_checks = 0;

-- création table film 

drop table if exists film;
create table film (
    fil_id int auto_increment primary key, 
    fil_titre varchar(200) not null,
    fil_date_sortie date not null,
    fil_affiche varchar(500) not null
)engine=innodb; 

-- création table intervenant 

drop table if exists intervenant;

create table intervenant (
    int_id int auto_increment primary key,
    int_nom varchar(50) not null,
    int_prenom varchar(50) not null
)engine=innodb; 

-- création table cinema 

drop table if exists cinema;

create table cinema (
    cin_id int auto_increment primary key,
    cin_libelle varchar(100) not null,
    cin_ville int not null
)engine=innodb; 

-- création table ville 

drop table if exists ville;

create table ville (
    vil_id int auto_increment primary key,
    vil_nom varchar(100) not null
)engine=innodb;

-- création table produire 

drop table if exists produire;

create table produire (
    pro_id int auto_increment primary key,
    pro_intervenant int not null,
    pro_film int not null
)engine=innodb;

-- création table participer 

drop table if exists participer;

create table participer (
    par_id int auto_increment primary key,
    par_intervenant int not null,
    par_film int not null
)engine=innodb;

-- création table diffuser 

drop table if exists diffuser;

create table diffuser (
    dif_id int auto_increment primary key,
    dif_date_apparition date not null,
    dif_date_disparition date not null,
    dif_film int not null,
    dif_cinema int not null
)engine=innodb;

set foreign_key_checks =1;

-- contraintes d'intrégritées 

alter table cinema add constraint cs1 foreign key (cin_ville) references ville(vil_id) on delete cascade;
alter table produire add constraint cs2 foreign key (pro_intervenant) references intervenant(int_id) on delete cascade;
alter table produire add constraint cs3 foreign key (pro_film) references film(fil_id) on delete cascade;
alter table participer add constraint cs4 foreign key (par_intervenant) references intervenant(int_id) on delete cascade;
alter table participer add constraint cs5 foreign key (par_film) references film(fil_id) on delete cascade;
alter table diffuser add constraint cs6 foreign key (dif_cinema) references cinema(cin_id) on delete cascade;
alter table diffuser add constraint cs7 foreign key (dif_film) references film(fil_id) on delete cascade;


