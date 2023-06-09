-- Active: 1686318373812@@127.0.0.1@3306@exemplo
CREATE DATABASE exemplo;
use exemplo;
CREATE TABLE produtos (
    id int(11) NOT NULL AUTO_INCREMENT,
    descricao varchar(50) DEFAULT NULL,
    PRIMARY KEY(id)
);