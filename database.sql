/* Create Database and Table */
create database crud_db;

use crud_db;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `sumber` varchar(100),
  `media` varchar(100),
  `kategori` varchar(15),
  `url` varchar(250),
  PRIMARY KEY  (`id`)
);