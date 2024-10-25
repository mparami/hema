CREATE DATABASE IF NOT EXISTS `hema`;

CREATE TABLE IF NOT EXISTS `hema` . `products`(
        `id` INT (11) NOT NULL AUTO_INCREMENT,
        `name` VARCHAR (255),
        `price` DECIMAL,
        CONSTRAINT `product_primary` PRIMARY KEY(`id`)
);

INSERT INTO `hema` . `products` (`name`, `price`)
VALUES ('handoek', 22.0);

INSERT INTO `hema` . `products` (`name`, `price`)
VALUES ('broek', 17.0);

INSERT INTO `hema` . `products` (`name`, `price`)
VALUES ('shirt', 10.0);