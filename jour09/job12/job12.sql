-- Requête permettant de sélectionner l’ensemble
-- des salles en les triant par capacité décroissante.

USE jour09;
SELECT * FROM salles ORDER BY capacite DESC;

mysql> SELECT * FROM salles ORDER BY capacite DESC;
+----+--------------+----------+----------+
| id | nom          | id_etage | capacite |
+----+--------------+----------+----------+
|  1 | Lounge       |        1 |      100 |
|  5 | Coworking    |        2 |       80 |
|  3 | Broadcasting |        2 |       50 |
|  2 | Studio Son   |        1 |        5 |
|  6 | Studio Video |        2 |        5 |
|  4 | Bocal Peda   |        2 |        4 |
+----+--------------+----------+----------+
6 rows in set (0,00 sec)