/*
** run the following in the terminal
** mysql db_mbutt < base-student.sql
** mysql destination_database < source_database
*/

INSERT INTO ft_table(login, `group`, creation_date)
SELECT last_name, 'other', birthdate FROM user_card
WHERE last_name LIKE '%a%' AND LENGTH(last_name) < 9
ORDER BY last_name LIMIT 10;