CREATE DATABASE institute;
USE institute;

CREATE TABLE `student` (
  `rollno` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
);


INSERT INTO `student` (`rollno`, `name`) VALUES
(1, 'Maya'),
(2, 'Milan'),
(3, 'Sachin'),
(4, 'Mahesh');
