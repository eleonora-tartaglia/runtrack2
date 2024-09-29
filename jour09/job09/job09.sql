-- Requête permettant de sélectionner l’ensemble des informations des étudiants 
-- qui ont moins de 18 ans.

USE jour09;

SELECT *
FROM etudiants
WHERE YEAR(CURDATE()) - YEAR(naissance) < 18
  OR (YEAR(CURDATE()) - YEAR(naissance) = 18 AND DATE_FORMAT(naissance, '%m-%d') > DATE_FORMAT(CURDATE(), '%m-%d'));

-- Cette condition supplémentaire vérifie pour les étudiants qui ont exactement 18 ans 
-- cette année mais dont l'anniversaire n'est pas encore arrivé.

-- C'est pour ça qu'on fait ça :

-- YEAR(CURDATE()) - YEAR(naissance) = 18 vérifie que l'étudiant est né il y a exactement 18 ans.
-- DATE_FORMAT(naissance, '%m-%d') > DATE_FORMAT(CURDATE(), '%m-%d') 
-- compare le mois et le jour de la date de naissance avec la date actuelle 
-- pour s'assurer que l'anniversaire n'est pas encore passé cette année.

-- mysql> USE jour09;
-- Database changed
-- mysql> 
-- mysql> SELECT *
--     -> FROM etudiants
--     -> WHERE YEAR(CURDATE()) - YEAR(naissance) < 18
--     ->   OR (YEAR(CURDATE()) - YEAR(naissance) = 18 AND DATE_FORMAT(naissance, '%m-%d') > DATE_FORMAT(CURDATE(), '%m-%d')); 
-- +----+--------+-----------+------------+-------+-----------------------+
-- | id | prenom | nom       | naissance  | sexe  | email                 |
-- +----+--------+-----------+------------+-------+-----------------------+
-- |  3 | Roxan  | Roumégas  | 2016-09-08 | Homme | roxan@laplateforme.io |
-- |  7 | Toto   | Dupont    | 2019-11-07 | Homme | toto@laplateforme.io  |
-- +----+--------+-----------+------------+-------+-----------------------+
-- 2 rows in set (0,00 sec)

AUTRE METHODE :

USE jour09;

SELECT *
FROM etudiants
WHERE naissance > DATE_SUB(CURDATE(), INTERVAL 18 YEAR);

-- mysql> USE jour09;
-- Database changed
-- mysql> 
-- mysql> SELECT *
--     -> FROM etudiants
--     -> WHERE naissance > DATE_SUB(CURDATE(), INTERVAL 18 YEAR);
-- +----+--------+-----------+------------+-------+-----------------------+
-- | id | prenom | nom       | naissance  | sexe  | email                 |
-- +----+--------+-----------+------------+-------+-----------------------+
-- |  3 | Roxan  | Roumégas  | 2016-09-08 | Homme | roxan@laplateforme.io |
-- |  7 | Toto   | Dupont    | 2019-11-07 | Homme | toto@laplateforme.io  |
-- +----+--------+-----------+------------+-------+-----------------------+
-- 2 rows in set (0,00 sec)