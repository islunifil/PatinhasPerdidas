-- SQLite
-- Tabela Animal
CREATE TABLE Animal (
  idAnimal INTEGER PRIMARY KEY AUTOINCREMENT,
  idONG INTEGER,
  nome TEXT,
  especie TEXT,
  porte TEXT,
  idade TEXT,
  descricao TEXT,
  foto TEXT,
  status TEXT
);
-- Tabela Usuario
CREATE TABLE Usuario (
  idUsuario INTEGER PRIMARY KEY AUTOINCREMENT,
  nome TEXT,
  email TEXT,
  telefone TEXT
);
-- Tabela Adocao (mesma coisa usuario e adocao(?)
CREATE TABLE Adocao (
  idAdocao INTEGER PRIMARY KEY AUTOINCREMENT,
  idUsuario INTEGER,
  idAnimal INTEGER,
  idONG INTEGER,
  dataSolicitacao TEXT,
  status TEXT
);
-- Tabela Doacao
CREATE TABLE Doacao (
  idDoacao INTEGER PRIMARY KEY AUTOINCREMENT,
  idUsuario INTEGER, --nao tem 
  valor REAL,
  data TEXT --nao tem 
);
-- Tabela ONG
CREATE TABLE ONG (
  idONG INTEGER PRIMARY KEY AUTOINCREMENT,
  nome TEXT,
  email TEXT,
  cnpj TEXT,
  telefone TEXT
);


