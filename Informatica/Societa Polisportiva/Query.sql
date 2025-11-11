CREATE TABLE Corsi (
ID_Corso int,
Descrizione char (40),
ID_Istruttore int,
Nome char (20),
Cognome char (20),
ID_Disciplina_FK int,
PRIMARY KEY (ID_Corso),
FOREIGN KEY (ID_Disciplina) REFERENCES Discipline (ID_Disciplina)
);


CREATE TABLE Soci (
ID_Socio int,
Nome char (20),
Cognome char (20),
PRIMARY KEY (ID_Socio)
);


CREATE TABLE Corsi_Soci (
ID_Corso_FK int,
ID_Soci_FK int,
Data_Inizio date,
Data_Fine date,
PRIMARY KEY (ID_Corso_FK, ID_Soci_FK, Data_Inizio),
FOREIGN KEY (ID_Corso_FK) REFERENCES Corsi (ID_Corso),
FOREIGN KEY (ID_Socio_FK) REFERENCES Soci (ID_Socio)
);


CREATE TABLE Discipline (
ID_Disciplina int,
Descrizione char (40),
PRIMARY KEY (ID_Disciplina)
);


insert into Soci 
values (5,"Mario","Favorito"),
	   (6,"Luigi","Arena");