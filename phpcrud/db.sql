CREATE DATABASE phpcrud;

CREATE TABLE users(
id int AUTO_INCREMENT PRIMARY KEY,
name varchar(100),
email varchar(100) UNIQUE,
gender ENUM("male","female"),
language SET("nepali","english","chinese"),
country varchar(100)
);
