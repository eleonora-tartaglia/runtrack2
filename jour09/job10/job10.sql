-- Requête permettant de calculer la superficie de
-- l’ensemble des étages.

USE jour09;
SELECT SUM(superficie) AS total_superficie FROM etage;

-- SUM() est une fonction d'agrégation. Cela signifie qu'elle 
-- est utilisée pour effectuer des calculs sur un ensemble de données.

-- AS est un alias. Cela permet de donner un nom personnalisé à la colonne résultante de l'opération.

-- mysql> USE jour09;
-- Reading table information for completion of table and column names
-- You can turn off this feature to get a quicker startup with -A

-- Database changed
-- mysql> SELECT SUM(superficie) AS total_superficie FROM etage;
-- +------------------+
-- | total_superficie |
-- +------------------+
-- |             1000 |
-- +------------------+
-- 1 row in set (0,00 sec)