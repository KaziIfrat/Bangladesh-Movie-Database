-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2017 at 08:16 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bmdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie_details`
--

CREATE TABLE IF NOT EXISTS `movie_details` (
`movie_id` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `movie_name` varchar(100) DEFAULT NULL,
  `summary` varchar(10000) DEFAULT NULL,
  `length` varchar(30) DEFAULT NULL,
  `premiere` varchar(30) DEFAULT NULL,
  `catagory` varchar(30) DEFAULT NULL,
  `directors` varchar(100) DEFAULT NULL,
  `writers` varchar(100) DEFAULT NULL,
  `stars` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_details`
--

INSERT INTO `movie_details` (`movie_id`, `image`, `movie_name`, `summary`, `length`, `premiere`, `catagory`, `directors`, `writers`, `stars`) VALUES
(1, 'dummy/img1.jpg', 'Aynabaji', 'A family doesn&#39t must come to grips with its culture, its faith, and the brutal political changes entering its small-town world.', '2 hr 24 min', '2017-12-31', 'Crime/Mystry/Thriller', 'Amitav Reza Chowdhury ', ' Syed Gousul Alam ,Anam Biswas', 'Chanchal Chowdhury, Masuma Rahman Nabila'),
(2, 'dummy/img2.jpg', 'Chokher Dekha', 'A family must come to grips with its culture, its faith, and the brutal political changes entering its small-town world.', '1 hr 35min', '2017-12-31', 'Drama, History', 'Tareque Masud', 'Catherine Masud (screenplay), Tareque Masud (dialogue)', 'Nurul Islam Bablu, Russell Farazi, Jayanto Chattopadhyay'),
(3, 'dummy/img3.jpg', 'Pother Pechali', 'The Man of Steel returns from the extinct planet Kyrpton to his home Metropolis only to find himself protecting it once more from foes such as Metallo, Mongul and Bizarro.', '2 hr 24 min', '2017-12-31', 'Drama, History', 'Tareque Masud', 'Catherine Masud (screenplay), Tareque Masud (dialogue)', 'Nurul Islam Bablu, Russell Farazi, Jayanto Chattopadhyay'),
(4, 'dummy/img4.jpg', 'Game Returns', 'The Man of Steel returns from the extinct planet Kyrpton to his home Metropolis only to find himself protecting it once more from foes such as Metallo, Mongul and Bizarro.', '2 hr 24 min', '2017-12-31', 'Crime/Mystry/Thriller', 'Tareque Masud', 'Catherine Masud (screenplay), Tareque Masud (dialogue)', 'Nurul Islam Bablu, Russell Farazi, Jayanto Chattopadhyay');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
`id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `review_text` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `movie_id`, `user_id`, `title`, `date`, `review_text`) VALUES
(1, 1, 2, 'A new taste of movie', '3 October 2016', 'According to Bangladeshi movie industry, "Aynabaji" gave us a totally new taste. It''s absolutely a new trend for movie industry. "Chanchal Chowdhury" proved his talent again; all other shiny actors (including actress) did a very good job. Thanks to all.Choreography was wonderful and I recommend everyone to watch this movie. Most importantly, I would like to thank "Amitabh Reza Chowdhury" and Sound designer for using modern sound recording technology. For long time I didn''t visit cinema hall for watching any Bangla movie and surprisingly this is the first time I found separate sound tracks has been used in Bangla movie (In Bangladesh). According to my observation I think sound track was recorded using 7.1 channels or 6.1 channels and also of course Dolby noise reduction technology has been used. If the sound recording engineer doesn''t mind then I would like to say, there was one mistake and that is, when the political person was speaking from behind then his voice was coming'),
(2, 1, 3, 'Best movie ever in Bengali', '1 October 2016', 'In Bangladesh movie industry are not helpful, standard and they are not developed. But some directors are really hard and soul trying to developing this sector. Amitabh Reza Chowdhury one of them. This is the only crime movie which is goes to level of Hollywood. Story, direction, casting, screenplay all of sector they did very well. It''s a crime movie, and it full fills our expectation. Last twist is extremely awesome. which is quit awesome. If you did not see this movie, go hurry!! see the movie. you''l love it.. Chanchal Chowdhury, Masuma Rahman Nabila they are heavy weight actor in Bangladeshi movie industry.'),
(3, 2, 2, 'GOOD', '5 march 2017', 'Very good'),
(4, 2, 3, 'Beautiful insight into family life ', '9 September 2002', 'This was one of my surprise favourites of the Edinburgh International Film Festival 2002. It painted a rich picture of life in Bangladesh during the revolutionary period of the 1970''s with all it''s highs and lows. It is filmed in a very documentary style (the director is a seasoned documentary film maker) with all the facts carefully shown to allow the viewer to make up their own mind on things. The visuals are very clean and colourful (again very documentary-esque) with beautiful shots of the fantastic Bangladeshi landscape. The music used in the film seems to be traditional (not that I know much about traditional Bangladeshi music!) and is very touching.  What is truly remarkable about this film is the way all it''s points are well balanced, not showing anything to be absolutely right nor wrong. It''s portrayal of Islam is fascinating and I learned more about the religion than I''d known before.  Another astonishing point I got from the film was it painted such a good picture of humanit'),
(5, 3, 4, 'Best movie ever in Bengali', '3 October 2016', 'According to Bangladeshi movie industry, It gave us a totally new taste. It''s absolutely a new trend for movie industry. "Chanchal Chowdhury" proved his talent again; all other shiny actors (including actress) did a very good job.'),
(6, 4, 3, 'Best movie ever in Bengali', '3 October 2016', 'According to Bangladeshi movie industry, It gave us a totally new taste. It''s absolutely a new trend for movie industry. "Chanchal Chowdhury" proved his talent again; all other shiny actors (including actress) did a very good job.'),
(7, 3, 5, 'Best movie ever in Bengali', '3 October 2016', 'According to Bangladeshi movie industry, It gave us a totally new taste. It''s absolutely a new trend for movie industry. "Chanchal Chowdhury" proved his talent again; all other shiny actors (including actress) did a very good job.'),
(8, 4, 2, 'Best movie ever in Bengali', '3 October 2016', 'According to Bangladeshi movie industry, It gave us a totally new taste. It''s absolutely a new trend for movie industry. "Chanchal Chowdhury" proved his talent again; all other shiny actors (including actress) did a very good job.'),
(9, 1, 11, 'asasdsdf', 'April 2, 2017', 'sgfhfgjgh');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
`songs_id` int(5) NOT NULL,
  `movie_id` int(5) DEFAULT NULL,
  `song_name` varchar(70) DEFAULT NULL,
  `song_link` varchar(70) DEFAULT NULL,
  `download_link` varchar(70) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`songs_id`, `movie_id`, `song_name`, `song_link`, `download_link`) VALUES
(1, 1, 'Alu Peyajer Kabbo', 'https://www.youtube.com/watch?v=-4FYVB--suQ', 'https://www.youtube.com/watch?v=-4FYVB--suQ'),
(2, 1, 'Dheere Dheere', 'https://www.youtube.com/watch?v=2304TZBAFV4', 'https://www.youtube.com/watch?v=2304TZBAFV4'),
(3, 2, 'The Clay Bird', 'https://www.youtube.com/watch?v=S2dMzLFFR4M', 'https://www.youtube.com/watch?v=S2dMzLFFR4M'),
(4, 2, 'E Dike O Dike', 'https://www.youtube.com/watch?v=qY9IwaZuXqM&list=PL9R6wCxhfKhH81EpN7_2', 'https://www.youtube.com/watch?v=G3wlG0OP0Rw&index=1&list=PL9R6wCxhfKhH'),
(5, 4, 'The Clay Bird', 'https://www.youtube.com/watch?v=S2dMzLFFR4M', 'https://www.youtube.com/watch?v=S2dMzLFFR4M'),
(6, 3, 'E Dike O Dike', 'https://www.youtube.com/watch?v=qY9IwaZuXqM&list=PL9R6wCxhfKhH81EpN7_2', 'https://www.youtube.com/watch?v=G3wlG0OP0Rw&index=1&list=PL9R6wCxhfKhH');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`user_id` int(10) NOT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `email_id` varchar(50) NOT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `email_id`, `password`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'torikazi', 'torikazi@yahoo.com', 'torikazi'),
(3, 'ananya', 'ananya@yahoo.com', 'tori'),
(4, 'fahim', 'fahim@yahoo.com', 'fahim'),
(5, 'saimun', 'saimun@yahoo.com', 'saimun'),
(8, 'shihab', 'shihab@yahoo.com', 'shihab'),
(10, 'toma', 'toma@yahoo.com', 'tori'),
(11, 'aaa', 'aaa@yahoo.com', 'aaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie_details`
--
ALTER TABLE `movie_details`
 ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
 ADD PRIMARY KEY (`songs_id`), ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie_details`
--
ALTER TABLE `movie_details`
MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
MODIFY `songs_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
ADD CONSTRAINT `songs_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movie_details` (`movie_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
