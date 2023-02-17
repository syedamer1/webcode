
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
  name varchar(250),
  `price` varchar(100),
  `image` varchar(100),
  PRIMARY KEY (id)
);
CREATE TABLE contactus (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(20) NOT NULL,
  role VARCHAR(100) NOT NULL,
  city VARCHAR(100) NOT NULL,
  message TEXT NOT NULL
);

INSERT INTO `admin` (email,password) VALUE("amir@gmail.com","amir215");

INSERT INTO `student` (email) VALUE("amir@gmail.com");



INSERT INTO `products` (name, price, image)
VALUES
("Prime", 200, "prime.webp"),
("Harpic", 150, "harpic.webp"),
("Lays Wavy", 150, "Lays wavy.webp");

INSERT INTO `products` (name, price, image)
VALUES
("Prime", 200, "prime.webp"),
("Harpic", 150, "harpic.webp"),
("Lays Wavy", 150, "Lays wavy.webp");

INSERT INTO `products` (name, price, image)
VALUES
("Prime", 200, "prime.webp"),
("Harpic", 150, "harpic.webp"),
("Lays Wavy", 150, "Lays wavy.webp");



INSERT INTO `products` (name, price, image)
VALUES
("Prime", 200, "prime.webp"),
("Harpic", 150, "harpic.webp"),
("Lays Wavy", 150, "Lays wavy.webp");
