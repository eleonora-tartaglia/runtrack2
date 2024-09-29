-- Requête permettant de compter le nombre d’étudiants :

USE jour09;
SELECT COUNT(*) AS nombre_etudiants FROM etudiants;

-- SELECT COUNT(*) : Cette partie de la requête demande à MySQL de compter 
-- toutes les lignes de la table etudiants. La fonction COUNT(*) retourne 
-- le nombre total de lignes trouvées.

-- mysql> USE jour09;
-- Database changed
-- mysql> SELECT COUNT(*) AS nombre_etudiants FROM etudiants;
-- +------------------+
-- | nombre_etudiants |
-- +------------------+
-- |                7 |
-- +------------------+
-- 1 row in set (0,00 sec)