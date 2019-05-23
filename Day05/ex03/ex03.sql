INSERT INTO ft_table (login, `group`, creation_date) SELECT nom, 'other', date_naissance FROM `fiche_personne` WHERE nom LIKE '%a%' && LENGTH(nom) < 9 ORDER BY nom LIMIT 10;
