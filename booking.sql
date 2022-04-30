CREATE DATABASE `booking`;
USE `booking`;

CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT,
  `username` varchar(255),
  `firstName` varchar(255),
  `lastName` varchar(255),
  `password` varchar(255),
  `destination` varchar(255),
  PRIMARY KEY(`id`)
);

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `password`, `destination`) VALUES
(1, 'username', 'firstName', 'lastName', '$2y$10$jhSIk2N5BnkEEzgEBWQDw.AUQIEcrH8V0AcNLfW2nkjTAH2WgAAlW', 'destination');
