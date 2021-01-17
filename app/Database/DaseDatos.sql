CREATE TABLE `Usuario` (
	`id_user` INT(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(50) NOT NULL,
	`pass` varchar(50) NOT NULL,
	PRIMARY KEY (`id_user`)
);

CREATE TABLE `datos_user` (
	`id_datos` INT NOT NULL AUTO_INCREMENT,
	`nombre` varchar(200) NOT NULL,
	`apellido` varchar(200) NOT NULL,
	`id_usurio` INT(200) NOT NULL,
	`direccion` varchar(200) NOT NULL,
	PRIMARY KEY (`id_datos`)
);

CREATE TABLE `Menu` (
	`id_menu` bigint NOT NULL AUTO_INCREMENT,
	`nombre` varchar(200) NOT NULL,
	`precio` DECIMAL(25) NOT NULL,
	`id_bebida` INT(25) NOT NULL,
	PRIMARY KEY (`id_menu`)
);

CREATE TABLE `Bebida` (
	`Id_bebida` INT(11) NOT NULL AUTO_INCREMENT,
	`nombre` varchar(50) NOT NULL,
	`tipo` varchar(50) NOT NULL,
	`precio` DECIMAL(50) NOT NULL,
	PRIMARY KEY (`Id_bebida`)
);

ALTER TABLE `datos_user` ADD CONSTRAINT `datos_user_fk0` FOREIGN KEY (`id_usurio`) REFERENCES `Usuario`(`id_user`);

ALTER TABLE `Menu` ADD CONSTRAINT `Menu_fk0` FOREIGN KEY (`id_bebida`) REFERENCES `Bebida`(`Id_bebida`);

