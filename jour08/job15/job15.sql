-- Écrire une requête permettant de récupérer le nom des salles et le nom de leur étage.

SELECT salles.nom AS NomSalle, etage.nom AS NomEtage
FROM salles
INNER JOIN etage ON salles.etage_id = etage.id;
