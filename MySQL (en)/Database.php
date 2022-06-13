<?php


/*
    Defination of Primary Key
    Defination of Foreign Key
        Exemplo usando alter pra alterar uma tabela
            alter table comments add foreign key (post_id) references posts(id)
    Defination of Foreign Key Constraints
    Difference between MySQL Join Types
    Group Results with aggregate functions
        select customer.customer_id, customer.first_name, 
        customer.last_name, rental.rental_id from customer
        left join rental on rental.customer_id = customer.customer_id

        avg(rental.rental_id)
        sum(rental.rental_id)
        count(rental.rental_id)
        min(rental.rental_id)
        max(rental.rental_id)



*/