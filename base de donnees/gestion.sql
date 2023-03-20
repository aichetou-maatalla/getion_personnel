

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";





drop database if exists gestion;
CREATE DATABASE IF NOT EXISTS `gestion` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gestion`;



CREATE TABLE IF NOT EXISTS `employe` (
  `id_g` int(11) NOT NULL  AUTO_INCREMENT  PRIMARY KEY  ,
  `code_g` varchar(50) NOT NULL,
  `nom_g` varchar(20) NOT NULL,
  `prenom_g` varchar(50) NOT NULL,
  `date_ne`  date ,
  `telephone` int(30) NOT NULL,
  `email` varchar(56) NOT NULL,
  `fonctionalite` varchar(56) NOT NULL,
  `departement` varchar(56) NOT NULL
  
);




 CREATE TABLE IF NOT EXISTS `conge`(
  `id_conge` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `code_g` varchar(50) NOT NULL ,
  `nom_g` varchar(50) NOT NULL,
  `prenom_g` varchar(50) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `type_conge` varchar(50) NOT NULL
);



CREATE TABLE IF NOT EXISTS `absence`(
  `id_abs` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `code_g` int(11) NOT NULL ,
  `nom_g` varchar(20) NOT NULL,
  `prenom_g` varchar(50) NOT NULL,
  `date_abs` date,
  `horaire` varchar(50) NOT NULL
);



CREATE TABLE IF NOT EXISTS `utilisateur`(
  `iduser` int(4) AUTO_INCREMENT PRIMARY KEY,
  `login` varchar(50),
  `email` varchar(255),
  `role` varchar(50),        
  `etat` int(1),
  `pwd` varchar(255)
);





CREATE TABLE IF NOT EXISTS `sanction` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `code_g` varchar(50) NOT NULL,
  `nom_g` varchar(20) NOT NULL,
  `prenom_g` varchar(50) NOT NULL,
  `type_sanction` varchar(50) NOT NULL,
  `causes` varchar(50) NOT NULL,
  `num_decision` varchar(50) NOT NULL 
  
);



CREATE TABLE IF NOT EXISTS `promotion` (
  `id_p` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `code_g` varchar(50) NOT NULL  ,
  `nom_g` varchar(20) NOT NULL,
  `prenom_g` varchar(50) NOT NULL,
  `ancien_rang` varchar(50) NOT NULL,
  `nouveau_rang` varchar(50) NOT NULL,
  `num_decision` varchar(50) NOT NULL 
);



CREATE TABLE IF NOT EXISTS `decision` (
  `id_de` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `code_g` varchar(50) NOT NULL ,
  `date_de` Date ,
  `type_de` varchar(50) NOT NULL,
  `num_decision` varchar(50) NOT NULL 
  
);

INSERT INTO utilisateur(login,email,role,etat,pwd) VALUES
('admin','warde.med.37@gmail.com','ADMIN',1,md5('123')),
('user1','emamacheikh1@gmail.com','VISITEUR',0,md5('123')),
('user2','aichetoumatala@gmail.com','VISITEUR',1,md5('123'));



Alter table conge add constraint PRIMARY key(id_conge) references conge(id_conge);




INSERT INTO employe(code_g,nom_g,prenom_g,date_ne,telephone,email,fonctionalite,departement) VALUES
(50001,'ahmed','mouhamed','2014-06-22','22345310','hhfjb-20@hotmail.fr','gestionnaire','mi'),
(50002,'ali','oumar','2014-07-22','33456700','nb-20@hotmail.fr','enseignant','gio'),
(50003,'lalla','cherif','1996-04-02','22308950','warde.med.37@gmail.com','gestionnaire','ph'),
(50004,'brahim','ahmed','2014-05-22','32445700','jhj-20@hotmail.fr','enseignant','chimi'),
(50005,'sidi','moussa','2014-01-12','27004355','jh-20@hotmail.fr','gestionnaire','bio'),
(50006,'amir','adama','1996-04-02','22308950','warde.med.37@gmail.com','gestionnaire','gio'),
(50007,'fatma','kerim','2014-05-22','32445700','jhj-20@hotmail.fr','enseignant','mi'),
(50008,'aicha','amir','2014-01-12','27004355','jh-20@hotmail.fr','gestionnaire','chimi');


INSERT INTO conge(code_g,nom_g,prenom_g,date_debut,date_fin,type_conge) VALUES
(50001,'ahmed','fetehe','2021-01-12', '2021-02-12','Sientfique'),
(50002,'aichetou','mouhamed','2021-02-12', '2021-02-20', 'Maladie'),
(50003,'mouna','camara','2021-03-12', '2021-04-17', 'Maternite'),
(50004,'aly','aziz','2021-01-12', '2021-02-12','Sientfique'),
(50005,'cherif','hassan','2021-02-12', '2021-02-20','Maladie'),
(50006,'lalla','ahmed','2021-03-12', '2021-04-17','Maternite'),
(50007,'mouhamed','ali','2021-02-12', '2021-02-20','Maladie'),
(50008,'oumar','hassan','2021-03-12', '2021-04-17','Maternite');


-- ------------

--
-- Contenu de la table `absance`
--

INSERT INTO absence(code_g,nom_g,prenom_g,date_abs,horaire) VALUES
(50001,'ahmed','fetehe','2021-07-08','08:30/10:30'),
(50002,'aichetou','mouhamed','2021-07-08','10:30/12:30'),
(50003,'mouna','camara','2021-07-09','14:00/16:00'),
(50004,'aly','aziz','2021-07-08','16:00/18:00'),
(50001,'cherif','hassan','2021-07-08','14:00/16:00'),
(50002,'lalla','ahmed','2021-07-08','14:30/16:30'),
(50003,'ahmed','fetehe','2021-07-02','14:30/16:30'),
(50004,'aichetou','mouhamed','2021-07-08','16:00/18:00'),
(50001,'mouna','camara','2021-07-08','14:00/16:00'),
(50002,'aly','aziz','2021-07-08','16:00/18:00'),
(50003,'cherif','hassan','2021-07-07','14:00/16:00'),
(50004,'lalla','ahmed','2021-07-08','14:30/16:30');






select * from employe;
select * from promotion;
select * from sanction;
select * from conge;
select * from absence;
select * from utilisateur;
select login,pwd from utilisateur;





