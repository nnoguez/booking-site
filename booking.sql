CREATE DATABASE `booking`;
USE `booking`;

CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT,
  `username` varchar(255),
  `firstName` varchar(255),
  `password` varchar(255),
  PRIMARY KEY(`id`)
);

INSERT INTO `users` (`id`, `username`, `firstName`, `password`) VALUES
(1, 'username', 'firstName', '$password');
