

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `bca`
--
-- --------------------------------------------------------



--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `registration_no`  varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--
-- Table structure for table `FACULTY`
--

CREATE TABLE `faculty` (
  `image` BLOB NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `USERS`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;


-- dumping admin data for table `users`

INSERT INTO `users` (`email`, `name`, `password`, `phone`, `type`) VALUES ('admin@gmail.com', 'admin', MD5('admin'), '0123456789', 'faculty');

INSERT INTO `users` (`email`, `name`, `password`, `phone`, `type`) VALUES ('sunny@gmail.com', 'sunny', MD5('sunny'), '8789000452', 'student');

-- dumping admin data for table `student`


INSERT INTO `student` (`registration_no`, `roll`, `name`, `father_name`, `gender`, `birthdate`, `email`, `phone`) VALUES ('BBMKV1934861', '200130921280', 'Aman Kumar', 'Arun Prasad', 'male', '1998-11-22', 'sk67875@gmail.com', '8789000452');