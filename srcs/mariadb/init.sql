CREATE DATABASE IF NOT EXISTS :MY_DB;
USE MY_DB;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);

INSERT INTO users (name, email) VALUES ('admin', 'admin@example.com');
INSERT INTO users (name, email) VALUES ('tgibert', 'tgibert@student.42perpignan.fr');
