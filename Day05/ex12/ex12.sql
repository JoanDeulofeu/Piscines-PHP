SELECT nom, prenom FROM `fiche_personne` WHERE (nom LIKE '%-%' || prenom LIKE '%-%') || (nom LIKE '%-%' && prenom LIKE '%-%') ORDER BY nom, prenom;
