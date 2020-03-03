
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
#	type_id,	name,		supplier,		description, 				id
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

#	To see the data we just stored in table product
SELECT * FROM product;

#	We will fill the customer table by doing the following:
#	But this time (we specify column names)
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

#	To see the date we just stored in customer table
SELECT * FROM customer;

#	Store data of sales people
INSERT INTO sales_person (first_name, last_name, email, street, city, state, zip, phone, birth_date, sex, date_hired, id) VALUES 
('Jennifer', 'Smith', 'jennifersmith@volkswagen.com', '610 Maple Place', 'Hawthorne', 'CA', '90250', '215-901-2287', '1941-08-09', 'F', '2014-02-06 12:22:48', NULL), 
('Michael', 'Robinson', 'michaelrobinson@walmart.com', '164 Maple St', 'Pacoima', 'CA', '91331', '521-377-4462', '1956-04-23', 'M', '2014-09-12 17:27:23', NULL), 
('Brittany', 'Jackson', 'brittanyjackson@disney.com', '263 Park Rd', 'Riverside', 'CA', '92503', '672-708-7601', '1934-07-05', 'F', '2015-01-17 02:51:55', NULL), 
('Samantha', 'Moore', 'samanthamoore@ge.com', '107 Pine Place', 'Houston', 'TX', '77084', '893-423-2899', '1926-05-05', 'M', '2015-11-14 22:26:21', NULL), 
('Jessica', 'Thompson', 'jessicathompson@fedex.com', '691 Third Place', 'Sylmar', 'CA', '91342', '349-203-4736', '1938-12-18', 'M', '2014-12-13 06:54:39', NULL);

#	To view the sales people we just stored in sales_person table
SELECT * FROM sales_person;

#	change the datatype from column purchase_order_number that is inside sales_order table
ALTER TABLE sales_order MODIFY purchase_order_number BIGINT UNSIGNED NOT NULL;

#	change data type for credit_card_secret_code from tinyint to smallint
ALTER TABLE sales_order MODIFY credit_card_secret_code SMALLINT UNSIGNED NOT NULL;

#	Insert values inside "item" table:
#	Item table has columns, "product_id", "size", "color", "picture", "price", id
INSERT INTO item VALUES
(2, 10, 'Gray', 'Coming Soon', 199.60, NULL), 
(11, 12, 'Red', 'Coming Soon', 155.65, NULL), 
(2, 11, 'Red', 'Coming Soon', 128.87, NULL), 
(11, 11, 'Green', 'Coming Soon', 117.52, NULL), 
(5, 8, 'Black', 'Coming Soon', 165.39, NULL), 
(7, 11, 'Brown', 'Coming Soon', 168.15, NULL), 
(5, 8, 'Gray', 'Coming Soon', 139.48, NULL), 
(5, 11, 'Blue', 'Coming Soon', 100.14, NULL), 
(4, 10, 'Brown', 'Coming Soon', 117.66, NULL), 
(8, 10, 'Brown', 'Coming Soon', 193.53, NULL), 
(7, 8, 'Light Brown', 'Coming Soon', 154.62, NULL), 
(12, 10, 'Green', 'Coming Soon', 188.32, NULL), 
(3, 12, 'Green', 'Coming Soon', 101.49, NULL), 
(7, 9, 'Black', 'Coming Soon', 106.39, NULL), 
(8, 12, 'Red', 'Coming Soon', 124.77, NULL), 
(5, 8, 'Black', 'Coming Soon', 86.19, NULL), 
(8, 12, 'Blue', 'Coming Soon', 196.86, NULL), 
(8, 8, 'Blue', 'Coming Soon', 123.27, NULL), 
(7, 11, 'Red', 'Coming Soon', 130.76, NULL), 
(9, 12, 'Black', 'Coming Soon', 152.98, NULL), 
(11, 8, 'Blue', 'Coming Soon', 175.58, NULL), 
(7, 11, 'Light Brown', 'Coming Soon', 146.83, NULL), 
(4, 8, 'Green', 'Coming Soon', 159.82, NULL), 
(12, 8, 'Light Brown', 'Coming Soon', 171.92, NULL), 
(1, 12, 'Light Brown', 'Coming Soon', 128.77, NULL), 
(2, 10, 'Gray', 'Coming Soon', 102.45, NULL), 
(10, 8, 'Green', 'Coming Soon', 186.86, NULL), 
(1, 8, 'Blue', 'Coming Soon', 139.73, NULL), 
(9, 8, 'Light Brown', 'Coming Soon', 151.57, NULL), 
(2, 10, 'Green', 'Coming Soon', 177.16, NULL), 
(3, 9, 'Gray', 'Coming Soon', 124.87, NULL), 
(8, 8, 'Black', 'Coming Soon', 129.40, NULL), 
(5, 9, 'Black', 'Coming Soon', 107.55, NULL), 
(5, 8, 'Light Brown', 'Coming Soon', 103.71, NULL), 
(11, 10, 'Green', 'Coming Soon', 152.31, NULL), 
(6, 12, 'Red', 'Coming Soon', 108.96, NULL), 
(7, 12, 'Blue', 'Coming Soon', 173.14, NULL), 
(3, 10, 'Green', 'Coming Soon', 198.44, NULL), 
(1, 9, 'Light Brown', 'Coming Soon', 119.61, NULL), 
(1, 10, 'Black', 'Coming Soon', 114.36, NULL), 
(7, 9, 'Light Brown', 'Coming Soon', 181.93, NULL), 
(5, 10, 'Black', 'Coming Soon', 108.32, NULL), 
(1, 12, 'Black', 'Coming Soon', 153.97, NULL), 
(2, 12, 'Gray', 'Coming Soon', 184.27, NULL), 
(2, 9, 'Blue', 'Coming Soon', 151.63, NULL), 
(6, 8, 'Brown', 'Coming Soon', 159.39, NULL), 
(11, 9, 'Red', 'Coming Soon', 150.49, NULL), 
(9, 10, 'Gray', 'Coming Soon', 139.26, NULL), 
(4, 8, 'Gray', 'Coming Soon', 166.87, NULL), 
(12, 9, 'Red', 'Coming Soon', 110.77, NULL);

#	To view the data we just stored inside "item" table
SELECT * FROM item;

#	Store data inside sales_order table
# Ran this sales order_order table twice, so the id number would begin from 200 instead of 0 to align with the tutorial
INSERT INTO sales_order VALUES
(1, 2, '2018-03-23 10:26:23', 20183231026, 5440314057399014, 3, 5, 415, 'Ashley Martin', NULL), 
(8, 2, '2017-01-09 18:58:15', 2017191858, 6298551651340835, 10, 27, 962, 'Michael Smith', NULL), 
(9, 3, '2018-12-21 21:26:57', 201812212126, 3194084144609442, 7, 16, 220, 'Lauren Garcia', NULL), 
(8, 2, '2017-08-20 15:33:17', 20178201533, 2704487907300646, 7, 10, 430, 'Jessica Robinson', NULL), 
(3, 4, '2017-09-19 13:28:35', 20179191328, 8102877849444788, 4, 15, 529, 'Melissa Jones', NULL), 
(14, 1, '2016-10-02 18:30:13', 20161021830, 7294221943676784, 10, 22, 323, 'Lauren Moore', NULL), 
(4, 2, '2016-03-21 07:24:30', 2016321724, 1791316080799942, 1, 24, 693, 'Joshua Wilson', NULL), 
(1, 1, '2018-08-04 12:22:06', 2018841222, 4205390666512184, 5, 16, 758, 'Jennifer Garcia', NULL), 
(8, 4, '2016-08-25 10:36:09', 20168251036, 3925972513042074, 1, 10, 587, 'Michael Thomas', NULL), 
(8, 4, '2018-08-10 20:24:52', 20188102024, 2515001187633555, 10, 7, 354, 'David Martin', NULL), 
(5, 2, '2016-11-28 15:21:48', 201611281521, 6715538212478349, 5, 25, 565, 'Jennifer Johnson', NULL), 
(5, 3, '2016-12-07 10:20:05', 20161271020, 5125085038984547, 10, 27, 565, 'Brittany Garcia', NULL), 
(13, 3, '2018-10-11 16:27:04', 201810111627, 5559881213107031, 7, 14, 593, 'Sarah Jackson', NULL), 
(14, 1, '2018-04-26 20:35:34', 20184262035, 2170089500922701, 7, 26, 105, 'Daniel Harris', NULL), 
(3, 2, '2016-11-14 04:32:50', 20161114432, 6389550669359545, 7, 19, 431, 'Brittany Williams', NULL), 
(18, 3, '2016-07-10 17:55:01', 20167101755, 7693323933630220, 4, 22, 335, 'Christopher Thomas', NULL), 
(12, 2, '2018-05-13 06:20:56', 2018513620, 1634255384507587, 1, 4, 364, 'Megan Garcia', NULL), 
(3, 4, '2016-03-04 20:52:36', 2016342052, 7720584466409961, 2, 7, 546, 'Justin Taylor', NULL), 
(17, 1, '2017-02-16 15:44:27', 20172161544, 7573753924723630, 3, 15, 148, 'Michael White', NULL), 
(19, 3, '2017-08-04 07:24:30', 201784724, 9670036242643402, 10, 24, 803, 'Melissa Taylor', NULL), 
(8, 2, '2018-07-08 15:51:11', 2018781551, 5865443195522495, 2, 2, 793, 'James Thompson', NULL), 
(18, 1, '2017-03-02 03:08:03', 20173238, 9500873657482557, 6, 22, 793, 'Daniel Williams', NULL), 
(7, 1, '2018-03-19 10:54:30', 20183191054, 7685678049357511, 2, 9, 311, 'Joshua Martinez', NULL), 
(18, 1, '2017-07-04 18:48:02', 2017741848, 2254223828631172, 6, 18, 621, 'Justin Taylor', NULL), 
(16, 1, '2018-07-23 21:44:51', 20187232144, 8669971462260333, 10, 3, 404, 'Ashley Garcia', NULL), 
(8, 4, '2016-05-21 16:26:49', 20165211626, 9485792104395686, 2, 4, 270, 'Andrew Taylor', NULL), 
(19, 4, '2018-09-04 18:24:36', 2018941824, 5293753403622328, 8, 4, 362, 'Matthew Miller', NULL), 
(9, 2, '2018-07-01 18:19:10', 2018711819, 7480694928317516, 10, 5, 547, 'Justin Thompson', NULL), 
(8, 4, '2018-09-10 20:15:06', 20189102015, 7284020879927491, 4, 15, 418, 'Samantha Anderson', NULL), 
(17, 2, '2016-07-13 16:30:53', 20167131630, 7769197595493852, 1, 19, 404, 'Jessica Thomas', NULL), 
(17, 4, '2016-09-22 22:58:11', 20169222258, 1394443435119786, 7, 5, 955, 'James Wilson', NULL), 
(17, 4, '2017-10-28 11:35:05', 201710281135, 6788591532433513, 8, 13, 512, 'Michael Williams', NULL), 
(12, 4, '2018-11-11 04:55:50', 20181111455, 1854718494260005, 3, 26, 928, 'Melissa Jones', NULL), 
(15, 4, '2016-08-11 23:05:58', 2016811235, 7502173302686796, 3, 11, 836, 'Michael Thompson', NULL), 
(2, 3, '2018-07-13 07:50:24', 2018713750, 5243198834590551, 10, 12, 725, 'Joseph Thomas', NULL), 
(9, 3, '2017-09-28 11:42:16', 20179281142, 7221309687109696, 2, 5, 845, 'James Martinez', NULL), 
(7, 1, '2016-01-09 18:15:08', 2016191815, 9202139348760334, 4, 4, 339, 'Samantha Wilson', NULL), 
(18, 1, '2016-03-14 17:33:26', 20163141733, 3066530074499665, 6, 23, 835, 'David Garcia', NULL), 
(12, 3, '2017-08-21 18:14:01', 20178211814, 1160849457958425, 8, 19, 568, 'Samantha Miller', NULL), 
(8, 1, '2018-09-12 19:25:25', 20189121925, 6032844702934349, 8, 13, 662, 'Justin Brown', NULL), 
(19, 2, '2016-11-06 03:07:33', 201611637, 1369214097312715, 9, 23, 330, 'Joseph Jones', NULL), 
(3, 4, '2016-06-06 01:07:15', 20166617, 7103644598069058, 1, 5, 608, 'Brittany Thomas', NULL), 
(13, 4, '2017-05-15 01:02:57', 201751512, 2920333635602602, 11, 14, 139, 'Stephanie Smith', NULL), 
(15, 4, '2016-03-27 02:18:18', 2016327218, 7798214190926405, 5, 13, 809, 'Stephanie Taylor', NULL), 
(9, 2, '2018-01-25 14:43:01', 20181251443, 4196223548846892, 10, 17, 115, 'Melissa Martin', NULL), 
(6, 3, '2017-01-08 13:54:49', 2017181354, 8095784052038731, 8, 23, 416, 'Amanda White', NULL), 
(12, 2, '2017-09-24 15:24:44', 20179241524, 6319974420646022, 2, 4, 755, 'Megan Anderson', NULL), 
(11, 2, '2018-04-09 18:53:22', 2018491853, 3258192259182097, 11, 22, 730, 'Samantha Thompson', NULL), 
(10, 2, '2018-01-11 22:20:29', 20181112220, 8336712415869878, 3, 18, 872, 'Melissa Wilson', NULL), 
(14, 3, '2018-11-10 03:08:36', 2018111038, 6942550153605236, 9, 18, 250, 'Jessica Johnson', NULL), 
(6, 4, '2016-06-26 16:48:19', 20166261648, 5789348928562200, 2, 7, 458, 'Christopher Jones', NULL), 
(5, 1, '2018-06-23 02:25:16', 2018623225, 8550095429571317, 9, 25, 590, 'Samantha Wilson', NULL), 
(18, 2, '2017-07-01 01:16:04', 201771116, 2651011719468438, 11, 11, 107, 'Andrew Miller', NULL), 
(12, 4, '2017-01-17 21:42:51', 20171172142, 7354378345646144, 3, 14, 772, 'Andrew Moore', NULL), 
(7, 3, '2016-01-07 22:56:31', 2016172256, 3429850164043973, 2, 6, 295, 'Joseph Taylor', NULL), 
(10, 1, '2016-01-27 01:14:53', 2016127114, 2480926933843246, 7, 3, 704, 'Ashley Taylor', NULL), 
(13, 1, '2018-09-15 08:15:17', 2018915815, 6626319262681476, 4, 8, 837, 'Stephanie Thomas', NULL), 
(9, 1, '2018-04-06 15:40:28', 2018461540, 4226037621059886, 10, 26, 896, 'Stephanie Jones', NULL), 
(17, 3, '2016-10-17 21:31:09', 201610172131, 7862008338119027, 10, 25, 767, 'Amanda Robinson', NULL), 
(12, 2, '2016-06-04 22:27:57', 2016642227, 4472081783581101, 10, 9, 279, 'Justin Williams', NULL), 
(9, 3, '2018-01-27 06:57:23', 2018127657, 2384491606066483, 11, 23, 417, 'Joshua Garcia', NULL), 
(14, 2, '2018-07-19 22:11:23', 20187192211, 2680467440231722, 10, 8, 545, 'Ashley Wilson', NULL), 
(19, 4, '2018-11-06 03:12:35', 2018116312, 3973342791188144, 10, 9, 749, 'Megan Martinez', NULL), 
(11, 2, '2017-01-15 14:11:54', 20171151411, 3042008865691398, 8, 3, 695, 'Brittany White', NULL), 
(10, 4, '2018-10-07 01:26:57', 2018107126, 7226038495242154, 8, 7, 516, 'Stephanie White', NULL), 
(12, 3, '2018-10-02 16:13:23', 20181021613, 7474287104417454, 11, 1, 184, 'Daniel Davis', NULL), 
(8, 1, '2018-08-12 23:54:52', 20188122354, 6454271840792089, 1, 19, 914, 'Michael Robinson', NULL), 
(11, 2, '2016-07-06 04:57:33', 201676457, 6767948287515839, 8, 7, 127, 'Samantha Anderson', NULL), 
(12, 2, '2018-09-06 10:34:03', 2018961034, 2724397042248973, 11, 11, 686, 'Ashley Harris', NULL), 
(16, 1, '2017-11-12 07:05:38', 2017111275, 4832060124173185, 11, 27, 697, 'Brittany White', NULL), 
(16, 4, '2016-06-08 17:38:18', 2016681738, 2187337846675221, 5, 9, 895, 'Megan Wilson', NULL), 
(3, 3, '2016-02-08 21:46:46', 2016282146, 8361948319742012, 6, 26, 157, 'Jessica Taylor', NULL), 
(8, 1, '2016-10-22 03:01:13', 2016102231, 1748352966511490, 8, 7, 815, 'Justin Davis', NULL), 
(5, 4, '2018-12-06 12:51:24', 20181261251, 3987075017699453, 7, 18, 557, 'Andrew Martinez', NULL), 
(4, 1, '2017-09-23 07:14:32', 2017923714, 4497706297852239, 2, 12, 756, 'Justin Moore', NULL), 
(5, 3, '2016-02-28 23:16:42', 20162282316, 9406399694013062, 1, 26, 853, 'Joseph Moore', NULL), 
(11, 4, '2016-05-24 14:37:36', 20165241437, 4754563147105980, 8, 8, 742, 'Amanda Brown', NULL), 
(1, 2, '2018-04-08 09:35:58', 201848935, 5031182534686567, 2, 11, 760, 'Andrew Thompson', NULL), 
(11, 1, '2017-10-07 20:45:13', 20171072045, 9736660892936088, 5, 19, 240, 'Megan Robinson', NULL), 
(19, 2, '2017-03-19 23:03:38', 2017319233, 1154891936822433, 2, 14, 554, 'Christopher Davis', NULL), 
(1, 1, '2018-04-26 11:58:53', 20184261158, 5672494499371853, 11, 18, 692, 'James Thomas', NULL), 
(1, 3, '2018-07-20 10:05:17', 2018720105, 9695318985866569, 2, 12, 107, 'Jennifer Martin', NULL), 
(7, 3, '2018-06-21 18:41:12', 20186211841, 2824438494479373, 1, 12, 296, 'Joseph Miller', NULL), 
(6, 1, '2016-04-07 08:47:40', 201647847, 5608599820055114, 7, 2, 163, 'Brittany Brown', NULL), 
(15, 3, '2016-07-22 19:25:23', 20167221925, 3011298350076480, 1, 9, 352, 'Jessica Jackson', NULL), 
(16, 4, '2016-10-14 10:17:30', 201610141017, 5250543218399397, 9, 16, 975, 'David Wilson', NULL), 
(3, 4, '2018-05-15 03:51:28', 2018515351, 8835896606865589, 11, 4, 675, 'Andrew Garcia', NULL), 
(19, 3, '2017-05-25 07:44:57', 2017525744, 9159566098395188, 6, 23, 112, 'Ashley Brown', NULL), 
(11, 2, '2017-12-02 19:07:39', 2017122197, 9920715756046783, 2, 25, 490, 'Joshua Garcia', NULL), 
(7, 4, '2016-05-01 04:50:28', 201651450, 8393790616940265, 9, 22, 490, 'Matthew White', NULL), 
(15, 3, '2018-01-21 19:54:46', 20181211954, 8078408967493993, 6, 18, 316, 'Jessica Thomas', NULL), 
(6, 1, '2018-04-11 11:23:58', 20184111123, 3921559263693643, 11, 17, 221, 'Andrew Jackson', NULL), 
(13, 3, '2018-03-05 10:26:27', 2018351026, 4739593984654108, 10, 18, 925, 'Samantha White', NULL), 
(8, 4, '2018-11-15 14:53:55', 201811151453, 8752393645304583, 4, 14, 554, 'Daniel Jackson', NULL), 
(10, 1, '2017-09-03 12:57:29', 2017931257, 3434269111389638, 6, 18, 360, 'Megan Johnson', NULL), 
(7, 1, '2018-06-28 12:10:58', 20186281210, 6543388006451934, 5, 19, 491, 'Megan Thomas', NULL), 
(15, 3, '2018-07-13 12:21:29', 20187131221, 4717498129166869, 5, 21, 386, 'Megan Davis', NULL), 
(4, 1, '2016-08-01 16:26:39', 2016811626, 1822404586758111, 3, 2, 346, 'Joseph Davis', NULL), 
(3, 2, '2016-10-27 10:53:05', 201610271053, 8446943405552052, 11, 17, 266, 'Daniel Smith', NULL), 
(18, 3, '2018-10-20 15:28:54', 201810201528, 6433477195769821, 8, 26, 723, 'Lauren Smith', NULL);


# To view data we just stored inside sales_order table
SELECT * FROM sales_order;
#	Dropped saled_item table because something is wrong with it
DROP TABLE sales_item;

#	Create sales_item table
CREATE TABLE sales_item(
item_id INT UNSIGNED NOT NULL,
sales_order_id INT UNSIGNED NOT NULL,
FOREIGN KEY (item_id) 
	REFERENCES item(id),
FOREIGN KEY (sales_order_id)
	REFERENCES sales_order(id),
quantity INT NOT NULL,
discount DECIMAL(3,2) NULL DEFAULT 0,
taxable BOOL NOT NULL DEFAULT 0,
sales_tax_rate DECIMAL(5,2) NOT NULL 
DEFAULT 0,
id INT UNSIGNED NOT NULL 
AUTO_INCREMENT PRIMARY KEY
);
*/
/*
# Store values to "sales_item" table

INSERT INTO sales_item(item_id, sales_order_id, quantity, discount, taxable, sales_tax_rate, id) VALUES 
(24, 270, 2, 0.11, 0, 0.0, NULL), 
(8, 237, 2, 0.16, 0, 0.0, NULL), 
(24, 290, 2, 0.06, 0, 0.0, NULL), 
(34, 283, 2, 0.13, 0, 0.0, NULL), 
(26, 255, 2, 0.13, 0, 0.0, NULL), 
(19, 226, 1, 0.19, 0, 0.0, NULL), 
(23, 202, 1, 0.13, 0, 0.0, NULL), 
(48, 224, 2, 0.15, 0, 0.0, NULL), 
(30, 211, 2, 0.06, 0, 0.0, NULL), 
(1, 260, 2, 0.18, 0, 0.0, NULL), 
(48, 202, 2, 0.12, 0, 0.0, NULL), 
(35, 234, 2, 0.07, 0, 0.0, NULL), 
(29, 213, 1, 0.15, 0, 0.0, NULL), 
(15, 298, 2, 0.13, 0, 0.0, NULL), 
(27, 235, 2, 0.07, 0, 0.0, NULL), 
(30, 205, 1, 0.05, 0, 0.0, NULL), 
(45, 233, 1, 0.09, 0, 0.0, NULL), 
(31, 220, 1, 0.18, 0, 0.0, NULL), 
(32, 288, 1, 0.13, 0, 0.0, NULL), 
(47, 243, 1, 0.09, 0, 0.0, NULL), 
(23, 220, 2, 0.16, 0, 0.0, NULL), 
(44, 286, 2, 0.18, 0, 0.0, NULL), 
(35, 275, 2, 0.12, 0, 0.0, NULL), 
(24, 249, 1, 0.08, 0, 0.0, NULL), 
(31, 237, 1, 0.14, 0, 0.0, NULL), 
(21, 211, 2, 0.14, 0, 0.0, NULL), 
(21, 271, 2, 0.06, 0, 0.0, NULL), 
(48, 201, 1, 0.06, 0, 0.0, NULL), 
(37, 287, 1, 0.11, 0, 0.0, NULL), 
(38, 266, 1, 0.13, 0, 0.0, NULL), 
(14, 207, 2, 0.13, 0, 0.0, NULL), 
(26, 285, 2, 0.2, 0, 0.0, NULL), 
(21, 283, 2, 0.16, 0, 0.0, NULL), 
(8, 215, 2, 0.18, 0, 0.0, NULL), 
(40, 232, 1, 0.19, 0, 0.0, NULL), 
(49, 238, 1, 0.15, 0, 0.0, NULL), 
(41, 213, 2, 0.06, 0, 0.0, NULL), 
(36, 259, 1, 0.1, 0, 0.0, NULL), 
(14, 246, 2, 0.14, 0, 0.0, NULL), 
(30, 277, 2, 0.19, 0, 0.0, NULL), 
(12, 278, 2, 0.18, 0, 0.0, NULL), 
(5, 221, 1, 0.18, 0, 0.0, NULL), 
(10, 213, 1, 0.09, 0, 0.0, NULL), 
(39, 209, 2, 0.2, 0, 0.0, NULL), 
(46, 251, 2, 0.13, 0, 0.0, NULL), 
(47, 298, 1, 0.15, 0, 0.0, NULL), 
(25, 283, 2, 0.09, 0, 0.0, NULL), 
(36, 256, 2, 0.12, 0, 0.0, NULL), 
(18, 208, 2, 0.12, 0, 0.0, NULL), 
(35, 217, 1, 0.14, 0, 0.0, NULL), 
(41, 270, 1, 0.14, 0, 0.0, NULL), 
(9, 221, 1, 0.07, 0, 0.0, NULL), 
(42, 246, 1, 0.09, 0, 0.0, NULL), 
(18, 274, 1, 0.1, 0, 0.0, NULL), 
(25, 214, 1, 0.16, 0, 0.0, NULL), 
(44, 257, 1, 0.13, 0, 0.0, NULL), 
(2, 284, 2, 0.06, 0, 0.0, NULL), 
(18, 268, 2, 0.08, 0, 0.0, NULL), 
(35, 264, 2, 0.16, 0, 0.0, NULL), 
(49, 279, 1, 0.07, 0, 0.0, NULL), 
(7, 203, 2, 0.14, 0, 0.0, NULL), 
(42, 240, 2, 0.15, 0, 0.0, NULL), 
(8, 248, 2, 0.18, 0, 0.0, NULL), 
(27, 282, 2, 0.08, 0, 0.0, NULL), 
(21, 263, 1, 0.1, 0, 0.0, NULL), 
(42, 221, 2, 0.08, 0, 0.0, NULL), 
(31, 223, 2, 0.18, 0, 0.0, NULL), 
(29, 207, 1, 0.11, 0, 0.0, NULL), 
(48, 229, 2, 0.14, 0, 0.0, NULL), 
(15, 249, 2, 0.15, 0, 0.0, NULL), 
(34, 237, 1, 0.16, 0, 0.0, NULL), 
(22, 235, 1, 0.19, 0, 0.0, NULL), 
(22, 229, 2, 0.11, 0, 0.0, NULL), 
(38, 292, 2, 0.08, 0, 0.0, NULL), 
(21, 211, 2, 0.17, 0, 0.0, NULL), 
(13, 272, 1, 0.09, 0, 0.0, NULL), 
(12, 207, 1, 0.17, 0, 0.0, NULL), 
(41, 211, 2, 0.13, 0, 0.0, NULL), 
(22, 226, 2, 0.09, 0, 0.0, NULL), 
(43, 291, 1, 0.13, 0, 0.0, NULL), 
(33, 260, 1, 0.1, 0, 0.0, NULL), 
(39, 282, 2, 0.2, 0, 0.0, NULL), 
(27, 272, 2, 0.17, 0, 0.0, NULL), 
(10, 279, 2, 0.12, 0, 0.0, NULL), 
(41, 278, 2, 0.15, 0, 0.0, NULL), 
(11, 243, 1, 0.05, 0, 0.0, NULL), 
(29, 276, 1, 0.08, 0, 0.0, NULL), 
(25, 260, 1, 0.15, 0, 0.0, NULL), 
(15, 283, 2, 0.09, 0, 0.0, NULL), 
(7, 246, 1, 0.07, 0, 0.0, NULL), 
(26, 224, 2, 0.1, 0, 0.0, NULL), 
(43, 222, 2, 0.08, 0, 0.0, NULL), 
(47, 299, 1, 0.06, 0, 0.0, NULL), 
(29, 226, 1, 0.12, 0, 0.0, NULL), 
(36, 236, 2, 0.06, 0, 0.0, NULL), 
(41, 215, 1, 0.08, 0, 0.0, NULL), 
(12, 247, 2, 0.15, 0, 0.0, NULL), 
(38, 217, 1, 0.05, 0, 0.0, NULL), 
(22, 232, 2, 0.13, 0, 0.0, NULL), 
(12, 299, 2, 0.11, 0, 0.0, NULL), 
(30, 227, 2, 0.15, 0, 0.0, NULL), 
(38, 240, 1, 0.15, 0, 0.0, NULL), 
(22, 236, 1, 0.09, 0, 0.0, NULL), 
(14, 255, 2, 0.07, 0, 0.0, NULL), 
(1, 269, 1, 0.07, 0, 0.0, NULL), 
(47, 288, 1, 0.1, 0, 0.0, NULL), 
(7, 272, 2, 0.07, 0, 0.0, NULL), 
(46, 213, 1, 0.18, 0, 0.0, NULL), 
(9, 210, 1, 0.15, 0, 0.0, NULL), 
(35, 240, 1, 0.13, 0, 0.0, NULL), 
(15, 282, 2, 0.07, 0, 0.0, NULL), 
(47, 234, 1, 0.14, 0, 0.0, NULL), 
(10, 253, 1, 0.08, 0, 0.0, NULL), 
(49, 234, 2, 0.06, 0, 0.0, NULL), 
(13, 243, 1, 0.19, 0, 0.0, NULL), 
(6, 267, 1, 0.08, 0, 0.0, NULL), 
(21, 211, 1, 0.12, 0, 0.0, NULL), 
(26, 294, 1, 0.13, 0, 0.0, NULL), 
(38, 266, 1, 0.19, 0, 0.0, NULL), 
(40, 268, 2, 0.16, 0, 0.0, NULL), 
(25, 284, 1, 0.18, 0, 0.0, NULL), 
(11, 228, 1, 0.18, 0, 0.0, NULL), 
(48, 220, 1, 0.12, 0, 0.0, NULL), 
(26, 203, 1, 0.12, 0, 0.0, NULL), 
(1, 275, 1, 0.19, 0, 0.0, NULL), 
(6, 258, 1, 0.12, 0, 0.0, NULL), 
(33, 243, 2, 0.11, 0, 0.0, NULL), 
(15, 270, 1, 0.15, 0, 0.0, NULL), 
(41, 272, 2, 0.14, 0, 0.0, NULL), 
(8, 277, 2, 0.18, 0, 0.0, NULL), 
(36, 285, 2, 0.18, 0, 0.0, NULL), 
(42, 257, 2, 0.18, 0, 0.0, NULL), 
(27, 271, 1, 0.19, 0, 0.0, NULL), 
(20, 240, 1, 0.18, 0, 0.0, NULL), 
(14, 223, 2, 0.16, 0, 0.0, NULL), 
(15, 273, 1, 0.12, 0, 0.0, NULL), 
(25, 260, 1, 0.12, 0, 0.0, NULL), 
(30, 210, 2, 0.11, 0, 0.0, NULL), 
(18, 290, 2, 0.09, 0, 0.0, NULL), 
(17, 206, 2, 0.13, 0, 0.0, NULL), 
(43, 217, 1, 0.08, 0, 0.0, NULL), 
(20, 233, 2, 0.11, 0, 0.0, NULL), 
(1, 294, 2, 0.1, 0, 0.0, NULL), 
(49, 222, 2, 0.09, 0, 0.0, NULL), 
(1, 255, 2, 0.1, 0, 0.0, NULL), 
(24, 259, 1, 0.14, 0, 0.0, NULL), 
(19, 245, 1, 0.17, 0, 0.0, NULL), 
(13, 280, 2, 0.1, 0, 0.0, NULL), 
(17, 250, 1, 0.08, 0, 0.0, NULL), 
(45, 203, 2, 0.13, 0, 0.0, NULL), 
(6, 292, 2, 0.19, 0, 0.0, NULL), 
(25, 204, 1, 0.08, 0, 0.0, NULL), 
(47, 281, 1, 0.16, 0, 0.0, NULL), 
(39, 239, 2, 0.17, 0, 0.0, NULL), 
(47, 279, 1, 0.12, 0, 0.0, NULL), 
(6, 208, 1, 0.17, 0, 0.0, NULL), 
(15, 260, 2, 0.11, 0, 0.0, NULL), 
(49, 266, 1, 0.15, 0, 0.0, NULL), 
(34, 244, 2, 0.09, 0, 0.0, NULL), 
(20, 210, 1, 0.1, 0, 0.0, NULL), 
(13, 235, 1, 0.12, 0, 0.0, NULL), 
(10, 243, 1, 0.13, 0, 0.0, NULL), 
(24, 251, 2, 0.09, 0, 0.0, NULL), 
(11, 242, 2, 0.14, 0, 0.0, NULL), 
(20, 254, 1, 0.17, 0, 0.0, NULL), 
(42, 235, 1, 0.1, 0, 0.0, NULL), 
(1, 247, 2, 0.17, 0, 0.0, NULL), 
(35, 298, 1, 0.11, 0, 0.0, NULL), 
(14, 225, 1, 0.18, 0, 0.0, NULL), 
(23, 241, 2, 0.13, 0, 0.0, NULL), 
(4, 274, 2, 0.15, 0, 0.0, NULL), 
(32, 247, 2, 0.11, 0, 0.0, NULL), 
(49, 272, 2, 0.17, 0, 0.0, NULL), 
(37, 259, 2, 0.11, 0, 0.0, NULL), 
(43, 298, 1, 0.16, 0, 0.0, NULL), 
(26, 228, 1, 0.15, 0, 0.0, NULL), 
(16, 287, 1, 0.16, 0, 0.0, NULL), 
(6, 249, 2, 0.07, 0, 0.0, NULL), 
(6, 214, 2, 0.2, 0, 0.0, NULL), 
(27, 288, 1, 0.19, 0, 0.0, NULL), 
(37, 238, 1, 0.13, 0, 0.0, NULL), 
(44, 208, 1, 0.18, 0, 0.0, NULL), 
(49, 213, 1, 0.11, 0, 0.0, NULL), 
(30, 261, 2, 0.09, 0, 0.0, NULL), 
(33, 245, 2, 0.09, 0, 0.0, NULL), 
(24, 270, 2, 0.05, 0, 0.0, NULL), 
(42, 249, 2, 0.14, 0, 0.0, NULL), 
(43, 283, 1, 0.16, 0, 0.0, NULL), 
(39, 277, 2, 0.12, 0, 0.0, NULL), 
(1, 265, 1, 0.19, 0, 0.0, NULL), 
(42, 277, 1, 0.1, 0, 0.0, NULL), 
(2, 237, 2, 0.11, 0, 0.0, NULL), 
(24, 259, 2, 0.07, 0, 0.0, NULL), 
(42, 288, 1, 0.17, 0, 0.0, NULL), 
(45, 221, 1, 0.18, 0, 0.0, NULL), 
(10, 275, 2, 0.05, 0, 0.0, NULL), 
(15, 209, 2, 0.15, 0, 0.0, NULL), 
(24, 282, 2, 0.09, 0, 0.0, NULL), 
(30, 287, 1, 0.15, 0, 0.0, NULL), 
(22, 257, 1, 0.19, 0, 0.0, NULL);

# View stored data in sales_item
SELECT * FROM sales_item;


# All the data at this point is stored, so now we can go ahead and play with it.
/*

*/










