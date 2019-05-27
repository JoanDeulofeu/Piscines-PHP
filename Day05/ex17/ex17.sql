SELECT COUNT(id_sub) AS 'nb_susc', FLOOR(SUM(price) / COUNT(id_sub)) AS 'av_susc', MOD(SUM(duration_sub), 42) AS 'ft'  FROM `subscription`;
