CREATE TABLE Impiegati (
Cod_imp char(6), 
Nome char (20), 
Cognome char (20), 
Data_nascita date, 
Stipendio currency, 
Direttore bit, 
Data_afferenza date, 
Nome_dip_FK char (20), 
Citta_FK char (20),
PRIMARY KEY (Cod_imp),
FOREIGN KEY (Nome_dip_FK, Citta_FK) REFERENCES Dipartimenti (Nome_dip, Citta_FK)
);

CREATE TABLE Dipartimenti (
Nome_dip char (20), 
Citta_FK char (20), 
Telefono char (10),
PRIMARY KEY (Nome_dip, Citta_FK),
FOREIGN KEY (Citta_FK) REFERENCES Sedi (Citta)
);

CREATE TABLE Progetti_Impiegati (
Cod_imp_FK char (6), 
Nome_prog_FK char (20), 
Data_inizio date,
PRIMARY KEY (Cod_imp_FK, Nome_prog_FK),
FOREIGN KEY (Cod_imp_FK) REFERENCES Impiegati (Cod_imp),
FOREIGN KEY (Nome_prog_FK) REFERENCES Progetti (Nome_prog)
);

