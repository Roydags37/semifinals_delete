SHOW DATABASES;

CREATE DATABASE semifinals_delete;

USE semifinals_delete;

CREATE TABLE employees_delete (
	id INT AUTO_INCREMENT,
	name VARCHAR(255),
	age INT,
	address VARCHAR(255),
	PRIMARY KEY(id)
);

INSERT INTO employees_delete (name, age, address) VALUES ('BRYAN BULLS', 26, 'NAGA'), ('PHONGZ CRUZ', 27, 'BULACAN'), ('DAVID GOONS', 26, 'PAMPANGA'), ('JET CURES', 27, 'TARLAC');

DESCRIBE employees_delete;

SELECT * FROM employees_delete;

