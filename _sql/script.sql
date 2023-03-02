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



INSERT INTO game (id,title,description,release_date,poster,price)VALUES (1,'WWE2K23','Jeu de catch','2023-03-17','img/2K23.jpg',100),
(2,'GTA5','Jeu de psycopathe','2013-09-17','img/GTAV.jpg',50),
(3,'ARK','Jeu de survie avec des grosses bestioles','2015-06-02','img/ARK.jpg',50),
(4,'Hogwarts Legacy',"C'est LEVIOOOOOOOOOSAAAAAA et pas LEviOOSSSaaaAA",'2023-02-10','img/Hogwart.jpg',70);
