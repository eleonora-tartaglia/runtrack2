-- Requête permettant de sélectionner l’ensemble des informations 
-- des étudiants dont le prenom commence par un “T”.

USE jour09;
SELECT * FROM etudiants WHERE prenom LIKE "T%";

-- mysql> USE jour09;
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

-- mysql> SELECT *
--     -> FROM etudiants
--     -> WHERE prenom LIKE 'T%';
-- +----+--------+-------------+------------+-------+-----------------------+
-- | id | prenom | nom         | naissance  | sexe  | email                 |
-- +----+--------+-------------+------------+-------+-----------------------+
-- |  5 | Terry  | Cristinelli | 2005-02-01 | Homme | terry@laplateforme.io |
-- |  7 | Toto   | Dupont      | 2019-11-07 | Homme | toto@laplateforme.io  |
-- +----+--------+-------------+------------+-------+-----------------------+
-- 2 rows in set (0,00 sec)

-- mysql> SELECT * FROM etudiants WHERE prenom LIKE 'T%';
-- +----+--------+-------------+------------+-------+-----------------------+
-- | id | prenom | nom         | naissance  | sexe  | email                 |
-- +----+--------+-------------+------------+-------+-----------------------+
-- |  5 | Terry  | Cristinelli | 2005-02-01 | Homme | terry@laplateforme.io |
-- |  7 | Toto   | Dupont      | 2019-11-07 | Homme | toto@laplateforme.io  |
-- +----+--------+-------------+------------+-------+-----------------------+
-- 2 rows in set (0,00 sec)