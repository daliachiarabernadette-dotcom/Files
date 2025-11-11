Microsoft Windows [Versione 10.0.19045.3693]
(c) Microsoft Corporation. Tutti i diritti sono riservati.

C:\Users\chiar>cd\

C:\>cd xampp

C:\xampp>cd mysql

C:\xampp\mysql>cd bin

C:\xampp\mysql\bin>mysql -u root -p

		Enter password:
		Welcome to the MariaDB monitor.  Commands end with ; or \g.
		Your MariaDB connection id is 9
		Server version: 10.4.28-MariaDB mariadb.org binary distribution
		Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.
		Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.
	
MariaDB [(none)]> create database Viaggio;
		Query OK, 1 row affected (0.001 sec)

MariaDB [(none)]> show databases;
+--------------------+
| Database           |
+--------------------+
| information_schema |
| mysql              |
| performance_schema |
| phpmyadmin         |
| test               |
| viaggio            |
+--------------------+
		6 rows in set (0.000 sec)

MariaDB [(none)]> use Viaggio;
		Database changed
	
MariaDB [Viaggio]> create table Paese (ID int auto_increment primary key, Nome varchar (20) not null, Nazione varchar (20) not null, Lingua varchar (20) not null, Moneta varchar (20) not null);
		Query OK, 0 rows affected (0.009 sec)
	
MariaDB [Viaggio]> INSERT INTO Paese (Nome, Nazione, Lingua, Moneta) VALUES ("Tokyo", "Giappone", "Giapponese", "Yen");
		Query OK, 1 row affected (0.003 sec)

MariaDB [Viaggio]> INSERT INTO Paese (Nome, Nazione, Lingua, Moneta) VALUES ("Parigi", "Francia", "Francese", "Euro");
		Query OK, 1 row affected (0.002 sec)

MariaDB [Viaggio]> INSERT INTO Paese (Nome, Nazione, Lingua, Moneta) VALUES ("Berlino", "Germania", "Tedesco", "Euro");
		Query OK, 1 row affected (0.002 sec)

MariaDB [Viaggio]> INSERT INTO Paese (Nome, Nazione, Lingua, Moneta) VALUES ("Shangai", "Cina", "Cinese", "Yuan");
		Query OK, 1 row affected (0.002 sec)

MariaDB [Viaggio]> INSERT INTO Paese (Nome, Nazione, Lingua, Moneta) VALUES ("Seoul", "Corea del Sud", "Coreano", "Won");
		Query OK, 1 row affected (0.002 sec)

MariaDB [Viaggio]> INSERT INTO Paese (Nome, Nazione, Lingua, Moneta) VALUES ("Roma", "Italia", "Italiano", "Euro");
		Query OK, 1 row affected (0.002 sec)

MariaDB [Viaggio]> select * from Paese;
+----+---------+---------------+------------+--------+
| ID | Nome    | Nazione       | Lingua     | Moneta |
+----+---------+---------------+------------+--------+
|  1 | Tokyo   | Giappone      | Giapponese | Yen    |
|  2 | Parigi  | Francia       | Francese   | Euro   |
|  3 | Berlino | Germania      | Tedesco    | Euro   |
|  4 | Shangai | Cina          | Cinese     | Yuan   |
|  5 | Seoul   | Corea del Sud | Coreano    | Won    |
|  6 | Roma    | Italia        | Italiano   | Euro   |
+----+---------+---------------+------------+--------+
		6 rows in set (0.000 sec)

MariaDB [Viaggio]> create table Agenzia (ID int auto_increment primary key, Nome varchar (20) not null, Veicolo varchar (20) not null, Durata varchar (20), Soggiorno varchar (30) not null);
		Query OK, 0 rows affected (0.010 sec)

MariaDB [Viaggio]> INSERT INTO Agenzia (Nome, Veicolo, Durata, Soggiorno) VALUES ("ViaggioGo!", "Aereo", "12 giorni", "Hotel");
		Query OK, 1 row affected (0.003 sec)

MariaDB [Viaggio]> INSERT INTO Agenzia (Nome, Veicolo, Durata, Soggiorno) VALUES ("Fast&Speed", "Treno", "6 giorni", "B&B");
		Query OK, 1 row affected (0.002 sec)

MariaDB [Viaggio]> INSERT INTO Agenzia (Nome, Veicolo, Durata, Soggiorno) VALUES ("LongDays", "Pullman", "20 giorni", "Casa");
		Query OK, 1 row affected (0.001 sec)

MariaDB [Viaggio]> INSERT INTO Agenzia (Nome, Veicolo, Durata, Soggiorno) VALUES ("TrainLife", "Treno", "3 giorni", "Hotel");
		Query OK, 1 row affected (0.003 sec)

MariaDB [Viaggio]> select * from Agenzia;
+----+------------+---------+-----------+-----------+
| ID | Nome       | Veicolo | Durata    | Soggiorno |
+----+------------+---------+-----------+-----------+
|  1 | ViaggioGo! | Aereo   | 12 giorni | Hotel     |
|  2 | Fast&Speed | Treno   | 6 giorni  | B&B       |
|  3 | LongDays   | Pullman | 20 giorni | Casa      |
|  4 | TrainLife  | Treno   | 3 giorni  | Hotel     |
+----+------------+---------+-----------+-----------+
		4 rows in set (0.000 sec)

MariaDB [Viaggio]> select * from Paese where Nome like "%a%";
+----+---------+---------+----------+--------+
| ID | Nome    | Nazione | Lingua   | Moneta |
+----+---------+---------+----------+--------+
|  2 | Parigi  | Francia | Francese | Euro   |
|  4 | Shangai | Cina    | Cinese   | Yuan   |
|  6 | Roma    | Italia  | Italiano | Euro   |
+----+---------+---------+----------+--------+
		3 rows in set (0.000 sec)

MariaDB [Viaggio]> select * from Agenzia where Soggiorno like "%Hotel%";
+----+------------+---------+-----------+-----------+
| ID | Nome       | Veicolo | Durata    | Soggiorno |
+----+------------+---------+-----------+-----------+
|  1 | ViaggioGo! | Aereo   | 12 giorni | Hotel     |
|  4 | TrainLife  | Treno   | 3 giorni  | Hotel     |
+----+------------+---------+-----------+-----------+
		2 rows in set (0.000 sec)

MariaDB [Viaggio]> drop database Viaggio;
		Query OK, 2 rows affected (0.014 sec)

