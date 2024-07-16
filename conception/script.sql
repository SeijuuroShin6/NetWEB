--Create Database NetWEB
CREATE DATABASE `NetWEB`
CHARACTER SET utf8mb4 
COLLATE utf8mb4_general_ci;


--Creation of my table users, with 7 categories 
CREATE TABLE `contact_form` (
`id` INT AUTO_INCREMENT PRIMARY KEY,
`firstName` VARCHAR(255),
`lastName` VARCHAR(255),
`email` VARCHAR(255),
`subject` VARCHAR(255),
`message` VARCHAR(1000));