CREATE DATABASE `gyakrolat_beadando`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `gyakrolat_beadando`;

CREATE TABLE `felhasznalok` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `csaladi_nev` varchar(45) NOT NULL default '',
  `uto_nev` varchar(45) NOT NULL default '',
  `bejelentkezes` varchar(12) NOT NULL default '',
  `jelszo` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

CREATE TABLE uzenetek (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nev VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    uzenet TEXT NOT NULL,
    datum DATETIME DEFAULT CURRENT_TIMESTAMP,
    felhasznalo VARCHAR(100) DEFAULT 'Vendég'
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `felhasznalok` (`id`,`csaladi_nev`,`uto_nev`,`bejelentkezes`,`jelszo`) VALUES 
 (1,'Teszt','Elek','Login1',sha1('login1')),
 (2,'Teszt','Csanád','Login2',sha1('login2'));

INSERT INTO `uzenetek` (`id`,`nev`,`email`,`uzenet`,`datum`,`felhasznalo`) VALUES 
 (1,'Teszt Elek','teszt@elek.hu','Teszt üzenet 01','2025-05-01 11:36:34','Login1'),
 (2,'Teszt Csaba','teszt@csaba.hu','Teszt üzenet 02','2025-05-01 09:36:34','Vendég');