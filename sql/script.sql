CREATE TABLE `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `name_user` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `user_unique` (`email`)
);