CREATE DATABASE com;
use com;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `privilage` varchar(10) DEFAULT 'student',
  `code` text NOT NULL
);
-- ENGINE=InnoDB DEFAULT CHARSET=utf8mb4

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
