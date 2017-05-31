--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `state` varchar(60) NOT NULL,
  `city` varchar(50) NOT NULL,
  `issue` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) 

--
-- Copy the database and paste into SQL and Click on Go
--