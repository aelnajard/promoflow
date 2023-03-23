/* ---------------------------------------------------- */
/*  Generated by Enterprise Architect Version 15.2 		*/
/*  Created On : 30-Jun-2022 6:14:11 PM 				*/
/*  DBMS       : MySql 						*/
/* ---------------------------------------------------- */

SET FOREIGN_KEY_CHECKS=0
; 
/* Drop Tables */

DROP TABLE IF EXISTS `Ammount` CASCADE
;

DROP TABLE IF EXISTS `Attachments` CASCADE
;

DROP TABLE IF EXISTS `AttachmentWith` CASCADE
;

DROP TABLE IF EXISTS `ClipsAccessories` CASCADE
;

DROP TABLE IF EXISTS `Colour` CASCADE
;

DROP TABLE IF EXISTS `Images` CASCADE
;

DROP TABLE IF EXISTS `Lanyards` CASCADE
;

DROP TABLE IF EXISTS `LanyardTypes` CASCADE
;

DROP TABLE IF EXISTS `Materials` CASCADE
;

DROP TABLE IF EXISTS `SidesPrinted` CASCADE
;

DROP TABLE IF EXISTS `Texts` CASCADE
;

DROP TABLE IF EXISTS `TimeDeliveries` CASCADE
;

DROP TABLE IF EXISTS `Users` CASCADE
;

DROP TABLE IF EXISTS `UsersLanyards` CASCADE
;

DROP TABLE IF EXISTS `Width` CASCADE
;

/* Create Tables */

CREATE TABLE `Ammount`
(
	`idAmmount` INT NOT NULL AUTO_INCREMENT,
	`numberAmmount` INT NOT NULL,
	`idLanyard` INT NULL,
	CONSTRAINT `PK_Ammount` PRIMARY KEY (`idAmmount` ASC)
)

;

CREATE TABLE `Attachments`
(
	`idAttachment` INT NOT NULL AUTO_INCREMENT,
	`nameAttachment` VARCHAR(50) NULL,
	`addressAttachmentImg` VARCHAR(50) NULL,
	CONSTRAINT `PK_Attachment` PRIMARY KEY (`idAttachment` ASC)
)

;

CREATE TABLE `AttachmentWith`
(
	`idAttachmentWith` INT NOT NULL,
	`idWith` INT NULL,
	`idAttachment` INT NULL,
	`idWidth` INT NULL,
	CONSTRAINT `PK_AttachmentWith` PRIMARY KEY (`idAttachmentWith` ASC)
)

;

CREATE TABLE `ClipsAccessories`
(
	`idClipAccessories` INT NOT NULL AUTO_INCREMENT,
	`nameClipAccessories` VARCHAR(50) NULL,
	`AddressImgClipAccessories` VARCHAR(50) NULL,
	`prices` VARCHAR(50) NULL,
	CONSTRAINT `PK_ClipsAccessories` PRIMARY KEY (`idClipAccessories` ASC)
)

;

CREATE TABLE `Colour`
(
	`idColour` INT NOT NULL AUTO_INCREMENT,
	`nameColour` VARCHAR(50) NULL,
	`numberColour` VARCHAR(50) NOT NULL,
	CONSTRAINT `PK_Colour` PRIMARY KEY (`idColour` ASC)
)

;

CREATE TABLE `Images`
(
	`idImage` INT NOT NULL AUTO_INCREMENT,
	`addressImg` VARCHAR(50) NULL,
	`size` VARCHAR(50) NULL,
	`space` VARCHAR(50) NULL,
	`positionL` VARCHAR(50) NULL,
	`positionT` VARCHAR(50) NULL,
	`rotation` VARCHAR(50) NULL,
	CONSTRAINT `PK_Images` PRIMARY KEY (`idImage` ASC)
)

;

CREATE TABLE `Lanyards`
(
	`idLanyard` INT NOT NULL AUTO_INCREMENT,
	`idMaterial` INT NOT NULL,
	`idWidth` INT NOT NULL,
	`idColour` INT NOT NULL,
	`idSidePrinted` INT NOT NULL,
	`idAmmount` INT NOT NULL,
	`price` FLOAT(10,2) NULL,
	CONSTRAINT `PK_Lanyards` PRIMARY KEY (`idLanyard` ASC)
)

;

CREATE TABLE `LanyardTypes`
(
	`idLanyardType` INT NOT NULL AUTO_INCREMENT,
	`nameLanyardType` VARCHAR(50) NOT NULL,
	`adddressLanyardType` VARCHAR(50) NOT NULL,
	`priceLanyardType` VARCHAR(50) NOT NULL,
	CONSTRAINT `PK_LanyardTypes` PRIMARY KEY (`idLanyardType` ASC)
)

;

CREATE TABLE `Materials`
(
	`idMaterial` INT NOT NULL AUTO_INCREMENT,
	`nameMaterial` VARCHAR(50) NOT NULL,
	`addressImgMaterial` VARCHAR(100) NOT NULL,
	CONSTRAINT `PK_Materials` PRIMARY KEY (`idMaterial` ASC)
)

;

CREATE TABLE `SidesPrinted`
(
	`idSidePrinted` INT NOT NULL AUTO_INCREMENT,
	`nameSidePrinted` VARCHAR(50) NOT NULL,
	`addressImgSidePrinted1` VARCHAR(50) NULL,
	`addressImgSidePrinted2` VARCHAR(50) NULL,
	CONSTRAINT `PK_SidesPrinted` PRIMARY KEY (`idSidePrinted` ASC)
)

;

CREATE TABLE `Texts`
(
	`idText` INT NOT NULL AUTO_INCREMENT,
	`text` VARCHAR(50) NULL,
	`font` VARCHAR(50) NULL,
	`size` VARCHAR(50) NULL,
	`stylingBold` VARCHAR(50) NULL,
	`stylingItalic` VARCHAR(50) NULL,
	`stylingUnderline` VARCHAR(50) NULL,
	`colour` VARCHAR(50) NULL,
	`space` VARCHAR(50) NULL,
	`weigthText` VARCHAR(50) NULL,
	`positionL` VARCHAR(50) NULL,
	`positionT` VARCHAR(50) NULL,
	`rotation` VARCHAR(50) NULL,
	CONSTRAINT `PK_Texts` PRIMARY KEY (`idText` ASC)
)

;

CREATE TABLE `TimeDeliveries`
(
	`idTimeDeliveries` INT NOT NULL AUTO_INCREMENT,
	`WD` VARCHAR(50) NULL,
	`price` VARCHAR(50) NULL,
	CONSTRAINT `PK_TimeDeliveries` PRIMARY KEY (`idTimeDeliveries` ASC)
)

;

CREATE TABLE `Users`
(
	`idUser` INT NOT NULL AUTO_INCREMENT,
	`nameUser` VARCHAR(50) NOT NULL,
	`emailUser` VARCHAR(50) NOT NULL,
	`passwordUser` VARCHAR(50) NOT NULL,
	CONSTRAINT `PK_Users` PRIMARY KEY (`idUser` ASC)
)

;

CREATE TABLE `UsersLanyards`
(
	`idUser` INT NULL,
	`idLanyard` INT NULL,
	`idLanyardType` INT NULL,
	`idTimeDeliveries` INT NULL,
	`idClipAccessories` INT NULL,
	`idText` INT NULL,
	`idImages` INT NULL,
	`idImage` INT NULL,
	`idAttachmentWith` INT NULL
)

;

CREATE TABLE `Width`
(
	`idWidth` INT NOT NULL AUTO_INCREMENT,
	`nameWidth` VARCHAR(50) NOT NULL,
	`addressWidthImg1` VARCHAR(50) NULL,
	`addressWidthImg2` VARCHAR(50) NULL,
	CONSTRAINT `PK_Width` PRIMARY KEY (`idWidth` ASC)
)

;

/* Create Primary Keys, Indexes, Uniques, Checks */

ALTER TABLE `AttachmentWith` 
 ADD INDEX `IXFK_AttachmentWith_Attachments` (`idAttachment` ASC)
;

ALTER TABLE `AttachmentWith` 
 ADD INDEX `IXFK_AttachmentWith_Width` (`idWidth` ASC)
;

ALTER TABLE `Lanyards` 
 ADD INDEX `IXFK_Lanyards_Ammount` (`idAmmount` ASC)
;

ALTER TABLE `Lanyards` 
 ADD INDEX `IXFK_Lanyards_Colour` (`idColour` ASC)
;

ALTER TABLE `Lanyards` 
 ADD INDEX `IXFK_Lanyards_Materials` (`idMaterial` ASC)
;

ALTER TABLE `Lanyards` 
 ADD INDEX `IXFK_Lanyards_SidesPrinted` (`idSidePrinted` ASC)
;

ALTER TABLE `Lanyards` 
 ADD INDEX `IXFK_Lanyards_Width` (`idWidth` ASC)
;

ALTER TABLE `UsersLanyards` 
 ADD INDEX `IXFK_UsersLanyards_AttachmentWith` (`idAttachmentWith` ASC)
;

ALTER TABLE `UsersLanyards` 
 ADD INDEX `IXFK_UsersLanyards_ClipsAccessories` (`idClipAccessories` ASC)
;

ALTER TABLE `UsersLanyards` 
 ADD INDEX `IXFK_UsersLanyards_Images` (`idImage` ASC)
;

ALTER TABLE `UsersLanyards` 
 ADD INDEX `IXFK_UsersLanyards_Images_02` (`idImage` ASC)
;

ALTER TABLE `UsersLanyards` 
 ADD INDEX `IXFK_UsersLanyards_Lanyards` (`idLanyard` ASC)
;

ALTER TABLE `UsersLanyards` 
 ADD INDEX `IXFK_UsersLanyards_LanyardTypes` (`idLanyardType` ASC)
;

ALTER TABLE `UsersLanyards` 
 ADD INDEX `IXFK_UsersLanyards_Texts` (`idText` ASC)
;

ALTER TABLE `UsersLanyards` 
 ADD INDEX `IXFK_UsersLanyards_TimeDeliveries` (`idTimeDeliveries` ASC)
;

ALTER TABLE `UsersLanyards` 
 ADD INDEX `IXFK_UsersLanyards_Users` (`idUser` ASC)
;

/* Create Foreign Key Constraints */

ALTER TABLE `AttachmentWith` 
 ADD CONSTRAINT `FK_AttachmentWith_Attachments`
	FOREIGN KEY (`idAttachment`) REFERENCES `Attachments` (`idAttachment`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `AttachmentWith` 
 ADD CONSTRAINT `FK_AttachmentWith_Width`
	FOREIGN KEY (`idWidth`) REFERENCES `Width` (`idWidth`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `Lanyards` 
 ADD CONSTRAINT `FK_Lanyards_Ammount`
	FOREIGN KEY (`idAmmount`) REFERENCES `Ammount` (`idAmmount`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `Lanyards` 
 ADD CONSTRAINT `FK_Lanyards_Colour`
	FOREIGN KEY (`idColour`) REFERENCES `Colour` (`idColour`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `Lanyards` 
 ADD CONSTRAINT `FK_Lanyards_Materials`
	FOREIGN KEY (`idMaterial`) REFERENCES `Materials` (`idMaterial`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `Lanyards` 
 ADD CONSTRAINT `FK_Lanyards_SidesPrinted`
	FOREIGN KEY (`idSidePrinted`) REFERENCES `SidesPrinted` (`idSidePrinted`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `Lanyards` 
 ADD CONSTRAINT `FK_Lanyards_Width`
	FOREIGN KEY (`idWidth`) REFERENCES `Width` (`idWidth`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `UsersLanyards` 
 ADD CONSTRAINT `FK_UsersLanyards_AttachmentWith`
	FOREIGN KEY (`idAttachmentWith`) REFERENCES `AttachmentWith` (`idAttachmentWith`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `UsersLanyards` 
 ADD CONSTRAINT `FK_UsersLanyards_Images_02`
	FOREIGN KEY (`idImage`) REFERENCES `Images` (`idImage`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `UsersLanyards` 
 ADD CONSTRAINT `FK_UsersLanyards_Lanyards`
	FOREIGN KEY (`idLanyard`) REFERENCES `Lanyards` (`idLanyard`) ON DELETE Restrict ON UPDATE Restrict
;

ALTER TABLE `UsersLanyards` 
 ADD CONSTRAINT `FK_UsersLanyards_TimeDeliveries`
	FOREIGN KEY (`idTimeDeliveries`) REFERENCES `TimeDeliveries` (`idTimeDeliveries`) ON DELETE Restrict ON UPDATE Restrict
;

SET FOREIGN_KEY_CHECKS=1
; 