CREATE TABLE `netball_player`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `surname` VARCHAR(255) NOT NULL,
    `position` VARCHAR(255) NOT NULL,
    `gender` CHAR(255) NOT NULL,
    `team_id` INT NOT NULL
);
CREATE TABLE `netball_team`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `team_name` VARCHAR(255) NOT NULL,
    `coach_id` INT NOT NULL,
    `wins` INT NOT NULL,
    `losses` INT NOT NULL,
    `draws` INT NOT NULL
);
CREATE TABLE `netball_coach`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `surname` VARCHAR(255) NOT NULL
);
CREATE TABLE `netball_umpire`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `surname` VARCHAR(255) NOT NULL
);
CREATE TABLE `netball_matches`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `team_a_id` INT NOT NULL,
    `team_a_score` INT NOT NULL,
    `team_b_id` INT NOT NULL,
    `team_b_score` INT NOT NULL,
    `umpire_id` INT NOT NULL,
    `winner_id` INT NULL,
    `loser_id` INT NULL,
    `tournament_id` INT NULL,
    `stage` INT NULL
);
CREATE TABLE `netball_tournament`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `year` YEAR NOT NULL,
    `winner_id` INT NULL,
    `runner_up_id` INT NULL
);
CREATE TABLE `goal`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `player_id` INT NOT NULL,
    `team_id` INT NOT NULL,
    `match_id` INT NOT NULL
);
ALTER TABLE
    `netball_player` ADD CONSTRAINT `netball_player_team_id_foreign` FOREIGN KEY(`team_id`) REFERENCES `netball_team`(`id`);
ALTER TABLE
    `netball_team` ADD CONSTRAINT `netball_team_coach_id_foreign` FOREIGN KEY(`coach_id`) REFERENCES `netball_coach`(`id`);
ALTER TABLE
    `netball_matches` ADD CONSTRAINT `netball_matches_team_a_id_foreign` FOREIGN KEY(`team_a_id`) REFERENCES `netball_team`(`id`);
ALTER TABLE
    `netball_matches` ADD CONSTRAINT `netball_matches_team_b_id_foreign` FOREIGN KEY(`team_b_id`) REFERENCES `netball_team`(`id`);
ALTER TABLE
    `netball_matches` ADD CONSTRAINT `netball_matches_umpire_id_foreign` FOREIGN KEY(`umpire_id`) REFERENCES `netball_umpire`(`id`);
ALTER TABLE
    `netball_matches` ADD CONSTRAINT `netball_matches_winner_id_foreign` FOREIGN KEY(`winner_id`) REFERENCES `netball_team`(`id`);
ALTER TABLE
    `netball_matches` ADD CONSTRAINT `netball_matches_loser_id_foreign` FOREIGN KEY(`loser_id`) REFERENCES `netball_team`(`id`);
ALTER TABLE
    `netball_matches` ADD CONSTRAINT `netball_matches_tournament_id_foreign` FOREIGN KEY(`tournament_id`) REFERENCES `netball_tournament`(`id`);
ALTER TABLE
    `goal` ADD CONSTRAINT `goal_player_id_foreign` FOREIGN KEY(`player_id`) REFERENCES `netball_team`(`id`);
ALTER TABLE
    `goal` ADD CONSTRAINT `goal_team_id_foreign` FOREIGN KEY(`team_id`) REFERENCES `netball_tournament`(`id`);
ALTER TABLE
    `goal` ADD CONSTRAINT `goal_match_id_foreign` FOREIGN KEY(`match_id`) REFERENCES `netball_matches`(`id`);
ALTER TABLE
    `netball_tournament` ADD CONSTRAINT `netball_tournament_winner_id_foreign` FOREIGN KEY(`winner_id`) REFERENCES `netball_team`(`id`);
ALTER TABLE
    `netball_tournament` ADD CONSTRAINT `netball_tournament_runner_up_id_foreign` FOREIGN KEY(`runner_up_id`) REFERENCES `netball_team`(`id`);