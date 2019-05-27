SELECT last_name, first_name FROM `user_card` WHERE (last_name LIKE '%-%' || first_name LIKE '%-%') || (last_name LIKE '%-%' && first_name LIKE '%-%') ORDER BY last_name, first_name;
