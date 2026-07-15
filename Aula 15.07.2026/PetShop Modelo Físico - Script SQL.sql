-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Cliente (
cod_cli int PRIMARY KEY,
login varchar(20),
cpf bigint,
data_nasci date,
senha varchar(80),
nome varchar(40),
endereco varchar(50),
telefone varchar(14)
)

CREATE TABLE Pet (
cod_pet int PRIMARY KEY,
nome varchar(30),
pelagem varchar(25),
data_nasci date,
foto blob,
cod_cli int,
FOREIGN KEY(cod_cli) REFERENCES Cliente (cod_cli)
)

CREATE TABLE Servico (
cod_serv int PRIMARY KEY,
descricao text,
duracao int,
valor decimal(5,2)
)

CREATE TABLE Agendamento (
cod_agen int PRIMARY KEY,
data date,
hora time,
hora_fim time,
cod_pet int,
cod_serv int,
matricula int,
FOREIGN KEY(cod_pet) REFERENCES Pet (cod_pet),
FOREIGN KEY(cod_serv) REFERENCES Servico (cod_serv)
)

CREATE TABLE Funcionario (
senha varchar(80),
login varchar(20),
nivel int,
matricula int PRIMARY KEY,
nome varchar(40)
)

ALTER TABLE Agendamento ADD FOREIGN KEY(matricula) REFERENCES Funcionario (matricula)
