-- COMMENTAIRE

DROP DATABASE IF EXISTS videogames;

CREATE DATABASE videogames;

USE videogames;

CREATE TABLE game (
    id TINYINT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    release_date DATE NOT NULL,
    poster VARCHAR(255) NOT NULL,
    price DECIMAL(5,2) NOT NULL
);

CREATE TABLE admin (
    id TINYINT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
);

INSERT INTO game (id,title,description,release_date,poster,price)VALUES 
(1,'WWE2K23','Jeu de catch','2023-03-17','img/2K23.jpg',100),
(2,'GTA5','Jeu de psycopathe','2013-09-17','img/GTAV.jpg',50),
(3,'ARK','Jeu de survie avec des grosses bestioles','2015-06-02','img/ARK.jpg',50),
(4,'Hogwarts Legacy',"C'est LEVIOOOOOOOOOSAAAAAA et pas LEviOOSSSaaaAA",'2023-02-10','img/Hogwart.jpg',70),
(5,'League Of Legend',"FF 15 you retard, you can't even last hit, even ironIV is too high for you",'2009-10-27','img/lol.jpg',0),
(6,'Spider-Man',"WOW IT'S THE GUY FROM FORTNITE",'2018-09-07','img/spiderman.jpg',60),
(7,'Elden Ring',"Pegi 3",'2022-02-25','img/elden.jpg',70),
(8,'Donkey Kong Country return',"Monkey goes brrrrrrrrrrr",'2010-11-21','img/DK.jpg',30),
(9,'Cyberpunk 2077',"More like 'Cyberbug' LOOL",'2020-12-10','img/cyberpunk.jpg',50),
(10,'Zelda: Breath of the Wild',"The most overated game ever",'2017-03-03','img/botw.jpg',50);

INSERT INTO admin (id,email,password) VALUES
(1,'billet.ewan@gmail.com','test');



