-- base de données
CREATE DATABASE library_management;
-- TABLES
-- users
CREATE TABLE `library_management`.`users` (`id` INT NOT NULL AUTO_INCREMENT , `email` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
-- books
CREATE TABLE `library_management`.`books` (`id` INT NOT NULL AUTO_INCREMENT , `title` VARCHAR(255) NOT NULL , `author` VARCHAR(255) NOT NULL , `numberOfPages` INT NOT NULL , `image` VARCHAR(255) NOT NULL DEFAULT 'default.png' , `added_date` DATE NOT NULL DEFAULT CURRENT_TIMESTAMP , `borrowing_date` VARCHAR(255) NOT NULL , `status` VARCHAR(255) NOT NULL DEFAULT 'disponible' , PRIMARY KEY (`id`)) ENGINE = InnoDB;