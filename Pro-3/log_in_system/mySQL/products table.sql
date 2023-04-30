CREATE TABLE products(
product_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
product_name VARCHAR(100) NOT NULL UNIQUE,
product_price DECIMAL(5,3) NOT NULL,
user_id int UNSIGNED,
FOREIGN KEY (user_id) REFERENCES users(user_id),
PRIMARY KEY (product_id)
);