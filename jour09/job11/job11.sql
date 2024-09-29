-- Requête permettant de sélectionner la somme
-- des capacités des salles.

USE jour09;
SELECT SUM(capacite) AS total_capacite FROM salles;

-- SUM() est une fonction d'agrégation. Cela signifie qu'elle 
-- est utilisée pour effectuer des calculs sur un ensemble de données.

-- AS est un alias. Cela permet de donner un nom personnalisé à la colonne résultante de l'opération.


-- mysql> USE jour09;
-- Database changed
-- mysql> SELECT SUM(capacite) AS total_capacite FROM salles;
-- +----------------+
-- | total_capacite |
-- +----------------+
-- |            244 |
-- +----------------+
-- 1 row in set (0,00 sec)