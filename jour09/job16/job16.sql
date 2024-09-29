-- Requête permettant de récupérer le nom de l'étage ayant la salle avec la plus grande 
-- capacité, aﬃcher le nom de cette salle ainsi que sa capacité
-- Dans ce résultat, la colonne “nom” de la salle doit être renommée en “Biggest Room”

SELECT etage.nom AS etage_nom, salles.nom AS "Biggest Room", salles.capacite
FROM salles
JOIN etage ON salles.id_etage = etage.id
ORDER BY salles.capacite DESC
LIMIT 1;

-- etage.nom AS etage_nom : Sélectionne la colonne nom de la table etage (le nom de l’étage), et on lui donne un alias etage_nom pour plus de clarté.
-- salles.nom AS "Biggest Room" : Sélectionne la colonne nom de la table salles (le nom de la salle), et on la renomme Biggest Room grâce à l’alias AS "Biggest Room".

-- JOIN etage : Effectue une jointure avec la table etage.
-- ON salles.id_etage = etage.id : Indique que les deux tables doivent être jointes via les colonnes id_etage dans salles et id dans etage

-- LIMIT 1 : Cela permet de limiter le résultat à une seule ligne. Étant donné que tu veux seulement la salle ayant la plus grande capacité, cette clause permet de ne renvoyer qu’une seule salle.

mysql> SELECT etage.nom AS etage_nom, salles.nom AS "Biggest Room", salles.capacite
    -> FROM salles
    -> JOIN etage ON salles.id_etage = etage.id
    -> ORDER BY salles.capacite DESC
    -> LIMIT 1;
+-----------+--------------+----------+
| etage_nom | Biggest Room | capacite |
+-----------+--------------+----------+
| RDC       | Lounge       |      100 |
+-----------+--------------+----------+
1 row in set (0,00 sec)