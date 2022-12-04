CREATE DATABASE IF NOT EXISTS `counter`;
USE `counter`;
CREATE TABLE IF NOT EXISTS `data` (`id` INT NOT NULL AUTO_INCREMENT, `datetime` DATETIME NOT NULL , `client_info` TEXT NOT NULL , PRIMARY KEY (`id`)); 

INSERT INTO `data` (`datetime`, `client_info`) VALUES (now(), 'User-Agent: Mozilla/5.0 ');