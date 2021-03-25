CREATE DATABASE restaurante;
CREATE TABLE `Usuario` (
	`id_user` INT(11) NOT NULL AUTO_INCREMENT,
	`name_user` varchar(50) NOT NULL,
	`pass` varchar(50) NOT NULL,
    `first_name` varchar(50) NOT NULL,
    `last_name` varchar(50) NOT NULL,
	PRIMARY KEY (`id_user`)
);

CREATE TABLE `datos_user` (
	`id_datos` INT NOT NULL AUTO_INCREMENT,
	`id_usuario` INT(200) NOT NULL,
	`direccion` varchar(200) NOT NULL,
	PRIMARY KEY (`id_datos`)
);

CREATE TABLE `Menu` (
	`id_menu` bigint NOT NULL AUTO_INCREMENT,
	`nombre` varchar(200) NOT NULL,
	`precio` DECIMAL(25) NOT NULL,
	`id_bebida` INT(25),
	PRIMARY KEY (`id_menu`)
);

CREATE TABLE `bebida` (
	`Id_bebida` INT(11) NOT NULL AUTO_INCREMENT,
	`nombre` varchar(50) NOT NULL,
	`tipo` varchar(50) NOT NULL,
	`precio` DECIMAL(50) NOT NULL,
	PRIMARY KEY (`Id_bebida`)
);

ALTER TABLE `datos_user` ADD CONSTRAINT `datos_user_fk0` FOREIGN KEY (`id_usuario`) REFERENCES `Usuario`(`id_user`);

ALTER TABLE `Menu` ADD CONSTRAINT `Menu_fk0` FOREIGN KEY (`id_bebida`) REFERENCES `Bebida`(`Id_bebida`);


INSERT INTO `usuario` (`id_user`, `name_user`, `pass`, `first_name`, `last_name`) VALUES ('1', 'chris', 'Chris_69', 'chris', 'cajul');
 INSERT INTO `menu` (`id_menu`, `nombre`, `precio`, `id_bebida`) VALUES ('1', 'pollo', '2.50', '1');
INSERT INTO `bebida` (`Id_bebida`, `nombre`, `tipo`, `precio`) VALUES ('1', 'coca-cola', 'fria', '0.50');