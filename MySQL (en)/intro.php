<?php

/*
WHAT IS MYSQL
    - Open source relational database management system
    - Uses the SQL (structured Query Language)
    - A leading database for web applicantions
    - Used with multiple languages(PHP, Node, Python)
    - Cross platform

RELATIONAL DATABASE
    - Based n "relational model" of data
    - Virtually all RDBMS use SQL to manage them
    - Uses "tables" with "columns" and "rows"
    - Tables can relate to eachother by keys

TABLE RELATIONSHIPS
    - You can relate tables from eachother

CREATING A NEW USER ON THE TERMINAL
    CREATE USER 'roberto'@'localhost' IDENTIFIED BY '123';
    

    SELECT * FROM users;
    INSERT INTO users(first_name, last_name, email)
    values ('roberto', 'teixeira', 'teixeira@gmail.com');

    SELECT * FROM clientes WHERE id = 5;

    DELETE FROM clientes WHERE id = 2;

    UPDADE clientes SET email 'roberto@gmail.com' WHERE id = 5;

INDEX
    They are used on columns and tables to speed up
    queries and find things more quickly and efficiently
PRIMARY KEYS like ou ID are indexed


FOREIGH KEYS - RELATION BETWEEN TABLES 

SELECT * FROM users;
SELECT * FROM users ORDER BY last_name ASC;
SELECT CONCAT(first_name, ' ',last_name) AS 'Name', dept FROM users;
SELECT DISTINCT location FROM users;

CREATE INDEX LIdex on users(location);
DROP INDEX LIndex on users; 


CREATE TABLE post (
    id INT auto_increment,
    user_id INT,
    title VARCHAR(100),
    body text,
    publish_date DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(id),
    FOREIGN KEY(user_id) REFERENCES users(id)
);

### PEGAR DADOS DE DOIS TABLES - JOIN 

SELECT users.first_name, users.last_name, posts.title, posts.publish_date 
FROM users INNER JOIN posts 
ON users.id = posts.user_id 
ORDER BY posts.title;

### CRIANDO OUTRA TABLE COM DUAS FOREIGN KEYS 

CREATE TABLE comments(
    ID int AUTO_INCREMENT,
    post_id INT,
    user_id INT, 
    body TEXT,
    publish_date  DATETIME DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY(post_id) REFERENCES posts(id),
    FOREIGN KEY(user_id) REFERENCES users(id)
)

SELECT 
comments.body,
posts.title,
users.first_name,
users.last_name 
FROM comments
INNER JOIN posts ON posts.id = comments.post_id
INNER JOIN users ON users.id = comments.user_id
ORDER BY posts.title

AGGREGATE FUNCTIONS - COUNT OF A CERTAIN FIELD

SELECT COUNT(id) FROM users; - ver quantos usuarios temos
SELECT MAX(age) FROM users;
SELECT MIN(age) FROM users;
SELECT UCASE(first_name), LCASE(last_name) FROM users;
SELECT location, COUNT(location) FROM users GROUP BY location;


*/