--Delete banco de dados caso exista
DROP DATABASE IF EXISTS IFSP;
--Cria banco caso não exista
CREATE DATABASE IFSP;
--Seleciona o banco de dados
USE IFSP;
--Cria tabela Cidade
CREATE TABLE Cidade(
    id       int auto_increment NOT NULL PRIMARY KEY,
    nome     varchar(50),
    estado   varchar(50)
);
--Cria tabela Cliente
CREATE TABLE Cliente(
    id int auto_increment NOT NULL PRIMARY KEY,
    ome varchar(50),
    id_cidade int,
    constraint FK_ClienteCidade foreign key(id_cidade) references Cidade(id)
);
INSERT INTO Cidade(id_cidade,nome,estado) VALUES( 
    (1,"Birigui", "SP"),
    (2,"Florianópolis","SC"),
    (3,"Londrina","PR"),
    (4,"Coroados","SP"),
    (5,"Guararapes","SP"));
SELECT estado FROM Cidade WHERE Estado="SP";
INSERT INTO Cliente(id_cliente,nome,id_cidade) VALUES(
    (1, "Maria",1),
    (2, "João",4),
    (3, "Priscila",2),
    (4, "Diego",5),
    (5, "Daniela",3));
SELECT id_cidade FROM Cliente WHERE id_cidade=1;
UPDATE Cidade SET nome="Bauru" WHERE id_cidade=1;
SELECT nome FROM Cidade WHERE id_cidade=1;
UPDATE Cliente SET nome="Cássio Stersi" WHERE id_cliente=a1;
SELECT nome FROM Cliente WHERE id_cliente=1;
DELETE FROM Cidade WHERE id_cidade=4;
DELETE FROM Cliente WHERE id_cliente=1;



