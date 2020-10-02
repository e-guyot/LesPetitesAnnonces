CREATE TABLE users(
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    name varchar(55) NOT NULL UNIQUE,
    email varchar(55),
    tel int(10),
    password varchar(255),
    inscription_date timestamp
);

CREATE TABLE annonces (
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    id_user int,
    titre varchar(55),
    contenu varchar(255),
    prix int,
    photo_1 varchar(255),
    photo_2 varchar(255),
    photo_3 varchar(255),
    id_user INT REFERENCES user(id) NOT NULL
);