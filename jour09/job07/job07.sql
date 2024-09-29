-- Requête permettant de sélectionner l’ensemble des informations 
-- des étudiants qui ont plus de 18 ans.


-- PLUS COMPLEXE..
-- On doit calculer l'âge à partir de la date de naissance. 
-- Utiliser la fonction YEAR pour extraire l'année de la date de naissance 
-- et la comparer à l'année actuelle :

USE jour09;

SELECT *
FROM etudiants
WHERE YEAR(CURDATE()) - YEAR(naissance) > 18
  OR (YEAR(CURDATE()) - YEAR(naissance) = 18 AND DATE_FORMAT(naissance, '%m-%d') <= DATE_FORMAT(CURDATE(), '%m-%d'));

-- CURDATE() : Cette fonction retourne la date actuelle du système (au format 'YYYY-MM-DD')
-- YEAR() : Cette fonction extrait l'année d'une date. 

-- Donc conclu : YEAR(CURDATE()) retourne l'année actuelle.

-- YEAR(naissance) : Cette fonction extrait l'année de la date de naissance de l'étudiant

-- YEAR(CURDATE()) - YEAR(naissance) : Cela calcule l'âge de l'étudiant en années, 
-- en soustrayant l'année de naissance de l'année actuelle.

-- > 18 et vérifie si l'âge de l'étudiant est strictement supérieur à 18 ans.

-- OR (YEAR(CURDATE()) - YEAR(naissance) = 18 : vérifie si l'âge de l'étudiant = 18

-- DATE_FORMAT() : fonction qui formate une date selon un format spécifié.
-- '%m-%d' : Ce format spécifie de n'afficher que le mois et le jour de la date 
-- Cela formate la date actuelle pour ne montrer que le mois et le jour.

-- DATE_FORMAT(naissance, '%m-%d') <= DATE_FORMAT(CURDATE(), '%m-%d') :

-- Cela vérifie si le mois et le jour de la date de naissance de l'étudiant 
-- sont antérieurs ou égaux à ceux de la date actuelle, ce qui signifie que 
-- l'étudiant a déjà fêté son anniversaire cette année.

-- La condition globale dans la clause WHERE sélectionne les étudiants qui :
-- Ont plus de 18 ans Ou ont exactement 18 ans et ont déjà fêté leur anniversaire cette année 

-- mysql> USE jour09;
-- Database changed
-- mysql> 
-- mysql> SELECT *
--     -> FROM etudiants
--     -> WHERE YEAR(CURDATE()) - YEAR(naissance) > 18
--     ->   OR (YEAR(CURDATE()) - YEAR(naissance) = 18 AND DATE_FORMAT(naissance, '%m-%d') <= DATE_FORMAT(CURDATE(), '%m-%d'));
-- +----+---------+-------------+------------+-------+-----------------------------+
-- | id | prenom  | nom         | naissance  | sexe  | email                       |
-- +----+---------+-------------+------------+-------+-----------------------------+
-- |  1 | Cyril   | Zimmermann  | 1989-01-02 | Homme | cyril@laplateforme.io       |
-- |  2 | Jessica | Soriano     | 1995-09-08 | Femme | jessica@laplateforme.io     |
-- |  4 | Pascal  | Assens      | 1999-12-31 | Homme | pascal@laplateforme.io      |
-- |  5 | Terry   | Cristinelli | 2005-02-01 | Homme | terry@laplateforme.io       |
-- |  6 | Ruben   | Habib       | 1993-05-26 | Homme | ruben.habib@laplateforme.io |
-- +----+---------+-------------+------------+-------+-----------------------------+
-- 5 rows in set (0,01 sec)

AUTRE METHODE :

USE jour09;

SELECT *
FROM etudiants
WHERE naissance <= DATE_SUB(CURDATE(), INTERVAL 18 YEAR);

-- WHERE naissance <= DATE_SUB(CURDATE(), INTERVAL 18 YEAR) : 
-- Cette condition vérifie que la date de naissance est inférieure ou égale 
-- à la date d'aujourd'hui moins 18 ans. Si la condition est vraie, cela signifie que 
-- l'étudiant a au moins 18 ans.

-- DATE_SUB(CURDATE(), INTERVAL 18 YEAR) calcule la date actuelle moins 18 ans. 
-- Si aujourd'hui on est le 30 juillet 2024, cette expression donne le 30 juillet 2006.

-- mysql> USE jour09;
-- Database changed
-- mysql> 
-- mysql> SELECT *
--     -> FROM etudiants
--     -> WHERE naissance <= DATE_SUB(CURDATE(), INTERVAL 18 YEAR);
-- +----+---------+-------------+------------+-------+-----------------------------+
-- | id | prenom  | nom         | naissance  | sexe  | email                       |
-- +----+---------+-------------+------------+-------+-----------------------------+
-- |  1 | Cyril   | Zimmermann  | 1989-01-02 | Homme | cyril@laplateforme.io       |
-- |  2 | Jessica | Soriano     | 1995-09-08 | Femme | jessica@laplateforme.io     |
-- |  4 | Pascal  | Assens      | 1999-12-31 | Homme | pascal@laplateforme.io      |
-- |  5 | Terry   | Cristinelli | 2005-02-01 | Homme | terry@laplateforme.io       |
-- |  6 | Ruben   | Habib       | 1993-05-26 | Homme | ruben.habib@laplateforme.io |
-- +----+---------+-------------+------------+-------+-----------------------------+
-- 5 rows in set (0,01 sec)