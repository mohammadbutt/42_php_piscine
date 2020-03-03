/*
#	Will add column day_of_week to already existing table called sales_item. 
ALTER TABLE sales_item ADD day_of_week VARCHAR(8);
 */

/*
#	Will modify sales_item column day_of_week from VARCHAR(8) to VARCHAR(9) NOT NULL
ALTER TABLE sales_item MODIFY day_of_week VARCHAR(9) NOT NULL;
*/
/*
#	Will drop/delete the column called day_of_week from the table sales_item
ALTER TABLE sales_item DROP COLUMN day_of_week;
*/
/*
#	Will Create a new table called transaction_type
CREATE TABLE transaction_type(
NAME VARCHAR(30) NOT NULL,
payment_type VARCHAR(30) NOT NULL,
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY);
*/
