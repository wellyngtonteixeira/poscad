DROP TABLE IF EXISTS `#__disciplina`;
 
CREATE TABLE `#__disciplina` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(100) NOT NULL,
	`carga`       INT(11)     NOT NULL,
	`ementa` TEXT,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;
 
INSERT INTO `#__disciplina` (`nome`, `carga`) VALUES
('Cálculo I', 60),
('Teoria da Administração', 60);