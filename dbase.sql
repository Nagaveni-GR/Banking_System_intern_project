
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `dbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender`, `receiver`, `balance`, `datetime`) VALUES
(1,'Archana','Shivanya',2000,'2021-06-15 18:58:05'),
(2,'Sowmya','Shivanya',200,'2021-07-16 14:00:25'),
(3,'Arjun','Megha',5000,'2021-07-16 19:01:32'),
(4,'Ram','Ayushi',5000,'2021-07-21 15:06:15'),
(5,'Harsh','Manish',500,'2021-07-24 22:02:15');
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1087,	'Shivanya', 'shivanya@gmail.com', 80100),	
(2654,	'Archana', 'archana@gmail.com', 66520),	
(3624,	'Ram', 'ram@gmail.com', 40000),	
(4542,	'Arjun', 'arjun@gmail.com', 58900),	
(5345,	'Sowmya', 'sowmya@gmail.com', 65000),	
(5465,	'Sharan', 'shan@gmail.com', 49500),	
(6554,	'Harsh', 'harsh@gmail.com', 40000),	
(7875,	'Ayushi', 'ayushi@gmail.com', 49480),	
(8877,	'Manish', 'manish@gmail.com',	40500),	
(9245,	'Megha', 'mega@gmail.com', 30000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54655;
COMMIT;
