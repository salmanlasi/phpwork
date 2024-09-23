create database login;

use login

CREATE TABLE `done` (
  `id` int(11) NOT NULL auto_increment,
  `fname` varchar(100) NOT NULL,
  `email` int(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `age` varchar(30) NOT NULL,
  `birth` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `file` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);