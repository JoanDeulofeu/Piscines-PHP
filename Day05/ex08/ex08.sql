SELECT nom, prenom, DATE_FORMAT(date_naissance, '%Y-%m-%d') FROM `fiche_personne` WHERE date_naissance >= '1989-00-01 00:00:00' AND date_naissance <= '1989-12-31 23:59:59' ORDER BY nom;
