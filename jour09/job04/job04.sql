-- Requête permettant de sélectionner le nom et la capacite de la table “salles”

USE jour09;
SELECT * FROM salles WHERE nom AND capacite;

-- mysql> SELECT * FROM salles WHERE nom AND capacite;
-- Empty set, 6 warnings (0,00 sec)           == ne reconnait pas

-- A RETENIR, TOUJOURS MARQUER USE 'nom de la base de donnée'; AVANT TOUTE CHOSE..

-- mysql> SHOW TABLES;
-- +------------------+
-- | Tables_in_jour09 |
-- +------------------+
-- | etage            |
-- | etudiants        |
-- | salles           |
-- +------------------+
-- 3 rows in set (0,00 sec)

-- mysql> USE jour09;
-- Database changed
-- mysql> SELECT nom, capacite FROM salles;
-- +--------------+----------+
-- | nom          | capacite |
-- +--------------+----------+
-- | Lounge       |      100 |
-- | Studio Son   |        5 |
-- | Broadcasting |       50 |
-- | Bocal Peda   |        4 |
-- | Coworking    |       80 |
-- | Studio Video |        5 |
-- +--------------+----------+
-- 6 rows in set (0,00 sec)