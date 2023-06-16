-- Active: 1686318373812@@127.0.0.1@3306@exemplo
CREATE DATABASE blog;
use blog;
CREATE TABLE posts (
    id int(11) NOT NULL AUTO_INCREMENT,
    conteudo varchar(50) DEFAULT NULL,
    PRIMARY KEY(id)
);
DROP TABLE post;