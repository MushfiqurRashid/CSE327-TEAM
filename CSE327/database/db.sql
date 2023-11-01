SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `ddiscussion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student` varchar(1000) NOT NULL,
  `post` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `discussion` (`student`, `post`, `date`) VALUES
('MMA1', 'So, kindly, hurry and sign up', '2023-08-22 10:27:43');

COMMIT;
