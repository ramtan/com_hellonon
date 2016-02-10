DROP TABLE IF EXISTS `#__hellonon`;
 
CREATE TABLE `#__hellonon` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`greeting` VARCHAR(25) NOT NULL,
	`published` tinyint(4) NOT NULL,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;
 
INSERT INTO `#__hellonon` (`greeting`) VALUES
('Hello Non!'),
('Good bye Non!');