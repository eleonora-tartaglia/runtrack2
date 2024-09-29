-- Requête permettant de sélectionner l’ensemble des champs de la table etudiants

mysql -u hayley -p --socket=/Applications/MAMP/tmp/mysql/mysql.sock
mot de passe : monarque

USE jour09;
SELECT * FROM etudiants;

-- mysql> exit
-- Bye
-- archimede@Archimede-1er-du-nom ~ % mysql -u hayley -p
-- Enter password: 
-- ERROR 2002 (HY000): Can't connect to local MySQL server through socket '/tmp/mysql.sock' (2)
-- archimede@Archimede-1er-du-nom ~ % mysql -u hayley -p --socket=/Applications/MAMP/tmp/mysql/mysql.sock

-- Enter password: 
-- Welcome to the MySQL monitor.  Commands end with ; or \g.
-- Your MySQL connection id is 38
-- Server version: 5.7.39 MySQL Community Server (GPL)

-- Copyright (c) 2000, 2023, Oracle and/or its affiliates.

-- Oracle is a registered trademark of Oracle Corporation and/or its
-- affiliates. Other names may be trademarks of their respective
-- owners.

-- Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

-- mysql> USE jour09;
-- Reading table information for completion of table and column names
-- You can turn off this feature to get a quicker startup with -A

-- Database changed
-- mysql> SELECT * FROM etudiants;
-- +----+---------+-------------+------------+-------+-----------------------------+
-- | id | prenom  | nom         | naissance  | sexe  | email                       |
-- +----+---------+-------------+------------+-------+-----------------------------+
-- |  1 | Cyril   | Zimmermann  | 1989-01-02 | Homme | cyril@laplateforme.io       |
-- |  2 | Jessica | Soriano     | 1995-09-08 | Femme | jessica@laplateforme.io     |
-- |  3 | Roxan   | Roumégas    | 2016-09-08 | Homme | roxan@laplateforme.io       |
-- |  4 | Pascal  | Assens      | 1999-12-31 | Homme | pascal@laplateforme.io      |
-- |  5 | Terry   | Cristinelli | 2005-02-01 | Homme | terry@laplateforme.io       |
-- |  6 | Ruben   | Habib       | 1993-05-26 | Homme | ruben.habib@laplateforme.io |
-- |  7 | Toto    | Dupont      | 2019-11-07 | Homme | toto@laplateforme.io        |
-- +----+---------+-------------+------------+-------+-----------------------------+
-- 7 rows in set (0,00 sec)