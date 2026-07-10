-- Geração de Modelo físico
-- Sql ANSI 2003 - brModelo.



CREATE TABLE Modelo (
tipo varchar(50),
cod_modelo int(6) PRIMARY KEY
)

CREATE TABLE Categoria (
tipo varchar(50),
cod_categoria int(2) PRIMARY KEY
)

CREATE TABLE Veiculos (
placa varchar(7) PRIMARY KEY,
chassi varchar(20),
cor varchar(10),
ano_fabricacao int,
cod_modelo int(6),
cod_categoria int(2),
CPF bigint,
FOREIGN KEY(cod_modelo) REFERENCES Modelo (cod_modelo),
FOREIGN KEY(cod_categoria) REFERENCES Categoria (cod_categoria)
)

CREATE TABLE Infração (
data_hora datetime,
velocidade int,
valor decimal(6,2),
tipo varchar(100),
cod_infra int PRIMARY KEY,
placa varchar(7),
cod_local int,
matricula int,
FOREIGN KEY(placa) REFERENCES Veiculos (placa)
)

CREATE TABLE Agente Transito (
matricula int PRIMARY KEY,
nome varchar(40),
data_contrato date,
tempo_servico int
)

CREATE TABLE Proprietario (
CPF bigint PRIMARY KEY,
cidade varchar(40),
sexo char(1),
data_nasc date,
idade int,
estado char(2),
bairro varchar(40),
endereco varchar(50),
nome varchar(40),
cod_tel int int
)

CREATE TABLE Local (
posicao_geo bigint,
velocidade_perm int,
cod_local int PRIMARY KEY
)

CREATE TABLE telefone (
cod_tel int PRIMARY KEY,
telefone1 varchar(14),
telefone2 varchar(14)
)

ALTER TABLE Veiculos ADD FOREIGN KEY(CPF) REFERENCES Proprietario (CPF)
ALTER TABLE Infração ADD FOREIGN KEY(cod_local) REFERENCES Local (cod_local)
ALTER TABLE Infração ADD FOREIGN KEY(matricula) REFERENCES Agente Transito (matricula)
ALTER TABLE Proprietario ADD FOREIGN KEY(cod_tel) REFERENCES telefone (cod_tel)
