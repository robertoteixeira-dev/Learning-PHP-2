/* REPLICATING THE SCHEMA */

CREATE DATABASE challengedb;

CREATE TABLE customers (
   id INT AUTO_INCREMENT,
   first_name VARCHAR(100),
   last_name VARCHAR(100),
   email VARCHAR(50),
   PRIMARY KEY(id)
);

CREATE TABLE orders (
    id INT AUTO_INCREMENT,
    customer_id INT,
    item_count INT,
    sub_total FLOAT,
    shipping FLOAT,
    taxes FLOAT,
    grand_total FLOAT,
    placed_at DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id),
    FOREIGN KEY(customer_id) REFERENCES customers(id)
);

CREATE TABLE products (
    id INT auto_increment,
    type VARCHAR(100),
    title VARCHAR(100),
    description VARCHAR(255),
    unit_price FLOAT,
    PRIMARY KEY(id)
);

CREATE TABLE line_items (
    id INT auto_increment,
    order_id INT,
    product_id INT,
    quantity INT,
    unit_price FLOAT,
    item_total FLOAT,
    PRIMARY KEY(id),
    FOREIGN KEY(order_id) REFERENCES orders(id),
    FOREIGN KEY(product_id) REFERENCES products(id)
);