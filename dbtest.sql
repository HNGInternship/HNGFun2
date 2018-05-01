DROP DATABASE IF EXISTS dbtest;

CREATE DATABASE dbtest;

use dbtest;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `firstname` varchar(100) NOT NULL,
    `lastname` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `userPass` varchar(100) NOT NULL,
    `userStatus` enum('Y', 'N') NOT NULL DEFAULT 'N',
    `tokenCode` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

