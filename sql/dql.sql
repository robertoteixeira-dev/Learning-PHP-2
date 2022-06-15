/* 
WRITE THE FOLLOWING QUERIES: 

Select all products.
Select all clients.
Select all orders a product was bought on.
Select total sales for a given product.
Select all the customers who bought X product.
Select all orders between X and Y dates.
Select all products with price greater than X.

Select all the products a given customer has bought.
Select the total amount of products a X customer bought between 2 dates.
Select what is the most purchased product.

*/
SELECT title FROM products;
SELECT first_name, last_name FROM customers;
SELECT order_id FROM line_items;
SELECT count(line_items.quantity) FROM line_items WHERE product_id = 5;
SELECT count(orders.customer_id) FROM orders INNER JOIN products ON products.title = "Iphone";
SELECT id FROM orders WHERE placed_at BETWEEN'2022-06-09' AND '2022-06-10';
SELECT title FROM products WHERE unit_price > 100.00;


