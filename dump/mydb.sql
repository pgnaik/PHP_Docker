SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `student` (
  `rollno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `Person` (`id`, `name`) VALUES
(1, 'Maya'),
(2, 'Milan'),
(3, 'Sachin'),
(4, 'Mahesh');