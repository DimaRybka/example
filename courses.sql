CREATE DATABASE courses

USE courses;
CREATE TABLE registration
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    age INT NOT NULL,
    course VARCHAR(30) NOT NULL

)
