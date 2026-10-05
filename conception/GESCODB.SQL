drop database if exists gescodb;

create database gescodb character set utf8mb4;
use gescodb;


# -----------------------------------------------------------------------------
#       table : user
# -----------------------------------------------------------------------------

create table if not exists `user` (
  iduser int not null auto_increment ,
  nom varchar(128) null ,
  email varchar(128) null ,
  `password` varchar(128) null , 
  primary key (iduser) 
) 
engine=InnoDB;



# -----------------------------------------------------------------------------
#       table : contact
# -----------------------------------------------------------------------------

create table if not exists contact (
  idcontact int not null auto_increment ,
  iduser int not null ,
  nom varchar(128) null ,
  prenom varchar(128) null ,
  telephone varchar(128) null ,
  email varchar(128) null ,
  datecontact date default (CURRENT_DATE), 
  primary key (idcontact) 
)
engine=InnoDB;





# -----------------------------------------------------------------------------
#       creation des references de table
# -----------------------------------------------------------------------------

alter table contact 
  add foreign key fk_contact_user (iduser)
      references user (iduser) ;






# ----------------------------------------
# Requetes Insertion
# ----------------------------------------

insert into user (nom, email, `password`)
values
('Toto', 'toto@yahoo.fr', 'toto');
