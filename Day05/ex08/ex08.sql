SELECT last_name, first_name, DATE_FORMAT(birthdate, '%Y-%m-%d') FROM `user_card` WHERE birthdate >= '1989-00-01 00:00:00' AND birthdate <= '1989-12-31 23:59:59' ORDER BY last_name;
