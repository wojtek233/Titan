CREATE DATABASE titan_database;

CREATE TABLE candidat
(
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
prenom VARCHAR(100) NOT NULL,
nom VARCHAR(100) NOT NULL,
email VARCHAR(320) NOT NULL,
accept BOOLEAN NULL
);

INSERT INTO candidat 
(prenom, nom, email,accept)
VALUES
('Derek','Voov','voov@free.fr', 1);