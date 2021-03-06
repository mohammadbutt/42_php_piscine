CREATE TABLE sales_item(
item_id INT UNSIGNED NOT NULL,
sales_order_id INT UNSIGNED NOT NULL,
FOREIGN KEY (item_id)
	REFERENCES item(id),
FOREIGN KEY (sales_order_id)
	REFERENCES sales_order(id),
quantity INT NOT NULL,
discount DECIMAL(3, 2) NOT NULL DEFAULT 0,
taxable BOOL NOT NULL DEFAULT 0,
sales_tax_rate DECIMAL(5, 2) NOT NULL DEFAULT 0,
id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY);