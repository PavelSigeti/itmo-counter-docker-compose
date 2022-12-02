CREATE DATABASE IF NOT EXISTS `counter`;
USE `counter`;
CREATE TABLE `data` (`id` INT NOT NULL AUTO_INCREMENT, `datetime` DATETIME NOT NULL , `client_info` TEXT NOT NULL , PRIMARY KEY (`id`)); 

GRANT ALL PRIVILEGES ON counter.* to 'root'@'%';