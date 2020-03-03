
#	Will add column day_of_week to already existing table called sales_item. 
ALTER TABLE sales_item ADD day_of_week VARCHAR(8);

#	Will modify sales_item column day_of_week from VARCHAR(8) to VARCHAR(9) NOT NULL
ALTER TABLE sales_item MODIFY day_of_week VARCHAR(9) NOT NULL;

#	Will drop/delete the column called day_of_week from the table sales_item
ALTER TABLE sales_item DROP COLUMN day_of_week;

#	Will Create a new table called transaction_type
CREATE TABLE transaction_type(
NAME VARCHAR(30) NOT NULL,
payment_type VARCHAR(30) NOT NULL,
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY);

#	Renames table from from transaction_type to transacation
RENAME TABLE transaction_type TO transaction;

#	Creates index based off of transaction name
CREATE INDEX transaction_id ON transaction(name);

#	Creates index based of two columns, name and payment_type
CREATE INDEX transaction_id_2 ON transaction(name, payment_type);

#	Delete data that is in a table
TRUNCATE TABLE transaction;

#	Drops/Deletes table called transaction
DROP TABLE transaction;

#	Inserts information "business" in the table called product_type
INSERT INTO product_type(name, id)
VALUES('Business', NULL);

#	Inserts information "casual" in the table called product_type
INSERT INTO product_type(name, id)
VALUES('Casual', NULL);

#	Inserts information "athletic" in the table called product_type
INSERT INTO product_type(name, id)
VALUES("athletic", NULL);

#	Shows all the information that we just stored inside product_type table
SELECT * FROM product_type;

#	We can also insert multiple rows without defining column names
#	What we will do is insert multiple type_id, names, suppliers, descriptions and id values to product table in multiple rows
#type_id,	name,		supplier,		description, 				id
INSERT INTO product VALUES
(1,			'Derby', 'John Varvatos', 'Leather upper, manmade sole', NULL),
(1,			'Ramsey', 'Johnston & Murphy', 'Leather upper, manmade sole', NULL),
(1,			'Hollis', 'Johnston & Murphy', 'Leather upper, manmade sole', NULL),
(2, 		'Venetian Loafer', 'Mezlan', 'Suede upper, leather sole', NULL),
(1, 		'Grandview', 'Allen Edmonds', 'Classic broguing adds texture to a charming longwing derby crafted in America from lustrous leather', NULL),
(1, 		'Clarkston', 'Allen Edmonds', 'Sharp broguing touches up a charming, American-made derby fashioned from finely textured leather', NULL),
(2, 		'Malek', 'Johnston & Murphy', 'Contrast insets at the toe and sides bring updated attitude to a retro-inspired sneaker set on a sporty foam sole and triangle-lugged tread.', NULL),
(3, 		'Air Max 270 React', 'Nike', 'The reggae inspired Nike Air 270 React fuses forest green with shades of tan to reveal your righteous spirit', NULL),
(3, 		'Joyride', 'Nike', 'Tiny foam beads underfoot conform to your foot for cushioning that stands up to your mileage', NULL),
(2, 		'Air Force 1', 'Nike', 'A modern take on the icon that blends classic style and fresh, crisp details', NULL),
(3, 		'Ghost 12', 'Brooks', 'Just know that it still strikes a just-right balance of DNA LOFT softness and BioMoGo DNA responsiveness', NULL),
(3, 		'Revel 3', 'Brooks', 'Style to spare, now even softer.', NULL),
(3, 		'Glycerin 17', 'Brooks', 'A plush fit and super soft transitions make every stride luxurious', NULL);

# To see the data we just stored in table product
SELECT * FROM product;

# We will fill the customer table by doing the following:
# But this time (we specify column names)
INSERT INTO customer (first_name, last_name, email, company, street, city, state, zip, phone, birth_date, sex, date_entered, id) VALUES 
('Christopher', 'Jones', 'christopherjones@bp.com', 'BP', '347 Cedar St', 'Lawrenceville', 'GA', '30044', '348-848-8291', '1938-09-11', 'M', '2015-07-21 11:27:02', NULL), 
('Matthew', 'Martinez', 'matthewmartinez@ge.com', 'GE', '602 Main Place', 'Fontana', 'CA', '92336', '117-997-7764', '1931-09-04', 'M', '2015-01-01 22:39:28', NULL), 
('Melissa', 'Moore', 'melissamoore@aramark.com', 'Aramark', '463 Park Rd', 'Lakewood', 'NJ', '08701', '269-720-7259', '1967-08-27', 'M', '2017-10-20 21:59:29', NULL), 
('Melissa', 'Brown', 'melissabrown@verizon.com', 'Verizon', '712 View Ave', 'Houston', 'TX', '77084', '280-570-5166', '1948-06-14', 'F', '2016-07-16 12:26:45', NULL), 
('Jennifer', 'Thomas', 'jenniferthomas@aramark.com', 'Aramark', '231 Elm St', 'Mission', 'TX', '78572', '976-147-9254', '1998-03-14', 'F', '2018-01-08 09:27:55', NULL), 
('Stephanie', 'Martinez', 'stephaniemartinez@albertsons.com', 'Albertsons', '386 Second St', 'Lakewood', 'NJ', '08701', '820-131-6053', '1998-01-24', 'M', '2016-06-18 13:27:34', NULL), 
('Daniel', 'Williams', 'danielwilliams@tjx.com', 'TJX', '107 Pine St', 'Katy', 'TX', '77449', '744-906-9837', '1985-07-20', 'F', '2015-07-03 10:40:18', NULL), 
('Lauren', 'Anderson', 'laurenanderson@pepsi.com', 'Pepsi', '13 Maple Ave', 'Riverside', 'CA', '92503', '747-993-2446', '1973-09-09', 'F', '2018-02-01 16:43:51', NULL), 
('Michael', 'Jackson', 'michaeljackson@disney.com', 'Disney', '818 Pine Ave', 'Mission', 'TX', '78572', '126-423-3144', '1951-03-03', 'F', '2017-04-02 21:57:36', NULL), 
('Ashley', 'Johnson', 'ashleyjohnson@boeing.com', 'Boeing', '874 Oak Ave', 'Pacoima', 'CA', '91331', '127-475-1658', '1937-05-10', 'F', '2015-01-04 08:58:56', NULL), 
('Brittany', 'Thomas', 'brittanythomas@walmart.com', 'Walmart', '187 Maple Ave', 'Brownsville', 'TX', '78521', '447-788-4913', '1986-10-22', 'F', '2018-05-23 08:04:32', NULL), 
('Matthew', 'Smith', 'matthewsmith@ups.com', 'UPS', '123 Lake St', 'Brownsville', 'TX', '78521', '961-108-3758', '1950-06-16', 'F', '2018-03-15 10:08:54', NULL), 
('Lauren', 'Wilson', 'laurenwilson@target.com', 'Target', '942 Fifth Ave', 'Mission', 'TX', '78572', '475-578-8519', '1965-12-26', 'M', '2017-07-16 11:01:01', NULL), 
('Justin', 'Smith', 'justinsmith@boeing.com', 'Boeing', '844 Lake Ave', 'Lawrenceville', 'GA', '30044', '671-957-1492', '1956-03-16', 'F', '2017-10-07 10:50:08', NULL), 
('Jessica', 'Garcia', 'jessicagarcia@toyota.com', 'Toyota', '123 Pine Place', 'Fontana', 'CA', '92336', '744-647-2359', '1996-08-05', 'F', '2016-09-14 12:33:05', NULL), 
('Matthew', 'Jackson', 'matthewjackson@bp.com', 'BP', '538 Cedar Ave', 'Katy', 'TX', '77449', '363-430-1813', '1966-02-26', 'F', '2016-05-01 19:25:17', NULL), 
('Stephanie', 'Thomas', 'stephaniethomas@apple.com', 'Apple', '804 Fourth Place', 'Brownsville', 'TX', '78521', '869-582-9955', '1988-08-26', 'F', '2018-10-21 22:01:57', NULL), 
('Jessica', 'Jackson', 'jessicajackson@aramark.com', 'Aramark', '235 Pine Place', 'Chicago', 'IL', '60629', '587-334-1054', '1991-07-22', 'F', '2015-08-28 03:11:35', NULL), 
('James', 'Martinez', 'jamesmartinez@kroger.com', 'Kroger', '831 Oak St', 'Brownsville', 'TX', '78521', '381-428-3119', '1927-12-22', 'F', '2018-01-27 07:41:48', NULL), 
('Christopher', 'Robinson', 'christopherrobinson@ibm.com', 'IBM', '754 Cedar St', 'Pharr', 'TX', '78577', '488-694-7677', '1932-06-25', 'F', '2016-08-19 16:11:31', NULL);

# To see the date we just stored in customer table
SELECT * FROM customer;

# Store data of sales people
INSERT INTO sales_person (first_name, last_name, email, street, city, state, zip, phone, birth_date, sex, date_hired, id) VALUES 
('Jennifer', 'Smith', 'jennifersmith@volkswagen.com', '610 Maple Place', 'Hawthorne', 'CA', '90250', '215-901-2287', '1941-08-09', 'F', '2014-02-06 12:22:48', NULL), 
('Michael', 'Robinson', 'michaelrobinson@walmart.com', '164 Maple St', 'Pacoima', 'CA', '91331', '521-377-4462', '1956-04-23', 'M', '2014-09-12 17:27:23', NULL), 
('Brittany', 'Jackson', 'brittanyjackson@disney.com', '263 Park Rd', 'Riverside', 'CA', '92503', '672-708-7601', '1934-07-05', 'F', '2015-01-17 02:51:55', NULL), 
('Samantha', 'Moore', 'samanthamoore@ge.com', '107 Pine Place', 'Houston', 'TX', '77084', '893-423-2899', '1926-05-05', 'M', '2015-11-14 22:26:21', NULL), 
('Jessica', 'Thompson', 'jessicathompson@fedex.com', '691 Third Place', 'Sylmar', 'CA', '91342', '349-203-4736', '1938-12-18', 'M', '2014-12-13 06:54:39', NULL)

# To view the sales people we just stored in sales_person table
SELECT * FROM sales_person;



