SELECT count(id_film) AS films FROM `member_history` WHERE date BETWEEN '2006/12/30' AND '2007/07/27' OR (EXTRACT(DAY FROM date)=24 AND EXTRACT(MONTH FROM date)=12)
