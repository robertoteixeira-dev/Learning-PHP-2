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
SELECT * FROM products;
SELECT * FROM customers;
SELECT order_id FROM line_items where product_id = ?;
SELECT sum(line_items.item_total) FROM line_items WHERE product_id = 5;
select o.customer_id  from orders as o join line_items as li on o.id  = li.order_id  where li.product_id  = 5; 
SELECT * FROM orders WHERE placed_at BETWEEN'2022-06-09' AND '2022-06-10';
SELECT * FROM products WHERE unit_price > 100.00;

select distinct (p.title) from line_items as li join orders as o on o.id = li.order_id join products p on
p.id  = li.product_id where o.customer_id  = 1;

select sum(item_count) from orders where customer_id = 1 and placed_at BETWEEN'2022-06-09' AND '2022-06-11';

/*select sum(li.quantity), p.title  from line_items li join products p on li.product_id  = p.id  where product_id  = 5 group by product_id ;*/

select max(sum_purchases), p.title 
from (
	SELECT product_id , sum(quantity) AS sum_purchases    
	FROM line_items v_stat    
	GROUP BY v_stat.product_id order by sum_purchases desc limit 1 
) x join products p on p.id = x.product_id ;
