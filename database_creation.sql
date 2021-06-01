CREATE DATABASE IF NOT EXISTS client_ligue;
CREATE TABLE IF NOT EXISTS client_ligue.clients 
(
    id_client INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    age INT NOT NULL,
    email VARCHAR(255)
);

INSERT INTO client_ligue.clients (nom, prenom, age, email) VALUES 
('Eich', 'Branden', 55, 'brand67@gmail.com'),('Leford','Rasmus',55,'rasmus@php.net'),('Berners Lee','Tim',70,'tim@w3c.net');