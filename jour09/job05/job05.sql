-- Requête permettant de sélectionner le prenom, le nom et la date de naissance 
-- des étudiants de sexe féminin.

USE jour09;
SELECT prenom, nom, naissance
FROM etudiants
WHERE sexe = 'femme';

-- mysql> USE jour09;
-- Database changed
-- mysql> SELECT prenom, nom, naissance
--     -> FROM etudiants
--     -> WHERE sexe = 'femme';
-- +---------+---------+------------+
-- | prenom  | nom     | naissance  |
-- +---------+---------+------------+
-- | Jessica | Soriano | 1995-09-08 |
-- +---------+---------+------------+
-- 1 row in set (0,00 sec)