CREATE TABLE `admin` (
  `id` int(11) NOT NULL auto_increment,
  `email` varchar(100),
  `password` varchar(100),
  PRIMARY KEY (id)
);
CREATE TABLE `student` (
  `id` int(11) NOT NULL auto_increment,
  `email` varchar(100),
  PRIMARY KEY (id)
);
CREATE TABLE `products` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(250),
  `image` varchar(100),
  PRIMARY KEY (id)
);
CREATE TABLE contactus (
  `id` INT(11) AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `phone` VARCHAR(20) NOT NULL,
  `role` VARCHAR(100) NOT NULL,
  `city` VARCHAR(100) NOT NULL,
  `message` TEXT NOT NULL
);

INSERT INTO `admin` (email,password) VALUE("muneeb@gmail.com","0727");

INSERT INTO `student` (email) VALUE("Muneeb@gmail.com");

INSERT INTO `products` (name, image)
VALUES
("W1", "W1.jpg"),
("W2", "W2.jpg"),
("W3", "W3.jpg"),
("W4", "W4.jpg"),
("W5", "W5.jpg"),
("W6", "W6.jpg"),
("W7", "W7.jpg"),
("W8", "W8.jpg"),
("W9", "W9.jpg"),
("W10", "W10.jpg"),
("W11", "W11.jpg"),
("W12", "W12.jpg");