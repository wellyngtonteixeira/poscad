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

DROP TABLE IF EXISTS `#__curso`;

CREATE TABLE `#__curso` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;
 
INSERT INTO `#__curso` (`nome`) VALUES
('Gestão Pública'),
('Gestão Pública em Saúde'),
('Gestão Pública Municipal');

DROP TABLE IF EXISTS `#__matriz_curricular`;

CREATE TABLE `#__matriz_curricular` (
	`id`       INT(11)     NOT NULL AUTO_INCREMENT,
	`curso` INT(11)     NOT NULL,
	`inicio` DATE     NOT NULL,
	`termino` DATE ,
	PRIMARY KEY (`id`),
	FOREIGN KEY (`curso`) REFERENCES `#__curso`(`id`)
)
	ENGINE =MyISAM
	AUTO_INCREMENT =0
	DEFAULT CHARSET =utf8;

DROP TABLE IF EXISTS `#__disciplina_matriz_curricular`;

CREATE TABLE `#__disciplina_matriz_curricular` (
	`matriz` INT(11)     NOT NULL,
	`disciplina` INT(11)     NOT NULL,
	FOREIGN KEY (`matriz`) REFERENCES `#__matriz_curricular`(`id`),
	FOREIGN KEY (`disciplina`) REFERENCES `#__disciplina`(`id`),
	PRIMARY KEY (`matriz`, `disciplina`)
)
	ENGINE =MyISAM
	DEFAULT CHARSET =utf8;