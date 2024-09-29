-- Requête permettant de sélectionner la capacité
-- moyenne des salles

SELECT AVG(capacite) AS capacite_moyenne FROM salles;

-- AVG() : Additionne toutes les valeurs, puis divise par le nombre d'entrées pour obtenir la moyenne.

mysql> SELECT AVG(capacite) AS capacite_moyenne FROM salles;
+------------------+
| capacite_moyenne |
+------------------+
|          40.6667 |
+------------------+
1 row in set (0,00 sec)