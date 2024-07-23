--Delete banco de dados caso exista
DROP DATABASE IF EXISTS IFSP;
--Cria banco caso não exista
CREATE DATABASE IFSP;

USE IFSP;

CREATE TABLE Cidade(
    id       int auto_increment NOT NULL PRIMARY KEY,
    nome     varchar(50),
    estado   varchar(50)
);

CREATE TABLE Cliente(
    id int auto_increment NOT NULL PRIMARY KEY,
    nome varchar(50),
	email varchar(100),
    senha varchar(100),
    ativo bool,
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
INSERT INTO Cliente(id_cliente,nome,email,senha,ativo,id_cidade) VALUES(
    (1, "Maria","mariazinha123@gmail.com","m34076","Sim",1),
    (2, "João","jaodograu345@gmail.com","j0ao06926","Sim",4),
    (3, "Priscila","pri2007@gmail.com","10584","Não",2),
    (4, "Diego","diegom@gmail.com","48673","Sim",5),
    (5, "Daniela","danielacastelo@gmail.com","78305","Não",3));
SELECT id_cidade FROM Cliente WHERE id_cidade=1;
UPDATE Cidade SET nome="Bauru" WHERE id_cidade=1;
SELECT nome FROM Cidade WHERE id_cidade=1;
UPDATE Cliente SET nome="Cássio Stersi" WHERE id_cliente=a1;
SELECT nome FROM Cliente WHERE id_cliente=1;
DELETE FROM Cidade WHERE id_cidade=4;
DELETE FROM Cliente WHERE id_cliente=1;



