create database test;

use test;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `dni` varchar(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `birthdate` Date NOT NULL,
  `email` varchar(100) NOT NULL,
  `sex` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`)
);