SET FOREIGN_KEY_CHECKS=0 ;

/* Drop Tables */
-- DROP TABLE IF EXISTS `Match` CASCADE;

-- DROP TABLE IF EXISTS `Match_Goals` CASCADE;

-- DROP TABLE IF EXISTS `Player` CASCADE;

-- DROP TABLE IF EXISTS `Player_Position` CASCADE;

-- DROP TABLE IF EXISTS `Positions` CASCADE;

-- DROP TABLE IF EXISTS `Team` CASCADE;

-- DROP TABLE IF EXISTS `Venue` CASCADE;

/* Create Tables */

CREATE TABLE `Match`
(
	`Id` INT NOT NULL,
	`Team_Id1` INT NULL,
	`Team_Id2` INT NULL,
	`Venue_Id` INT NULL,
	`Date` DATE NULL,
	`Time` TIME NULL,
	CONSTRAINT `PK_Match` PRIMARY KEY (`Id` ASC)
);
CREATE TABLE `Match_Goals`
(
	`Id` INT NOT NULL,
	`Match_Id` INT NULL,
	`Player_Id` INT NULL,
	`Goal_Count` INT NOT NULL DEFAULT 0,
	CONSTRAINT `PK_Match_Goals` PRIMARY KEY (`Id` ASC)
);
CREATE TABLE `Player`
(
	`Id` INT NOT NULL,
	`Name` VARCHAR(100) NULL,
	`Height` VARCHAR(50) NULL,
	`Weight` VARCHAR(50) NULL,
	`Team_Id` INT NULL,
	`Date_Of_Birth` DATE NOT NULL,
	CONSTRAINT `PK_Match` PRIMARY KEY (`Id` ASC)
);
CREATE TABLE `Player_Position`
(
	`Id` INT NOT NULL,
	`Player_Id` INT NULL,
	`Position_Id` INT NULL,
	`Match_Id` INT NULL,
	CONSTRAINT `PK_Player_Position` PRIMARY KEY (`Id` ASC)
);
CREATE TABLE `Positions`
(
	`Id` INT NOT NULL,
	`Position` VARCHAR(100) NULL,
	`Restricted_Area` VARCHAR(100) NULL,
	`Move_Anywhere` VARCHAR(50) NULL,
	CONSTRAINT `PK_Positions` PRIMARY KEY (`Id` ASC)
);
CREATE TABLE `Team`
(
	`Id` INT NOT NULL,
	`Name` VARCHAR(100) NULL,
	`City` VARCHAR(50) NULL,
	`Province` VARCHAR(50) NULL,
	`Coach` VARCHAR(100) NULL,
	CONSTRAINT `PK_Team` PRIMARY KEY (`Id` ASC)
);
CREATE TABLE `Venue`
(
	`Id` INT NOT NULL,
	`Name` VARCHAR(100) NULL,
	`Address` VARCHAR(100) NULL,
	`City` VARCHAR(50) NULL,
	`Province` VARCHAR(50) NULL,
	`Postal_Code` INT NULL,
	CONSTRAINT `PK_Venue` PRIMARY KEY (`Id` ASC)
);

/* Create Primary Keys, Indexes, Uniques, Checks */

ALTER TABLE `Match` 
 ADD INDEX `IXFK_Match_Venue` (`Venue_Id` ASC);

ALTER TABLE `Match_Goals` 
 ADD INDEX `IXFK_Match_Goals_Match` (`Match_Id` ASC);

ALTER TABLE `Match_Goals` 
 ADD INDEX `IXFK_Match_Goals_Player` (`Player_Id` ASC);

ALTER TABLE `Player` 
 ADD INDEX `IXFK_Player_Team` (`Team_Id` ASC);

ALTER TABLE `Player_Position` 
 ADD INDEX `IXFK_Player_Position_Match` (`Match_Id` ASC);

ALTER TABLE `Player_Position` 
 ADD INDEX `IXFK_Player_Position_Player` (`Player_Id` ASC);

ALTER TABLE `Player_Position` 
 ADD INDEX `IXFK_Player_Position_Positions` (`Position_Id` ASC);

/* Create Foreign Key Constraints */

ALTER TABLE `Match` 
 ADD CONSTRAINT `FK_Match_Venue`
	FOREIGN KEY (`Venue_Id`) REFERENCES `Venue` (`Id`) ON DELETE Restrict ON UPDATE Restrict;

ALTER TABLE `Match_Goals` 
 ADD CONSTRAINT `FK_Match_Goals_Match`
	FOREIGN KEY (`Match_Id`) REFERENCES `Match` (`Id`) ON DELETE Restrict ON UPDATE Restrict;

ALTER TABLE `Match_Goals` 
 ADD CONSTRAINT `FK_Match_Goals_Player`
	FOREIGN KEY (`Player_Id`) REFERENCES `Player` (`Id`) ON DELETE Restrict ON UPDATE Restrict;

ALTER TABLE `Player` 
 ADD CONSTRAINT `FK_Player_Team`
	FOREIGN KEY (`Team_Id`) REFERENCES `Team` (`Id`) ON DELETE Restrict ON UPDATE Restrict;

ALTER TABLE `Player_Position` 
 ADD CONSTRAINT `FK_Player_Position_Match`
	FOREIGN KEY (`Match_Id`) REFERENCES `Match` (`Id`) ON DELETE Restrict ON UPDATE Restrict;

ALTER TABLE `Player_Position` 
 ADD CONSTRAINT `FK_Player_Position_Player`
	FOREIGN KEY (`Player_Id`) REFERENCES `Player` (`Id`) ON DELETE Restrict ON UPDATE Restrict;

ALTER TABLE `Player_Position` 
 ADD CONSTRAINT `FK_Player_Position_Positions`
	FOREIGN KEY (`Position_Id`) REFERENCES `Positions` (`Id`) ON DELETE Restrict ON UPDATE Restrict;

SET FOREIGN_KEY_CHECKS=1 ;