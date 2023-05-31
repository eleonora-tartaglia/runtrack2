-- Écrire une requête permettant de récupérer le nom de l'étage ayant la salle avec la plus grande capacité 
-- (et afficher aussi le nom de cette salle ainsi que sa capacité).

-- Dans ce résultat, la colonne “nom” de la salle doit être renommée en “Biggest Room”

SELECT etage.nom AS NomEtage, salles.nom AS `Biggest Room`, salles.capacite AS Capacite
FROM etage
INNER JOIN salles ON etage.id = salles.etage_id
WHERE salles.capacite = (SELECT MAX(capacite) FROM salles);

