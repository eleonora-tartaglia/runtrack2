-- Requête permettant de récupérer le nom des
-- salles et le nom de leur étage

SELECT salles.nom AS salle_nom, etage.nom AS etage_nom
FROM salles
JOIN etage ON salles.id_etage = etage.id;

-- JOIN etage : lie la table salles avec la table etage
-- ON salles.id_etage = etage.id : définit la condition sur laquelle les deux tables doivent être reliées.
-- salles.id_etage est la colonne dans la table salles qui fait référence à l'ID de l’étage.
-- etage.id est la colonne dans la table etage qui contient l'ID de chaque étage.
-- On lie donc : les salles à leurs étages en associant l'ID de l’étage avec la colonne id_etage dans la table salles.

mysql> SELECT salles.nom AS salle_nom, etage.nom AS etage_nom
    -> FROM salles
    -> JOIN etage ON salles.id_etage = etage.id;
+--------------+-----------+
| salle_nom    | etage_nom |
+--------------+-----------+
| Lounge       | RDC       |
| Studio Son   | RDC       |
| Broadcasting | R+1       |
| Bocal Peda   | R+1       |
| Coworking    | R+1       |
| Studio Video | R+1       |
+--------------+-----------+
6 rows in set (0,00 sec)